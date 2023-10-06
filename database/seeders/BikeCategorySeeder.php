<?php

namespace Database\Seeders;

use App\Models\BikeCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class BikeCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Storage::deleteDirectory('public/bike_categories');
        Storage::makeDirectory('public/bike_categories');

        BikeCategory::factory(10)
            ->create();
    }
}
