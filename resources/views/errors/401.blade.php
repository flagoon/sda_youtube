@extends('layouts.app')
@section('content')
<div class="container alert alert-danger">
    <p>You don't have permission to see this page</p>
    <a href={{ url('/') }}><button class="btn btn-primary">Back</button></a>
</div>
@endsection