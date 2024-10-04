<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Submit user information
     * @param \Illuminate\Http\Request $request
     * @return never
     */
    public function submit(Request $request)
    {
      // dd($request->age);
      // dd ($request -> query('name','mark'));
      // dd($request -> query('name'));
      // dd($request -> method());
      // to get all the request in form
      // dd($request->all());

      // dd($request->string('name')->trim());
      // dd($request->boolean());
      // dd($request->boolean('name'));

      // only can read variables na naka array
      
      //  $params = ['name', 'age', 'gender'];
      // dd($request->only($params));
      // // wala na ipapakita
      // dd($request ->except($params));

      //accepts string, true or false lang irereturn 
      //pwedeng array pwedeng string
      // magkakapatid ang only, except has
      // dd($request ->has('name'));

      // nag rereturn pag may laman pag wala, false
      // dd($request->filled('name'));

      // dd($request ->missing('name'));

      //another way to hide a sensitive info
      //para matago sa http

    $request -> merge (['id' => 1]);
    dd($request ->all());


    }

    /**
     * 
     * Show the user profile
     * @param mixed $id
     * @return array
     */
    public function show(Request $request, $id = null)
    {
      //dump magprproceed sa next line
      //dd magddie lahat 
      // dump($id);
      // dd($request->all());
      //para maaccess yung function sa loob ng class use -> then function name
      
      $userClass = new User();
      // return $userClass->getUser();
      $data = $userClass->getUser($id);

      // dd($data);

      return view('profile', ['user' => (object)$data]);

    }
}
