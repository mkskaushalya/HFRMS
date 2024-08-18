<x-default-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Hall Booking Page') }}
        </h2>
    </x-slot>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

    <section id="hall-details">
        <div class="cont">
            <div class="left">
                <div class="hall-details">
                    <h2>Hall Name</h2>
                    <p>Location: Location 1</p>
                </div>
            </div>
            <div class="right">
                <div class="price">
                    <h3>From <span>LKR 25000</span></h3>
                </div>
                <div class="booking-btn">
                    <a class="button" href="#">Book Now</a>
                </div>
            </div>
        </div>
    </section>
    <section id="hall-gallery">
        <div class="cont">
            <div class="gallery">
                <div class="img-card">
                    <img src="https://via.placeholder.com/150" alt="Hall Image">
                </div>
            </div>
        </div>
    </section>


</x-default-layout>
