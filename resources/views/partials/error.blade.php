@if ($errors->has($error))
    <span class="help-block">
        <strong>{{ $errors->first($error) }}</strong>
    </span>
@endif