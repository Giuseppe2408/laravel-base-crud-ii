@extends('template.base')

@section('mainContent')
    <h1>comic id</h1>
    <table>
        <thead>
            <tr>
                <th>campo</th>
                <th>valore</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comic->toArray() as $key => $value)
            <tr>
                <td>{{$key}}</td>
                <td>{{$value}}</td>
            </tr>             
            @endforeach
        </tbody>
    </table>
@endsection