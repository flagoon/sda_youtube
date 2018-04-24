@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Select user to delete him.</h1>
    @foreach($users as $user)
        <div class="row">
        @foreach($user->users as $singleUser)
            <a class="m-1" href={{ route('deleteUser', ['id' => $singleUser->id]) }}>
                <button class="btn btn-success">{{ $singleUser->name }} - <i class="fa fa-trash"></i></button>
            </a>
        @endforeach
        </div>
    @endforeach
</div>
@endsection
