<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
Route::get("/users/star/{count}", [UserController::class, 'star']);


Route::view('/register', 'register');

Route::get('/submit', function (Request $request) {
    dd($request);
});

Route::post("/register", [UserController::class, 'store'])->name('register');

Route::view('/login', 'login')->name('login');

Route::post('/login', [UserController::class, 'authenticate'])
    ->name('authenticate');

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard');

Route::get('/logout', function () {
    Auth::logout();

    return redirect(route('login'));
})->name('logout');
