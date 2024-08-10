<header>
    <nav>
        <a href="/" class="brand">
            <div class="logo">
                <img src="img/logo.webp" alt="Logo">
            </div>

            <div class="title">
                <h1>HFRMS</h1>
            </div>
        </a>
        <ul class="menu">
            <x-navlink href="/" :active="request()->is('/')">Home</x-navlink>
            <x-navlink href="/facilities" :active="request()->is('facilities')">Facilities</x-navlink>
            <x-navlink href="/reservation" :active="request()->is('reservations')">Reservations</x-navlink>
            <x-navlink href="/about" :active="request()->is('about')">About</x-navlink>
        </ul>
    </nav>
</header>
