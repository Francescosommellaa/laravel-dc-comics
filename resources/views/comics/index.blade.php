@extends('layouts.main')

@section('content')
    <h1>Tutti i Fumetti</h1>

    @if ($comics->isEmpty())
        <p>Nessun fumetto disponibile</p>
    @else
        <ul>
            @foreach ($comics as $comic)
                <li><a href="{{ route('comics.show', $comic->id) }}">{{ $comic->title }}</a></li>
            @endforeach
        </ul>
    @endif
@endsection
