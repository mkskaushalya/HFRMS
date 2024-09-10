<x-default-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Hall Booking Page') }}
        </h2>
    </x-slot>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css"/>

    <section id="hall-search">
        <div class="cont">
            <div class="heading"><h2>Search Hall</h2></div>
            <div class="search-form">
                <form action="" method="GET">
                    <div class="input-box">
                        <label for="location">Location</label>
                        <select name="location" id="location">
                            @foreach($locations as $location )
                                <option
                                    value="{{ $location->id }}"
                                    @if($request->location == $location->id) selected @endif>{{ $location->location }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="input-box">
                        <label for="booking_date">Date</label>
                        <input type="date"
                               value="{{ isset($request->booking_date) || $request->booking_date != null ||  $request->booking_date != "" ? $request->booking_date : today()->format("Y-m-d")  }}"
                               min="{{ today()->format("Y-m-d") }}"
                               name="booking_date" id="booking_date" placeholder="Select Date">
                    </div>
                    <div class="input-box">
                        <label for="start_time">Start Time</label>
                        <input type="time"
                               value="{{ isset($request->start_time) || $request->start_time != null ||  $request->start_time != "" ? $request->start_time : "09:00"  }}"
                               name="start_time" id="start_time" placeholder="Select Time">
                    </div>
                    <div class="input-box">
                        <label for="end_time">End Time</label>
                        <input type="time"
                               value="{{ isset($request->end_time) || $request->end_time != null ||  $request->end_time != "" ? $request->end_time : "17:00"  }}"
                               name="end_time" id="end_time" placeholder="Select Time">
                    </div>

                    <div class="input-box">
                        <button type="submit">Search</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <section id="hall-results">
        <div class="left">
            <div class="cont">
                <div class="heading"><h2>Filter</h2></div>
                <div class="filter-form">

                </div>
            </div>
        </div>
        <div class="right">
            <div class="cont">
                <div class="heading"><h2>Available Halls</h2></div>
                <div class="hall-list">

                    {{-- Display all halls --}}
                    @foreach($halls as $hall)
                        <div class="hall">
                            <div class="hall-img">
                                <img src="{{ $hall->image }}" alt="Hall Image">
                            </div>
                            <div class="hall-info">
                                <h3>{{ $hall->name }}</h3>
                                <p>Location: {{ $hall->hallLocation->location }}</p>
                                <p>Capacity: {{ $hall->capacity }}</p>
                                <p>Price: ${{ $hall->price }}</p>
                                <a class="button"
                                   href="{{ route('halls.show', $hall)  }}{{ $data ? '?booking_date='.$request->booking_date .'&start_time='. $request->start_time.'&end_time='.$request->end_time.'#hall-availability' : ""}}">Book
                                    Now</a>
                            </div>
                        </div>

                    @endforeach

                </div>
            </div>
        </div>

    </section>

</x-default-layout>
