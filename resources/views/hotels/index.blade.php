@extends('layouts.app')

@section('content')
    <div class="container">

        <h2>Hotels</h2>

        @foreach($hotels as $hotel)
            <div class="panel-body">
                <h2><a href="{{ action("HotelController@show", ['id' => $hotel->id]) }}">{{$hotel->name}}</a></h2>
                <hr>
            </div>
        @endforeach
    </div>

@endsection