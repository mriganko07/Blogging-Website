<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommunityController extends Controller
{

    // COMMUNITY

    public function createcommunity(){
        return view('Community.CreateCommunity');
    }

    public function community(){
        return view('Community.Community');
    }

}
