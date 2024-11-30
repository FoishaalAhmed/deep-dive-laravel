<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\FirstController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\SecondController;

Route::get('/first', [FirstController::class, 'index']);
Route::get('/second', [SecondController::class, 'index']);
Route::get('/request', [RequestController::class, 'index']);

Route::get('greetings', fn () => view('greeting'));
Route::get('admin/greetings', fn () => view('admin.greeting'));


Route::view('/forms', 'form');

Route::resource('users', \App\Http\Controllers\UserController::class);
