<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentRequest;
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
        return view('student.create');
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
            'classroom_id' => $request->classroom_id,
        ]);
        return redirect(route('students.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return view('student.edit', [
            'student' => $student,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required',
            'email' => ['required', 'unique:students,email,' . $student->id],
            'dob' => 'required',
            'address' => 'required',
            'classroom_id' => 'required',
        ]);

        $photo_path = $request->file('photo')->store('photos');
        $student->update([
            'name' => $request->name,
            'photo' => $photo_path,
            'email' => $request->email,
            'dob' => $request->dob,
            'address' => $request->address,
            'classroom_id' => $request->classroom_id,
        ]);
        return redirect(route('students.index'));
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
