@extends('layouts.main')

@section('title', 'About Page')

@section('content')
    <h1>About Us</h1>
    <p>{{ $info }}</p>
    <p>We are a Laravel-based application focused on scalability.</p>
@endsection
