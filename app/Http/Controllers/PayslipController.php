<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PayslipController extends Controller
{
    public function index2()
    {
        $payslip = \App\Models\Payslip::all();
        return response()->json($payslip, 200);
    }

    public function store2(Request $request)
    {
        $request->validate([
            'emp_id' => 'required',
            'name' => 'required',
            'position' => 'required',
            'pay_period' => 'required',
            'emp_type' => 'required',
        ]);

        $payslip = \App\Models\Payslip::create([
            'emp_id' => $request->input('emp_id'),
            'name' => $request->input('name'),
            'position' => $request->input('position'),
            'pay_period' => $request->input('pay_period'),
            'emp_type' => $request->input('emp_type'),
        ]);

        return response()->json($payslip,201);
    }

}
