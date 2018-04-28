<?php

namespace App\Http\Controllers;

use App\Category;
use App\Film;
use App\Http\Requests\YoutubeRequest;
use App\User;
use Illuminate\Support\Facades\Auth;

class FilmController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('film.add', compact('categories'));
    }

    public function store(YoutubeRequest $request)
    {
        $validated = $request->validated();
        $movieData = Film::saveClip($validated['film_link']);
        $categories = $request->input('category');
        $categoryInstances = [];
        foreach($categories as $category) {
            $categoryInstances[] = new Category(['category_name' => $category]);
        }
        $user = User::find(Auth::user())->first();
        if ($movieData === false) {
            return $user->films;
        }
        $film = new Film($movieData);
        $user->films()->save($film);
        $film->categories()->attach($categories);
        return $user->films;
    }

    public function show()
    {
        //
    }
}
