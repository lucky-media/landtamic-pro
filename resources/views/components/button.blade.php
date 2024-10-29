@props([
    'variant' => 'primary',
    'size' => 'md',
    'radius' => 'lg',
    'as' => 'button',
    'url' => null,
    'icon' => false,
    'base' => [
        'inline-flex items-center justify-center font-semibold rounded-lg group',
        'transition-all duration-300 ease-in-out',
        'border-2 border-transparent',
    ],
    'variants' => [
        'primary' => 'bg-primary-700 text-white hover:text-primary-700 hover:bg-white hover:border-primary-700',
        'secondary' => 'bg-primary-100 hover:bg-white text-primary-700 border-primary-700',
        'white' => 'bg-white text-primary-700 border-primary-700 hover:bg-primary-700 hover:text-white',
    ],
    'sizes' => [
        'md' => 'px-4 py-2 text-sm',
        'lg' => 'px-6 py-4 text-xl',
        'xl' => 'px-14 py-6 text-xl',
    ],
    'icon_colors' => [
        'primary' => 'fill-white group-hover:fill-primary-700',
        'secondary' => 'fill-primary-700',
        'white' => 'fill-primary-700',
    ],
    'icon_sizes' => [
        'md' => 'size-5',
        'lg' => 'size-6',
        'xl' => 'size-7',
    ],
])

@php
    $classes = implode(' ', array_merge($base, [$variants[$variant], $sizes[$size]]));
    $icon_classes = implode(' ', [$icon_colors[$variant], $icon_sizes[$size]]);
@endphp

@if ($url)
    <a href="{{ $url }}" {{ $attributes->twMerge(['class' => $classes]) }}>
        <span>{{ $slot }}</span>
        @if ($icon)
            <svg class="transition-transform ease-in-out ml-2 duration-300 flex-shrink-0 group-hover:translate-x-2 {{ $icon_classes }}"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <path fill-rule="evenodd"
                    d="M8.293 5.293a1 1 0 0 0 0 1.414L13.586 12l-5.293 5.293a1 1 0 1 0 1.414 1.414l6-6a1 1 0 0 0 0-1.414l-6-6a1 1 0 0 0-1.414 0Z"
                    clip-rule="evenodd" />
            </svg>
        @endif
    </a>
@else
    <{{ $as }} {{ $attributes->twMerge(['class' => $classes]) }}>
        {{ $slot }}
        </{{ $as }}>
@endif
