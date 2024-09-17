@extends('layouts.main')

@section('content')
    <h1>Modifica Fumetto</h1>

    <form action="{{ route('comics.update', $comic->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- Indica che questo form è per una richiesta PUT -->

        <label for="title">Titolo:</label>
        <input type="text" name="title" value="{{ old('title', $comic->title) }}" required>

        <label for="description">Descrizione:</label>
        <textarea name="description" required>{{ old('description', $comic->description) }}</textarea>

        <label for="author">Autore:</label>
        <input type="text" name="author" value="{{ old('author', $comic->author) }}" required>

        <label for="publisher">Casa Editrice:</label>
        <input type="text" name="publisher" value="{{ old('publisher', $comic->publisher) }}" required>

        <label for="release_date">Data di rilascio:</label>
        <input type="date" name="release_date" value="{{ old('release_date', $comic->release_date) }}" required>

        <label for="price">Prezzo:</label>
        <input type="number" name="price" step="0.01" value="{{ old('price', $comic->price) }}" required>

        <button type="submit">Salva modifiche</button>
    </form>
@endsection
