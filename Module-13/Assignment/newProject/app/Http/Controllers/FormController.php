<?php

namespace App\Http\Controllers;
use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    function index()
    {
        return view('welcome');
    }
    public function store(Request $request)
    {
        // Validate the form input
        // try { 
        // $validatedData = $request->validate([
        //     'name' => 'required|string|max:255',
        //     'email' => 'required|email|max:255',
        //     'password' => 'required|string|min:6|max:255',
        //     'age' => 'nullable|integer|min:18|max:100',
        //     'birthdate' => 'nullable|date',
        //     'gender' => 'nullable|string|in:male,female,other',
        //     'country' => 'nullable|string|max:255',
        //     'interests' => 'nullable|array',
        //     'interests.*' => 'string|max:255',
        //     'bio' => 'nullable|string'
            
        // ]);
        // //dd($validatedData);

        // // // Create a new record in the database with the validated data
        // $form = new Form;
        // $form->name = $validatedData['name'];
        // $form->email = $validatedData['email'];
        // $form->password = bcrypt($validatedData['password']);
        // $form->age = $validatedData['age'];
        // $form->birthdate = $validatedData['birthdate'];
        // $form->gender = $validatedData['gender'];
        // $form->country = $validatedData['country'];
        // $form->interests = $validatedData['interests'] ? implode(',', $validatedData['interests']) : '';
        // $form->bio = $validatedData['bio'];

        // // Save the form data
        // $form->save();
        // } catch (\Exception $e) {
        //     logger()->error($e->getMessage());
        // }


        // // Redirect the user to a success page
        // return redirect('/');
        
    }
}
