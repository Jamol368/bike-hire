<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
//            UserSeeder::class,
//            UserProfileSeeder::class,
//            ShopSeeder::class,
//            BikeCategorySeeder::class,
//            BikeSeeder::class,
//            RentalSeeder::class,
//            InvoiceSeeder::class,
//            TransactionSeeder::class,
//            BikeImageSeeder::class,
            UserCreditCardSeeder::class,
        ]);
    }
}
