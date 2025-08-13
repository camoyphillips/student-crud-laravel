@extends('admin')

@section('content')
    <h1>Add a Student</h1>

    <form action="{{ route('students.store') }}" method="POST">
        @csrf

        {{-- Global Validation Errors --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li class="text-danger">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- First Name --}}
        <div class="mb-3">
            <label for="first_name" class="form-label">First Name</label>
            <input 
                type="text" 
                id="first_name"
                name="first_name" 
                class="form-control @error('first_name') is-invalid @enderror" 
                value="{{ old('first_name') }}">
            @error('first_name')
                <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror
        </div>

        {{-- Last Name --}}
        <div class="mb-3">
            <label for="last_name" class="form-label">Last Name</label>
            <input 
                type="text" 
                id="last_name"
                name="last_name" 
                class="form-control @error('last_name') is-invalid @enderror" 
                value="{{ old('last_name') }}">
            @error('last_name')
                <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror
        </div>

        {{-- Email --}}
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input 
                type="email" 
                id="email"
                name="email" 
                class="form-control @error('email') is-invalid @enderror" 
                value="{{ old('email') }}">
            @error('email')
                <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror
        </div>

        {{-- Date of Birth --}}
        <div class="mb-3">
            <label for="dob" class="form-label">Date of Birth</label>
            <input 
                type="date" 
                id="dob"
                name="dob" 
                class="form-control @error('dob') is-invalid @enderror" 
                value="{{ old('dob') }}">
            @error('dob')
                <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror
        </div>

        {{-- Enroll in Courses (Checkboxes) --}}
        <div class="mb-3">
            <label class="form-label">Enroll in Courses</label>
            @foreach ($courses as $course)
                <div class="form-check">
                    <input 
                        class="form-check-input" 
                        type="checkbox" 
                        name="courses[]" 
                        id="course_{{ $course->id }}" 
                        value="{{ $course->id }}" 
                        {{ in_array($course->id, old('courses', [])) ? 'checked' : '' }}>
                    <label class="form-check-label" for="course_{{ $course->id }}">
                        {{ $course->name }}
                    </label>
                </div>
            @endforeach
            @error('courses')
                <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror
        </div>

        {{-- Submit --}}
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
@endsection
