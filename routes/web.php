<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;


Route::get('/', function () {
    return view('welcome');
})->name('home');

/*---------------------------------*\
  #LOGIN & SIGNUP
\*---------------------------------*/


Route::get('/comment', [ExampleController::class, 'comment']);

Route::get('/create', [ExampleController::class, 'create']);

Route::get('/explore', [ExampleController::class, 'explore']);

Route::get('/forgot', [ExampleController::class, 'forgot']);


Route::get('/admin', [ExampleController::class, 'adminlogin']);

Route::get('/profile', [ExampleController::class, 'profile']);

Route::get('/createcommunity', [ExampleController::class, 'createcommunity']);