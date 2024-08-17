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

    <section id="hall-search">
        <div class="cont">
            <div class="heading"><h2>Search Hall</h2></div>
            <div class="search-form">
                <form action="" method="POST">
                    @csrf
                    <div class="input-box">
                        <label for="location">Location</label>
                        <select name="location" id="location">
                            <option value="1"><span>Location 1</span></option>
                            <option value="2"><span>Location 2</span></option>
                            <option value="3"><span>Location 3</span></option>
                            <option value="4"><span>Location 4</span></option>
                        </select>
                    </div>
                    <div class="input-box">
                        <label for="daterange">Date</label>
                        <input type="date" value="{{ today()->format("Y-m-d")  }}" min="{{ today()->format("Y-m-d") }}" name="daterange" id="daterange" placeholder="Select Date">
                    </div>
                    <div class="input-box">
                        <label for="timerange">Time</label>
                        <select name="timerange" id="timerange">
                            <option value="1"><span>Time 1</span></option>
                            <option value="2"><span>Time 2</span></option>
                            <option value="3"><span>Time 3</span></option>
                            <option value="4"><span>Time 4</span></option>
                        </select>
                    </div>
                    <div class="input-box">
                        <button type="submit" name="searchhallbtn">Search</button>
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
                    <form action="" method="POST">
                        @csrf
                        <div class="input-box">
                            <label for="capacity">Capacity</label>
                            <select name="capacity" id="capacity">
                                <option value="1"><span>100</span></option>
                                <option value="2"><span>200</span></option>
                                <option value="3"><span>300</span></option>
                                <option value="4"><span>400</span></option>
                            </select>
                        </div>
                        <div class="input-box">
                            <label for="price">Price</label>
                            <select name="price" id="price">
                                <option value="1"><span>$100</span></option>
                                <option value="2"><span>$200</span></option>
                                <option value="3"><span>$300</span></option>
                                <option value="4"><span>$400</span></option>
                            </select>
                        </div>
                        <div class="input-box">
                            <button type="submit" name="filterhallbtn">Filter</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="right">
            <div class="cont">
                <div class="heading"><h2>Available Halls</h2></div>
                <div class="hall-list">
                    <div class="hall">
                        <div class="hall-img">
                            <img src="https://via.placeholder.com/150" alt="Hall Image">
                        </div>
                        <div class="hall-info">
                            <h3>Hall Name</h3>
                            <p>Location: Location 1</p>
                            <p>Capacity: 100</p>
                            <p>Price: $100</p>
                            <a href="">Book Now</a>
                        </div>
                    </div>
                    <div class="hall">
                        <div class="hall-img">
                            <img src="https://via.placeholder.com/150" alt="Hall Image">
                        </div>
                        <div class="hall-info">
                            <h3>Hall Name</h3>
                            <p>Location: Location 1</p>
                            <p>Capacity: 100</p>
                            <p>Price: $100</p>
                            <a href="">Book Now</a>
                        </div>
                    </div>
                    <div class="hall">
                        <div class="hall-img">
                            <img src="https://via.placeholder.com/150" alt="Hall Image">
                        </div>
                        <div class="hall-info">
                            <h3>Hall Name</h3>
                            <p>Location: Location 1</p>
                            <p>Capacity: 100</p>
                            <p>Price: $100</p>
                            <a href="">Book Now</a>
                        </div>
                    </div>
                    <div class="hall">
                        <div class="hall-img">
                            <img src="https://via.placeholder.com/150" alt="Hall Image">
                        </div>
                        <div class="hall-info">
                            <h3>Hall Name</h3>
                            <p>Location: Location 1</p>
                            <p>Capacity: 100</p>
                            <p>Price: $100</p>
                            <a href="">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

</x-default-layout>
