@extends('layouts.app')

@section('content')
    <div class="panel-body">
        <h2>{{$offer->name}}</h2>
        <hr>
        <p>Price: {{ $offer->price }}</p>
        <p>Number of days: {{ $offer->num_days }}</p>
        <p>Description: {{ $offer->description }}</p>
    </div>
    <div class="panel-body">
        <a href="{{ action("OfferController@edit", ['hotels' => $hotel, 'id' => $offer->id]) }}">Edit Offer</a>
    </div>

@endsection