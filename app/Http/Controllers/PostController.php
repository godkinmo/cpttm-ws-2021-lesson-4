<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('posts.index', [
            'posts' => $posts,
        ]);
    }

    public function show(Post $post)
    {
        return view('posts.show', [
           'post' => $post,
        ]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function edit(Post $post)
    {
        return view('posts.edit', [
            'post' => $post,
        ]);
    }

    public function store()
    {
        request()->validate([
            'title' => ['required'],
            'content' => ['required', 'min:5'],
        ]);

        $post = Post::create([
            'title' => request('title'),
            'content' => request('content'),
            'user_id' => auth()->id(),
        ]);

        return redirect('/posts/' . $post->id);
    }

    public function update(Post $post)
    {
        request()->validate([
            'title' => ['required'],
            'content' => ['required', 'min:5'],
        ]);

        $post->update([
            'title' => request('title'),
            'content' => request('content'),
        ]);

        return redirect('/posts/' . $post->id);
    }

    public function delete(Post $post)
    {
        // $post->comments->each->delete();
        $post->delete();

        return back();
    }
}
