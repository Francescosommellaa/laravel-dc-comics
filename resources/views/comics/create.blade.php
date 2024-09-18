@extends('layouts.main')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Aggiungi un nuovo fumetto</h1>
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Titolo:</label>
                <input type="text" class="form-control" name="title" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione:</label>
                <textarea class="form-control" name="description" rows="3" required></textarea>
            </div>
            <div class="mb-3">
                <label for="author" class="form-label">Autore:</label>
                <input type="text" class="form-control" name="author" required>
            </div>
            <div class="mb-3">
                <label for="publisher" class="form-label">Casa Editrice:</label>
                <input type="text" class="form-control" name="publisher" required>
            </div>
            <div class="mb-3">
                <label for="release_date" class="form-label">Data di rilascio:</label>
                <input type="date" class="form-control" name="release_date" required>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo:</label>
                <input type="number" class="form-control" name="price" step="0.01" required>
            </div>
            <button type="submit" class="btn btn-primary">Salva</button>
        </form>
    </div>
@endsection
