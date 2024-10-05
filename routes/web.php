<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('user', function () {
    return "<script>alert('hello world');</script>";
});

Route::prefix('/users')->group(function () {
    Route::get('search', function () {
        return "something....";
    })->name('users.search');

    Route::get('get/profile', function () {
        return "something";
    })->name('get-profile');
});

Route::redirect('/here', '/there');

Route::get('/there', function () {
    return 'Redirected';
});

Route::view('/welcome', 'welcome');

// For not found URL
Route::fallback(function () {
    return "Not Found";
});


http: //127.0.0.1:8000/users/123/ad
Route::get('/users/{id?}', [UserController::class, 'show'])
    ->whereNumber('id')
    ->whereAlpha('name');


Route::get("/users/submit", [UserController::class, 'submit']);
