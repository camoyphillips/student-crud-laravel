@extends('admin')

@section('content')
    <h1 class="mb-4">Delete Course</h1>

    <div class="alert alert-warning">
        <strong>Warning!</strong> You are about to permanently delete this course:
    </div>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $course->name }}</h5>
            <p class="card-text">{{ $course->description }}</p>

            <form action="{{ route('courses.destroy', $course) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Yes, Delete</button>
                <a href="{{ route('courses.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
@endsection
