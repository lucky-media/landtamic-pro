@props([
    'color' => 'dark',
    'size' => 'h2',
    'as' => null,
    'weight' => 'semibold', 
    'base' => 'leading-none',
    'colors' => [
        'dark' => 'text-dark-900 dark:text-white',
        'white' => 'text-white',
        'secondary' => 'text-primary-700 dark:text-white'
    ],
    'sizes' => [
    'h1' => 'xl:text-7xl lg:text-6xl md:text-5xl text-3xl',
    'h2' => 'lg:text-5xl md:text-4xl text-3xl',
    'h3' => 'md:text-4xl text-3xl',
    'h4' => 'md:text-3xl text-2xl',
    'h5' => 'md:text-2xl text-xl',
    'h6' => 'text-xl',
    ],
    'weights' => [
        'semibold' => 'font-semibold',
        'bold' => 'font-bold',
    ],
])

@php 
    $classes = implode(' ', [$base, $colors[$color], $sizes[$size], $weights[$weight]]);
@endphp


<{{ $as ?? 'h3' }} {{ $attributes->twMerge(["class" => $classes]) }}>
    {{ $slot }}
</{{ $as ?? 'h3' }}>
