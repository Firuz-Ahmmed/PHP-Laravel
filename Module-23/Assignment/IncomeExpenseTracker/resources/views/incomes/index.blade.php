@extends('layouts.app')

@section('content')
    <h1>Income List</h1>
    <a href="{{ route('incomes.create') }}" class="btn btn-success">Add Income</a>
    <table class="table">
        
    </table>
@endsection
