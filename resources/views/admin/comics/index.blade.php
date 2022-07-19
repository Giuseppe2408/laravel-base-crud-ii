@extends('template.base');

@section('mainContent')
    @foreach ($comics as $comic)
        {{$comic->title}}
    @endforeach
@endsection