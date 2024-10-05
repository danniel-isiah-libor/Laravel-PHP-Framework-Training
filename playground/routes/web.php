<?php

use App\Http\Controllers\PyramidController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/users', function () {
//     return "<script> alert('hello world'); </script>";
// });

Route::get('/users/search', function () {
    //
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

Route::view('/welcome', 'welcome');

Route::fallback(function () {
    // return view('custom-404');
    return "Not Found!";
});

Route::get('/users/{id?}', [UserController::class, 'show'])->whereNumber('id');
Route::get('/users/submit', [UserController::class, 'submit']);

Route::get('/pyramid/{count?}', [PyramidController::class, 'display'])
    ->name('pyramid');

Route::view('/register', 'register');

Route::get('/submit', function (Request $request) {
    dd($request);
});
