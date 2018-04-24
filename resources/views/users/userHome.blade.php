@extends('layouts.app')

@section('content')
    <div class="container">
        <a href={{ route('addMovies') }}><button class="btn btn-default">Add movie</button></a>
        <a href={{ route('showMovies') }}><button class="btn btn-default">Show movies</button></a>
    </div>

@endsection