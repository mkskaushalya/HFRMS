@php

    use Illuminate\Support\Facades\Auth;

    if ($request->booking_date AND $request->start_time AND $request->end_time) {
        $values = [
            'form_type' => true,
            'booking_date' => $request->booking_date,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
        ];
    } else {
        $values = [
            'form_type' => false,
            'booking_date' => today()->format("Y-m-d"),
            'start_time' => "09:00",
            'end_time' => "17:00",
        ];

    }


@endphp
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

    <section id="hall-details">
        <div class="cont">
            <div class="left">
                <div class="hall-details">
                    <h2>{{ $hall->name }}</h2>
                    <p>Location: {{ $hall->hallLocation->location }}</p>
                </div>
            </div>
            <div class="right">
                <div class="price">
                    <h3>From <span>LKR {{ $hall->price }}</span>/hour</h3>
                </div>
                <div class="booking-btn">
                    <a class="button" href="#hall-availability">Check Availability</a>
                </div>
            </div>
        </div>
    </section>
    <section id="hall-gallery">
        <div class="cont">
            <div class="gallery">
                <!-- Swiper -->

                <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
                    <div class="swiper-wrapper">
                        @foreach($hall->hallImages as $image)
                            <div class="swiper-slide">
                                <img src="{{  $image->url }}"/>
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div thumbsSlider="" class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        @foreach($hall->hallImages as $image)
                            <div class="swiper-slide">
                                <img src="{{  $image->url }}"/>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>


    </section>
    {{--    <section id="hall-overview">--}}
    {{--        <div class="cont">--}}
    {{--            <div class="heading smallh"><h2>Overview</h2></div>--}}
    {{--            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci alias amet aperiam aspernatur--}}
    {{--                atque autem, consectetur consequatur corporis cumque debitis delectus doloremque doloribus ducimus--}}
    {{--                ea eius eligendi eos error est eum ex explicabo facere fugiat fugit harum id impedit in incidunt--}}
    {{--                ipsa iure laboriosam laborum laudantium magnam maxime minima molestiae mollitia natus nemo nesciunt--}}
    {{--                nihil nisi nobis non numquam obcaecati odit officiis optio pariatur perferendis perspiciatis placeat--}}
    {{--                praesentium provident quae quam quas quia quidem quisquam quo ratione recusandae rem repellat--}}
    {{--                repudiandae rerum saepe sapiente sequi similique sit soluta sunt suscipit tempora tenetur totam--}}
    {{--                ullam unde vel veniam veritatis voluptas voluptate voluptatem voluptatum. Adipisci alias amet--}}
    {{--                aperiam aspernatur atque autem, consectetur consequatur corporis cumque debitis delectus doloremque--}}
    {{--                doloribus ducimus ea eius eligendi eos error est eum ex explicabo facere fugiat fugit harum id--}}
    {{--                impedit in incidunt ipsa iure laboriosam laborum laudantium magnam maxime minima molestiae mollitia--}}
    {{--                natus nemo nesciunt nihil nisi nobis non numquam obcaecati odit officiis optio pariatur perferendis--}}
    {{--                perspiciatis placeat praesentium provident quae quam quas quia quidem quisquam quo ratione--}}
    {{--                recusandae rem repellat repudiandae rerum saepe sapiente sequi similique sit soluta sunt suscipit--}}
    {{--                tempora tenetur totam ullam unde vel veniam veritatis voluptas voluptate voluptatem voluptatum.</p>--}}
    {{--        </div>--}}
    {{--    </section>--}}
    {{--    <section id="hall-facilities">--}}
    {{--        <div class="cont">--}}
    {{--            <div class="heading smallh"><h2>Facilities</h2></div>--}}
    {{--            <div class="facilities">--}}
    {{--                <div class="facility">--}}
    {{--                    <img src="https://via.placeholder.com/100" alt="Facility Image">--}}
    {{--                    <p>Facility 1</p>--}}
    {{--                </div>--}}
    {{--                <div class="facility">--}}
    {{--                    <img src="https://via.placeholder.com/100" alt="Facility Image">--}}
    {{--                    <p>Facility 2</p>--}}
    {{--                </div>--}}
    {{--                <div class="facility">--}}
    {{--                    <img src="https://via.placeholder.com/100" alt="Facility Image">--}}
    {{--                    <p>Facility 3</p>--}}
    {{--                </div>--}}
    {{--                <div class="facility">--}}
    {{--                    <img src="https://via.placeholder.com/100" alt="Facility Image">--}}
    {{--                    <p>Facility 4</p>--}}
    {{--                </div>--}}
    {{--                <div class="facility">--}}
    {{--                    <img src="https://via.placeholder.com/100" alt="Facility Image">--}}
    {{--                    <p>Facility 5</p>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </section>--}}
    <section id="hall-availability">
        <div class="cont">
            <div class="heading smallh"><h2>Availability
                    : @if($hallAvailability && $values['form_type'])
                        <span id="hall-availability-span" class="available">Available</span>
                    @elseif($values['form_type'])
                        <span id="hall-availability-span" class="unavailable">Unavailable</span>
                    @endif</h2>
            </div>
            <div class="availability">
                <div class="search-form">
                    <form
                        action="{{ route('halls.show', $hall) }}{{ $values['form_type'] ? "#hall-availability" : "" }}"
                        id="hall-availability-form"
                        method="{{ $values['form_type'] ? "POST" : "GET"}}">
                        @if($values['form_type'])
                            @csrf
                        @endif
                        <div class="input-box">
                            <label for="booking_date">Date</label>
                            <input type="date" value="{{ today()->format("Y-m-d")  }}"
                                   min="{{ today()->format("Y-m-d") }}" name="booking_date" id="booking_date"
                                   placeholder="Select Date">
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
                            <button type="submit"
                                    id="checkAvailabilitySubmitBtn">{{ $values['form_type'] ? "Book" : "Check"}}</button>
                        </div>
                        <script>
                            var booking_date = document.getElementById('booking_date');
                            var hallAvailabilityForm = document.getElementById('hall-availability-form');
                            var start_time = document.getElementById('start_time');
                            var end_time = document.getElementById('end_time');
                            var checkAvailabilitySubmitBtn = document.getElementById('checkAvailabilitySubmitBtn');
                            var hallAvailability = document.getElementById('hall-availability-span');

                            function changeAvailability() {
                                checkAvailabilitySubmitBtn.innerHTML = "Check";
                                hallAvailability.style.display = "none";
                                hallAvailabilityForm.method = "GET";
                            }

                            booking_date.addEventListener('change', function () {
                                changeAvailability();
                            });

                            start_time.addEventListener('change', function () {
                                changeAvailability();
                            });

                            end_time.addEventListener('change', function () {
                                changeAvailability();
                            });
                        </script>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section id="hall-reviews">
        <div class="cont">
            <div class="heading smallh"><h2>Reviews</h2></div>
            @php
                $reviews = $hall->reviews;
                $rating_count = [
                    1 => 0,
                    2 => 0,
                    3 => 0,
                    4 => 0,
                    5 => 0,
];
                foreach ($reviews as $review) {
                    if ($review->rating == 1)
                        $rating_count[1]++;
                    elseif ($review->rating == 2)
                        $rating_count[2]++;
                    elseif ($review->rating == 3)
                        $rating_count[3]++;
                    elseif ($review->rating == 4)
                        $rating_count[4]++;
                    elseif ($review->rating == 5)
                        $rating_count[5]++;
                }


            @endphp

            <div class="reviews">
                <div class="left">
                    <div class="total-reviews-count">
                        <div class="left">
                            {{ number_format($hall->reviews->avg('rating'), 1, '.', '') }}
                        </div>
                        <div class="right">
                            <h3>@if($hall->reviews->avg('rating') > 4)
                                    Excellent
                                @elseif($hall->reviews->avg('rating') > 3)
                                    Very Good
                                @elseif($hall->reviews->avg('rating') > 2)
                                    Average
                                @elseif($hall->reviews->avg('rating') > 1)
                                    Poor
                                @else
                                    Terrible
                                @endif</h3>
                            <p>{{$hall->reviews->count()}} reviews</p>
                        </div>
                    </div>
                    <div class="rating-bars">
                        <div class="rating-bar">
                            <div class="title">
                                <p>Excellent</p>
                                <span>{{ $rating_count[5] }}</span>
                            </div>

                            <div class="bar">
                                <div class="fill"
                                     style="width: {{ ($rating_count[5]/$hall->reviews->count())*100 }}%"></div>
                            </div>

                        </div>
                        <div class="rating-bar">
                            <div class="title">
                                <p>Very Good</p>
                                <span>{{$rating_count[4]}}</span>
                            </div>

                            <div class="bar">
                                <div class="fill"
                                     style="width: {{ ($rating_count[4]/$hall->reviews->count())*100 }}%"></div>
                            </div>

                        </div>
                        <div class="rating-bar">
                            <div class="title">
                                <p>Average</p>
                                <span>{{$rating_count[3]}}</span>
                            </div>

                            <div class="bar">
                                <div class="fill"
                                     style="width: {{ ($rating_count[3]/$hall->reviews->count())*100 }}%"></div>
                            </div>

                        </div>
                        <div class="rating-bar">
                            <div class="title">
                                <p>Poor</p>
                                <span>{{$rating_count[2]}}</span>
                            </div>

                            <div class="bar">
                                <div class="fill"
                                     style="width: {{ ($rating_count[2]/$hall->reviews->count())*100 }}%"></div>
                            </div>

                        </div>
                        <div class="rating-bar">
                            <div class="title">
                                <p>Terrible</p>
                                <span>{{$rating_count[1]}}</span>
                            </div>

                            <div class="bar">
                                <div class="fill"
                                     style="width: {{ ($rating_count[1]/$hall->reviews->count())*100 }}%"></div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="right">
                    @foreach($hall->reviews as $review)
                        <div class="review">
                            <div class="details">
                                <div class="left">
                                    <img src="{{$review->user->profile_picture}}" alt="User Image">
                                </div>
                                <div class="right">
                                    <h3>{{$review->user->firstname}} {{$review->user->lastname}}</h3>
                                    <p>{{$review->created_at->format('d/m/Y h:s A')}}</p>
                                </div>
                            </div>
                            <div class="title"><h3>{{$review->title}}</h3></div>
                            <div class="message">
                                <p>{{$review->message}}</p>
                            </div>
                            <div class="star-rating">
                                <div class="stars">
                                    @for($i = 0; $i < $review->rating; $i++)
                                        <div class="star">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                <path
                                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/>
                                            </svg>
                                        </div>
                                    @endfor
                                    @for($i = 0; $i < 5 - $review->rating; $i++)
                                        <div class="star">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                <!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                                <path
                                                    d="M287.9 0c9.2 0 17.6 5.2 21.6 13.5l68.6 141.3 153.2 22.6c9 1.3 16.5 7.6 19.3 16.3s.5 18.1-5.9 24.5L433.6 328.4l26.2 155.6c1.5 9-2.2 18.1-9.7 23.5s-17.3 6-25.3 1.7l-137-73.2L151 509.1c-8.1 4.3-17.9 3.7-25.3-1.7s-11.2-14.5-9.7-23.5l26.2-155.6L31.1 218.2c-6.5-6.4-8.7-15.9-5.9-24.5s10.3-14.9 19.3-16.3l153.2-22.6L266.3 13.5C270.4 5.2 278.7 0 287.9 0zm0 79L235.4 187.2c-3.5 7.1-10.2 12.1-18.1 13.3L99 217.9 184.9 303c5.5 5.5 8.1 13.3 6.8 21L171.4 443.7l105.2-56.2c7.1-3.8 15.6-3.8 22.6 0l105.2 56.2L384.2 324.1c-1.3-7.7 1.2-15.5 6.8-21l85.9-85.1L358.6 200.5c-7.8-1.2-14.6-6.1-18.1-13.3L287.9 79z"/>
                                            </svg>
                                        </div>
                                    @endfor


                                </div>
                                ({{$review->rating}}/5)
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>


</x-default-layout>
