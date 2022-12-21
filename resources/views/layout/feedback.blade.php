@if ($errors->has($field))
    <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first($field) }}</strong>
    </span>
@endif
