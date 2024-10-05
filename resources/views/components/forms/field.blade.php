@props(['name'])

<label>{{ $label }}</label>
<input required type="{{$type}}" style="border: 1px solid red" name="{{$name}}" value="{{old($name)}}">
<br><br>

@error($name)
<p style="color:red;">
    {{$message}}
</p>
@enderror