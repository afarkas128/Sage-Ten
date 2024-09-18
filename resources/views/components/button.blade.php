<a href="{{ $attributes->get('href', '#') }}" {{ $attributes->merge(['class' => "{$type_class} type-{$type}", 'role' => 'button']) }}>
  @if (trim($slot))
    {{ $slot }}
  @else
    Default Button Text
  @endif
</a>
