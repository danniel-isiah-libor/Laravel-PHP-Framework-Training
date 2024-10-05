<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PyramidController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/test', function () {
    return view('welcome');
});

// Route::get('/users', function(){
//     //return "<h1 style='color: blue'>Vincent</h1>";
//     //return (object)['name' => 'Vincent', 'age' => 21];
//     //return 123.12;
//     return "<script>alert('Hello')</script>";
// });

Route::prefix('/users')->name('users.')->group(function(){
    Route::get('search', function(){
        return "something...";
    })->name('search'); //users.search

    Route::get('get/profile', function(){
        return "something...";
    })->name('get-profile'); //users.get-profile
});

Route::redirect('/here', '/there');

Route::get('/there', function(){
    return "Redirected";
});

Route::view('/welcome','welcome');

Route::fallback(function (){
    //return view('custom-404');
    return "Not Found!";
}); //mag-eexecute kapag hindi nag eexist yung route sa website


// // http://127.0.0.1:8000/users/submit/?name=john&age=30
// Route::get('/users/submit', function(Request $request){
//     // dd($request->age); - mas nirerecommend 'tong kunin nalang agad
//     // dd($request->query('name','nigel'));//dd($request->query('name',null));
//     // dd($request->method());
//     // dd($request->query()); - speficially for query string
//     // dd($request->all()); //ito pang kalahatan, mas nirerecommend 'to;
//     // dd($request->boolean('name'));
//     // dd($request->only(['name'])); //pwede array or comma separated arguments;
//     // dd($request->except(['gender']));
//     // dd($request->has('name')); // true or false lang

//     // dd($request->filled('name')); // nag eexist pero walang laman
//     // dd($request->missing('name')); //naacchieve niya yung condition na walang name kaya naging true;
//     $request->merge(['id' => 1]);
//     dd($request->all());// para mahide sa http
// }); //Request http tapos ipasok sa isang variable
// // check mo muna sa dd kung saan na punta, this time napunta sa query tapos dun mo kunin

// //use -> for calling / papasukin yung object;
// //use => for defining value sa key;

Route::get('/users/{id?}',[UserController::class, 'show'])->whereNumber('id'); //dynamic route || kapag may ?, magiging optional na siya;
//gumamit ng ->whereNumber('id') para mavalidate ba kung number yung variable  
//->whereAlpha para sa Alphabet lang etc.
Route::get('/users/submit', [UserController::class,'submit']); //tatawagin yung class na may method na submit;

Route::get('/pyramid/{count?}',[PyramidController::class,'display'])->name('pyramid');

Route::view('/register','register');

Route::post('/register', [UserController::class, 'store'])->name('register');

Route::view('/login', 'login')->name('login');

Route::post('/login', [UserController::class, 'authenticate'])->name('authenticate');

Route::get('/dashboard', [DashboardController::class] , 'index')->name('dashboard');

Route::get('/logout', function(){
    Auth::logout();
    return redirect(route('login'));
})->name('logout');