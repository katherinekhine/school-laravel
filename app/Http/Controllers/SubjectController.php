<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('subject.index', [
            'subjects' => Subject::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('subject.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'detail' => 'required',
            'teacher_id' => 'required',
        ]);
        Subject::create($validated);
        return redirect(route('subjects.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Subject $subject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subject $subject)
    {
        return view('subject.edit', ['subject' => $subject]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Subject $subject)
    {
        $request->validate([
            'title' => 'required',
            'detail' => 'required',
            'teacher_id' => 'required',
        ]);

        $subject->update([
            'title' => $request->title,
            'detail' => $request->detail,
            'teacher_id' => $request->teacher_id,
        ]);
        return redirect(route('subjects.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subject $subject)
    {
        //
    }
}
