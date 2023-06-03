<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class formController extends Controller
{
   function index()
   {
      return view('form');
   }
   function welcome()
   {
      return view('welcome');
   }
   function store(Request $request)
   {
      //dd($request->input());
      $validate = $request->validate([
         'name' => 'required|string|min:2',
         'email' => 'required|email',
         'password' => 'required|string|min:8'
      ]);
      $user = new User();
      $user->name = $validate['name'];
      $user->email = $validate['email'];
      $user->password = bcrypt($validate['password']);
      $user->save();
      return redirect()->route('welcome');
   }
}
