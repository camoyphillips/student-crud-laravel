<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Course;
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
        $courses = Course::all();
        return view('students.create', compact('courses'));
    }

    public function store(StoreStudentRequest $request): RedirectResponse
    {
        $student = Student::create($request->validated());
        $student->courses()->sync($request->input('courses', [])); 
        return redirect()->route('students.index')->with('success', 'Student created with courses.');
    }

    public function show(Student $student): View
    {
        return view('students.show', compact('student'));
    }

    public function edit(Student $student): View
    {
        $courses = Course::all(); 
        return view('students.edit', compact('student', 'courses'));
    }

    public function update(UpdateStudentRequest $request, Student $student): RedirectResponse
    {
        $student->update($request->validated());
        $student->courses()->sync($request->input('courses', []));
        return redirect()->route('students.index')->with('success', 'Student updated successfully.');
    }

    public function confirmDelete(Student $student): View
    {
        return view('students.delete', compact('student'));
    }

    public function destroy(Student $student): RedirectResponse
    {
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Student deleted successfully.');
    }
}
