@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Pending Leave Approvals</h1>
        <table>
            <thead>
                <tr>
                    <th>Employee</th>
                    <th>Leave Category</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Reason</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pendingApprovals as $leave)
                    <tr>
                        <td>{{ $leave->user->name }}</td>
                        <td>{{ $leave->leaveCategory->name }}</td>
                        <td>{{ $leave->start_date }}</td>
                        <td>{{ $leave->end_date }}</td>
                        <td>{{ $leave->reason }}</td>
                        <td>
                            <form action="{{ route('approvals.approve', $leave->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn-success">Approve</button>
                            </form>
                            <form action="{{ route('approvals.reject', $leave->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn-danger">Reject</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
