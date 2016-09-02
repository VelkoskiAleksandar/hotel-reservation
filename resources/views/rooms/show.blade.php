@extends('layouts.app')

@section('content')
    <div class="panel-body">
        <h2>{{$room->number}}</h2>
        <hr>
        <p>Floor: {{ $room->floor }}, Number of beds: {{ $room->num_beds }}, Occupied: {{ $room->occupied }}</p>
    </div>
    <div class="panel-body">
        <a href="{{ action("RoomController@edit", ['hotels' => $hotel, 'id' => $room->id]) }}">Edit Room</a>
    </div>

@endsection