@props(['name' => 'fname', 'value' => '', 'type' => 'text', 'placeholder' => '', 'noFormControl' => false])

<div class="mb-3 mt-3">
    <label for="{{ $name }}">{{ ucwords($name) }}</label>
    <input type="{{ $type }}" class="{{ $noFormControl ? '' : 'form-control' }} {{ $attributes->get('class') }}" id="{{ $name }}" placeholder="{{ $placeholder }}" name="{{ $name }}">
</div>