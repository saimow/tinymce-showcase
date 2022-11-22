<?php

namespace App\Http\Controllers\PostController;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class Update extends Controller
{
    public function index(Post $post){
        return view('posts.update', ['post' => $post ]);
    }

    public function update(Post $post, Request $request){
        $post->update($request->validate([
            'title' => 'required',
            'description' => 'required',
        ]));

        return redirect()->route('posts');
    }
}
