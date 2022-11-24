<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksSeeder extends Seeder
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
            DB::table('books')->insert ([
                'publisher_id' => $faker->numberBetween(1, 5),
                'title' => 'Book Number ' . $i,
                'author' => $faker->name(),
                'year' => $faker->numberBetween(2000, 2022),
                'synopsis' => $faker->realText(200),
                'image' => 'book_image '.$i.'.jpg'
            ]);
        }
    }
}
