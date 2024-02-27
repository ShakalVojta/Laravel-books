@extends('layouts.main', [
    'current_page' => 'register'
])

@section('content')
@if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
<form action="{{ route('register') }}" method="post">
 
    @csrf
 
    <input type="text" name="name" placeholder="name" value="{{ old('name') }}">
 
    <input type="email" name="email" placeholder="email" value="{{ old('email') }}">
 
    <input type="password" name="password" placeholder="password" value="">
 
    <input type="password" name="password_confirmation" placeholder="confirm-password" value="">
 
    <button>Register</button>
 
</form>
@endsection