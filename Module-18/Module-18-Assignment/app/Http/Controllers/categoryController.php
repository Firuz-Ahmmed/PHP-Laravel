<?php

namespace App\Http\Controllers;

use App\Models\categorie;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    public function getPostsByCategory($id)
    {
        $category = categorie::findOrFail($id);
        $posts = $category->posts;

        return view('category_posts', compact('category', 'posts'));
    }

}
