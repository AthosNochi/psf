<label class="{{ $class ?? "text-center border border-light p-5" }}">
    {{!! Form::select($select, $data ?? []) !!}}
</label>