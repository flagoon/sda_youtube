<?php

namespace App\Http\Controllers;

use App\Film;
use App\Http\Requests\YoutubeRequest;

class FilmController extends Controller
{
    public function index()
    {
        return view('film.add');
    }

    public function store(YoutubeRequest $request)
    {
        $validated = $request->validated();
        return Film::saveClip($validated['film_link']);
    }

    public function show()
    {
        //
    }
}
