<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class postController extends Controller
{
    public function index(){
        $posts = Post::all();
        return response()->json(($posts));
    }
    public function show($id)
{
    $post = Post::findOrFail($id);
    // dd($post);
    return view('show', compact('post'));
}

}
