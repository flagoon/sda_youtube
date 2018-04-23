<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category();
        $category->category_name = 'action';
        $category->save();
        $category = new Category();
        $category->category_name = 'horror';
        $category->save();
        $category = new Category();
        $category->category_name = 'romanse';
        $category->save();
        $category = new Category();
        $category->category_name = 'comedy';
        $category->save();
        $category = new Category();
        $category->category_name = 'anime';
        $category->save();

    }
}
