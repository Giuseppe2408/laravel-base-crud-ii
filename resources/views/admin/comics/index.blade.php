@extends('template.base')

@section('mainContent')
    <div class="container">
        <div class="row">
            @foreach ($comics as $comic)
                <div class="col-3" id="card-comic">
                    <h1>{{$comic->title}}</h1>
                    <p><strong>description: </strong>{{$comic->description}}</p>
                    <span><strong>Price:</strong>{{$comic->price}}</span> <br>
                    <span><strong>Series:</strong>{{$comic->series}}</span>
                    <span><strong>Date:</strong>{{$comic->date}}</span>
                    <div class="justify-content-center mt-3">
                        <a href="{{route('comics.show', ['comic' => $comic])}}">
                            <button class="btn btn-primary">View</button>
                        </a>
                        <a class="mx-2" href="{{route('comics.edit', ['comic' => $comic])}}">
                            <button class="btn btn-warning">Edit</button>
                        </a>
                        <form action="{{route('comics.destroy', ['comic' => $comic])}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                    
                </div>
            @endforeach
        </div>
    </div>
    
@endsection