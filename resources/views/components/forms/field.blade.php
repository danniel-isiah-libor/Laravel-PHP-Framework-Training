@props(['name', 'type', 'label'])

<label for="">{{ $label }}</label>
<input type="{{ $type }}" name="{{ $name }}" class="form-control" value="{{ old($name) }}">

@error($name)
<p style="color: red">
    {{ $message }}
</p>
@enderror
