<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Comic;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //elenco
        $comics = Comic::all();
        return view('comics.index' , compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //form di creazione
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dove atterra il form di creazione
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //pagina del dettaglio
        $comic = Comic::find($id);

        return view('comic.show' , compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //file di modifica
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //atterraggio form di modifica
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //eliminazione
    }
}
