@extends('layouts.app')

@section('content')
    <div class="container">

        <h2>Offers of {{ $hotel->name }}</h2>

        @foreach($offers as $offer)
            <div class="panel-body">
                <h2><a href="{{ action("OfferController@show", ['hotels' => $hotel, 'id' => $offer->id]) }}">{{ $offer->id }} {{ $offer->name }}</a></h2>
                <hr>
            </div>
        @endforeach

        {{ $offers->links() }}
    </div>


@endsection