<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $request->user()->authorizeRoles('admin');

        return view('category.add');
    }

    public function handleSubmit(Request $request)
    {
        dd($request->category_name);
    }
}
