@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Hotel</div>
                    <div class="panel-body">

                        {!! Form::model($room, ['action' => ['RoomController@update', $hotel, $room->id], 'method' => 'PATCH', 'class' => 'form-horizontal']) !!}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                {!! Form::label('number', 'Number:', ['class' => 'col-md-4 control-label']) !!}

                                <div class="col-md-6">
                                    {!! Form::text('number', old('number'), ['class' => 'form-control']) !!}

                                    @include('partials.error', ['error' => 'number'])
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('floor') ? ' has-error' : '' }}">
                                {!! Form::label('floor', 'Floor:', ['class' => 'col-md-4 control-label']) !!}

                                <div class="col-md-6">
                                    {!! Form::text('floor', old('floor'), ['class' => 'form-control']) !!}

                                    @include('partials.error', ['error' => 'floor'])
                                </div>
                            </div>


                            <div class="form-group{{ $errors->has('num_beds') ? ' has-error' : '' }}">
                                {!! Form::label('num_beds', 'Number of beds:', ['class' => 'col-md-4 control-label']) !!}

                                <div class="col-md-6">
                                    {!! Form::text('num_beds', old('num_beds'), ['class' => 'form-control']) !!}

                                    @include('partials.error', ['error' => 'num_beds'])
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    {!! Form::button('<i class="fa fa-btn fa-pencil" aria-hidden="true"></i> Edit Room', ['class' => 'btn btn-primary', 'type' => 'submit']) !!}
                                </div>
                            </div>

                        {!! Form::close() !!}

                        {!! Form::open(['action' => ['RoomController@destroy', $hotel, $room->id], 'method' => 'DELETE', 'class' => 'form-horizontal']) !!}

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i>  Delete Room', ['class' => 'btn btn-danger', 'type' => 'submit']) !!}
                                </div>
                            </div>

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
