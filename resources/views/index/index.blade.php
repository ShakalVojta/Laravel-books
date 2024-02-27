@extends('layouts/main', [
    'current_page' => 'home'
])
@section('content')
    <h1>Welcome to the Best Online Bookstore</h1>
    <p>We are the best online bookstore ever...</p>

    <div id="latest-books"></div>
    @vite('resources/js/latest-books.js')
@endsection