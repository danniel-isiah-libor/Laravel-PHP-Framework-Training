<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PyramidController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AuthMiddleware;
use Illuminate\Support\Facades\Auth;
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

Route::fallback(function () {
    return "404 error";
});

Route::get('/users/{id?}', [UserController::class, 'show'])
    ->whereNumber('id');

Route::get("/users/submit", [UserController::class, 'submit']);

Route::get('/{num?}', [PyramidController::class, 'createPyramid'])->whereNumber("num");

Route::get('/register', [UserController::class, 'registration']);

Route::post('/register', [UserController::class, 'register'])->name('register');

Route::get('/login', [UserController::class, 'login'])->name('login');

Route::post('/authenticate', [UserController::class, 'authenticate'])->name('authenticate');

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard')
    ->middleware(AuthMiddleware::class);

Route::get('/logout', function () {
    Auth::logout();
    return redirect(route('login'));
})->name('logout');

Route::get('/deactivate', [UserController::class, 'deactivate'])->name('deactivate');
