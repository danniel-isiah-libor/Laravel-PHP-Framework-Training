<?php

namespace App\Http\Controllers;

use App\Http\Requests\DeleteRequest;
use App\Http\Requests\EditRequest;
use App\Http\Requests\Post\StoreRequest;
use App\Http\Requests\UpdateRequest;
use App\Models\Post;
use App\Notifications\PublishPostNotification;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $posts = Post::latest()->simplePaginate(5);
        return view('dashboard', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        // dd($request->all());
        $validated_request = $request->validated();

        $post = Post::create($validated_request);
        $post = Post::where('id', $post->uuid)->first();
        Auth::user()->notify(new PublishPostNotification($post));

        return redirect(route("dashboard"));
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {

        // $post = Post::where('uuid',$id)->first();

        return view("posts.show", ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EditRequest $request, Post $post)
    {
        return view('posts.edit', ['post' => $post]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Post $post)
    {

        // $post = Post::find($id);
        $validated_request = $request->validated();
        $post->update($validated_request);
        return redirect(route('posts.show', $post->uuid));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DeleteRequest $request, Post $post)
    {

        $post->delete();

        return redirect(route('dashboard'));
    }
}
