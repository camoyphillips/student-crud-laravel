@extends('admin')

@section('content')
    <h1>Course Details</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $course->name }}</h5>
            <p class="card-text">{{ $course->description }}</p>
            <p class="card-text">
                <small class="text-muted">Created: {{ $course->created_at->format('Y-m-d H:i') }}</small><br>
                <small class="text-muted">Updated: {{ $course->updated_at->format('Y-m-d H:i') }}</small>
            </p>
            <a href="{{ route('courses.edit', $course) }}" class="btn btn-warning">Edit</a>
            <a href="{{ route('courses.index') }}" class="btn btn-secondary">Back</a>
        </div>
    </div>
@endsection
