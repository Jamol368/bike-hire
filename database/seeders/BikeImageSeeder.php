<?php

namespace Database\Seeders;

use App\Models\BikeImage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class BikeImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Storage::deleteDirectory('public/bikes');
        Storage::makeDirectory('public/bikes');

        BikeImage::factory(300)
            ->create();
    }
}
