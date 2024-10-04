<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

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

    public function show($id = null){
        $userClass = new User(); //gumawa ng variable at kumuha sa User Model
        return $userClass->getUser(); //ginawa yung getUser() na method
    }
}
