@extends('layouts.main')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4 text-center">Aggiungi un nuovo fumetto</h1>
        <form action="{{ route('comics.store') }}" method="POST" class="bg-light p-5 rounded shadow-sm">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Titolo:</label>
                <input class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}"
                    required>
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione:</label>
                <textarea class="form-control" name="description" rows="3">{{ old('description') }}</textarea>
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Thumb</label>
                <input class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb"
                    value="{{ old('thumb') }}" required>
                @error('thumb')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input class="form-control @error('price') is-invalid @enderror" id="price" name="price"
                    step="0.01" value="{{ old('price') }}" required>
                @error('price')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input class="form-control @error('series') is-invalid @enderror" id="series" name="series"
                    value="{{ old('series') }}" required>
                @error('series')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Data di rilascio</label>
                <input type="date" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date"
                    name="sale_date" value="{{ old('sale_date') }}" required>
                @error('sale_date')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Tipo</label>
                <input class="form-control @error('type') is-invalid @enderror" id="type" name="type"
                    value="{{ old('type') }}" required>
                @error('type')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary w-100">Salva Fumetto</button>
        </form>
    </div>
@endsection
