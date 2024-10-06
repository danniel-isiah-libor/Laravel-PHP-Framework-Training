<?php

namespace App\Http\Controllers;

use App\Http\Requests\DeactivateRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    public function submit(Request $request){
        $request->merge(['id' => 1]);
        dd($request->all());
    }

    /**
     * Show the user profile.
     */
    public function show(Request $request, $id = null){
        $userClass = new User();
        $data = $userClass->getUser($id);
        return view('profile', ['user' => (object)$data]);
    }

    public function store(RegisterRequest $request)
    {
        $validatedRequest = $request->validated();
        User::create($validatedRequest);
        return redirect(route('login'));
    }

    public function authenticate(LoginRequest $request){
        $validatedRequest = $request->validated();

        if (Auth::attempt($validatedRequest)) {
            $request->session()->regenerate();
            return redirect()->intended(route('dashboard'));
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function login(){
        if (Auth::check()){
            return redirect(route('dashboard'));
        } else {
            return view('login');
        }
    }

    public function deactivate(DeactivateRequest $request)
    {
        $user = Auth::user();
        User::find($user->id)->delete();
        Auth::logout();
        return redirect(route('login'));
    }
}
