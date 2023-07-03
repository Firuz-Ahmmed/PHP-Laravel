<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;

class postController extends Controller
{
    public function allPost()
    {
        $posts = Post::all();
        return view('posts', compact('posts'));
    }
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
    }
}