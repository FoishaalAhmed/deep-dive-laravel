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
