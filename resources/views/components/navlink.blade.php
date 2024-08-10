@props(['active' => false])

<a {{ $attributes }} class="navlink {{ $active ? 'active' : '' }}" title="{{ $slot }}">
    <li>{{ $slot }}</li>
</a>
