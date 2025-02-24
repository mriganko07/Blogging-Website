<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Communities;
use App\Models\User;
use App\Models\Post; 


class CommunityController extends Controller
{

    public function createcommunity(){
        return view('Community.CreateCommunity');
    }

    public function storeCommunity(Request $request)
    {
        if (!$request->session()->has('user_id')) {
            return redirect()->route('register')->with('error', 'You must be logged in to create a community.');
        }
    
        $validatedData = $request->validate([
            'community_name' => 'required|string|max:17|unique:communities,community_name',
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
    
        $community->user_id = $request->session()->get('user_id'); 
    
        $community->save();
    
        return redirect()->route('home')->with('success', 'Community created successfully!');


    }
    
    public function userCommunities(){
        $userId = session('user_id'); 

        if (!$userId) {
            return redirect()->route('login')->with('error', 'Please log in first.');
        }

        $communities = Communities::where('user_id', $userId)->get(); 

        return view('Community.Community', compact('communities')); 
    }

    public function community(){
        return view('Community.Community');
    }

    public function mycommunity(){
        return view('Community.MyCommunity');
    }


    public function showMyCommunity($community_name){

        // $community = Communities::where('community_name', $community_name)->first();

        // if (!$community) {
        //     return redirect()->route('home')->with('error', 'Community not found.');
        // }
    
        // $posts = \App\Models\Post::where('community_id', $community->community_id)->latest()->get();
    
        // return view('Community.MyCommunity', compact('community', 'posts'));


        $community = Communities::where('community_name', $community_name)->first();

        if (!$community) {
            return redirect()->route('home')->with('error', 'Community not found.');
        }

        // Fetch posts along with user details
        $posts = Post::with('user') // Assuming you have a relationship defined in the Post model
            ->where('community_id', $community->community_id)
            ->latest()
            ->get();

        return view('Community.MyCommunity', compact('community', 'posts'));
    }

    public function showCommunity($community_name){
        $community = Communities::where('community_name', $community_name)->first();

        if (!$community) {
            return redirect()->route('home')->with('error', 'Community not found.');
        }
        return view('Community.Community', compact('community'));
    }

    public function explore() 
    {
        // return view('Community.Explore');

        $userId = session('user_id'); 

        $otherCommunities = Communities::where('user_id', '!=', $userId)->get();

        return view('Community.Explore', compact('otherCommunities'));
    }
}
