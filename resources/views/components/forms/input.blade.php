@props(['name' => 'fname', 'value', 'type' => 'text'])

<label for="{{ $name}}">{{ $name}}</label><br>
<input type="{{ $type }}" id="{{ $name}}" name="{{ $name}}" value="{{ $value }}"><br><br>