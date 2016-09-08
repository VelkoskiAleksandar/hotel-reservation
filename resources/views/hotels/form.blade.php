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

<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        {!! Foerm::button('<i class="fa '.$submitButtonIcon.'" aria-hidden="true"></i> '.$submitButtonText, ['class' => 'btn btn-primary', 'type' => 'submit']) !!}
    </div>
</div>

