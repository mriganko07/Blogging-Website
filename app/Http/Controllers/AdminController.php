<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    // ADMIN

    public function adminlogin(){
        return view('Admin.AdminLogin');
    }

    public function admincommunity(){
        return view('Admin.AdminCommunity');
    }

    public function admincontent(){
        return view('Admin.AdminContent');
    }

    public function adminpost(){
        return view('Admin.AdminPost');
    }

    public function adminuser(){
        return view('Admin.AdminUser');
    }

}
