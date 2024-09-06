<x-app-layout>
    <x-dashboard>
        <x-slot:header>{{ __('Dashboard') }}</x-slot:header>
        <x-slot:contentTitle> {{ __('Dashboard') }}</x-slot:contentTitle>
        <x-slot:contentDescription> {{ __('Welcome to your dashboard!') }}</x-slot:contentDescription>
        <div class="cont">

            <a href="#" class="card">
                <div class="card-title">
                    <h3>Manage Halls</h3>
                </div>
                <div class="card-content">
                    <p>You have 10 halls</p>
                </div>
            </a>

            <a href="#" class="card">
                <div class="card-title">
                    <h3>Manage Users</h3>
                </div>
                <div class="card-content">
                    <p>You have 10 users</p>
                </div>
            </a>

            <a href="#" class="card">
                <div class="card-title">
                    <h3>Manage Bookings</h3>
                </div>
                <div class="card-content">
                    <p>You have 10 bookings</p>
                </div>
            </a>

            
        </div>
    </x-dashboard>
</x-app-layout>
