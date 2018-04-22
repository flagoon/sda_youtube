@extends('layouts.app')
@section('content')
<div class="container">
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
