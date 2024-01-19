<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\Auth\TokenController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\PayslipController;
use App\Http\Controllers\PayrollController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
// employee
Route::get('/employees/login', [EmployeeController::class, 'index']);
Route::get('/employees/{id}', [EmployeeController::class, 'show']);
Route::post('/employees', [EmployeeController::class, 'store']);
Route::put('/employees/{id}', [EmployeeController::class, 'update']);
Route::delete('/employees/{id}', [EmployeeController::class, 'destroy']);
//employee attendance 
Route::post('/attendance', [AttendanceController::class, 'store']);
Route::get('/attendance/info', [AttendanceController::class, 'index']);

//employee payslip
Route::post('/payslip', [PayslipController::class, 'store2']);
Route::get('/payslip/info', [PayslipController::class, 'index2']);

//
Route::get('/users/info', [EmployeeController::class, 'index1']);
Route::post('/users', [EmployeeController::class, 'store1']);

//employee payroll
Route::post('/payroll', [PayrollController::class, 'store3']);
Route::get('/payroll/info', [PayrollController::class, 'index3']);



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


