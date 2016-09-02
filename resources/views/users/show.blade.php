@extends('layouts.app')

@section('content')
    <div class="panel-body">
        <h2>{{$user->name}}</h2>
        <hr>
        <p>Email: {{ $user->email}}</p>
    </div>
    <div class="panel-body">
        <a href="{{ action("UserController@edit", ['id' => $user->id]) }}">Edit User</a>
    </div>

@endsection