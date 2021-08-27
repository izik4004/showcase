<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PagesController extends Controller
{
    public function index (Post $post)
    {
        $posts = Post::all();
        return view('index', compact('posts'));
        
    }
}
