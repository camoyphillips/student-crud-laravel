@extends('admin')

@section('content')
    <div class="d-flex justify-content-between mb-3">
        <h1>Professors</h1>
        <a href="{{ route('professors.create') }}" class="btn btn-primary">Add Professor</a>
    </div>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th width="200">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($professors as $professor)
                <tr>
                    <td>{{ $professor->name }}</td>
                    <td>
                        <a href="{{ route('professors.show', $professor) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('professors.edit', $professor) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('professors.destroy', $professor) }}" method="POST" class="d-inline"
                            onsubmit="return confirm('Are you sure?')">
                            @csrf @method('DELETE')
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="2">No professors found.</td></tr>
            @endforelse
        </tbody>
    </table>
@endsection
