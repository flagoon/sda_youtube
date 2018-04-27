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
        $movieData = Film::saveClip($validated['film_link']);
        Film::create([
            'youtube_id' => $movieData['film_id'],
            'film_title' => $movieData['title'],
            'film_publication_date' => $movieData['date'],
            'film_author' => $movieData['author']
        ]);
        return Film::all();
    }

    public function show()
    {
        //
    }
}
