@extends('layouts.admin')

@section('content')

<div id="root"></div>

@viteReactRefresh
@vite('resources/js/user-list/main.jsx')


@endsection