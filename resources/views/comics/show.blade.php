@extends('layouts.main')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h1 class="card-title">{{ $comic->title }}</h1>
                    </div>
                    <div class="card-body">
                        <p class="card-text">{{ $comic->description }}</p>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><strong>Thumb:</strong> {{ $comic->thumb }}</li>
                            <li class="list-group-item"><strong>Serie:</strong> {{ $comic->series }}</li>
                            <li class="list-group-item"><strong>Tipologia:</strong> {{ $comic->type }}</li>
                            <li class="list-group-item"><strong>Prezzo:</strong> {{ $comic->price }} €</li>
                        </ul>
                    </div>
                    <div class="card-footer text-center">
                        <a href="{{ route('comics.index') }}" class="btn btn-secondary">Torna alla lista</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
