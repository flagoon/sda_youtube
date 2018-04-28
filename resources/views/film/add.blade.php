@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="/add/movie" method="post">
            @csrf
            <div class="form-group">
                <label for="film_link">Add youtube film link:</label>
                <input type="text" class="form-control" name="film_link" id="film_link">
            </div>
            <div class="form-group">
                <div class="container">
                    <div class="row">
                        @foreach($categories as $category)
                            <div class="checkbox col-md-4">
                                <label for="{{ $category->category_name }}">
                                    <input type="checkbox"
                                           id="{{ $category->category_name }}"
                                           value="{{ $category->id }}"
                                           name="category[]">
                                    {{ $category->category_name }}
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="form-group">
                <button class="btn btn-primary form-control" type="submit">Save link</button>
            </div>
        </form>
    </div>
    {{-- errors with validation --}}
    @include('errors.generic')
@endsection