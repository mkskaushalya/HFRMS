<x-default-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Hall Booking Page') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 w-full">
            <h2 class="text-center text-2xl font-bold text-white">Find a Hall</h2>
        </div>
        <form class="find-form max-w-7xl   mx-auto sm:px-6 lg:px-8 w-full flex justify-between mt-10 bg-white dark:bg-gray-800 py-5 rounded">
            <div class="input-items">
                <label class="dark:text-white">Location</label>
                <select class="" name="" id="">
                    <option value="">Select Location</option>
                    <option value="">Location 1</option>
                    <option value="">Location 2</option>
                    <option value="">Location 3</option>
                    <option value="">Location 4</option>
                </select>
            </div>
            <div class="input-items">
                <label>Date</label>
                <input type="date">
            </div>
            <div class="input-items">
                <label>Time</label>
                <input type="time">
            </div>
            <div class="input-items">
                <label>Capacity</label>
                <input type="number">
            </div>
            <div class="input-items">
                <button>Search</button>
            </div>
        </form>
    </div>
    <div class="pb-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 w-full">
            <h2 class="text-center text-2xl font-bold text-white">Available Halls</h2>
        </div>
        <div class="mt-10 max-w-7xl mx-auto sm:px-6 lg:px-8 w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
            <div class="hall-card bg-white dark:bg-gray-800 rounded p-5">
                <img src="https://via.placeholder.com/150" alt="">
                <h2 class="text-xl font-bold">Hall Name</h2>
                <p class="text-sm">Location</p>
                <p class="text-sm">Capacity</p>
                <p class="text-sm">Price</p>
                <button class="bg-blue-500 text-white px-3 py-1 rounded">Book Now</button>
            </div>
            <div class="hall-card bg-white dark:bg-gray-800 rounded p-5">
                <img src="https://via.placeholder.com/150" alt="">
                <h2 class="text-xl font-bold">Hall Name</h2>
                <p class="text-sm">Location</p>
                <p class="text-sm">Capacity</p>
                <p class="text-sm">Price</p>
                <button class="bg-blue-500 text-white px-3 py-1 rounded">Book Now</button>
            </div>
            <div class="hall-card bg-white dark:bg-gray-800 rounded p-5">
                <img src="https://via.placeholder.com/150" alt="">
                <h2 class="text-xl font-bold">Hall Name</h2>
                <p class="text-sm">Location</p>
                <p class="text-sm">Capacity</p>
                <p class="text-sm">Price</p>
                <button class="bg-blue-500 text-white px-3 py-1 rounded">Book Now</button>
            </div>
            <div class="hall-card bg-white dark:bg-gray-800 rounded p-5">
                <img src="https://via.placeholder.com/150" alt="">
                <h2 class="text-xl font-bold">Hall Name</h2>
                <p class="text-sm">Location</p>
                <p class="text-sm">Capacity</p>
                <p class="text-sm">Price</p>
                <button class="bg-blue-500 text-white px-3 py-1 rounded">Book Now</button>
            </div>
            <div class="hall-card bg-white dark:bg-gray-800 rounded p-5">
                <img src="https://via.placeholder.com/150" alt="">
                <h2 class="text-xl font-bold">Hall Name</h2>
                <p class="text-sm">Location</p>
                <p class="text-sm">Capacity</p>
                <p class="text-sm">Price</p>
                <button class="bg-blue-500 text-white px-3 py-1 rounded">Book Now</button>
            </div>
        </div>

    </div>
</x-default-layout>