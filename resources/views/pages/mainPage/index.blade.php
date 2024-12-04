@extends('layouts.master')

@section('content')

    <h1 class="text-red-600">Home</h1>
    <br>
    <br>
    <a href="{{ url('/panel') }}">Admin panel</a>
    <br>
    <br>
    <a href="{{ url('/register') }}">Create user</a>
    <br>
    <br>
    <a href="{{ url('/login') }}">Login</a>

@endsection
