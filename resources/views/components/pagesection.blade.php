@props(['title'=>false])

<section {{ $attributes }}>
    @if ($title)
        <div class="title">
            <h2>{{ $title }}</h2>
        </div>
    @endif
    <div class="cont">
        {{ $slot }}
    </div>
</section>