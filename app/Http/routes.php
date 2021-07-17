<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('layouts/master');
});

Route::get('/cargas', function () {
    return view('components/cargas');
});
Route::get('/ofertas', function () {
    return view('components/ofertas');
});
Route::get('/vehiculos', function () {
    return view('components/vehiculos');
});
Route::get('/gastos-adicionales', function () {
    return view('components/vehiculos');
});
Route::get('/documentos', function () {
    return view('components/documentos');
});


