@props(['type' => 'submit'])
<button {{ $attributes->merge(['class' => 'btn', 'type' => $type]) }}>
    {{ $slot }}
</button>
