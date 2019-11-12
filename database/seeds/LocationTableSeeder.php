<?php

use App\Location;
use Illuminate\Database\Seeder;

class LocationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $locations = file("database/data/addresses.txt", FILE_IGNORE_NEW_LINES);
        foreach ($locations as $location) {
            Location::create(array(
                'location_name' => $location
            ));
        }
    }
}
