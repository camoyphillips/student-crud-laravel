@extends('admin')
@section('content')
    <h1>Student Details</h1>
    <p><strong>Full Name:</strong> {{ $student->first_name }} {{ $student->last_name }}</p>
    <p><strong>Email:</strong> {{ $student->email }}</p>
    <p><strong>Date of Birth:</strong> {{ $student->dob }}</p>
    <a href="{{ route('students.index') }}" class="btn btn-secondary">Back</a>
@endsection