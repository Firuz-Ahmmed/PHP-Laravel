<?php

namespace App\Http\Controllers;

use App\Models\categorie;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    public function index()
{
    $categories = categorie::with('latestPost')->get();
    return view('category_posts', ['categories' => $categories]);
}

    public function getPostsByCategory($id)
    {
        $category = categorie::findOrFail($id);
        $posts = $category->description;

        // return view('category_post', compact('category', 'posts'));
    }

}
