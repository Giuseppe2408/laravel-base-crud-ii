@extends('template.base')

@section('mainContent')
    <h1>Edit comic</h1>
    <div class="container">
        <form action="{{ route('comics.update', ['comic' => $comic]) }}" method="post">
            @method('PUT')
            @csrf
            <div>
                <label for="title">title</label>
                <input type="text" name="title" value="{{$comic->title}}">
            </div>
            <div>    
                <label for="description">description</label>
                <input type="text" name="description" value="{{$comic->description}}">
            </div>
            <div>    
                <label for="thumb">thumb</label>
                <input type="text" name="thumb" value="{{$comic->thumb}}">
            </div>      
            <div>
                <label for="price">price</label>
                <input type="number" name="price" value="{{$comic->price}}">
            </div>   
            <div>
                <label for="series">series</label>
                <input type="text" name="series" value="{{$comic->series}}">
            </div> 
            <div>
                <label for="sale_date">sale_date</label>
                <input type="date" name="sale_date" value="{{$comic->sale_date}}">
            </div>    
            <div>    
                <label for="type">type</label>
                <input type="text" name="type" value="{{$comic->type}}">
            </div>
            
            <button class="save btn btn-warning">Edit</button>
        </form>
    </div>
    
@endsection