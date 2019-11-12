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
        $categories = file("database/data/categories.txt", FILE_IGNORE_NEW_LINES);
        foreach ($categories as $category) {
            Category::create(array(
                'category_name' => $category
            ));
        }
    }
}
