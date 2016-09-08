@extends('layouts.app')

@section('content')
    <div class="container">

        <h2>User Validation</h2>

        @foreach($users as $user)
            <div class="panel-body">
                <div>
                    <h2>{{$user->name}}</h2>
                    <p>Email: {{ $user->email}}</p>
                    <p>Role to validate: {{ $user->role_to_validate->role}}</p>
                </div>
                <div>
                    {!! Form::open(['action' => ['UserController@validateUser', 'id' => $user->id, 'role' => $user->role_to_validate->id], 'method' => 'PATCH', 'class' => 'form-horizontal']) !!}

                        {!! Form::button('Validate User', ['class' => 'btn btn-primary', 'type' => 'submit']) !!}

                    {!! Form::close() !!}
                </div>
                <hr>
            </div>
        @endforeach
    </div>

@endsection