@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Add Offer</div>
                    <div class="panel-body">

                        {!! Form::open(['action' => ['OfferController@store', $hotel->id],  'method' => 'POST', 'class' => 'form-horizontal']) !!}

                        @include('offers.form', ['submitButtonIcon' => 'fa-plus-square', 'submitButtonText' => 'Add Offer'])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
