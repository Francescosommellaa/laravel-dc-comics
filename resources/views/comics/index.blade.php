@extends('layouts.main')

@section('content')
    <div class="container my-4">
        <h1 class="text-center mb-4">Tutti i Fumetti</h1>

        @if ($comics->isEmpty())
            <p class="text-center">Nessun fumetto disponibile</p>
        @else
            <div class="row">
                @foreach ($comics as $comic)
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow-sm">
                            <!-- Immagine segnaposto -->
                            <img src="https://via.placeholder.com/350x150" class="card-img-top" alt="{{ $comic->title }}">

                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">{{ $comic->title }}</h5>
                                <p class="card-text">{{ $comic->description, 80 }}</p>

                                <div class="mt-auto">
                                    <a href="{{ route('comics.edit', $comic->id) }}"
                                        class="btn btn-warning btn-sm mb-2">Modifica</a>
                                    <a href="{{ route('comics.show', $comic->id) }}"
                                        class="btn btn-primary btn-sm mb-2">Dettagli</a>
                                    <form action="{{ route('comics.destroy', $comic->id) }}" method="POST"
                                        style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm mb-2"
                                            onclick="return confirm('Sei sicuro di voler eliminare questo fumetto?')">Elimina</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection
