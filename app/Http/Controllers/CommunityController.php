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
        $validatedData = $request->validate([
            'community_name' => 'required|string|max:17',
            'community_description' => 'required|string|max:50',
            'community_coverpic' => 'required|image|mimes:jpeg,png,jpg',
            'community_pic' => 'required|image|mimes:jpeg,png,jpg',
            'main-form3-name' => 'required|string|in:games,technologies,movies,travel,music,education,sport',
        ]);
    
        $community = new Communities();
        $community->community_name = $validatedData['community_name'];
        $community->community_description = $validatedData['community_description'];
        $community->category = $validatedData['main-form3-name']; 
    
        if ($request->hasFile('community_coverpic')) {
            $coverPicPath = $request->file('community_coverpic')->store('community_banners', 'public');
            $community->community_coverpic = $coverPicPath;
        }
    
        if ($request->hasFile('community_pic')) {
            $profilePicPath = $request->file('community_pic')->store('community_profiles', 'public');
            $community->community_pic = $profilePicPath;
        }
    
        $community->save();
    
        return redirect()->route('communities.index')->with('success', 'Community created successfully!');
    }
    

    public function community(){
        return view('Community.Community');
    }

}
