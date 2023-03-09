<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;


class PostController extends Controller
{
    public function __invoke()
    {
     return ("c'est la méthode par defaut");
    }
   public function index()
   {
    $posts=Post::get();
    return view("posts.index", compact('posts'));
   }
    public function show(Post $post)
    {
        $comments = Comment::factory()->count(5)->make();
        return view("posts.show", compact('post','comments'));
    }
    public function create()
    {
    return view("posts.create");
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title'=> 'required|max:255',
            'content'=>'required',
        ]);

        $post = new Post;
        $post->title=$validatedData['title'];
        $post->content=$validatedData['content'];
        $post->user_id = rand(1,10);
        $post->save();
        return redirect("/posts");
    }

    public function edit(Post $post)
    {
        return view("posts.edit", compact('post'));
    }
    

    public function update(Request $request, Post $post)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);
    
        $post->title = $validatedData['title'];
        $post->content = $validatedData['content'];
        $post->save();
    
        return redirect()->route('posts.show', $post);  
    }
        public function destroy(Post $post)
    {
        $post->delete();
        return redirect("/posts");
    }
}
