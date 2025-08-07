@extends('admin')

@section('content')
    <h1>Professor Details</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $professor->name }}</h5>
            <p class="text-muted">Created: {{ $professor->created_at->format('Y-m-d') }}</p>
            <a href="{{ route('professors.index') }}" class="btn btn-secondary">Back</a>
        </div>
    </div>
@endsection
