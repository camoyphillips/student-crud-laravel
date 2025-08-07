@extends('admin')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Courses</h1>
        <a href="{{ route('courses.create') }}" class="btn btn-primary">Add Course</a>
    </div>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead class="table-light">
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th style="width: 220px;">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($courses as $course)
                <tr>
                    <td>{{ $course->name }}</td>
                    <td>{{ $course->description }}</td>
                    <td>
                        <a href="{{ route('courses.show', $course) }}" class="btn btn-sm btn-info">View</a>
                        <a href="{{ route('courses.edit', $course) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('courses.destroy', $course) }}" method="POST" class="d-inline"
                            onsubmit="return confirm('Delete this course?')">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">No courses found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
