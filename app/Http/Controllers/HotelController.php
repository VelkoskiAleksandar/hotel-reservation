<?php

namespace App\Http\Controllers;

use App\Hotel;
use App\Http\Requests\HotelRequest;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function index()
    {
        $hotels = Hotel::all();

        return view('hotels.index', compact('hotels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hotels.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param HotelRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(HotelRequest $request)
    {
        $hotel = new Hotel();

        $this->saveHotel($hotel, $request);

        return redirect('/hotels/'.$hotel->id);
    }

    /**
     * Display the specified resource.
     *
     * @param Hotel $hotel
     * @return \Illuminate\Http\Response
     */
    public function show(Hotel $hotel)
    {
//        return $hotel;
        return view('hotels.show', compact('hotel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Hotel $hotel
     * @return \Illuminate\Http\Response
     */
    public function edit(Hotel $hotel)
    {
        return view('hotels.edit', compact('hotel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param HotelRequest $request
     * @param Hotel $hotel
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(HotelRequest $request, Hotel $hotel)
    {
        $this->saveHotel($hotel, $request);

        return redirect('/hotels/'.$hotel->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Hotel $hotel
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy(Hotel $hotel)
    {
        $hotel->delete();

        return redirect('/hotels');
    }

    private function saveHotel($hotel, HotelRequest $request)
    {
        $input = $request->all();

        $hotel->user_id = \Auth::user()->id;
        $hotel->name = $input['name'];
        $hotel->city = $input['city'];
        $hotel->country = $input['country'];
        $hotel->stars = $input['stars'];
        $hotel->parking_space = $input['parking_space'];
        $hotel->wifi = $input['wifi'];
        $hotel->pet_friendly = $input['pet_friendly'];
        $hotel->indoor_pool = $input['indoor_pool'];
        $hotel->outdoor_pool = $input['outdoor_pool'];
        $hotel->spa = $input['spa'];

        $hotel->save();
    }
}
