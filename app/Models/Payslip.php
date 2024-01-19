<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payslip extends Model
{
    protected $fillable = [
        'emp_id',
        'name',
        'position',
        'pay_period',
        'emp_type',
    ];
}
