  <div :id="$id('accordion-panel-id')" role="tabpanel" :aria-labelledby="$id('accordion-header-id')"
      :aria-hidden="show ? 'false' : 'true'" x-show="show" x-collapse.duration.500ms x-cloak class="max-w-3xl">
      {{ $slot }}
  </div>
