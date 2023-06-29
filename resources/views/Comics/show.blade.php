@extends('layouts.base')

@section('contents')
    <h1 class="text-center">
        {{$comic->series}}
    </h1>
    <p>{{$comic->description}}</p>
@endsection