<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('student.index', [
            'students' => Student::paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('student.create', [
            'student' => new Student(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStudentRequest $request)
    {
        $photo_path = $request->file('photo')->store('photos');
        Student::create([
            'name' => $request->name,
            'photo' => $photo_path,
            'email' => $request->email,
            'dob' => $request->dob,
            'address' => $request->address,
        ]);
        return redirect(route('students.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return view('student.view', ['student' => $student]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return view('student.create', [
            'student' => $student,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStudentRequest $request, Student $student)
    {
        if ($request->hasFile('photo')) {
            $photo_path = $request->file('photo')->store('photos');
            $student->photo = $photo_path;
        }
        $student->update([
            'name' => $request->name,
            'photo' => $student->photo,
            'email' => $request->email,
            'address' => $request->address,
            'dob' => $request->dob,
        ]);
        return redirect(route('students.show', [
            'student' => $student
        ]));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect(route('students.index'));
    }
}
