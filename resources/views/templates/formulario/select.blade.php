<label class="{{ $class ?? null }}">
    <span>{{ $label ?? $select ?? "erro"}}</span>
    {{!! Form::select($select, $data ?? []) !!}}
</label>