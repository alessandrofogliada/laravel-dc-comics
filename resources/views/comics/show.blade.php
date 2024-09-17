@extends('layouts.main')

@section('content')
<div class="container my-5">
    <a class="btn btn-danger" href="{{ route('comics.index') }}"> << Torna alla Collezione</a>
    <h1>Descrizione : {{ $comic->title}}</h1>
    <img class="thumbnail" src="{{ $comic->thumb}}" alt="{{ $comic->title}}">
    <ul>
        <li>ID : {{ $comic->id}}</li>
        <li>title : {{ $comic->title}}</li>
        <li>price : {{ $comic->price}}</li>
        <li>series : {{ $comic->series}}</li>
        <li>sale_date : {{ $comic->sale_date}}</li>
        <li>type : {{ $comic->type}}</li>
        <li>description : {{ $comic->description}}</li>
    </ul>
</div>

@endsection
