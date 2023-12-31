<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class Posts extends Controller
{   
    public function index(){
        return view('posts.index', [ 'posts' => Post::all() ]);
    }

    public function show($id){
        return view('posts.show', [ 'post' => Post::findOrFail($id) ]);
    }

    public function create(){
        return view('posts.create');
    }

    public function store(Request $request){
        $data = $request->only([ 'title', 'content' ]);
        Post::create($data);
        return redirect('/posts');
    }
}

/*
 public function store(Request $request){
        $args = $request->all();
        $post = new Post();
        $post->title = $args['title'];
        $post->content = $args['content'];
        $post->save();
        return 'post created';
    }

Post::create(['title' => '111', 'content' => '2222])
$post = new Post();
$post->fill(['title' => '111', 'content' => '2222]);


Post::create($request->validated())
return redirect()->route();
*/