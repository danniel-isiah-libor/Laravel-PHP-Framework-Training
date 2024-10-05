<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PyramidController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

//return pyramid
Route::get('/pyramid/{rows?}', [PyramidController::class, 'index']);

Route::view('/register', 'register');

//Route::post('/register', functiom(Request $request));

Route::post('/register', [UserController::class, 'store'])->name('register');

//dd($_REQUEST);


Route::view('/login', 'login')->name('login');

Route::post('/login', [UserController::class, 'authenticate'])->name('authenticate');

Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

Route::get('/logout', function () {
    Auth::logout();

    return redirect(route('login'));
})->name('logout');
