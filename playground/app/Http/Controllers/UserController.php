<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function submit(Request $request)
    {
        // dd($request->age);
        // dd($request->query('name' , 'Daniel'));
        // dd($request->method());
        // dd($request->query());
        // dd($request->all());
        // dd(request()->all());
        // dd($request->boolean('name'));
        // $params = ['name', 'age', 'gender'];
        // dd($request->only($params));
        // dd($request->only('name', 'age'));

        // dd($request->has('name'));

        $request->merge(['id' => 1]);
        dd($request->all());
    }

    /**
     * Show the user profile
     *
     */
    public function show(Request $request, $id = null)
    {
        // dump($request->id);
        // dd($request->all());
        $user = new User();
        $data = $user->getUser($request->id);

        return view('profile', ['user' => (object) $data]);
    }

    /**
     * Register users
     *
     * @param RegisterRequest $request
     * @return void
     */
    public function register(RegisterRequest $request)
    {
        $validateRequest = $request->validated();

        $validateRequest['avatar']->store('avatar', 'public');
        //saving ...
        return redirect(route('login'));
    }

    /**
     * Authenticate users
     *
     * @param Request $request
     * @return void
     */
    public function authenticate(LoginRequest $request)
    {
        $request_validated = $request->validated();


        // Validate credentials...
        // Auth::attempt($request_validated);

        // perform login..
        $user = new User();
        $user->email = $request_validated['email'];
        $user->password = $request_validated['password'];
        Auth::login($user);

        // return redirect(route('dashboard'));
        return view('dashboard');
    }

}
