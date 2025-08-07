@extends('admin')

@section('content')
    <h1 class="mb-4">Admin Dashboard</h1>

    <div class="row">
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <h5 class="card-title">Students</h5>
                    <p class="card-text">Manage student records.</p>
                    <a href="{{ route('students.index') }}" class="btn btn-primary">View Students</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mt-4 mt-md-0">
            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <h5 class="card-title">Courses</h5>
                    <p class="card-text">Manage available courses.</p>
                    <a href="{{ route('courses.index') }}" class="btn btn-primary">View Courses</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mt-4 mt-md-0">
            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <h5 class="card-title">Professors</h5>
                    <p class="card-text">Manage professor list.</p>
                    <a href="{{ route('professors.index') }}" class="btn btn-primary">View Professors</a>
                </div>
            </div>
        </div>
    </div>
@endsection
