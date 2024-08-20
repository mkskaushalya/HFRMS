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
                <!-- Swiper -->

                <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-1.jpg"/>
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-2.jpg"/>
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-3.jpg"/>
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-4.jpg"/>
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-5.jpg"/>
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-6.jpg"/>
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-7.jpg"/>
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-8.jpg"/>
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-9.jpg"/>
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-10.jpg"/>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div thumbsSlider="" class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-1.jpg"/>
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-2.jpg"/>
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-3.jpg"/>
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-4.jpg"/>
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-5.jpg"/>
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-6.jpg"/>
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-7.jpg"/>
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-8.jpg"/>
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-9.jpg"/>
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-10.jpg"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>
    <section id="hall-overview">
        <div class="cont">
            <div class="heading smallh"><h2>Overview</h2></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci alias amet aperiam aspernatur
                atque autem, consectetur consequatur corporis cumque debitis delectus doloremque doloribus ducimus
                ea eius eligendi eos error est eum ex explicabo facere fugiat fugit harum id impedit in incidunt
                ipsa iure laboriosam laborum laudantium magnam maxime minima molestiae mollitia natus nemo nesciunt
                nihil nisi nobis non numquam obcaecati odit officiis optio pariatur perferendis perspiciatis placeat
                praesentium provident quae quam quas quia quidem quisquam quo ratione recusandae rem repellat
                repudiandae rerum saepe sapiente sequi similique sit soluta sunt suscipit tempora tenetur totam
                ullam unde vel veniam veritatis voluptas voluptate voluptatem voluptatum. Adipisci alias amet
                aperiam aspernatur atque autem, consectetur consequatur corporis cumque debitis delectus doloremque
                doloribus ducimus ea eius eligendi eos error est eum ex explicabo facere fugiat fugit harum id
                impedit in incidunt ipsa iure laboriosam laborum laudantium magnam maxime minima molestiae mollitia
                natus nemo nesciunt nihil nisi nobis non numquam obcaecati odit officiis optio pariatur perferendis
                perspiciatis placeat praesentium provident quae quam quas quia quidem quisquam quo ratione
                recusandae rem repellat repudiandae rerum saepe sapiente sequi similique sit soluta sunt suscipit
                tempora tenetur totam ullam unde vel veniam veritatis voluptas voluptate voluptatem voluptatum.</p>
        </div>
    </section>
    <section id="hall-facilities">
        <div class="cont">
            <div class="heading smallh"><h2>Facilities</h2></div>
            <div class="facilities">
                <div class="facility">
                    <img src="https://via.placeholder.com/100" alt="Facility Image">
                    <p>Facility 1</p>
                </div>
                <div class="facility">
                    <img src="https://via.placeholder.com/100" alt="Facility Image">
                    <p>Facility 2</p>
                </div>
                <div class="facility">
                    <img src="https://via.placeholder.com/100" alt="Facility Image">
                    <p>Facility 3</p>
                </div>
                <div class="facility">
                    <img src="https://via.placeholder.com/100" alt="Facility Image">
                    <p>Facility 4</p>
                </div>
                <div class="facility">
                    <img src="https://via.placeholder.com/100" alt="Facility Image">
                    <p>Facility 5</p>
                </div>
            </div>
        </div>
    </section>
    <section id="hall-reviews">
        <div class="cont">
            <div class="heading smallh"><h2>Reviews</h2></div>
            <div class="reviews">
                <div class="left">
                    <div class="total-reviews-count">
                        <div class="left">
                            4.6
                        </div>
                        <div class="right">
                            <h3>Excellent</h3>
                            <p>10 reviews</p>
                        </div>
                    </div>
                    <div class="rating-bars">
                        <div class="rating-bar">
                            <div class="title">
                                <p>Excellent</p>
                                <span>6</span>
                            </div>

                            <div class="bar">
                                <div class="fill" style="width: 80%"></div>
                            </div>

                        </div>
                        <div class="rating-bar">
                            <div class="title">
                                <p>Very Good</p>
                                <span>6</span>
                            </div>

                            <div class="bar">
                                <div class="fill" style="width: 80%"></div>
                            </div>

                        </div>
                        <div class="rating-bar">
                            <div class="title">
                                <p>Average</p>
                                <span>6</span>
                            </div>

                            <div class="bar">
                                <div class="fill" style="width: 80%"></div>
                            </div>

                        </div>
                        <div class="rating-bar">
                            <div class="title">
                                <p>Poor</p>
                                <span>6</span>
                            </div>

                            <div class="bar">
                                <div class="fill" style="width: 80%"></div>
                            </div>

                        </div>
                        <div class="rating-bar">
                            <div class="title">
                                <p>Terrible</p>
                                <span>6</span>
                            </div>

                            <div class="bar">
                                <div class="fill" style="width: 80%"></div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="right">
                    <div class="review">
                        <div class="details">
                            <div class="left">
                                <img src="https://via.placeholder.com/100" alt="User Image">
                            </div>
                            <div class="right">
                                <h3>User Name</h3>
                                <p>21/08/2024 04:34 AM</p>
                            </div>
                        </div>
                        <div class="title">Lorem ipsum dolor sit amet.</div>
                        <div class="message">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam aspernatur, aut
                                beatae cum facere fugiat illo illum laboriosam numquam pariatur praesentium, quis
                                voluptate. Commodi laudantium possimus provident quam repudiandae vel voluptas? At
                                corporis culpa distinctio enim eos fugit in incidunt iusto laborum, nobis officiis,
                                provident quod, reprehenderit saepe veniam.</p>
                        </div>
                        <div class="star-rating">
                            ***** (5/5)
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</x-default-layout>
