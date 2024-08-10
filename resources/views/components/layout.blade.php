@props(['title' => 'Home', 'headlinks' => false])

@php
    $headlinks = $headlinks ? explode(' ', $headlinks) : false;
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }} - Hall and Facility Rental Management System</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <x-navbar />
    <main>
        <section id="headline">
            <div class="cont">
                <h1>{{ $heading }}</h1>
                @if ($headlinks)
                    <ul class="act-btn">
                        @foreach ($headlinks as $headlink)
                            @php
                                $headlink = explode(',', $headlink);
                            @endphp
                            <x-navlink href="{{'/'.$headlink[0]}}" :active="request()->is($headlink[0])">{{ $headlink[1] }}</x-navlink>
                        @endforeach
                    </ul>
                @endif
            </div>
        </section>
        {{ $slot }}
    </main>
</body>

</html>
