<?php

namespace App\Http\Controllers;

use App\Http\Requests\Post\DestroyRequest;
use App\Http\Requests\Post\EditRequest;
use App\Http\Requests\Post\StoreRequest;
use App\Http\Requests\Post\UpdateRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::simplePaginate(5);

        return view('dashboard', ['data' => $posts]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $validatedRequest = $request->validated();

        Post::create($validatedRequest);

        return redirect(route('dashboard'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        // $post = Post::find($id);
        // dd($post);

        return view('posts.show', ['data' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EditRequest $request,Post $post)
    {
        return view('posts.edit', ['data' => $post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Post $post)
    {
        $validatedRequest = $request->validated();
        $post->update($validatedRequest);

        return redirect(route('posts.show', $post->id));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DestroyRequest $request, Post $post)
    {
        $post->delete();

        return redirect(route('dashboard'));
    }
}
