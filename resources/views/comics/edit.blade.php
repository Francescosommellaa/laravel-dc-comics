@extends('layouts.main')

@section('content')
    <div class="container my-5">
        <h1 class="text-center mb-4">Modifica Fumetto</h1>

        <form action="{{ route('comics.update', $comic->id) }}" method="POST">
            @csrf
            @method('PUT') <!-- Indica che questo form è per una richiesta PUT -->

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" class="form-control" id="title" name="title"
                        value="{{ old('title', $comic->title) }}" required>
                </div>
                <div class="col-md-6">
                    <label for="author" class="form-label">Autore</label>
                    <input type="text" class="form-control" id="author" name="author"
                        value="{{ old('author', $comic->author) }}" required>
                </div>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" id="description" name="description" rows="4" required>{{ old('description', $comic->description) }}</textarea>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="publisher" class="form-label">Casa Editrice</label>
                    <input type="text" class="form-control" id="publisher" name="publisher"
                        value="{{ old('publisher', $comic->publisher) }}" required>
                </div>
                <div class="col-md-3">
                    <label for="release_date" class="form-label">Data di rilascio</label>
                    <input type="date" class="form-control" id="release_date" name="release_date"
                        value="{{ old('release_date', $comic->release_date) }}" required>
                </div>
                <div class="col-md-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <input type="number" class="form-control" id="price" name="price" step="0.01"
                        value="{{ old('price', $comic->price) }}" required>
                </div>
            </div>

            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary px-5">Salva modifiche</button>
            </div>
        </form>
    </div>
@endsection
