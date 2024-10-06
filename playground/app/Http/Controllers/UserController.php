<?php

namespace App\Http\Controllers;

use App\Http\Requests\DeactivateRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    public function submit(Request $request)
    {
        // dd($request->age);
        // dd($request->query('name', 'Danniel'));
        // dd($request->method());
        // dd($request->query());
        // dd($request->all());
        // dd($request->boolean('name'));

        // $params = ['name', 'age', 'gender'];
        // dd($request->only($params));
        // dd($request->only('name', 'age', 'gender'));
        // dd($request->except($params));
        // dd($request->has('name'));
        // dd($request->filled('name'));
        // dd($request->missing('name'));

        $request->merge(['id' => 1]);
        dd($request->all());
    }

    /**
     * Show the user profile.
     *
     * @param int|null $id
     * @return array<string, int>
     */
    public function show(Request $request, $id = null)
    {
        // dump($id);
        // dd($request->all());

        $userClass = new User();

        $data = $userClass->getUser($id);

        return view('profile', ['user' => (object)$data]);
    }

    public function store(RegisterRequest $request)
    {
        $validatedRequest = $request->validated();

        if (Arr::has($validatedRequest, 'avatar')) {
            $validatedRequest['avatar']->store('avatars', 'public');
        }

        // saving ...
        User::create($validatedRequest);

        return redirect(route('login'));
    }

    public function authenticate(LoginRequest $request)
    {
        $validatedRequest = $request->validated();

        // Perform login...
        $user = User::whereEmail($validatedRequest['email'])->first();

        Auth::login($user);

        return redirect(route('dashboard'));
    }

    public function login()
    {
        if (Auth::check()) {
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
