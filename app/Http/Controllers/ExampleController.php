<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    
    // ADMIN

    public function adminlogin(){
        return view('Admin/AdminLogin');
    }

    public function admincommunity(){
        return view('Admin/AdminCommunity');
    }

    public function admincontent(){
        return view('Admin/AdminContent');
    }

    public function adminpost(){
        return view('Admin/AdminPost');
    }

    public function adminuser(){
        return view('Admin/AdminUser');
    }


    // REGISTRATION LOGIN & FORGOT

    public function forgot() {
        return view('User/Forgot');
    }

    // public function registration() {
    //     return view('User/Registration');
    // }


    // USER

    public function comment() {
        return view('User/Comment');
    }

    public function create() {
        return view('User/Create');
    }

    public function explore() {
        return view('User/Explore');
    }

    public function profile() {
        return view('User/Profile');
    }

    public function editprofile(){
        return view('EditProfile');
    }

    public function viewcommunity() {
        return view('User/ViewCommunities');
    }

    public function viewpost() {
        return view('User/ViewPost');
    }

    

    // COMMUNITY

    public function createcommunity(){
        return view('Community/CreateCommunity');
    }

    public function community(){
        return view('Community/Community');
    }

}