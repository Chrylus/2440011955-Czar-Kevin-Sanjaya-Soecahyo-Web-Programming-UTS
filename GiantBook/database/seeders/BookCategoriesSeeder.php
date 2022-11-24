<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('en_EN');
        for ($i = 1; $i <= 10; $i++) {
            DB::table('book_category')->insert ([
                'book_id' => $faker->numberBetween(1, 10),
                'category_id' => $faker->numberBetween(1, 3)
            ]);
        }
    }
}
