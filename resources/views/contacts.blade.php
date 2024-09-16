@extends('layouts.main')

@section('title', 'Contact Us')

@section('content')
    <h1>Contact Us</h1>
    <p>For inquiries, please contact us at <a href="mailto:{{ $email }}">{{ $email }}</a>.</p>
@endsection
