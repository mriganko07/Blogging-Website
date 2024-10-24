<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    
    public function comment() {
        return view('Comment');
    }

    public function create() {
        return view('Create');
    }

    public function explore() {
        return view('Explore');
    }

    public function forgot() {
        return view('Forgot');
    }

    public function registration() {
        return view('Registration');
    }

}

