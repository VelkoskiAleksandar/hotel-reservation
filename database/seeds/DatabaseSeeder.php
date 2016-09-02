<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(UsersTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(RoleUserSeeder::class);
        $this->call(HotelsTableSeeder::class);
        $this->call(RoomsTableSeeder::class);
        $this->call(OffersTableSeeder::class);
        $this->call(OfferRoomSeeder::class);
        $this->call(ReservationsTableSeeder::class);
        $this->call(HotelVisitsTableSeeder::class);

        Model::reguard();
    }
}
