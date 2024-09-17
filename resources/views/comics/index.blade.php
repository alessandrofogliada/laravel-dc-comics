@extends('layouts.main')

@section('content')
<div class="container my-5">
    <h1>Elenco Comics</h1>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Titolo</th>
            <th scope="col">Image</th>
            <th scope="col">Prezzo</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
                <tr>
                    <td>{{$comic->id}}</td>
                    <td> <img class="thumbnail" src="{{$comic->thumb}}" alt="{{$comic->title}}"> </td>
                    <td>{{$comic->title}}</td>
                    <td>{{$comic->price}}</td>
                    <td><a href="{{route ('comics.show' , $comic) }}" class="btn btn-warning"><i class="fa-solid fa-circle-info"></i></a></td>
                </tr>
            @endforeach
        </tbody>
     </table>

</div>

@endsection
