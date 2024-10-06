<?php

namespace App\Http\Controllers;

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

        $data = $userClass->getUser($request->id);

        return view('profile', $data);
    }

    public function star($count)
    {

        // Validate the input
        if (!is_numeric($count) || $count < 1) {
            return response()->json(['error' => 'Please provide a valid positive integer.'], 400);
        }

        // Generate the pyramid pattern
        $pyramid = '';
        for ($i = 1; $i <= $count; $i++) {
            $stars = str_repeat('* ', ($i));
            $pyramid .=  $stars . "\n";
            // $pyramid .=  $pyramid . "* \n";
        }

        return view('pyramid', ['pyramid' => $pyramid]);
    }

    public function store(RegisterRequest $request)
    {

        // dd($request->all());
        $validatedRequest = $request->validated();
        // dd('Successful Response');
        // dd($validatedRequest);
        if (Arr::has($validatedRequest, 'avatar')) {
            $validatedRequest['avatar']->store('avatars', 'public');
        }

        // saving ...
        // dd($validatedRequest);

        $user = User::create([
            'name' => $validatedRequest['name'],
            'email' => $validatedRequest['email'],
            'password' => bcrypt($validatedRequest['password']), // hash the password
            'avatar' => $validatedRequest['avatar'] ?? null, // save the avatar path if available
        ]);

        return redirect(route('login'));
    }

    public function authenticate(LoginRequest $request)
    {
        $validatedRequest = $request->validated();

        // Validate credentials...
        // Auth::attempt($validatedRequest);

        // Perform login...

        // Attempt to log the user in with their email and password
        if (Auth::attempt(['email' => $validatedRequest['email'], 'password' => $validatedRequest['password']])) {
            // Regenerate the session to prevent fixation attacks
            $request->session()->regenerate();

            // Redirect to the dashboard after successful login
            return redirect(route('dashboard'));
        }
    }
    public function login()
    {
        if (Auth::check()) {
            return redirect(route('dashboard'));
        } else {
            return view('login');
        }
    }

    public function deactivate()
    {
        $user = Auth::user();
        User::find($user->id)->delete();

        Auth::logout();
        return redirect(route('login'));
    }
}
