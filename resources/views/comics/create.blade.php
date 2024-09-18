@extends('layouts.main')

@section('content')
<div class="container my-5">
    <h1>Inserimento nuovo fumetto</h1>

    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        <div class="mb-3">

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

          <label for="id" class="form-label">Titolo</label>
          <input type="text"
          class="form-control"
          name="title"
          id="title"
          aria-describedby="inserisci titolo comics"
          value="{{old('title')}}">

          <label for="id" class="form-label">Descrizione</label>
          <input type="text" class="form-control" name="description" id="description" aria-describedby="inserisci description comics" value="{{ old('description')}}">

          <label for="id" class="form-label">Immagine</label>
          <input type="text" class="form-control" name="thumb" id="thumb" aria-describedby="inserisci link thumb comics" value="{{old('thumb' )}}">

          <label for="id" class="form-label">Prezzo</label>
          <input type="number" class="form-control" name="price" id="price" aria-describedby="inserisci prezzo comics" value="{{old('price')}}">

          <label for="id" class="form-label">Serie</label>
          <input type="text" class="form-control" name="series" id="series" aria-describedby="inserisci serie comics" value="{{old('series' )}}">

          <label for="id" class="form-label">Data d'uscita</label>
          <input type="text" class="form-control" name="sale_date" id="sale_date" aria-describedby="inserisci ID comics" value="{{old('sale_date' )}}">

          <label for="id" class="form-label">Tipo</label>
          <input type="text" class="form-control" name="type" id="type" aria-describedby="inserisci ID comics" value="{{old('type')}}">

        </div>

        <button type="submit" class="btn btn-primary">Invia</button>
        <button type="submit" class="btn btn-danger">Reset</button>
      </form>

</div>

@endsection
