@extends('layouts.app')

@section('content')
    <div class="panel-body">
        <h2>{{$hotel->name}}</h2>
        <hr>
        <p>City: {{ $hotel->city }}</p>
    </div>
    <div class="panel-body">
        <a href="{{ action("HotelController@edit", ['id' => $hotel->id]) }}">Edit Hotel</a>
    </div>

@endsection