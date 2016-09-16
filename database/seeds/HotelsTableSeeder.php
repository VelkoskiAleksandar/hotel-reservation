<?php

use Illuminate\Database\Seeder;

class HotelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hotels')->insert([
            ['user_id' => 1, 'name' => 'Hotel_1', 'validated' => 1, 'num_validation' => 1, 'city' => 'City1', 'country' => 'Country1', 'stars' => '1', 'parking_space' => '50 m2',
                'wifi' => '1', 'pet_friendly' => '1', 'indoor_pool' => '1', 'outdoor_pool' => '1', 'spa' => '1', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['user_id' => 2, 'name' => 'Hotel_2', 'validated' => 0, 'num_validation' => 0, 'city' => 'City2', 'country' => 'Country2', 'stars' => '5', 'parking_space' => '5000 m2',
                'wifi' => '1', 'pet_friendly' => '1', 'indoor_pool' => '1', 'outdoor_pool' => '1', 'spa' => '1', 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
        ]);
    }
}
