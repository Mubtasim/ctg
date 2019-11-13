<?php

use App\Category;
use App\Detail;
use App\Location;
use Illuminate\Database\Seeder;

class DetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $categories = file("database/data/categories.txt", FILE_IGNORE_NEW_LINES);
        $json = File::get("database/data/markets.json");
        $data = json_decode($json);
        $category = Category::where('category_name', 'market')->first();
        foreach ($data as $obj) {
            $location = Location::where('location_name', $obj->location)->first();
            Detail::create(array(
                'category_id' => $category->id,
                'location_id' => $location->id,
                'name' => $obj->name,
                'slug' => str_slug($obj->name, "_"),
                'description' => $obj->description
            ));
        }
    }
}
