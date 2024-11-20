<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;

class UserController extends Controller
{


    public function comment() {
        return view('User.Comment');
    }

    public function create() {
        return view('User.Create');
    }


    public function storePost(Request $request)
    {
        $request->validate([
            'post_caption' => 'required|string|max:255',
            'post_desc' => 'required|string',
            'post_img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $postImagePath = null;
        if ($request->hasFile('post_img')) {
            $postImagePath = $request->file('post_img')->store('posts', 'public'); 
        }

        $userId = session('user_id');

        Post::create([
            'post_caption' => $request->post_caption,
            'post_desc' => $request->post_desc,
            'post_img' => $postImagePath,
            'user_id' => $userId, 
            'community_id' => $request->community_id, 
            'up_votes' => 0,
            'down_votes' => 0,
            'comments' => 0,
            'share' => 0,
        ]);

        return redirect()->route('profile')->with('success', 'Post created successfully!');
    }

    public function explore() {
        return view('User.Explore');
    }

    public function profile() {
        // return view('User.Profile');
        $userId = session('user_id');
        $post = Post::where('user_id', $userId)->latest()->first(); 
        return view('User.Profile', compact('post')); 
    }

    public function editprofile(){
        return view('User.EditProfile');
    }
}
