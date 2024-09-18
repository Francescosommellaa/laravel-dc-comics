@extends('layouts.main')

@section('content')
    <div class="container my-5">
        <h1 class="text-center mb-4">Modifica Fumetto</h1>

        <form action="{{ route('comics.update', $comic->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                        name="title" value="{{ $comic->title }}" required>
                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" id="description" name="description" rows="4">{{ old('description', $comic->description) }}</textarea>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="thumb" class="form-label">Thumb</label>
                    <input class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb"
                        value="{{ $comic->thumb }}" required>
                    @error('thumb')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <input class="form-control @error('price') is-invalid @enderror" id="price" name="price"
                        step="0.01" value="{{ $comic->price }}" required>
                    @error('price')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-3">
                    <label for="series" class="form-label">Serie</label>
                    <input class="form-control @error('series') is-invalid @enderror" id="series" name="series"
                        step="0.01" value="{{ $comic->series }}" required>
                    @error('series')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-3">
                    <label for="sale_date" class="form-label">Data di rilascio</label>
                    <input class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date"
                        value="{{ $comic->sale_date }}" required>
                    @error('sale_date')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-3">
                    <label for="type" class="form-label">Tipo</label>
                    <input class="form-control @error('type') is-invalid @enderror" id="type" name="type"
                        step="0.01" value="{{ $comic->type }}" required>
                    @error('type')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary px-5">Salva modifiche</button>
            </div>
        </form>
    </div>
@endsection
