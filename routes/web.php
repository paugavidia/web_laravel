<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\Dashboard\PostController;

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

Route::get('/test-1', [TestController::class, 'index']);
Route::get('/test-2', [TestController::class, 'vista']);
Route::resource('post', PostController::class);
