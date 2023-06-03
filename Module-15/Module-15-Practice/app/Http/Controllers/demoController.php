<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class demoController extends Controller
{
    function demo(){
        return ("Successfully login");
    }
    function demo2(){
        return ("Redirected");
    }
}
