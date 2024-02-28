@extends('layouts.main', [
    'current_page' => '/admin/authors/create'
])

@section('title', 'Create Author')

@section('content')
    <h1>Create Author</h1>

    <form action="{{ url('/admin/authors') }}" method="post">
        @csrf

        <label for="name">Author Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="bio">Author Biography:</label>
        <textarea id="bio" name="bio" rows="4" required></textarea>

        <button type="submit">Create Author</button>
    </form>
@endsection