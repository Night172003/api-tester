<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PayrollController extends Controller
{
    public function index3()
    {
        $payroll = \App\Models\Payroll::all();
        return response()->json($payroll, 200);
    }

    public function store3(Request $request)
    {
        $request->validate([
            'ref_no' => 'required',
            'month' => 'required',
            'date_from' => 'required',
            'date_to' => 'required',
            'status' => 'required',
        ]);

        $payroll = \App\Models\Payroll::create([
            'ref_no' => $request->input('ref_no'),
            'month' => $request->input('month'),
            'date_from' => $request->input('date_from'),
            'date_to' => $request->input('date_to'),
            'status' => $request->input('status'),
        ]);

        return response()->json($payroll,201);
    }

}