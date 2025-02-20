<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;

class UserController extends Controller
{


    public function comment() 
    {
        return view('User.Comment');
    }

    public function create() 
    {
        return view('User.Create');
    }

    public function storePost(Request $request)
    {
        $request->validate([
            'post_caption' => 'required|string|max:255',
            'post_desc' => 'string|nullable',
            'post_img' => 'nullable|image|mimes:jpeg,png,jpg,gif',
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

    public function explore() 
    {
        return view('User.Explore');
    }

    public function profile() 
    {
        // return view('User.Profile');

        $userId = session('user_id'); 

        if (!$userId) {
            return redirect()->route('login')->with('error', 'Please login to access your profile.');
        }

        $user = User::findOrFail($userId); 
        $posts = Post::where('user_id', $userId)->latest()->get(); 

        return view('User.Profile', compact('user', 'posts')); 
    }

    public function editprofile()
    {
        // return view('User.EditProfile');

        $userId = session('user_id'); 
        $user = User::findOrFail($userId); 
        return view('User.EditProfile', compact('user')); 
    }

    public function updateProfile(Request $request)
    {
        $userId = session('user_id'); 
        $user = User::findOrFail($userId);

        $request->validate([
            'email' => 'required|email|unique:users,email,' . $userId . ',user_id',
            'display_name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,user_name,' . $userId . ',user_id',
            'phone' => 'nullable|string|max:15',
            'dob' => 'nullable|date',
            'gender' => 'required|in:M,F,O',
            'bio' => 'nullable|string|max:50',
            'password' => 'nullable|string|confirmed', 
            'profile_pic' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'cover_img' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);

        $user->email = $request->email;
        $user->name = $request->display_name;
        $user->user_name = $request->username; 
        $user->phone = $request->phone;
        $user->DOB = $request->dob;
        $user->gender = $request->gender;
        $user->bio = $request->bio;

        if ($request->filled('password')) {
            $user->password = bcrypt($request->password);
        }

        if ($request->hasFile('profile_pic')) {
            $profilePicPath = $request->file('profile_pic')->store('profile_pictures', 'public');
            $user->profile_pic = $profilePicPath;
        }

        if ($request->hasFile('cover_img')) { 
            $coverImgPath = $request->file('cover_img')->store('cover_pictures', 'public'); 
            $user->cover_img = $coverImgPath; 
        }

        $user->save();

        session(['user' => $user]); 

        return redirect()->route('profile')->with('success', 'Profile updated successfully!');
    }

    public function showUserPosts()
    {
        // $userId = session('user')->id; 
        // $posts = Post::where('user_id', $userId)->get(); 

        // return view('user.posts', compact('posts'));



        $userId = session('user_id'); 

        if (!$userId) {
            return redirect()->route('login')->with('error', 'Please log in to view your posts.');
        }

        $posts = Post::where('user_id', $userId)->get(); 

        return view('user.posts', compact('posts'));
    }

    public function showProfile()
    {
        // $user = auth()->user(); 
        // return view('profile', compact('user'));

        $userId = session('user_id'); 

        if (!$userId) {
            return redirect()->route('login')->with('error', 'Please log in to view your profile.');
        }

        $user = User::findOrFail($userId); 

        return view('User.Profile', compact('user'));
    }

    public function outprofile(){

        return view('User.OutsiderProfile'); 
        
    }

}
