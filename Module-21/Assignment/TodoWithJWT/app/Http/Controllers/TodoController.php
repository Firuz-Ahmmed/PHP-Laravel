<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class TodoController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $todos = $user->todos;
        return response()->json($todos);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }

        $user = Auth::user();
        $todo = new Todo([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        $user->todos()->save($todo);
        return response()->json(['message' => 'Todo created successfully'], 201);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'completed' => 'required|boolean',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }

        $user = Auth::user();
        $todo = $user->todos()->find($id);

        if (!$todo) {
            return response()->json(['error' => 'Todo not found'], 404);
        }

        $todo->title = $request->title;
        $todo->description = $request->description;
        $todo->completed = $request->completed;
        $todo->save();

        return response()->json(['message' => 'Todo updated successfully']);
    }

    public function destroy($id)
    {
        $user = Auth::user();
        $todo = $user->todos()->find($id);

        if (!$todo) {
            return response()->json(['error' => 'Todo not found'], 404);
        }

        $todo->delete();
        return response()->json(['message' => 'Todo deleted successfully']);
    }
}

