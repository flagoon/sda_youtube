@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Welcome Admin!</h1>
    </div>
    <div class="container">
        <a href={{ route('showUsers') }}>
            <button class="btn btn-success">Show all users</button>
        </a>
        <a href={{ route('addCategory') }}>
            <button class="btn btn-success">Manage categories</button>
        </a>
    </div>
@endsection