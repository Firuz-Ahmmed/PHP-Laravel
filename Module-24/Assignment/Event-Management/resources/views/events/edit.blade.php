@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Event</h1>
        <form action="{{ route('events.update', $event) }}" method="post">
            @csrf
            @method('PUT')
            <label for="title">Title</label>
            <input type="text" name="title" value="{{ $event->title }}" required>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
