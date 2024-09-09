@php
    use Illuminate\Support\Facades\Auth;
    $usertype = Auth::user()->usertype;
@endphp
<x-app-layout>
    <x-dashboard>
        <x-slot:header>{{ __('Dashboard') }}</x-slot:header>
        <x-slot:contentTitle> {{ __('Dashboard') }}</x-slot:contentTitle>
        <x-slot:contentDescription> {{ __('Welcome to your dashboard!') }}</x-slot:contentDescription>
        <div class="cont">

            @if($usertype == 'admin')
                <a href="{{ route('dashboard.halls') }}" class="card">
                    <div class="card-title">
                        <h3>Manage Halls</h3>
                    </div>
                    <div class="card-content">
                        <p>You have 10 halls</p>
                    </div>
                </a>

                <a href="{{ route('dashboard.users') }}" class="card">
                    <div class="card-title">
                        <h3>Manage Users</h3>
                    </div>
                    <div class="card-content">
                        <p>You have 10 users</p>
                    </div>
                </a>

                <a href="{{ route('dashboard.bookings') }}" class="card">
                    <div class="card-title">
                        <h3>Manage Bookings</h3>
                    </div>
                    <div class="card-content">
                        <p>You have 10 bookings</p>
                    </div>
                </a>
            @elseif($usertype == 'user')
                <a href="#" class="card">
                    <div class="card-title">
                        <h3>Manage Bookings</h3>
                    </div>
                    <div class="card-content">
                        <p>You have 10 bookings</p>
                    </div>
                </a>
            @endif


        </div>
    </x-dashboard>
</x-app-layout>
