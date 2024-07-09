<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'photo', 'dob', 'address', 'classroom_id'];
    // <or>
    // protected $guarded = [];
}
