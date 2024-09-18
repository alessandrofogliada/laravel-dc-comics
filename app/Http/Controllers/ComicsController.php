<?php

namespace App\Http\Controllers;

use App\Functions\Helper;
use Illuminate\Http\Request;
use App\Models\Comic;
use Illuminate\Support\Str;
use App\Http\Requests\ComicRequest;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //elenco
        $comics = Comic::orderBy('id' , 'desc')->get();
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

           // se la validazione non viene in autorizzata si viene reinidirazzati nella sessione con gli errori

           $request->validate([
            'title'=>'required|min:3|max:255',
            'description'=>'required|min:3|max:255',
            'thumb'=>'required|min:1|max:255',
            'price'=>'required|min:1',
            'series'=>'required|min:1|max:255',
            'sale_date'=>'required|min:1|max:255',
            'type'=>'required|min:1|max:255',
        ], //customiziamo gli errori in italiano
        ['title.required'=>'il campo deve avere almeno 3 caratteri',
            'description.required'=>'il campo deve avere almeno 3 caratteri',
            'thumb.required'=>'il campo deve avere almeno 1 caratteri',
            'price.required'=>'il campo deve avere almeno 1 caratteri',
            'series.required'=>'il campo deve avere almeno 3 caratteri',
            'sale_date.required'=>'il campo deve avere almeno 3 caratter',
            'type.required'=>'il campo deve avere almeno 3 caratteri',
    ]);

        $data = $request->all();
        $data['slug']= Helper::generateSlug($data['title'] , Comic::class);
        $new_comic = new Comic();
        $new_comic->fill($data);
        $new_comic->save();

        // $new_comic->title = $data['title'];
        // $new_comic->description = $data['description'];
        // $new_comic->thumb= $data['thumb'];
        // $new_comic->price= $data['price'];
        // $new_comic->series= $data['series'];
        // $new_comic->sale_date= $data['sale_date'];
        // $new_comic->type= $data['type'];


        return redirect()->route('comics.show' , $new_comic->id);
   }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //pagina del dettaglio

        $comic = Comic::find($id);
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //file di modifica
        $comic = Comic::find($id);
        return view('comics.edit' , compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ComicRequest $request, Comic $comic)
    {
        //atterraggio form di modifica
        $data = $request->all();

        // $comic = Comic::find($id);

        $comic->update($data);

        return redirect()->route('comics.show' , $comic);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //eliminazione
        $comic = Comic::find($id);

        $comic->delete();

        return redirect()->route('comics.index');
    }
}
