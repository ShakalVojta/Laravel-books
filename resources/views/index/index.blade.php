@extends('layouts/main', [
    'current_page' => 'home'
])
@section('content')
    <h1>Welcome 

        
        @auth
            {{ auth()->user()->name }}
        @endauth
        
        to the Best Online Bookstore</h1>
    <p>We are the best online bookstore ever...</p>

    <div class="container">
        <h1>Crime Books</h1>

        <div class="book-list">
            @foreach ($crime_books as $book)
                <div class="book">
                    <h2>{{ $book->title }}</h2>
                    <p>Authors: {{ $book->authors->pluck('name')->join(', ') }}</p>
                </div>
            @endforeach
        </div>
    </div>
@endsection