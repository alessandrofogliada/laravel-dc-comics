@extends('layouts.main')

@section('content')
<div class="container my-5">
    <h1>Inserimento nuovo fumetto</h1>

    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        <div class="mb-3">

            {{-- @if ($errors->any())
                <div class="alert alert-danger" role="alert">
                        <ul>
                            @foreach ($errors->all() as $error )
                            <li>
                                {{ $error }}
                            </li>
                            @endforeach
                        </ul>
                </div>
            @endif --}}

          <label for="id" class="form-label">Titolo</label>
          <input type="text"
          class="form-control @error('title') is-invalid @enderror"
          name="title"
          id="title"
          aria-describedby="inserisci titolo comics"
          value="{{old('title')}}" required>
          @error('title')
          <small class="text-danger">Il campo deve avere almeno 3 caratteri</small> <br>
          @enderror


          <label for="id" class="form-label">Descrizione</label>
          <input type="text" class="form-control @error('description') is-invalid @enderror" name="description" id="description" aria-describedby="inserisci description comics" value="{{ old('description')}}">
          @error('description')
            <small class="text-danger">Il campo deve avere almeno 3 caratteri</small> <br>
          @enderror

          <label for="id" class="form-label">Immagine</label>
          <input type="text" class="form-control @error('thumb') is-invalid @enderror" name="thumb" id="thumb" aria-describedby="inserisci link thumb comics" value="{{old('thumb' )}}">
           @error('thumb')
            <small class="text-danger">Il campo deve avere almeno 1 caratteri</small> <br>
          @enderror

          <label for="id" class="form-label">Prezzo</label>
          <input type="text" class="form-control  @error('price') is-invalid @enderror" name="price" id="price" aria-describedby="inserisci prezzo comics" value="{{old('price')}}">
             @error('price')
            <small class="text-danger">Il campo deve avere almeno 1 caratteri</small> <br>
           @enderror

          <label for="id" class="form-label">Serie</label>
          <input type="text" class="form-control @error('series') is-invalid @enderror" name="series" id="series" aria-describedby="inserisci serie comics" value="{{old('series' )}}">
             @error('series')
            <small class="text-danger">Il campo deve avere almeno 3 caratteri</small> <br>
           @enderror

          <label for="id" class="form-label">Data d'uscita</label>
          <input type="text" class="form-control @error('sale_date') is-invalid @enderror" name="sale_date" id="sale_date" aria-describedby="inserisci ID comics" value="{{old('sale_date' )}}">
            @error('sale_date')
            <small class="text-danger">Il campo deve avere almeno 3 caratteri</small> <br>
           @enderror

          <label for="id" class="form-label">Tipo</label>
          <input type="text" class="form-control @error('type') is-invalid @enderror" name="type" id="type" aria-describedby="inserisci ID comics" value="{{old('type')}}">
           @error('type')
            <small class="text-danger">Il campo deve avere almeno 3 caratteri</small> <br>
           @enderror

        </div>

        <button type="submit" class="btn btn-primary">Invia</button>
        <a href="{{ route('comics.create') }}" type="submit" class="btn btn-danger">Reset</a>
      </form>

</div>

@endsection
