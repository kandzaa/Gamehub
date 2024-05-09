@props(['active' => false])

@php
    $classes = ($active ?? false)
                ? 'text-green-500 dark:text-green-400'
                : 'text-white hover:text-green-700 dark:hover:text-green-300';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
