<div>
    <ul>
        @foreach ($categories as $item)
            <li>{{ $item }}</li>
        @endforeach

        <x-input />
    </ul>
</div>
