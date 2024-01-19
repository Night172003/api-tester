<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function index()
    {
        $attendance = \App\Models\Attendance::all();
        return response()->json($attendance, 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'emp_id' => 'required',
            'name' => 'required',
            'position' => 'required',
            'working_hours' => 'required|integer',
            'emp_type' => 'required',
        ]);

        $attendance = \App\Models\Attendance::create([
            'emp_id' => $request->input('emp_id'),
            'name' => $request->input('name'),
            'position' => $request->input('position'),
            'working_hours' => $request->input('working_hours'),
            'emp_type' => $request->input('emp_type'),
        ]);

        return response()->json($attendance,201);
    }
}
