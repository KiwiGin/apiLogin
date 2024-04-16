<?php

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::controller(ApiController::class)->group(function(){

    //Route::get('login', 'index')->name('login');
    Route::get('/cines', 'getcines');
    Route::get('/cines/{id}', 'getcine');
    Route::get('/cines/{id}/tarifas', 'getcineTarifas');
    Route::get('/cines/{id}/peliculas', 'getcinePeliculas');
    Route::get('/peliculas/{id?}', 'getpeliculas');
});
