<label class="{{ $class ?? null }} checkbox">
    <span>{{ $label ?? $input ?? "erro"}}</span>
    {!! Form::checkbox($input, $value ?? null, $attributes) !!}
</label>