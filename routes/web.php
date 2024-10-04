<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', function () {
    return "<scr><h1><center>Dalaniel</center></h1>";

});
