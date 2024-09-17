@extends('layouts.main')

@section('content')
<div class="container my-5">
    <h1>Inserimento nuovo fumetto</h1>

    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="id" class="form-label">ID</label>
          <input type="number" class="form-control" name="title" id="title" aria-describedby="inserisci ID comics">

        </div>
        <div class="mb-3">
        <button type="submit" class="btn btn-primary">Invia</button>
        <button type="submit" class="btn btn-danger">Reset</button>
      </form>

</div>

@endsection
