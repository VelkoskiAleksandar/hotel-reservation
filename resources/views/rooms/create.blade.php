@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Add Rooms</div>
                    <div class="panel-body">

                        {!! Form::open(['action' => ['RoomController@store', $hotel], 'method' => 'POST', 'class' => 'form-horizontal']) !!}

                            <div class="form-group{{ $errors->has('floors') ? ' has-error' : '' }}">
                                {!! Form::label('floors', 'Floors:', ['class' => 'col-md-4 control-label']) !!}

                                <div class="col-md-6">
                                    {!! Form::text('floors', old('floors'), ['class' => 'form-control']) !!}

                                    @include('partials.error', ['error' => 'floors'])
                                </div>
                            </div>


                            <div class="form-group{{ $errors->has('num_rooms') ? ' has-error' : '' }}">
                                {!! Form::label('num_rooms', 'Number of rooms per floor:', ['class' => 'col-md-4 control-label']) !!}

                                <div class="col-md-6">
                                    {!! Form::text('num_rooms', old('num_rooms'), ['class' => 'form-control']) !!}

                                    @include('partials.error', ['error' => 'num_rooms'])
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    {!! Form::button('<i class="fa fa-btn fa-pencil" aria-hidden="true"></i> Create Rooms', ['class' => 'btn btn-primary', 'type' => 'submit']) !!}
                                </div>
                            </div>

                        {!! Form::close() !!}


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
