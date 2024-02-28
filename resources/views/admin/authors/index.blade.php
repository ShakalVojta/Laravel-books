
@extends('layouts.main', [
    'current_page' => '/admin/authors'
])

@section('title', 'List of Authors')

@section('content')
    <h1>List of Authors</h1>

    <ul>
        @foreach ($authors as $author)
            <li>{{ $author->name }}</li>
        @endforeach
    </ul>
@endsection
