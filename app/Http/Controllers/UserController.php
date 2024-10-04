<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function submit(Request $request)
    {
        //kill the instance of the execution and dump
        //dd($request->name);
        //dd($request->query('name', 'Null'));
        //dd($request->age);
        //dd($request->method());

        //dd($request->query());
        //dd($request->all());

        //dd($request->string('name')->trim());

        //dd($request->boolean('name'));

        //$params = ['name','age','gender'];
        //dd($request->only($params));
        //dd($request->only('name','age'))
        //dd($request->has('name'));

        //dd($request->filled('name'));

        //dd($request->missing('name'));


        $request->merge(['id' => 1]);
        dd($request->all());
    }
    public function show($id = null)
    {
        $userClass = new User();

        // return $userClass->getUser();
        $data = $userClass->getUser();

        return view('profile', $data);
    }
}
