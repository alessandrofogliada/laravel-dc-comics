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
                    <td>
                        <a href="{{route ('comics.show' , $comic) }}" class="btn btn-success" title="Info"><i class="fa-solid fa-circle-info"></i></a>
                        <a href="{{route ('comics.edit' , $comic) }}" class="btn btn-warning" title="Modifica"><i class="fa-solid fa-wrench"></i></a>

                        <form action="{{route ('comics.destroy' , $comic) }}" method="POST" class="d-inline" onsubmit="return confirm('sei socuro di voler eliminare il fumetto {{ $comic->title}}')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" title="Elimina"><i class="fa-solid fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
     </table>

</div>

@endsection
