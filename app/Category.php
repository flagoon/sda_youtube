<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = array('category_name');

    public function films()
    {
        $this->belongsToMany(Film::class);
    }

    static public function showAllCategories()
    {
        return Category::orderBy('category_name')->get();
    }
}
