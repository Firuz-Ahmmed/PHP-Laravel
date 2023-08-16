@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>All Events</h1>
        <a href="{{ route('events.create') }}" class="btn btn-primary">Create Event</a>
        <ul>
            @foreach($events as $event)
                <li>
                    <a href="{{ route('events.show', $event) }}">{{ $event->title }}</a>
                    <a href="{{ route('events.edit', $event) }}" class="btn btn-sm btn-info">Edit</a>
                    <form action="{{ route('events.destroy', $event) }}" method="post" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </li>
            @endforeach
        </ul>
        {{ $events->links() }}
    </div>
@endsection
@foreach($events as $event)
    <li>
        <a href="{{ route('events.show', $event) }}">{{ $event->title }}</a>
        <span class="badge badge-primary">{{ $event->rsvp }} RSVPs</span>
        <a href="{{ route('events.rsvp', $event) }}" class="btn btn-success btn-sm">RSVP</a>
    </li>
@endforeach
<form action="{{ route('events.index') }}" method="get" class="mt-3">
    <select name="category">
        <option value="">All Categories</option>
        @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>
    <button type="submit" class="btn btn-secondary">Filter</button>
</form>
<form action="{{ route('events.search') }}" method="get" class="mt-3">
    <input type="text" name="query" placeholder="Search events...">
    <button type="submit" class="btn btn-secondary">Search</button>
</form>

