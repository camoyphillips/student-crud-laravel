@extends('admin')

@section('content')
    <h1 class="mb-4">Delete Professor</h1>

    <div class="alert alert-warning">
        <strong>Warning!</strong> You are about to permanently delete this professor.
    </div>

    <div class="card mb-3">
        <div class="card-body">
            <h5 class="card-title">{{ $professor->name }}</h5>
            <p class="text-muted">ID: {{ $professor->id }}</p>
        </div>
    </div>

    <form action="{{ route('professors.destroy', $professor) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Yes, Delete</button>
        <a href="{{ route('professors.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
