@extends('layouts.app')

@section('content')
    <div class="container">
        <form action={{ route('handleSubmit') }} method="POST">
            @csrf
            <div class="form-group">
                <label for="category_name">Category name</label>
                <input type="text" class="form-control" id="category_name" placeholder="Add category" name="category_name">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection