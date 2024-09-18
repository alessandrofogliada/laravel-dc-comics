@extends('layouts.main')

@section('content')
<div class="container my-5">
    <h1>Modifica : {{ $comic->title}} </h1>

    @if ($errors->any())
                <div class="alert alert-danger" role="alert">
                        <ul>
                            @foreach ($errors->all() as $error )
                            <li>
                                {{ $error }}
                            </li>
                            @endforeach
                        </ul>
                </div>
            @endif

    <form action="{{ route('comics.update' , $comic) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">

          <label for="id" class="form-label">Titolo</label>
          <input value=" {{ $comic->title}}" type="text" class="form-control" name="title" id="title" aria-describedby="inserisci titolo comics">

          <label for="id" class="form-label">Descrizione</label>
          <input value=" {{ $comic->description}}" type="text" class="form-control" name="description" id="description" aria-describedby="inserisci description comics">

          <label for="id" class="form-label">Immagine</label>
          <input value=" {{ $comic->thumb}}" type="text" class="form-control" name="thumb" id="thumb" aria-describedby="inserisci link thumb comics">

          <label for="id" class="form-label">Prezzo</label>
          <input value=" {{ $comic->price}}" type="number" class="form-control" name="price" id="price" aria-describedby="inserisci prezzo comics">

          <label for="id" class="form-label">Serie</label>
          <input value=" {{ $comic->series}}" type="text" class="form-control" name="series" id="series" aria-describedby="inserisci serie comics">

          <label for="id" class="form-label">Data d'uscita</label>
          <input value=" {{ $comic->sale_date}}" type="text" class="form-control" name="sale_date" id="sale_date" aria-describedby="inserisci ID comics">

          <label for="id" class="form-label">Tipo</label>
          <input value=" {{ $comic->type}}" type="text" class="form-control" name="type" id="type" aria-describedby="inserisci ID comics">

        </div>

        <button type="submit" class="btn btn-primary">Aggiorna</button>
        <button type="submit" class="btn btn-danger">Reset</button>
      </form>

</div>

@endsection
