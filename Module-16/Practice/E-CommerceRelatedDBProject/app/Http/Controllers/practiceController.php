<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class practiceController extends Controller
{
    function index(){
        
        $result=DB::table('brands')->get();
        //dd($result);
    //   foreach($result as $value){
    //         echo "$value->brandName <br>";
    //     };
    
    
    }
}
