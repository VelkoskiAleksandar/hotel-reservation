<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    {!! Form::label('name', 'Name:', ['class' => 'col-md-4 control-label']) !!}

    <div class="col-md-6">
        {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}

        @include('partials.error', ['error' => 'name'])
    </div>
</div>

<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    {!! Form::label('email', 'E-mail Address:', ['class' => 'col-md-4 control-label']) !!}

    <div class="col-md-6">
        {!! Form::text('email', old('email'), ['class' => 'form-control']) !!}

        @include('partials.error', ['error' => 'email'])
    </div>
</div>

<div class="form-group{{ $errors->has('password_edit') ? ' has-error' : '' }}">
    {!! Form::label('password_edit', 'Password:', ['class' => 'col-md-4 control-label']) !!}

    <div class="col-md-6">
        {!! Form::password('password_edit', ['class' => 'form-control']) !!}

        @include('partials.error', ['error' => 'password_edit'])
    </div>
</div>

<div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
    {!! Form::label('password_confirmation', 'Confirm Password:', ['class' => 'col-md-4 control-label']) !!}

    <div class="col-md-6">
        {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}

        @include('partials.error', ['error' => 'password_confirmation'])
    </div>
</div>

<div class="form-group{{ $errors->has('role_list') ? ' has-error' : '' }}">
    {!! Form::label('role_list', 'Roles:', ['class' => 'col-md-4 control-label']) !!}

    <div class="col-md-6">
        {!! Form::select('role_list[]', $roles, null, ['id' => 'role_list', 'class' => 'form-control', 'multiple']) !!}

        @include('partials.error', ['error' => 'role_list'])
    </div>
</div>

<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        {!! Form::button('<i class="fa '.$submitButtonIcon.'" aria-hidden="true"></i> '.$submitButtonText, ['class' => 'btn btn-primary', 'type' => 'submit', 'name' => 'submit']) !!}
    </div>
</div>


@section('footer')
    <script type="text/javascript">
        $('#role_list').select2({
            placeholder: 'Select roles',
            allowClear: true
        });
    </script>
@endsection
