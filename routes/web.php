<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/users', function () {

//return "<h1 style='color: red'>Danniel</h1>";
//return (object) ["honda", "toyota"]

//return false;

//return <script> alert('hello world') </script>;
//});re


Route::get('/users/update', function () {
})->name('users.update');

Route::prefix('users')->name('users.')->group(function () {
    Route::get('search', function () {
        return 'something....';
    })->name('search');

    Route::get('get/profile', function () {
        return 'something....';
    })->name('get-profile');
});


Route::redirect('/here', '/there');

Route::get('/there', function () {
    return 'Redirected';
});


//shorcut of the welcome on the first line Route::get('/', function () {
//    return view('welcome');
Route::view('/welcome', 'welcome');


// Route::fallback(function () {
//     //return view('custom-404');
//     return "Not Found";
// });
/*
Route::get('/users/{id?}', function ($id = null) {
    return "user" . $id;
})->where('id', '[0-9]+');

Route::get('/users/{id?}', function ($id = null) {
    return "user" . $id;
})->whereAlpha('id');
*/
Route::get('/users/{id?}', [UserController::class, 'show'])->whereNumber('id');

//query string sample /users/?name=John.....
//Route::get('/users/submit', [UserController::class, 'submit']);

Route::get('/users/submit', [UserController::class, 'submit']);
