<label class="{{ $class ?? null }}">
    <span>{{ $label ?? $datetime ?? "erro"}}</span>
    {!! Form::datetime($datetime, $attributes) !!}
</label>