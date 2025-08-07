@extends('admin')

@section('content')
    <h1>Edit Professor</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
        </div>
    @endif

    <form action="{{ route('professors.update', $professor) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $professor->name) }}">
        </div>
        <button class="btn btn-primary">Update</button>
        <a href="{{ route('professors.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
