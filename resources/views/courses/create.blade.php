@extends('admin')

@section('content')
    <h1>Create Course</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li class="text-danger">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('courses.store') }}" method="POST">
        @csrf

        {{-- Course Name --}}
        <div class="mb-3">
            <label for="name" class="form-label">Course Name</label>
            <input 
                type="text" 
                name="name" 
                class="form-control @error('name') is-invalid @enderror"
                value="{{ old('name') }}">
            @error('name')
                <div class="text-danger mt-1">{{ $message }}</div>
            @enderror
        </div>

        {{-- Description --}}
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea 
                name="description" 
                class="form-control @error('description') is-invalid @enderror"
                rows="4">{{ old('description') }}</textarea>
            @error('description')
                <div class="text-danger mt-1">{{ $message }}</div>
            @enderror
        </div>

        {{-- Assign Professor --}}
        <div class="mb-3">
            <label for="professor_id" class="form-label">Assign Professor</label>
            <select name="professor_id" class="form-select @error('professor_id') is-invalid @enderror">
                <option value="">-- Select Professor --</option>
                @foreach ($professors as $professor)
                    <option value="{{ $professor->id }}" {{ old('professor_id') == $professor->id ? 'selected' : '' }}>
                        {{ $professor->name }}
                    </option>
                @endforeach
            </select>
            @error('professor_id')
                <div class="text-danger mt-1">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-success">Create</button>
        <a href="{{ route('courses.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
