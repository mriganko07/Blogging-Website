<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

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
        // Validate the incoming request data
        $request->validate([
            'post_caption' => 'required|string|max:255',
            'post_desc' => 'required|string',
            'post_img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Create a new Post instance
        $post = new Post;
        $post->post_caption = $request->post_caption;
        $post->post_desc = $request->post_desc;

        // Handle image upload if provided
        if ($request->hasFile('post_img')) {
            $imageName = time() . '.' . $request->post_img->extension();
            $request->post_img->move(public_path('uploads/posts'), $imageName);
            $post->post_img = 'uploads/posts/' . $imageName;
        }

        // Set additional default values (e.g., user_id, community_id)
        $post->user_id = auth()->id(); // Assuming user authentication
        $post->community_id = null;   // Set a community ID if applicable
        $post->up_votes = 0;
        $post->down_votes = 0;
        $post->comments = 0;
        $post->share = 0;

        // Save the post to the database
        $post->save();

        // Redirect or return a response
        return redirect()->back()->with('success', 'Post created successfully!');
    }

    public function explore() {
        return view('User.Explore');
    }

    public function profile() {
        return view('User.Profile');
    }

    public function editprofile(){
        return view('User.EditProfile');
    }
}
