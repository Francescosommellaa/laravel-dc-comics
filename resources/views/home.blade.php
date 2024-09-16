@extends('layouts.main')

@section('title', 'Home Page')

@section('content')
    <h1>{{ $message }}</h1>
    <p>Puoi modificare i contenuti dinamicamente dal pagecontroller che si trova in http/controllers</p>
@endsection
