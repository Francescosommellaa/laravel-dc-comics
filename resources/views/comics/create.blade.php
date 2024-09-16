@extends('layouts.main')

@section('content')
    <h1>Aggiungi un nuovo fumetto</h1>
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        <label for="title">Titolo:</label>
        <input type="text" name="title" required>

        <label for="description">Descrizione:</label>
        <textarea name="description" required></textarea>

        <label for="author">Autore:</label>
        <input type="text" name="author" required>

        <label for="publisher">Casa Editrice:</label>
        <input type="text" name="publisher" required>

        <label for="release_date">Data di rilascio:</label>
        <input type="date" name="release_date" required>

        <label for="price">Prezzo:</label>
        <input type="number" name="price" step="0.01" required>

        <button type="submit">Salva</button>
    </form>
@endsection
