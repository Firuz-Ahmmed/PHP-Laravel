<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Mail\PromotionalEmail;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        User::create($request->all());
        return redirect()->route('users.index')->with('success', 'User created successfully!');
    }

    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        
        $user->update($request->all());
        return redirect()->route('users.index')->with('success', 'User updated successfully!');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('success', 'User deleted successfully!');
    }
    public function sendPromotionalEmail(Request $request,User $user)
    {
        $subject = $request->input('subject');
        $content = $request->input('content');

        // Assuming the user's email address is stored in the $email variable
        $email = $user->email;

        Mail::to($email)->send(new PromotionalEmail($subject, $content));

        return redirect()->back()->with('success', 'Promotional email sent successfully!');
    }
}
