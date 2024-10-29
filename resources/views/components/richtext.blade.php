@props([
    'size' => 'base',
    'color' => 'gray',
    'base' => [
        'prose max-w-none',
        'prose-p:text-dark-600 dark:prose-p:text-dark-400',
        'dark:prose-headings:text-white prose-headings:text-dark-900',
    ],
    'sizes' => [
        'xl' => 'prose-p:text-xl',
        'lg' => 'prose-p:text-lg',
        'base' => 'prose-p:text-base',
    ],
    'colors' => [
        'dark' =>
            'prose-p:text-dark-900 dark:prose-p:text-white 
             prose-strong:text-dark-900 dark:prose-strong:text-white 
             prose-a:text-dark-900 dark:prose-a:text-white',
        'gray' =>
            'prose-p:text-dark-600 dark:prose-p:text-dark-400 
             prose-strong:text-dark-600 dark:prose-strong:text-dark-400 
             prose-a:text-dark-600 dark:prose-a:text-dark-400',
        'light-gray' =>
            'prose-p:text-dark-400
             prose-strong:text-dark-400 dark:prose-strong:text-dark-400 
             prose-a:text-dark-400 dark:prose-a:text-dark-400',
        'white' =>
            'prose-p:text-white dark:prose-p:text-white
             prose-strong:text-white dark:prose-strong:text-white 
             prose-a:text-white dark:prose-a:text-white',
    ],
])

@php
    $classes = implode(' ', array_merge($base, [$sizes[$size], $colors[$color]]));
@endphp


<div {{ $attributes->twMerge(['class' => $classes]) }}>
    {{ $slot }}
</div>
