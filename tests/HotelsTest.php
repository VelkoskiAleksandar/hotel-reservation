<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class HotelsTest extends TestCase
{
    use DatabaseTransactions;

    public function testCreateHotel()
    {
        $this->login();

        $this->visit('/hotels/create')
            ->type('TestHotelName', 'name')
            ->type('TestCity', 'city')
            ->type('TestCountry', 'country')
            ->type('5', 'stars')
            ->type('50 m2', 'parking_space')
            ->type('1', 'wifi')
            ->type('1', 'pet_friendly')
            ->type('1', 'indoor_pool')
            ->type('1', 'outdoor_pool')
            ->type('1', 'spa')
            ->press('submit')
            ->assertResponseOk();

    }

    public function testHotelsPageListsHotels()
    {
        $this->insertHotel();

        $this->visit('/hotels')
            ->seeInElement('a', 'TestHotelName');
    }

    public function testEditHotel()
    {
        $this->login();
        $hotel_id = $this->insertHotel();
        $hotels_count = \App\Hotel::count();

        $this->visit('/hotels/'.$hotel_id.'/edit')
            ->type('TestHotelNameEdited', 'name')
            ->press('submit')
            ->seePageIs('/hotels/'.$hotel_id)
            ->seeInElement('h2', 'TestHotelNameEdited');
    }


    private function login()
    {
        $this->visit('/login')
            ->type('a@a.a', 'email')
            ->type('dadada', 'password')
            ->press('submit');
    }

    private function insertHotel()
    {
        $hotel = new \App\Hotel();

        $hotel->user_id = 1;
        $hotel->name = 'TestHotelName';
        $hotel->city = 'TestCity';
        $hotel->country = 'TestCountry';
        $hotel->stars = '5';
        $hotel->parking_space = '50 m2';
        $hotel->wifi = '1';
        $hotel->pet_friendly = '1';
        $hotel->indoor_pool = '1';
        $hotel->outdoor_pool = '1';
        $hotel->spa = '1';

        $hotel->save();

        return $hotel->id;
    }
}
