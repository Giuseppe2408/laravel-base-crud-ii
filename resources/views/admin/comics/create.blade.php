@extends('template.base')

@section('mainContent')
    <h1>insert new comic</h1>
    <div class="container">
        <form action="{{ route('comics.store') }}" method="post">
            @csrf
            <div>
                <label for="title">title</label>
                <input type="text" name="title">
            </div>
            <div>    
                <label for="description">description</label>
                <input type="text" name="description">
            </div>
            <div>    
                <label for="thumb">thumb</label>
                <input type="text" name="thumb">
            </div>      
            <div>
                <label for="price">price</label>
                <input type="number" name="price">
            </div>   
            <div>
                <label for="series">series</label>
                <input type="text" name="series">
            </div> 
            <div>
                <label for="sale_date">sale_date</label>
                <input type="date" name="sale_date">
            </div>    
            <div>    
                <label for="type">type</label>
                <input type="text" name="type">
            </div>
            
            <button class="save">save</button>
        </form>
    </div>
    
@endsection