@extends('layouts.app')

@section('content')
    <div class="container">

        <h2>Hotels</h2>

        @foreach($users as $user)
            <div class="panel-body">
                <h2><a href="{{ action("UserController@show", ['id' => $user->id]) }}">{{$user->name}}</a></h2>
                <hr>
            </div>
        @endforeach
    </div>

@endsection