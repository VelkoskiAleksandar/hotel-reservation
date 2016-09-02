<?php

namespace App\Http\Controllers;

use App\Hotel;
use App\Http\Requests\RoomRequest;
use App\Room;
use Illuminate\Http\Request;

use App\Http\Requests;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Hotel $hotel
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Hotel $hotel)
    {
        $rooms = $hotel->rooms()->paginate(10);

        return view('rooms.index', compact('hotel', 'rooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Hotel $hotel
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(Hotel $hotel)
    {
        return view('rooms.create', compact('hotel'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @param Hotel $hotel
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request, Hotel $hotel)
    {
        $this->validate($request, [
            'floors' => 'required|numeric',
            'num_rooms' => 'required|numeric',
        ]);

        $input = $request->all();

        $this->saveRooms($input, $hotel);

        return redirect('/hotels/'.$hotel->id.'/rooms');
    }

    /**
     * Display the specified resource.
     *
     * @param Hotel $hotel
     * @param Room $room
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Hotel $hotel, Room $room)
    {
        return view('rooms.show', compact('hotel', 'room'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Hotel $hotel
     * @param Room $room
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Hotel $hotel, Room $room)
    {
        return view('rooms.edit', compact('hotel', 'room'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param RoomRequest $request
     * @param Hotel $hotel
     * @param Room $room
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(RoomRequest $request, Hotel $hotel, Room $room)
    {
        $input = $request->all();

        $this->updateRoom($room, $input);

        return redirect('/hotels/'.$hotel->id.'/rooms/'.$room->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Hotel $hotel
     * @param Room $room
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy(Hotel $hotel, Room $room)
    {
        $room->delete();

        return redirect('/hotels/'.$hotel->id.'/rooms/');
    }

    private function saveRooms($input, $hotel)
    {
        foreach (range(1, $input['floors']) as $floor){
            foreach ( range(1, $input['num_rooms']) as $number){
                $room = Room::firstOrNew(['hotel_id' => $hotel->id, 'number' => $number, 'floor' => $floor]);
                $room->hotel_id = $hotel->id;
                $room->num_beds = rand(1, 5);
                $room->occupied = false;

                $room->save();
            }
        }
    }

    private function updateRoom($room, $input)
    {
        $room->number = $input['number'];
        $room->floor = $input['floor'];
        $room->num_beds = $input['num_beds'];

        $room->save();
    }


}
