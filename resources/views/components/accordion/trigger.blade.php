@props(['class' => ''])

<button type="button" :id="$id('accordion-header-id')" role="tab" :aria-controls="$id('accordion-panel-id')"
    :aria-expanded="show ? 'true' : 'false'" @click="show = !show"
    {{ $attributes->merge(['class' => 'w-full ' . $class]) }}>
    {{ $slot }}
</button>
