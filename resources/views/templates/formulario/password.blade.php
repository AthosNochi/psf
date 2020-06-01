<label class="{{ $class ?? null }}">
    <span>{{ $label ?? $input ?? "erro"}}</span>
    {!! Form::password($input, $attributes) !!}
</label>