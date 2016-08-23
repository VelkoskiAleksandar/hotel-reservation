<?php

use Illuminate\Database\Seeder;

class OfferRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $offerRoom = [];

        // 4 offers for 10 rooms. Every 10th room assign new offer.
        foreach (range(0, 3) as $offer) {
            foreach (range(1, 10) as $room) {
                $offerRoom[] = ['offer_id' => $offer+1, 'room_id' => $offer*10+$room, 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()];
            }
        }

        DB::table('offer_room')->insert($offerRoom);
    }
}
