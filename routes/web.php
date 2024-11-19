<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CommunityController;
use App\Models\User;
use App\Models\Communities;



Route::get('/', function () {
    return view('welcome');
})->name('home');

/*---------------------------------*\
  #LOGIN & SIGNUP
\*---------------------------------*/

Route::get('/registration', [LoginController::class, 'registration'])->name('register');

Route::post('/register', [LoginController::class, 'signUp'])->name('register.store');

Route::post('/login', [LoginController::class, 'login'])->name('login.process');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/forgot', [UserController::class, 'forgot']);




/*---------------*\
  #ADMIN
\*----------------*/

Route::get('/adminlogin', [AdminController::class, 'adminlogin']);

Route::get('/admincommunity', [AdminController::class, 'admincommunity']);

Route::get('/admincontent', [AdminController::class, 'admincontent']);

Route::get('/adminpost', [AdminController::class, 'adminpost']);

Route::get('/adminuser', [AdminController::class, 'adminuser']);



/*------------------------*\
  #COMMUNITY
\*-------------------------*/

Route::get('/createcommunity', [CommunityController::class, 'createcommunity']);

Route::post('/storecommunity', [CommunityController::class, 'store'])->name('store.community');

Route::get('/community', [CommunityController::class, 'community']);




/*-------------*\
  #USER
\*--------------*/

Route::get('/comment', [UserController::class, 'comment']);

Route::get('/create', [UserController::class, 'create']);

Route::get('/explore', [UserController::class, 'explore']);

Route::get('/editprofile', [UserController::class, 'editprofile']);

Route::get('/profile', [UserController::class, 'profile']);

Route::get('/vcommunity', [UserController::class, 'viewcommunity']);

Route::get('/vpost', [UserController::class, 'viewpost']);