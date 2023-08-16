@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $event->title }}</h1>
        <p>Date: {{ $event->date }}</p>
        <p>Time: {{ $event->time }}</p>
        <p>Location: {{ $event->location }}</p>
        <p>Description: {{ $event->description }}</p>
        <p>RSVP: {{ $event->rsvp }}</p>
    </div>
@endsection
