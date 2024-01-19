<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = \App\Models\Employees::all();
        return response()->json($employees);
    }

    public function show($id)
    {
        $employee = \App\Models\Employees::findOrFail($id);
        return response()->json($employee);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:employees,email',
            'password' => 'required|string',
            'is_admin' => 'boolean', // Assuming is_admin is a boolean field
        ]);

        $employee = \App\Models\Employees::create($request->all());
        return response()->json($employee, 201);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'string',
            'email' => 'email|unique:employees,email,' . $id,
            'password' => 'string',
            'is_admin' => 'boolean',
        ]);

        $employee = \App\Models\Employees::findOrFail($id);
        $employee->fill($request->all());
        $employee->save();

        return response()->json($employee, 200);
    }

    public function destroy($id)
    {
        $employee = \App\Models\Employees::findOrFail($id);
        $employee->delete();

        return response()->json(null, 204);
    }

    public function index1()
    {
        $employees = \App\Models\Employees::all();
        return response()->json($employees);
    }
}
