@extends('layouts.app')

@section('content')
    <div class="container">

        <h2>Hotel Validation</h2>

        @foreach($hotels as $hotel)
            <div class="panel-body">
                <div>
                    <h2>{{$hotel->name}}</h2>

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
                <div>
                    {!! Form::open(['action' => ['HotelController@validateHotel', 'id' => $hotel->id], 'method' => 'PATCH', 'class' => 'form-horizontal']) !!}

                    {!! Form::button('Validate Hotel', ['class' => 'btn btn-primary', 'type' => 'submit', 'name' => 'validate', 'value' => 'validate']) !!}
                    {!! Form::button('Reject Hotel', ['class' => 'btn btn-danger', 'type' => 'submit', 'name' => 'reject', 'value' => 'reject']) !!}

                    {!! Form::close() !!}
                </div>
                <hr>
            </div>
        @endforeach
    </div>

@endsection