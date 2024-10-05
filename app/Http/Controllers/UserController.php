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
        return redirect(route('/'));
    }

    public function authenticate(LoginRequest $request)
    {
        $validatedRequest = $request->validated();

        // Validate credentials...
        // Auth::attempt($validatedRequest);

        // Perform login...
        $user = new User();
        $user->email = $validatedRequest['email'];
        $user->password = $validatedRequest['password'];

        Auth::login($user);

        // return redirect(route('dashboard'));
        return view('dashboard');
    }
}
