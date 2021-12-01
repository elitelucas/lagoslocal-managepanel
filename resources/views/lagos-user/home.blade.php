@extends('lagos-user.layouts.layout-home')
@section('head')
    <!-- SPECIFIC CSS -->
    <link href="{{ asset('user_assets/css/home.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
@endsection

@section('content')
    <div class="hero_single version_2">
        <div class="opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.6)">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-9 col-lg-10 col-md-8">
                        <h1>Discover &amp; Book</h1>
                        <p>All businesses <span class="element" style="font-weight: 500"></span></p>
                        <form action="/list" method="get">
                            <div class="row no-gutters custom-search-input">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="What are you looking for...">
                                        <i class="icon_search"></i>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control no_border_r" type="text" id="autocomplete"
                                            placeholder="Address, neighborhood...">
                                        <i class="icon_pin_alt"></i>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <input type="submit" value="Search">
                                </div>
                            </div>
                            <!-- /row -->
                        </form>
                    </div>
                </div>
                <!-- /row -->
            </div>
        </div>
    </div>

    <div class="bg_gray">
        <div class="container margin_60_40">
            <div class="main_title center">
                <span><em></em></span>
                <h2>Popular Categories</h2>
                {{-- <p>Cum doctus civibus efficiantur in imperdiet deterruisset</p> --}}
            </div>
            <!-- /main_title -->
            <div class="owl-carousel owl-theme categories_carousel">
                <div class="item">
                    <a href="#0">
                        <span>98</span>
                        <img src="{{ asset('user_assets/img/category_1.png') }}" alt="">
                        <h3>Restaurants</h3>
                    </a>
                </div>
                <div class="item">
                    <a href="#0">
                        <span>98</span>
                        <img src="{{ asset('user_assets/img/category_2.png') }}" alt="">
                        <h3>Active Life</h3>
                    </a>
                </div>
                <div class="item">
                    <a href="#0">
                        <span>98</span>
                        <img src="{{ asset('user_assets/img/category_3.png') }}" alt="">
                        <h3>Home Services</h3>
                    </a>
                </div>
                <div class="item">
                    <a href="#0">
                        <span>98</span>
                        <img src="{{ asset('user_assets/img/category_4.png') }}" alt="">
                        <h3>Night Life</h3>
                    </a>
                </div>
                <div class="item">
                    <a href="#0">
                        <span>98</span>
                        <img src="{{ asset('user_assets/img/category_5.png') }}" alt="">
                        <h3>Hotels & Travel</h3>
                    </a>
                </div>
                <div class="item">
                    <a href="#0">
                        <span>98</span>
                        <img src="{{ asset('user_assets/img/category_6.png') }}" alt="">
                        <h3>Shops</h3>
                    </a>
                </div>
            </div>
            <!-- /carousel -->
        </div>
        <!-- /container -->
    </div>
    <!-- /bg_gray -->

    <div class="container margin_60_40">
        <div class="main_title">
            <span><em></em></span>
            <h2>Popular Businesses</h2>
            {{-- <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p> --}}
            <a href="#0">View All</a>
        </div>

        <div class="owl-carousel owl-theme carousel_4">
            <div class="item">
                <div class="strip">
                    <figure>
                        <span class="favorite">
                            <i class="far fa-heart"></i>
                        </span>
                        <img src="{{ asset('user_assets/img/lazy-placeholder.png') }}"
                            data-src="{{ asset('user_assets/img/location_1.jpg') }}" class="owl-lazy" alt="">
                        <a href="/detail" class="strip_info">
                            <small>Restaurant</small>
                            <div class="item_title">
                                <h3>Da Alfredo</h3>
                                <small>27 Old Gloucester St</small>
                            </div>
                        </a>
                    </figure>
                    <ul>
                        <li>275 Reviews</li>
                        <li class="rating">
                            @include('components.rating',['rating'=> 4.8 ,'starsize'=>18,'scoreshow'=>true])
                        </li>
                    </ul>
                </div>
            </div>
            <div class="item">
                <div class="strip">
                    <figure>
                        <span class="favorite">
                            <i class="fas fa-heart"></i>
                        </span>
                        <img src="{{ asset('user_assets/img/lazy-placeholder.png') }}"
                            data-src="{{ asset('user_assets/img/location_2.jpg') }}" class="owl-lazy" alt="">
                        <a href="/detail" class="strip_info">
                            <small>Restaurant</small>
                            <div class="item_title">
                                <h3>Best Burghers</h3>
                                <small>27 Old Gloucester St</small>
                            </div>
                        </a>
                    </figure>
                    <ul>
                        <li>315 Reviews</li>
                        <li class="rating">
                            @include('components.rating',['rating'=> 4.7 ,'starsize'=>18,'scoreshow'=>true])
                        </li>
                    </ul>
                </div>
            </div>
            <div class="item">
                <div class="strip">
                    <figure>
                        <span class="favorite">
                            <i class="far fa-heart"></i>
                        </span>
                        <img src="{{ asset('user_assets/img/lazy-placeholder.png') }}"
                            data-src="{{ asset('user_assets/img/location_3.jpg') }}" class="owl-lazy" alt="">
                        <a href="/detail" class="strip_info">
                            <small>Shop</small>
                            <div class="item_title">
                                <h3>Vego Life</h3>
                                <small>27 Old Gloucester St</small>
                            </div>
                        </a>
                    </figure>
                    <ul>
                        <li>235 Reviews</li>
                        <li class="rating">
                            @include('components.rating',['rating'=> 4.4 ,'starsize'=>18,'scoreshow'=>true])
                        </li>
                    </ul>
                </div>
            </div>
            <div class="item">
                <div class="strip">
                    <figure>
                        <span class="favorite">
                            <i class="far fa-heart"></i>
                        </span>
                        <img src="{{ asset('user_assets/img/lazy-placeholder.png') }}"
                            data-src="{{ asset('user_assets/img/location_4.jpg') }}" class="owl-lazy" alt="">
                        <a href="/detail" class="strip_info">
                            <small>Active Life</small>
                            <div class="item_title">
                                <h3>Sushi Temple</h3>
                                <small>27 Old Gloucester St</small>
                            </div>
                        </a>
                    </figure>
                    <ul>
                        <li>158 Reviews</li>
                        <li class="rating">
                            @include('components.rating',['rating'=> 4.2 ,'starsize'=>18,'scoreshow'=>true])
                        </li>
                    </ul>
                </div>
            </div>
            <div class="item">
                <div class="strip">
                    <figure>
                        <span class="favorite">
                            <i class="fas fa-heart"></i>
                        </span>
                        <img src="{{ asset('user_assets/img/lazy-placeholder.png') }}"
                            data-src="{{ asset('user_assets/img/location_5.jpg') }}" class="owl-lazy" alt="">
                        <a href="/detail" class="strip_info">
                            <small>Home Services</small>
                            <div class="item_title">
                                <h3>Auto Pizza</h3>
                                <small>27 Old Gloucester St</small>
                            </div>
                        </a>
                    </figure>
                    <ul>
                        <li>158 Reviews</li>
                        <li class="rating">
                            @include('components.rating',['rating'=> 4.2 ,'starsize'=>18,'scoreshow'=>true])
                        </li>
                    </ul>
                </div>
            </div>
            <div class="item">
                <div class="strip">
                    <figure>
                        <span class="favorite">
                            <i class="fas fa-heart"></i>
                        </span>
                        <img src="{{ asset('user_assets/img/lazy-placeholder.png') }}"
                            data-src="{{ asset('user_assets/img/location_6.jpg') }}" class="owl-lazy" alt="">
                        <a href="/detail" class="strip_info">
                            <small>Restaurant</small>
                            <div class="item_title">
                                <h3>Alliance</h3>
                                <small>27 Old Gloucester St</small>
                            </div>
                        </a>
                    </figure>
                    <ul>
                        <li>158 Reviews</li>
                        <li class="rating">
                            @include('components.rating',['rating'=> 4.2 ,'starsize'=>18,'scoreshow'=>true])
                        </li>
                    </ul>
                </div>
            </div>
            <div class="item">
                <div class="strip">
                    <figure>
                        <span class="favorite">
                            <i class="fas fa-heart"></i>
                        </span>
                        <img src="{{ asset('user_assets/img/lazy-placeholder.png') }}"
                            data-src="{{ asset('user_assets/img/location_7.jpg') }}" class="owl-lazy" alt="">
                        <a href="/detail" class="strip_info">
                            <small>Restaurant</small>
                            <div class="item_title">
                                <h3>Alliance</h3>
                                <small>27 Old Gloucester St</small>
                            </div>
                        </a>
                    </figure>
                    <ul>
                        <li>158 Reviews</li>
                        <li class="rating">
                            @include('components.rating',['rating'=> 4.2 ,'starsize'=>18,'scoreshow'=>true])
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /carousel -->

        <div class="banner lazy" data-bg="url(user_assets/img/banner_bg_desktop.jpg)">
            <div class="wrapper d-flex align-items-center opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.2)">
                <div>
                    <small>lagoslocal</small>
                    <h3>More than 3000 Businesses</h3>
                    <p>Search business with best reviews</p>
                    <a href="grid-listing-filterscol.html" class="btn_1">View All</a>
                </div>
            </div>
            <!-- /wrapper -->
        </div>
        <!-- /banner -->

        <div class="row">
            <div class="col-12">
                <div class="main_title version_2">
                    <span><em></em></span>
                    <h2>Newest Listing Businesses</h2>
                    {{-- <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p> --}}
                    <a href="#0">View All</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="list_home">
                    <ul>
                        <li>
                            <a href="/detail">
                                <figure>
                                    <img src="{{ asset('user_assets/img/location_list_placeholder.png') }}"
                                        data-src="{{ asset('user_assets/img/location_list_4.jpg') }}" alt=""
                                        class="lazy">
                                </figure>
                                <div class="score">
                                    <i class="far fa-heart"></i>
                                </div>
                                <em>Restaurant</em>
                                <h3>Mr. Pepper</h3>
                                <small>27 Old Gloucester St, 4563</small>
                                <ul>
                                    <li>
                                        @include('components.rating',['rating'=> 4.4 ,'starsize'=>18,'scoreshow'=>true])
                                    </li>
                                </ul>
                                <small>1 Reviews</small>
                            </a>
                        </li>
                        <li>
                            <a href="/detail">
                                <figure>
                                    <img src="{{ asset('user_assets/img/location_list_placeholder.png') }}"
                                        data-src="{{ asset('user_assets/img/location_list_2.jpg') }}" alt=""
                                        class="lazy">
                                </figure>
                                <div class="score">
                                    <i class="far fa-heart"></i>
                                </div>
                                <em>Travel & Hotel</em>
                                <h3>Alliance</h3>
                                <small>27 Old Gloucester St, 4563</small>
                                <ul>
                                    <li>
                                        @include('components.rating',['rating'=> 4.4 ,'starsize'=>18,'scoreshow'=>true])
                                    </li>
                                </ul>
                                <small>1 Reviews</small>
                            </a>
                        </li>
                        <li>
                            <a href="/detail">
                                <figure>
                                    <img src="{{ asset('user_assets/img/location_list_placeholder.png') }}"
                                        data-src="{{ asset('user_assets/img/location_list_3.jpg') }}" alt=""
                                        class="lazy">
                                </figure>
                                <div class="score">
                                    <i class="far fa-heart"></i>
                                </div>
                                <em>Restaurant</em>
                                <h3>Sushi Gold</h3>
                                <small>Old Shire Ln EN9 3RX</small>
                                <ul>
                                    <li>
                                        @include('components.rating',['rating'=> 4.4 ,'starsize'=>18,'scoreshow'=>true])
                                    </li>
                                </ul>
                                <small>1 Reviews</small>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-6">
                <div class="list_home">
                    <ul>
                        <li>
                            <a href="/detail">
                                <figure>
                                    <img src="{{ asset('user_assets/img/location_list_placeholder.png') }}"
                                        data-src="{{ asset('user_assets/img/location_list_4.jpg') }}" alt=""
                                        class="lazy">
                                </figure>
                                <div class="score">
                                    <i class="far fa-heart"></i>
                                </div>
                                <em>Restaurant</em>
                                <h3>Mr. Pepper</h3>
                                <small>27 Old Gloucester St, 4563</small>
                                <ul>
                                    <li>
                                        @include('components.rating',['rating'=> 4.4 ,'starsize'=>18,'scoreshow'=>true])
                                    </li>
                                </ul>
                                <small>1 Reviews</small>
                            </a>
                        </li>
                        <li>
                            <a href="/detail">
                                <figure>
                                    <img src="{{ asset('user_assets/img/location_list_placeholder.png') }}"
                                        data-src="{{ asset('user_assets/img/location_list_5.jpg') }}" alt=""
                                        class="lazy">
                                </figure>
                                <div class="score">
                                    <i class="far fa-heart"></i>
                                </div>
                                <em>Restaurant</em>
                                <h3>Dragon Tower</h3>
                                <small>22 Hertsmere Rd E14 4ED</small>
                                <ul>
                                    <li>
                                        @include('components.rating',['rating'=> 4.4 ,'starsize'=>18,'scoreshow'=>true])
                                    </li>
                                </ul>
                                <small>1 Reviews</small>
                            </a>
                        </li>
                        <li>
                            <a href="/detail">
                                <figure>
                                    <img src="{{ asset('user_assets/img/location_list_placeholder.png') }}"
                                        data-src="{{ asset('user_assets/img/location_list_6.jpg') }}" alt=""
                                        class="lazy">
                                </figure>
                                <div class="score">
                                    <i class="far fa-heart"></i>
                                </div>
                                <em>Pizza - Italian</em>
                                <h3>Bella Napoli</h3>
                                <small>135 Newtownards Road BT4</small>
                                <ul>
                                    <li>
                                        @include('components.rating',['rating'=> 4.4 ,'starsize'=>18,'scoreshow'=>true])
                                    </li>
                                </ul>
                                <small>1 Reviews</small>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- /row -->
        <p class="text-center d-block d-md-block d-lg-none"><a href="grid-listing-filterscol.html"
                class="btn_1">View
                All</a></p>
        <!-- /button visibile on tablet/mobile only -->
    </div>
    <!-- /container -->

    <div class="call_section lazy" data-bg="url(user_assets/img/bg_call_section.jpg)">
        <div class="container clearfix">
            <div class="col-lg-5 col-md-6 float-right wow">
                <div class="box_1">
                    <h3>Are you a Business Owner?</h3>
                    <p>Join Us to increase your online visibility. </p>
                    <a href="submit-restaurant.html" class="btn_1">Submit Business</a>
                </div>
            </div>
        </div>
    </div>
    <!--/call_section-->
@endsection

@section('script')
    <!-- TYPE EFFECT -->
    <script src="user_assets/js/typed.min.js"></script>
    <script>
        var typed = new Typed('.element', {
            strings: ["with good reviews", "with unique products", "with nice location"],
            startDelay: 10,
            loop: true,
            backDelay: 2000,
            typeSpeed: 50
        });
    </script>


    <!-- Autocomplete -->
    <script>
        function initMap() {
            var input = document.getElementById('autocomplete');
            var autocomplete = new google.maps.places.Autocomplete(input);
            
            autocomplete.addListener('place_changed', function() {
                var place = autocomplete.getPlace();
                if (!place.geometry) {
                    window.alert("Autocomplete's returned place contains no geometry");
                    return;
                }

                var address = '';
                if (place.address_components) {
                    address = [
                        (place.address_components[0] && place.address_components[0].short_name || ''),
                        (place.address_components[1] && place.address_components[1].short_name || ''),
                        (place.address_components[2] && place.address_components[2].short_name || '')
                    ].join(' ');
                }
            });
        }
    </script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRwyzlG5GifSsq3OEKIwqYcRjfyKUhnXg&libraries=places&callback=initMap">
    </script>

@endsection
