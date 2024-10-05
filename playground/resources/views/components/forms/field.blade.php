@props(['name'])
<label>{{ $label }}</label>
<input type="{{ $type }}" class="form-control" name="{{ $name }}" required value="{{ old($name) }}">

@error($name)
    <span class="text-danger mt-2">{{ $message }}</span>
@enderror
