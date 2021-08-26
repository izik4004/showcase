<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Cviebrock\EloquentSluggable\Services\SlugService;

class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   

        return view('startup.index')
        -> with('posts', Post::orderBy('updated_at', 'DESC')->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('startup.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
        'title' => 'required',
        'description' => 'required',
        'category' => 'required',
        'tag' => 'required',
        'image' => 'required|mimes:jpg,png,jpeg|max:5048'
        ]);

        $newImageName = uniqid() . '-' . $request->title . '.' . 
        $request->image->extension();

        $request->image->move(public_path('images'), $newImageName);
        
        $slug = SlugService::createSlug(Post::class, 'slug',
        $request->title);

        Post::create([
            'title' => $request->input('title'),
            'category' => $request->input('category'),
            'tag' => $request->input('tag'),
            'description' => $request->input('description'),
            'slug' => SlugService::createSlug(Post::class, 'slug', 
            $request->title),
            'image_path' => $newImageName,
            'user_id' => auth()->user()->id
        ]);

        return redirect('/startup')->with('message', 'Your startup was added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        return view('startup.show')->with('post', Post::where('slug', $slug)->first());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        return view('startup.edit')->with('post', Post::where('slug', $slug)->first());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'category' => 'required',
            'tag' => 'required',
            ]);


        Post::where('slug', $slug)->update(([
            'title' => $request->input('title'),
            'category' => $request->input('category'),
            'tag' => $request->input('tag'),
            'description' => $request->input('description'),
            'slug' => SlugService::createSlug(Post::class, 'slug', 
            $request->title),
            'user_id' => auth()->user()->id
        ]));

        return redirect('/startup')->with('message', 'Your post has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $post = Post::where('slug', $slug);
        $post->delete();

        return redirect('/startup')->with('message', 'Your post has ben deleted!');
    }
}
