<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model

    {
        protected $fillable = ['name', 'email', 'password', 'is_admin'];

        protected $attributes = [
            'is_admin' => false,
        ];
    
        // Mutator method for is_admin attribute
        public function setIsAdminAttribute($value)
        {
            $this->attributes['is_admin'] = (bool) $value;
        }

        
    }

