<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    echo 'Esto es un test';
});

Route::get('/test2/{id}', function ($id) {
    echo 'Esto es un segundo test con ID: ' . $id;
});

Route::get('/prueba', function () {
    return view('test', ['id' => 20]);
});

Route::get('/prueba3/{name?}', function ($name="anonimo") {
    return view('prueba', ['name' => $name]);
})->name('prueba3');