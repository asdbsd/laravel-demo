@props(['active' => false])

@php
    $classes = 'block text-left py-2 pl-3 pr-9 text-sm hover:bg-blue-500 hover:text-white focus:text-white focus:bg-blue-500';

    if($active) $classes .= ' bg-blue-500 text-white';
@endphp

<a {{ $attributes(['class' => $classes]) }}>
    {{ $slot }}
</a>
