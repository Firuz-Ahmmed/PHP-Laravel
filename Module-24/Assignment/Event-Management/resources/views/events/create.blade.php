@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Event</h1>
        <form action="{{ route('events.store') }}" method="post">
            @csrf
            <label for="title">Title</label>
            <input type="text" name="title" required>
            <!-- Add more form fields for other event properties -->
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
