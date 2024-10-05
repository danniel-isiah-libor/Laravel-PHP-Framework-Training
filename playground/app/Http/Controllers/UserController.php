<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

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

        return view('profile', ['user' => (object)$data]);
    }
}
