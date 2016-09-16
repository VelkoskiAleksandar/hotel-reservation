@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Offer</div>
                    <div class="panel-body">


                        {!! Form::model($offer, ['action' => ['OfferController@update', $hotel, $offer->id], 'method' => 'PATCH', 'class' => 'form-horizontal']) !!}

                        @include('offers.form', ['submitButtonIcon' => 'fa-btn fa-pencil', 'submitButtonText' => 'Edit Offer'])

                        {!! Form::close() !!}

                        {!! Form::open(['action' => ['HotelController@destroy', $offer->id], 'method' => 'DELETE', 'class' => 'form-horizontal']) !!}

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i>  Delete Offer', ['class' => 'btn btn-danger', 'type' => 'submit']) !!}
                            </div>
                        </div>

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
