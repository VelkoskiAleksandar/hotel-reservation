@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Hotel</div>
                    <div class="panel-body">

                        {!! Form::open(['action' => ['UserController@store'], 'method' => 'POST', 'class' => 'form-horizontal']) !!}

                        @include('users.form', ['submitButtonIcon' => 'fa-btn fa-pencil', 'submitButtonText' => 'Create User'])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
