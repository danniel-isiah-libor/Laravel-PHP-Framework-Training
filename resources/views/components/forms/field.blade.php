@props(['name'])

<label for="name">{{ $label }}</label>
<input class="form-control" id="name" type="{{ $type }}" style="border: 1px solid red;" name="{{$name}}" value="{{old($name)}}">

@error($name)
    <p style="color:red">
        {{ $message }}
    </p>
@enderror