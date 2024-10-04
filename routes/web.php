<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/users', function () {
//     // return "<h1>Naz</h1>";
//     // return 123.13;
//     return True;
// });

Route::get('/users/search', function () {});

Route::prefix('users')->name('users.')->group(function () {
    Route::get('search', function () {
        return 'somethings...';
    })->name('search');
});

Route::redirect('/here', '/there');

Route::get('/there', function () {
    return "Redirect Page from here to there";
});

Route::view('/welcome', 'welcome');


// For not found URL
Route::fallback(function () {
    return "Not Found";
});


http: //127.0.0.1:8000/users/123/ad
Route::get('/users/{id?}/{name?}', function ($id = null, $name = null) {
    return "User ID # " . $id . " - " . $name;
    // })->where('id', '[0-9]+');
    // })->whereNumber('id');
})
    ->whereNumber('id')
    ->whereAlpha('name');


Route::get('/users/submits',[UserController::class, 'submit'] {

});