@extends('layouts.main', [
    'current_page' => 'about-us'
])
@section('content')
<h1>About us</h1>
<p>We are the best!</p>
<div id="latest-books"></div>
@vite('resources/js/latest-books.js')
@endsection





