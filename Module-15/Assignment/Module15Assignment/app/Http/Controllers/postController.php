<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class postController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = post::all();
        return view($posts);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return ('Post created');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        post::create($validatedData);

        return response()->with('success', 'Post created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::findOrFail($id);
        return view($post);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
        $post = Post::findOrFail($id);
        return view($post);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        post::create($validatedData);

        return response()->with('success', 'Post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return response()->with('success', 'Post deleted successfully');
    }
}
