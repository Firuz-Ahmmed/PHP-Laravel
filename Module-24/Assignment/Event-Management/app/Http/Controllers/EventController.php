<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Category; 
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function create()
    {
        return view('events.create');
    }

    public function edit(Event $event)
    {
        return view('events.edit', compact('event'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'date' => 'required|date',
            'time' => 'required',
            'location' => 'required|max:255',
        ]);

        Event::create($request->all());
        return redirect()->route('events.index');
    }

    public function update(Request $request, Event $event)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'date' => 'required|date',
            'time' => 'required',
            'location' => 'required|max:255',
        ]);

        $event->update($request->all());
        return redirect()->route('events.index');
    }

    public function rsvp(Event $event)
    {
        $event->increment('rsvp');
        return redirect()->route('events.show', $event);
    }

    public function index(Request $request)
    {
        $category = $request->input('category');
        $events = Event::when($category, function ($query, $category) {
            return $query->where('category_id', $category);
        })->paginate(10); // Adjust the number per page as needed

        $categories = Category::all(); // Retrieve all categories

        return view('events.index', compact('events', 'categories'));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $events = Event::where('title', 'like', "%$query%")
                      ->orWhere('description', 'like', "%$query%")
                      ->paginate(10); // Adjust the number per page as needed
        return view('events.index', compact('events'));
    }
}
