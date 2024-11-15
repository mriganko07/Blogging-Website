<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    public function registration() {
        return view('User.Registration');
    }

    public function forgot() {
        return view('User.Forgot');
    }

    public function comment() {
        return view('User.Comment');
    }

    public function create() {
        return view('User.Create');
    }

    public function explore() {
        return view('User.Explore');
    }

    public function profile() {
        return view('User.Profile');
    }

    public function editprofile(){
        return view('EditProfile');
    }

    public function viewcommunity() {
        return view('User.ViewCommunities');
    }

    public function viewpost() {
        return view('User.ViewPost');
    }

    
}
