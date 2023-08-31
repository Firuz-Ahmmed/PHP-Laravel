<?php

namespace App\Http\Controllers;

use App\Models\LeaveRequest;
use Illuminate\Http\Request;

class LeaveController extends Controller
{
    // LeaveController.php

public function store(Request $request)
{
    $request->validate([
        'leave_category_id' => 'required',
        'start_date' => 'required|date',
        'end_date' => 'required|date|after:start_date',
        'reason' => 'required',
    ]);

    // Store leave request and redirect
}

public function update(Request $request, LeaveRequest $leave)
{
    $request->validate([
        // Validation rules
    ]);

    // Update leave request and redirect
}

}
