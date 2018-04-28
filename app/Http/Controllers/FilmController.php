<?php

namespace App\Http\Controllers;

use App\Film;
use App\Http\Requests\YoutubeRequest;
use App\User;
use Illuminate\Support\Facades\Auth;

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
        $user = User::find(Auth::user())->first();
        if ($movieData === false) {
            return $user->films;
        }
        $film = new Film($movieData);
        $user->films()->save($film);
        return $user->films;
    }

    public function show()
    {
        //
    }
}
