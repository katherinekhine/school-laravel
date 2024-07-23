<?php

namespace Database\Seeders;

use App\Models\Classroom;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Teacher;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // DB::table('teachers')->insert([
        //     'name' => 'Teacher One',
        //     'email' => 'one@gmail.com',
        //     'address' => 'yangon',
        //     'dob' => '1999-12-4',
        // ]);

        Teacher::factory()->count(10)->create();
        Subject::factory()->count(10)->create();

        $classrooms = Classroom::factory()->count(15)->create();
        Student::factory(70)->create()->each(function ($student) use ($classrooms) {
            $student->classrooms()->attach(
                $classrooms->random(rand(1, 15))->pluck('id')->toArray()
            );
        });
    }
}
