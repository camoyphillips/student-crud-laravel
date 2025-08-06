<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class StudentController extends Controller
{
    public function index(): View
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    public function create(): View
    {
        return view('students.create');
    }

    public function store(StoreStudentRequest $request): RedirectResponse
    {
        Student::create($request->validated());
        return redirect()->route('students.index')->with('success', 'Student created successfully.');
    }

    public function show(Student $student): View
    {
        return view('students.show', compact('student'));
    }

    public function edit(Student $student): View
    {
        return view('students.edit', compact('student'));
    }

    public function update(UpdateStudentRequest $request, Student $student): RedirectResponse
    {
        $student->update($request->validated());
        return redirect()->route('students.index')->with('success', 'Student updated successfully.');
    }

    public function destroy(Student $student): RedirectResponse
    {
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Student deleted successfully.');
    }
}