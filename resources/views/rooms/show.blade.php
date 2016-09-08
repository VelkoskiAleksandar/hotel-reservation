@extends('layouts.app')

@section('content')
    <div class="panel-body">
        <h2>{{$room->number}}</h2>
        <hr>
        <p>Floor: {{ $room->floor }}</p>
        <p>Number of beds: {{ $room->num_beds }}</p>
        <p>floor_area: {{ $room->floor_area }}</p>
        <p>balcony: {{ $room->balcony }}</p>
        <p>air_conditioning: {{ $room->air_conditioning }}</p>
        <p>bathroom: {{ $room->bathroom }}</p>
        <p>minibar: {{ $room->minibar }}</p>
        <p>smoking: {{ $room->smoking }}</p>
        <p>Occupied: {{ $room->occupied }}</p>
    </div>
    <div class="panel-body">
        <a href="{{ action("RoomController@edit", ['hotels' => $hotel, 'id' => $room->id]) }}">Edit Room</a>
    </div>

@endsection