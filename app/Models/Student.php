<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'photo', 'dob', 'address'];
    // <or>
    // protected $guarded = [];

    public function classrooms()
    {
        return $this->belongsToMany(Classroom::class);
    }
}
