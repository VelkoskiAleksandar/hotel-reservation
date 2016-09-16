<?php

use Illuminate\Database\Seeder;

class OffersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $offers = array();

        foreach (range(1, 4) as $number) {
            $offers[] = ['hotel_id' => $faker->numberBetween(1, 2), 'name' => $faker->word, 'price' => $faker->numberBetween(100, 1000), 'num_days' => $faker->numberBetween(1, 4), 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()];
        }

        DB::table('offers')->insert($offers);
    }
}
