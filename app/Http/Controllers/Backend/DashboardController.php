<?php

namespace App\Http\Controllers\Backend;
use App\Post;
use App\User;

class DashboardController extends Controller
{
    public function index(Post $posts, User $users){
    	$posts = $posts->orderby('updated_at', 'desc')->take(5)->get();

    	$users = $users->whereNotNull('last_login_at')->orderby('last_login_at', 'desc')->take(5)->get();
    	return view('backend.dashboard', compact('posts','users'));
    }
}
