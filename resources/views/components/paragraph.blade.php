@props([
    'color' => 'dark',
    'size' => 'lg',
    'as' => 'div',
    'weight' => 'normal',
    'colors' => [
        'dark' => 'text-dark-900 dark:text-white',
        'gray' => 'text-dark-600 dark:text-dark-400',
        'light-gray' => 'text-dark-400',
        'primary' => 'text-primary-600',
        'white' => 'text-white', 
    ],
    'sizes' => [
        'sm' => 'text-sm',
        'md' => 'text-base',
        'lg' => 'text-lg',
        'xl' => 'text-xl',
    ],
    'weights' => [
        'normal' => 'font-normal',
        'medium' => 'font-medium',
        'semibold' => 'font-semibold',
        'bold' => 'font-bold',
    ],
])

@php
    $classes = implode(' ', [$colors[$color], $sizes[$size], $weights[$weight]]);
@endphp

<{{ $as }} {{ $attributes->twMerge(['class' => $classes]) }}>
    {{ $slot }}
</{{ $as }}>