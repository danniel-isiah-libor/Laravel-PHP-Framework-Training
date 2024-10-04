<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function submit(ClientRequest $request)
    {
        // dd($request);
        // dd($request->age);
        // dd($request->query('name', 'Naz'));
        // dd($request->method());
        // dd($request->all());
        $params = ['name', 'age', 'gender'];
        // dd($request->only($params));
        // dd($request->only('name', 'age', 'gender'));
        // dd($request->except($params));
        // dd($request->has($params));
        // dd($request->filled('name'));
        // dd($request->missing('name'));
        $request->merge(['id' => 1]);
        dd($request->all());
    }
    public function show($id = null)
    {

        $userClass = new User();

        return $userClass->getUser();

        // return "User " .  $id;
    }
}
