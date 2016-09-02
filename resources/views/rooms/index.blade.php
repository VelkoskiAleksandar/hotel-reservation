@extends('layouts.app')

@section('content')
    <div class="container">

        <h2>Rooms of {{ $hotel->name }}</h2>

        @foreach($rooms as $room)
            <div class="panel-body">
                <h2><a href="{{ action("RoomController@show", ['hotels' => $hotel, 'id' => $room->id]) }}">Floor: {{ $room->floor }}, Number: {{$room->number}}</a></h2>
                <hr>
            </div>
        @endforeach

        {{ $rooms->links() }}
    </div>


@endsection