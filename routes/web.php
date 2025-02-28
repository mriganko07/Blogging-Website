<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CommunityController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Models\Admin;
use App\Models\Communities;
use App\Models\Like;
use App\Models\Post;
use App\Models\User;




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

Route::get('/forgot', [LoginController::class, 'forgot']);




/*---------------*\
  #ADMIN
\*----------------*/

Route::get('/adminlogin', [AdminController::class, 'adminlogin']);

Route::get('/admincommunity', [AdminController::class, 'admincommunity']);

Route::get('/vcommunity', [AdminController::class, 'viewcommunity']);

Route::get('/admincontent', [AdminController::class, 'admincontent']);

Route::get('/adminpost', [AdminController::class, 'adminpost']);

Route::get('/vpost', [AdminController::class, 'viewpost']);

Route::get('/adminuser', [AdminController::class, 'adminuser']);



/*------------------------*\
  #COMMUNITY
\*-------------------------*/

Route::get('/createcommunity', [CommunityController::class, 'createcommunity']);

Route::post('/storecommunity', [CommunityController::class, 'storeCommunity'])->name('store.community');

Route::get('/community', [CommunityController::class, 'community']);

Route::get('/user-communities', [CommunityController::class, 'userCommunities'])->name('user.communities');

Route::get('/mycommunity', [CommunityController::class, 'mycommunity'])->name('mycommunity');

Route::get('/mycommunity/{community_name}', [CommunityController::class, 'showMyCommunity'])->name('show.mycommunity');

Route::post('/mycommunity/{community_name}', [CommunityController::class, 'showMyCommunity'])->name('show.mycommunity');

Route::get('/community/{community_name}', [CommunityController::class, 'showCommunity'])->name('show.community');

Route::get('/explore', [CommunityController::class, 'explore']);

Route::get('/editcommunity/{community_name}', [CommunityController::class, 'editCommunity'])->name('edit.community');

Route::post('/updatecommunity/{community_name}', [CommunityController::class, 'updateCommunity'])->name('update.community');

Route::post('/community/join/{community_name}', [CommunityController::class, 'joinCommunity'])->name('join.community');

/*-------------*\
  #USER
\*--------------*/

Route::get('/comment', [UserController::class, 'comment']);

Route::get('/create', [UserController::class, 'create'])->name('create');

Route::post('/create', [UserController::class, 'storePost'])->name('post.store');

Route::get('/editprofile', [UserController::class, 'editprofile']);

Route::get('/profile/edit/{id}', [UserController::class, 'editprofile'])->name('profile.edit');

Route::post('/update-profile', [UserController::class, 'updateProfile'])->name('update.profile');

Route::get('/user/posts', [PostController::class, 'showUserPosts'])->name('user.posts');

Route::get('/profile', [UserController::class, 'showProfile'])->name('profile'); 

Route::get('/profile', [UserController::class, 'profile'])->name('profile');

Route::post('/profile', [UserController::class, 'profile'])->name('profile');

Route::get('/viewprofile', [UserController::class, 'outprofile'])->name('viewprofile');

Route::get('/viewprofile/{username}', [UserController::class, 'outprofile'])->name('viewprofile');

Route::post('/posts/{postId}/like', [UserController::class, 'likePost']);

Route::get('/posts/{postId}/likes', [UserController::class, 'getPostLikes']);

Route::get('/users/{userId}/likes', [UserController::class, 'getUserLikes']);