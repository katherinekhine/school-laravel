<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    // ! must include if u use Teacher::create($validated);
    protected $fillable = ['name', 'email', 'address', 'dob'];

    public function classrooms()
    {
        return $this->hasMany(Classroom::class);
    }
}
