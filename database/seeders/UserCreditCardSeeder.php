<?php

namespace Database\Seeders;

use App\Models\UserCreditCard;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserCreditCardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserCreditCard::factory(20)
            ->create();
    }
}
