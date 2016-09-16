<?php

namespace App\Http\Controllers;

use App\Hotel;
use App\Http\Requests\OfferRequest;
use App\Offer;
use Illuminate\Http\Request;

use App\Http\Requests;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function index(Hotel $hotel)
    {
        $offers = $hotel->offers()->paginate(20);

        return view('offers.index', compact('hotel', 'offers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Hotel $hotel
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(Hotel $hotel)
    {
        return view('offers.create', compact('hotel'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param OfferRequest $request
     * @param Hotel $hotel
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(OfferRequest $request, Hotel $hotel)
    {
        $input = $request->all();

        $offer = new Offer();

        $this->saveOffer($offer, $hotel, $input);

        return redirect('/hotels/'.$hotel->id.'/offers');
    }

    /**
     * Display the specified resource.
     *
     * @param Hotel $hotel
     * @param Offer $offer
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Hotel $hotel, Offer $offer)
    {
        return view('offers.show', compact('hotel', 'offer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Hotel $hotel
     * @param Offer $offer
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Hotel $hotel, Offer $offer)
    {
        return view('offers.edit', compact('hotel', 'offer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param OfferRequest $request
     * @param Hotel $hotel
     * @param Offer $offer
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(OfferRequest $request, Hotel $hotel, Offer $offer)
    {
        $input = $request->all();

        $this->saveOffer($offer, $hotel, $input);

        return redirect('/hotels/'.$hotel->id.'/offers/'.$offer->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Hotel $hotel
     * @param Offer $offer
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy(Hotel $hotel, Offer $offer)
    {
        $offer->delete();

        return redirect('/hotels/'.$hotel->id.'/offers/');
    }

    private function saveOffer(Offer $offer, Hotel $hotel, $input)
    {
        $offer->name = $input['name'];
        $offer->hotel_id = $hotel->id;
        $offer->price = $input['price'];
        $offer->num_days = $input['num_days'];
        $offer->description = $input['description'];

        $offer->save();
    }
}
