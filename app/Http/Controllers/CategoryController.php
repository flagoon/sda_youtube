<?php

namespace App\Http\Controllers;

use App\Category;
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
        return view('category.add', ['categories' => Category::showAllCategories()]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'category_name' => 'required|min:3|unique:categories,category_name'
        ]);

        Category::create([
            'category_name' => request('category_name')
        ]);
        return view('category.add', ['categories' => Category::showAllCategories()]);
    }

    public function showFilmsByCategory()
    {
        return view('category.showFilmsByCategory');
    }
}
