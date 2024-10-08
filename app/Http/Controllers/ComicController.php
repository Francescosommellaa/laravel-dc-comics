<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreComicRequest;
use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreComicRequest $request)
    {
        $validated = $request->validated();

        $comic = Comic::create($validated);

        return redirect()->route('comics.show', ['comic' => $comic->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $comic = Comic::find($id);
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $comic = Comic::find($id);
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreComicRequest $request, string $id)
    {
        $validated = $request->validated();

        $comic = Comic::find($id);

        // Aggiorna i dati del comic con i dati validati
        $comic->update($validated);

        return redirect()->route('comics.show', ['comic' => $comic->id]);
    }

    public function messages(): array
    {
        return [
            'title.min' => 'il titolo deve essere di almeno 3 caratteri',
            'price.numeric' => 'Il prezzo deve essere un numero',
        ];
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {


        $comic = Comic::find($id);
        $comic->delete();

        return redirect()->route('comics.index', $comic->id)->with('success', 'Fumetto eliminato con successo');
    }
}
