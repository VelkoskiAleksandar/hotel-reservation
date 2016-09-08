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

                            <div class="form-group{{ $errors->has('floor_area') ? ' has-error' : '' }}">
                                {!! Form::label('floor_area', 'floor_area:', ['class' => 'col-md-4 control-label']) !!}

                                <div class="col-md-6">
                                    {!! Form::text('floor_area', old('floor_area'), ['class' => 'form-control']) !!}

                                    @include('partials.error', ['error' => 'floor_area'])
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('balcony') ? ' has-error' : '' }}">
                                {!! Form::label('balcony', 'balcony:', ['class' => 'col-md-4 control-label']) !!}

                                <div class="col-md-6">
                                    {!! Form::text('balcony', old('balcony'), ['class' => 'form-control']) !!}

                                    @include('partials.error', ['error' => 'balcony'])
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('air_conditioning') ? ' has-error' : '' }}">
                                {!! Form::label('air_conditioning', 'air_conditioning:', ['class' => 'col-md-4 control-label']) !!}

                                <div class="col-md-6">
                                    {!! Form::text('air_conditioning', old('air_conditioning'), ['class' => 'form-control']) !!}

                                    @include('partials.error', ['error' => 'air_conditioning'])
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('bathroom') ? ' has-error' : '' }}">
                                {!! Form::label('bathroom', 'bathroom:', ['class' => 'col-md-4 control-label']) !!}

                                <div class="col-md-6">
                                    {!! Form::text('bathroom', old('bathroom'), ['class' => 'form-control']) !!}

                                    @include('partials.error', ['error' => 'bathroom'])
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('minibar') ? ' has-error' : '' }}">
                                {!! Form::label('minibar', 'minibar:', ['class' => 'col-md-4 control-label']) !!}

                                <div class="col-md-6">
                                    {!! Form::text('minibar', old('minibar'), ['class' => 'form-control']) !!}

                                    @include('partials.error', ['error' => 'minibar'])
                                </div>
                            </div>

                        <div class="form-group{{ $errors->has('smoking') ? ' has-error' : '' }}">
                            {!! Form::label('smoking', 'smoking:', ['class' => 'col-md-4 control-label']) !!}

                            <div class="col-md-6">
                                {!! Form::text('smoking', old('smoking'), ['class' => 'form-control']) !!}

                                @include('partials.error', ['error' => 'smoking'])
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
