@extends('layouts.master')

@section('judul')
    Edit Cast Member
@endsection

@section('konten')
    <h2>Edit Cast Member</h2>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="/cast/{{ $cast->id }}" method="POST">
        @csrf {{-- CSRF token untuk keamanan form --}}
        @method('POST') {{-- Spoofing method POST karena HTML forms tidak mendukung PUT/PATCH --}}
        <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" id="name" name="name" required maxlength="255" class="form-control" value="{{ $cast->name }}">
        </div>
        <div class="mb-3">
            <label for="age" class="form-label">Age:</label>
            <input type="number" id="age" name="age" required class="form-control" value="{{ $cast->age }}">
        </div>
        <div class="mb-3">
            <label for="bio" class="form-label">Bio:</label>
            <textarea id="bio" name="bio" required class="form-control">{{ $cast->bio }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update Cast Member</button>
    </form>
@endsection