<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function leaveHistory()
    {
        
        return view('reports.leave-history');
    }
}
