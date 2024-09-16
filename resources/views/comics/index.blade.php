@extends('layouts.main')

@section('content')
    <h1>Tutti i Fumetti</h1>

    @if ($comics->isEmpty())
        <p>Nessun fumetto disponibile</p>
    @else
        <div class="row">
            @foreach ($comics as $comic)
                <div class="col-md-4 d-flex align-items-stretch">
                    <div class="card mb-4">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $comic->title }}</h5>
                            <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary mt-auto">Dettagli</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
@endsection
