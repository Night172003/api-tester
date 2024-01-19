<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $primaryKey = 'EmpID';

    protected $fillable = [
        'LastName', 'FirstName', 'MiddleName', 'Birthday', 'Address', 'PhoneNumber', 'Bio', 'cred_id', 'job_id'
    ];

    // Define relationships if needed
    public function credential()
    {
        return $this->belongsTo(Credential::class, 'cred_id', 'cred_id');
    }

    public function job()
    {
        return $this->belongsTo(Job::class, 'job_id', 'jobs_id');
    }
}
