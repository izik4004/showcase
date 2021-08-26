<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    public function posts()
    {
        $posts = Post::get();
        return view('posts', compact('posts'));
    }

    public function LikePost(Request $request){

        $post = Post::find($request->id);
        $response = auth()->user()->toggleLike($post);

        return response()->json(['success'=>$response]);
    }
}
