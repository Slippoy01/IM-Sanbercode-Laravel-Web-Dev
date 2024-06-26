@extends('layouts.master')

@section('judul')
    Cast Members
@endsection

@section('konten')
    <h2>Cast Members</h2>
    <a href="/cast/create" class="btn btn-primary mb-3">Add</a>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($casts as $cast)
            <tr>
                <td>{{ $cast->name }}</td>
                <td>{{ $cast->age }}</td>
                <td>
                    <a href="/cast/{{ $cast->id }}" class="btn btn-sm btn-secondary" style="margin-right: 5px;">Detail</a>
                    <a href="/cast/{{ $cast->id }}/edit" class="btn btn-sm btn-info" style="margin-right: 5px;">Edit</a>
                    <form action="/cast/{{ $cast->id }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this item?');" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="3">No data shown, please add.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
@endsection
