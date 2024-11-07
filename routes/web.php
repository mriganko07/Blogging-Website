<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\UserController;
use App\Models\User;



Route::get('/', function () {
    return view('welcome');
})->name('home');

/*---------------------------------*\
  #LOGIN & SIGNUP
\*---------------------------------*/

Route::get('/registration', [UserController::class, 'registration']);



/*---------------*\
  #ADMIN
\*----------------*/

Route::get('/adminlogin', [ExampleController::class, 'adminlogin']);

Route::get('/admincommunity', [ExampleController::class, 'admincommunity']);

Route::get('/admincontent', [ExampleController::class, 'admincontent']);

Route::get('/adminpost', [ExampleController::class, 'adminpost']);

Route::get('/adminuser', [ExampleController::class, 'adminuser']);



/*------------------------*\
  #COMMUNITY
\*-------------------------*/

Route::get('/createcommunity', [ExampleController::class, 'createcommunity']);

Route::get('/community', [ExampleController::class, 'community']);



// REGISTRATION LOGIN & FORGOT

Route::get('/forgot', [ExampleController::class, 'forgot']);




/*-------------*\
  #USER
\*--------------*/

Route::get('/comment', [ExampleController::class, 'comment']);

Route::get('/create', [ExampleController::class, 'create']);

Route::get('/explore', [ExampleController::class, 'explore']);

Route::get('/forgot', [ExampleController::class, 'forgot']);


Route::get('/admin', [ExampleController::class, 'adminlogin']);

Route::get('/editprofile', [ExampleController::class, 'editprofile']);

Route::get('/profile', [ExampleController::class, 'profile']);

Route::get('/viewcommunity', [ExampleController::class, 'viewcommunity']);

Route::get('/viewpost', [ExampleController::class, 'viewpost']);