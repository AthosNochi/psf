<label class="{{ $class ?? null }}">
    <span>{{ $label ?? $input ?? "erro"}}</span>
    {!! Form::text($input, $value ?? null, $attributes) !!}
</label>