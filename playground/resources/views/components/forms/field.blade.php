@props(['name'])

<label>{{ $label }}:</label>
<input required type="{{ $type }}" class="form-control" name="{{ $name }}" value="{{ old($name) }}">

@error($name)
    <p style="color: red">
        {{ $message }}
    </p>
@enderror
