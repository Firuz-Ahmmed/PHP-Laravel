<?php

namespace App\Http\Controllers;

use Illuminate\Database\Query\JoinClause;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class module17PracticeController extends Controller
{
    public function index()
    {

        // //$result=DB::table('posts')->select('excerpt','description')->get();
        // $uniqueEmails = DB::table('users')->select('email')->distinct()->get();
        // $posts = DB::table('posts')->where('id', 2)->first();
        // $posts = DB::table('posts')->where('id', 2)->pluck('description');
        // $posts = DB::table('posts')->pluck('title');
        // $data = [
        //     'title' => 'X',
        //     'slug' => 'X',
        //     'excerpt' => 'excerpt',
        //     'description' => 'description',
        //     'is_published' => true,
        //     'min_to_read' => 2,
        // ];
        // $result = DB::table('posts')->insert($data);
        // Print_r($result);
        // $affectedRows = DB::table('posts')
        //     ->where('id', 2)
        //     ->update([
        //         'excerpt' => 'Laravel 10',
        //         'description' => 'Laravel 10'
        //     ]);
        // Print_r($affectedRows);
        // // $affectedRows = DB::table('posts')
        // //     ->where('id', 3)
        // //     ->delete();
        // // Print_r($affectedRows);
        // $posts = DB::table('posts')
        //     ->whereBetween('min_to_read', [1, 5])
        //     ->get();

        // print_r($posts);
        // $affectedRows = DB::table('posts')
        //     ->where('id', 3)
        //     ->increment('min_to_read');
        // Print_r($affectedRows);
        $products1 = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->join('brands', 'products.brand_id', '=', 'brands.id')
            ->get();
        $products = DB::table('products')
            ->join('categories', function (JoinClause $join) {
                $join->on('products.category_id', '=', 'categories.id')
                    ->where('products.price', '>', 2000);
            })
            ->join('brands', function (JoinClause $join) {
                $join->on('products.brand_id', '=', 'brands.id')
                    ->where('brands.brandName', '=', 'Hatil');
            })
            ->get();

        return $products;
    }
}