@extends('layouts.app')

@section('content')
    <div class="panel-body">
        <h2>{{$hotel->name}}</h2>
        <hr>
        <p>City: {{ $hotel->city }}</p>
        <p>Country: {{ $hotel->country }}</p>
        <p>Stars: {{ $hotel->stars }}</p>
        <p>Parking Space: {{ $hotel->parking_space }}</p>
        <p>Wifi: {{ $hotel->wifi }}</p>
        <p>Pet Friendly: {{ $hotel->pet_friendly }}</p>
        <p>Indoor Pool: {{ $hotel->indoor_pool }}</p>
        <p>Outdoor Pool: {{ $hotel->outdoor_pool }}</p>
        <p>Spa: {{ $hotel->spa }}</p>
    </div>
    <div class="panel-body">
        <a href="{{ action("HotelController@edit", ['id' => $hotel->id]) }}">Edit Hotel</a>

    </div>
    <div class="panel-body">
        <a href="{{ action("RoomController@index", ['id' => $hotel->id]) }}">Show rooms</a>
    </div>
    <div class="panel-body">
        <a href="{{ action("RoomController@create", ['id' => $hotel->id]) }}">Create rooms</a>
    </div>
    <div class="panel-body">
        <a href="{{ action("OfferController@index", ['id' => $hotel->id]) }}">Show offers</a>
    </div>
    @if(\Auth::user()->id == $hotel->user_id)
        <div class="panel-body">
            <a href="{{ action("OfferController@create", ['id' => $hotel->id]) }}">Add offer</a>
        </div>
    @endif

@endsection