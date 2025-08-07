@extends('admin')

@section('content')
    <h1>Add a Student</h1>

    <form action="{{ route('students.store') }}" method="POST">
        @csrf

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li class="text-danger">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="mb-3">
            <label for="first_name" class="form-label">First Name</label>
            <input 
                type="text" 
                name="first_name" 
                class="form-control @error('first_name') is-invalid @enderror" 
                value="{{ old('first_name') }}">
            @error('first_name')
                <div class="text-danger mt-1">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="last_name" class="form-label">Last Name</label>
            <input 
                type="text" 
                name="last_name" 
                class="form-control @error('last_name') is-invalid @enderror" 
                value="{{ old('last_name') }}">
            @error('last_name')
                <div class="text-danger mt-1">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input 
                type="email" 
                name="email" 
                class="form-control @error('email') is-invalid @enderror" 
                value="{{ old('email') }}">
            @error('email')
                <div class="text-danger mt-1">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="dob" class="form-label">Date of Birth</label>
            <input 
                type="date" 
                name="dob" 
                class="form-control @error('dob') is-invalid @enderror" 
                value="{{ old('dob') }}">
            @error('dob')
                <div class="text-danger mt-1">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-success">Submit</button>
    </form>
@endsection
