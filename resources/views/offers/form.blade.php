<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    {!! Form::label('name', 'Name:', ['class' => 'col-md-4 control-label']) !!}

    <div class="col-md-6">
        {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}

        @include('partials.error', ['error' => 'name'])
    </div>
</div>

<div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
    {!! Form::label('price', 'price:', ['class' => 'col-md-4 control-label']) !!}

    <div class="col-md-6">
        {!! Form::text('price', old('price'), ['class' => 'form-control']) !!}

        @include('partials.error', ['error' => 'price'])
    </div>
</div>

<div class="form-group{{ $errors->has('num_days') ? ' has-error' : '' }}">
    {!! Form::label('num_days', 'num_days:', ['class' => 'col-md-4 control-label']) !!}

    <div class="col-md-6">
        {!! Form::text('num_days', old('num_days'), ['class' => 'form-control']) !!}

        @include('partials.error', ['error' => 'num_days'])
    </div>
</div>

<div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
    {!! Form::label('description', 'description:', ['class' => 'col-md-4 control-label']) !!}

    <div class="col-md-6">
        {!! Form::text('description', old('description'), ['class' => 'form-control']) !!}

        @include('partials.error', ['error' => 'description'])
    </div>
</div>

<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        {!! Form::button('<i class="fa '.$submitButtonIcon.'" aria-hidden="true"></i> '.$submitButtonText, ['class' => 'btn btn-primary', 'type' => 'submit', 'name' => 'submit']) !!}
    </div>
</div>

