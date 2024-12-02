@props([
    'name' => '',
    'label' => null,
    'value' => '',
    'type' => 'text',
    'placeholder' => '',
    'noFormControl' => false
])

<div class="mb-3">
    @if ($type !== 'checkbox')
        <label for="{{ $name }}">{{ $label ?? ucwords(str_replace('_', ' ', $name)) }}</label>
    @endif

    <input {{ $attributes->merge([
        'type' => $type,
        'id' => $name,
        'name' => $name,
        'value' => $value,
        'placeholder' => $placeholder,
    ]) }}
    @class(['form-control' => !$noFormControl, 'form-check-input' => $type === 'checkbox'])>

    @if ($type === 'checkbox')
        <label class="form-check-label" for="{{ $name }}">{{ $label ?? ucwords(str_replace('_', ' ', $name)) }}</label>
    @endif
</div>
