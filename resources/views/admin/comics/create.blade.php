@extends('template.base')

@section('mainContent')
    <h1>insert new comic</h1>
    <form action="{{ route('comics.store') }}" method="post">
        @csrf
        <div>
            <label for="">title</label>
            <input type="text" name="title">
            <label for="">description</label>
            <input type="text" name="description">
            <label for="">thumb</label>
            <input type="text" name="thumb">
        </div>
        
        <div style="margin-top: 100px">
            <label for="">price</label>
            <input type="text" name="price">
            <label for="">series</label>
            <input type="text" name="series">
            <label for="">sale_date</label>
            <input type="text" name="sale_date">
            <label for="">type</label>
            <input type="text" name="type">
        </div>
        
        <button style="margin: 50px; width: 400px ">save</button>
    </form>
@endsection