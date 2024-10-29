@props([
    'href' => '#',
    'size' => 'md',
    'color' => 'primary',
    'base' => 'inline-flex items-center space-x-2 group',
    'weight' => 'semibold',
    'target_blank' => false,
    'colors' => [
        'primary' => 'text-primary-700 dark:text-white',
        'secondary' => 'text-dark-900 dark:text-white',
        'white' => 'text-white dark:text-dark-900',
    ],
    'sizes' => [
        'xs' => 'text-xs',
        'sm' => 'text-sm',
        'md' => 'text-base',
        'lg' => 'text-lg',
        'xl' => 'text-xl',
    ],
    'weights' => [
        'normal' => 'font-normal',
        'medium' => 'font-medium',
        'semibold' => 'font-semibold',
    ],
    'icon_colors' => [
        'primary' => 'fill-primary-700 dark:fill-white',
        'secondary' => 'fill-dark-900 dark:fill-white',
        'white' => 'fill-white dark:fill-dark-900',
    ],
    'icon_sizes' => [
        'xs' => 'size-4',
        'sm' => 'size-5',
        'md' => 'size-5',
        'lg' => 'size-6',
        'xl' => 'size-7',
    ],
])

@php
    $classes = implode(' ', [$base, $colors[$color], $sizes[$size], $weights[$weight]]);
    $icon_classes = implode(' ', [$icon_colors[$color], $icon_sizes[$size]]);
@endphp

<a href="{{ $href }}" {{ $attributes->twMerge(['class' => $classes]) }}  target="{{ $target_blank ? '_blank' : '_self' }}">
    {{ $slot }}
   <svg class="transition-transform ease-in-out ml-2 duration-300 flex-shrink-0 group-hover:translate-x-2 {{ $icon_classes }}" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M8.293 5.293a1 1 0 0 0 0 1.414L13.586 12l-5.293 5.293a1 1 0 1 0 1.414 1.414l6-6a1 1 0 0 0 0-1.414l-6-6a1 1 0 0 0-1.414 0Z" clip-rule="evenodd"/></svg>
</a>