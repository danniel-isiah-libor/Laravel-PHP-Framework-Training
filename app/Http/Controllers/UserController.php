<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    public function submit(Request $request){
        // dd($request->age); - mas nirerecommend 'tong kunin nalang agad
        // dd($request->query('name','nigel'));//dd($request->query('name',null));
        // dd($request->method());
        // dd($request->query()); - speficially for query string
        // dd($request->all()); //ito pang kalahatan, mas nirerecommend 'to;
        // dd($request->boolean('name'));
        // dd($request->only(['name'])); //pwede array or comma separated arguments;
        // dd($request->except(['gender']));
        // dd($request->has('name')); // true or false lang

        // dd($request->filled('name')); // nag eexist pero walang laman
        // dd($request->missing('name')); //naacchieve niya yung condition na walang name kaya naging true;
        $request->merge(['id' => 1]);
        dd($request->all());// para mahide sa http
    }

    /**
     * Show the user profile.
     */
    public function show(Request $request, $id = null){
        // dump($id);
        // dd($request->all());
        $userClass = new User(); //gumawa ng variable at kumuha sa User Model
        // return $userClass->getUser(); //ginawa yung getUser() na method;
        $data = $userClass->getUser($id);
        return view('profile', ['user' => (object)$data]);
    }

    public function store(RegisterRequest $request)
    {
        // dd($request->all());
        $validatedRequest = $request -> validated();

        $validatedRequest['avatar']->store('avatars', 'public');
        return redirect(route('login'));
    }

    public function authenticate(LoginRequest $request){
        $validatedRequest = $request->validated();
        // Auth::attempt($validatedRequest);
        $user = new User;
        $user->email = $validatedRequest['email'];
        $user->password = $validatedRequest['password'];

        Auth::login($user);
        // dd(Auth::user());
        // dd($validatedRequest);

        // return redirect(route('dashboard'));
        return view('dashboard');
    }

}
