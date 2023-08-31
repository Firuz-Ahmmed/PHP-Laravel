@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Apply for Leave</h1>
        <form action="{{ route('leaves.store') }}" method="POST">
            @csrf
            <label for="leave_category">Leave Category:</label>
            <select name="leave_category_id" id="leave_category">
                @foreach ($leaveCategories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            <label for="start_date">Start Date:</label>
            <input type="date" name="start_date" id="start_date">
            <label for="end_date">End Date:</label>
            <input type="date" name="end_date" id="end_date">
            <label for="reason">Reason:</label>
            <textarea name="reason" id="reason"></textarea>
            <button type="submit">Submit</button>
        </form>
    </div>
@endsection
