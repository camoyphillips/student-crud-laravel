@extends('admin')
@section('content')
    <div class="container">
        <h1>Delete Student</h1>
        <div class="alert alert-warning">
            <p>Are you sure you want to delete the student:</p>
            <ul>
                <li><strong>Name:</strong> {{ $student->first_name }} {{ $student->last_name }}</li>
                <li><strong>Email:</strong> {{ $student->email }}</li>
                <li><strong>Date of Birth:</strong> {{ $student->dob }}</li>
            </ul>
            <p>This action cannot be undone.</p>
        </div>

        <form action="{{ route('students.destroy', $student->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Yes, Delete</button>
            <a href="{{ route('students.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection