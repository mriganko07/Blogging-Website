<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Communities;

class CommunityController extends Controller
{

    // COMMUNITY

    public function createcommunity(){
        return view('Community.CreateCommunity');
    }


    public function storeCommunity(Request $request)
    {
    
        $request->validate([
            'community_name' => 'required|string|max:17',
            'community_description' => 'string|max:252',
            'community_coverpic' => 'image|mimes:jpeg,png,jpg',
            'community_pic' => 'image|mimes:jpeg,png,jpg',
        ]);
    
        $coverPicPath = $request->hasFile('community_coverpic') ? $request->file('community_coverpic')->store('community_banners', 'public') : null;
        $profilePicPath = $request->hasFile('community_pic') ? $request->file('community_pic')->store('community_profiles', 'public') : null;

    
        $community = new Communities();
        $community->community_name = $request->community_name;
        $community->community_description = $request->community_description;
        $community->community_pic = $profilePicPath;
        $community->community_coverpic = $coverPicPath;
    
        $community->save();
    
        return redirect()->back()->with('success', 'Community created successfully!');
    }
    

    public function community(){
        return view('Community.Community');
    }

}
