<?php

use Illuminate\Database\Seeder;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $rooms = array();

        foreach (range(1,2) as $hotel){
            foreach(range(1,2) as $floor) {
                foreach (range(1, 10) as $number) {
                    $rooms[] = ['hotel_id' => $hotel, 'number' => $number, 'floor' => $floor, 'num_beds' => $faker->numberBetween(1, 3), 'occupied' => false, 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()];
                }
            }
        }


        DB::table('rooms')->insert($rooms);
    }
}
