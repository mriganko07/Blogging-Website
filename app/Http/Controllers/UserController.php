<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\Like;
use App\Models\Join; 
use App\Models\Communities;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{


    public function comment() 
    {
        return view('User.Comment');
    }

    public function create() 
    {

        $userId = session('user_id');
        if (!$userId) {
            return redirect()->route('login')->with('error', 'Please login to create a post.');
        }

        $joinedCommunities = \DB::table('join')
            ->join('communities', 'join.community_id', '=', 'communities.community_id')
            ->where('join.user_id', $userId)
            ->select('communities.community_id', 'communities.community_name', 'communities.community_pic')
            ->get();

        return view('User.Create', compact('joinedCommunities'));

    }

    public function storePost(Request $request)
    {
    
        $request->validate([
            'post_caption' => 'required|string|max:255',
            'post_desc' => 'string|nullable',
            'post_img' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'selected_entity' => 'required'
        ]);
    
        $postImagePath = null;
        if ($request->hasFile('post_img')) {
            $postImagePath = $request->file('post_img')->store('posts', 'public');
        }
    
        $userId = session('user_id');
        $selectedEntity = $request->selected_entity;
        $redirectRoute = $request->input('redirectRoute', 'profile'); 
    
        $user_id = null;
        $community_id = null;
    
        if (strpos($selectedEntity, 'r/') !== false) {
            $selectedEntity = str_replace('r/', '', $selectedEntity);
            
            if ($selectedEntity === User::find($userId)->user_name) {
                $user_id = $userId;
                $redirectRoute = 'profile';
            } else {
                $community = Communities::where('community_name', $selectedEntity)->first();
                if ($community) {
                    $community_id = $community->community_id;
                    $user_id = $userId;
                }
            }
        }
    
        if (!$user_id && !$community_id) {
            return redirect()->back()->withInput()->with('error', 'Please select a valid community or your profile.');
        }
    
        Post::create([
            'post_caption' => $request->post_caption,
            'post_desc' => $request->post_desc,
            'post_img' => $postImagePath,
            'user_id' => $user_id,
            'community_id' => $community_id,
            'up_votes' => 0,
            'down_votes' => 0,
            'comments' => 0,
            'share' => 0,
        ]);
    
        return ($redirectRoute === 'mycommunity') 
            ? redirect()->route('show.mycommunity', ['community_name' => $selectedEntity])
                ->with('success', 'Post created successfully!')
            : redirect()->route('profile')->with('success', 'Post created successfully!');
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

    public function outprofile($username){

        // return view('User.OutsiderProfile'); 

        $user = User::where('user_name', $username)->first();

        if (!$user) {
            return redirect()->route('home')->with('error', 'User  not found.');
        }
    
        $posts = Post::where('user_id', $user->user_id)->latest()->get();
    
        return view('User.OutsiderProfile', compact('user', 'posts'));
        
    }

    public function likePost(Request $request, $postId)
    {
        $user = Auth::user(); 

        $post = Post::find($postId);
        if (!$post) {
            return response()->json(['message' => 'Post not found.'], 404);
        }

        if ($user->likes()->where('post_id', $postId)->exists()) {
            return response()->json(['message' => 'You already liked this post.'], 400);
        }

        $user->likes()->attach($postId);

        return response()->json(['message' => 'Post liked successfully!']);
    }

    public function getPostLikes($postId)
    {
        $post = Post::with('likes')->find($postId);

        if (!$post) {
            return response()->json(['message' => 'Post not found.'], 404);
        }

        return response()->json($post->likes);
    }

    public function getUserLikes($userId)
    {
        $user = User::with('likes')->find($userId);

        if (!$user) {
            return response()->json(['message' => 'User  not found.'], 404);
        }

        return response()->json($user->likes);
    }


    public function welcome() {
        return view('welcome');
    }

    public function viewmember(){
        return view('User.ViewMember');
    }

    public function viewmembercom(){
        return view('User.ViewMemberCom');
    }

}
