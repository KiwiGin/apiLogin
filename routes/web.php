<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/reset_password', function () {
    return view('reset_password');
});
Route::get('/change_password', function () {
    return view('change_password');
});

