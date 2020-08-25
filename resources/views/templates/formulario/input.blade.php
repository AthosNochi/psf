<label class="{{ $class ?? "form-control form-control-lg" }}">
    <span>{{ $label ?? $input ?? "erro"}}</span>
    {!! Form::text($input, $value ?? null, $attributes) !!}
</label>