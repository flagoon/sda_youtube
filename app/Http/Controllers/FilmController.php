<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function index()
    {
        return view('film.add');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'film_link' => ['required', 'regex:/www.youtube.com/']
        ]);

    }

    public function show()
    {
        //
    }
}
