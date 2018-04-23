<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    public function categories()
    {
        $this->belongsToMany(Category::class);
    }

    public function users()
    {
        $this->belongsToMany(User::class);
    }
}
