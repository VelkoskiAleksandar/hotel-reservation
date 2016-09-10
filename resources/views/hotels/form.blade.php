<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    {!! Form::label('name', 'Name:', ['class' => 'col-md-4 control-label']) !!}

    <div class="col-md-6">
        {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}

        @include('partials.error', ['error' => 'name'])
    </div>
</div>

<div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
    {!! Form::label('city', 'City:', ['class' => 'col-md-4 control-label']) !!}

    <div class="col-md-6">
        {!! Form::text('city', old('city'), ['class' => 'form-control']) !!}

        @include('partials.error', ['error' => 'city'])
    </div>
</div>

<div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
    {!! Form::label('country', 'Country:', ['class' => 'col-md-4 control-label']) !!}

    <div class="col-md-6">
        {!! Form::text('country', old('country'), ['class' => 'form-control']) !!}

        @include('partials.error', ['error' => 'country'])
    </div>
</div>

<div class="form-group{{ $errors->has('stars') ? ' has-error' : '' }}">
    {!! Form::label('stars', 'Stars:', ['class' => 'col-md-4 control-label']) !!}

    <div class="col-md-6">
        {!! Form::text('stars', old('stars'), ['class' => 'form-control']) !!}

        @include('partials.error', ['error' => 'stars'])
    </div>
</div>

<div class="form-group{{ $errors->has('parking_space') ? ' has-error' : '' }}">
    {!! Form::label('parking_space', 'Parking Space:', ['class' => 'col-md-4 control-label']) !!}

    <div class="col-md-6">
        {!! Form::text('parking_space', old('parking_space'), ['class' => 'form-control']) !!}

        @include('partials.error', ['error' => 'parking_space'])
    </div>
</div>

<div class="form-group{{ $errors->has('wifi') ? ' has-error' : '' }}">
    {!! Form::label('wifi', 'wifi:', ['class' => 'col-md-4 control-label']) !!}

    <div class="col-md-6">
        {!! Form::text('wifi', old('wifi'), ['class' => 'form-control']) !!}

        @include('partials.error', ['error' => 'wifi'])
    </div>
</div>

<div class="form-group{{ $errors->has('pet_friendly') ? ' has-error' : '' }}">
    {!! Form::label('pet_friendly', 'pet_friendly:', ['class' => 'col-md-4 control-label']) !!}

    <div class="col-md-6">
        {!! Form::text('pet_friendly', old('pet_friendly'), ['class' => 'form-control']) !!}

        @include('partials.error', ['error' => 'pet_friendly'])
    </div>
</div>

<div class="form-group{{ $errors->has('indoor_pool') ? ' has-error' : '' }}">
    {!! Form::label('indoor_pool', 'indoor_pool:', ['class' => 'col-md-4 control-label']) !!}

    <div class="col-md-6">
        {!! Form::text('indoor_pool', old('indoor_pool'), ['class' => 'form-control']) !!}

        @include('partials.error', ['error' => 'indoor_pool'])
    </div>
</div>

<div class="form-group{{ $errors->has('outdoor_pool') ? ' has-error' : '' }}">
    {!! Form::label('outdoor_pool', 'outdoor_pool:', ['class' => 'col-md-4 control-label']) !!}

    <div class="col-md-6">
        {!! Form::text('outdoor_pool', old('outdoor_pool'), ['class' => 'form-control']) !!}

        @include('partials.error', ['error' => 'outdoor_pool'])
    </div>
</div>

<div class="form-group{{ $errors->has('spa') ? ' has-error' : '' }}">
    {!! Form::label('spa', 'spa:', ['class' => 'col-md-4 control-label']) !!}

    <div class="col-md-6">
        {!! Form::text('spa', old('spa'), ['class' => 'form-control']) !!}

        @include('partials.error', ['error' => 'spa'])
    </div>
</div>

<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        {!! Form::button('<i class="fa '.$submitButtonIcon.'" aria-hidden="true"></i> '.$submitButtonText, ['class' => 'btn btn-primary', 'type' => 'submit', 'name' => 'submit']) !!}
    </div>
</div>

