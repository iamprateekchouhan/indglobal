<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Input; 
use Illuminate\Support\Facades\Auth; 
use Session;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user(); 
        $posts = Post::with('user')->get();
        $user_post = Post::with('user')->where('user_id', $user->id)->get();
        
        return view('posts.index', compact('posts','user_post'));
        
    }
}
