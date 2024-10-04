<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', function(){
    return "<h1 style='color:red'> Nigel </h1>";

    // return "<script> alert('hello world') </script>";
    // di lang pwede maglagay ng array data type
    // return (object) ["honda", "toyota"];
    // pag return false walang masshow
});

Route::get('/users/update', function(){
    //
})->name('users.update');


Route::prefix('users')->name('users.')->group(function(){
    Route::get('update', function(){
        return 'something ....';
    })->name('search');

    Route::get('get/profile', function(){
        return 'something...';
    })->name('get-profile');
});

Route::redirect('/here', '/there');


Route::get('there', function(){
    return 'Redirected';
});

Route::view('/welcome', 'welcome');
// mag eexecute pag di nagwowork yung pinapasok sa driver
// maooverride
Route::fallback(function(){
    return 'Not found!';

    // return view('custom-404');
});


Route::get('/users/{id?}', [UserController::class, 'show'])->whereNumber('id');



// Route::get('/users/submit', function(Request $request){
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

//     $request -> merge (['id' => 1]);
//     dd($request ->all());

    
// });


Route::get('users/submit', [UserController::class, 'submit']);

