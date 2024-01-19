<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
   
    protected $fillable = [
        'emp_id',
        'name',
        'position',
        'working_hours',
        'emp_type',
    ];
}
