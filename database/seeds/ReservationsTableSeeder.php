<?php

use Illuminate\Database\Seeder;

class ReservationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reservations')->insert([
            ['offer_id' => 1, 'room_id' => 1, 'visitor_id' => 1, 'start' => \Carbon\Carbon::now()->addDays(7), 'end' => \Carbon\Carbon::now()->addDays(8), 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
        ]);
    }
}
