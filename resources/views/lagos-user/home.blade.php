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
                        <h1>LOCAL BUSINESS NEARBY</h1>
                        <p>All businesses <span class="element" style="font-weight: 500"></span></p>
                        <form action="{{url('/list')}}" method="get">
                            <div class="row no-gutters custom-search-input">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input class="form-control" type="text"  placeholder="What are you looking for...">
                                        <i class="icon_search"></i>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control no_border_r" name="address" type="text" id="autocomplete"
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



    <div class="container margin_60_40">
        <div class="main_title center">
            <span><em></em></span>
            <h2>POPULAR BUSINESSES</h2>
            {{-- <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p> --}}
            <div class="add_top_30">
                @foreach ($popular_business_types as $obj)
                    <button class="btn round-btn">{{ $obj->name }}</button>
                @endforeach
            </div>
            <div>
                <a href="#0">View All</a>
            </div>
        </div>

        <div class="owl-carousel owl-theme carousel_4">
            @for ($i = 0; $i < 5; $i++)
                @foreach ($popular_businesses as $obj)
                    <div class="item">
                        <div class="strip">
                            <figure>
                                <span class="favorite">
                                    <i onclick="addFavorite(event,this,{{ $obj->id }}, `{{ $obj->picture }}`, `{{ $obj->favorites && count($obj->favorites) > 0 ? $obj->favorites : null }}`)"
                                        class="@if ($obj->favorites && count($obj->favorites) > 0) fas @else far @endif fa-heart"></i>
                                </span>
                                <img src="{{ asset('user_assets/img/lazy-placeholder.png') }}"
                                    data-src="{{ asset($obj->picture) }}" class="owl-lazy" alt="">
                                <a href="{{ route('user-detail', $obj->id) }}" class="strip_info">
                                    <small>{{ @$obj->businesstype->name }}</small>
                                    <div class="item_title">
                                        <h3>{{ $obj->name }}</h3>
                                        <small>{{ $obj->address }}</small>
                                    </div>
                                </a>
                            </figure>
                            <div>
                                <ul>
                                    <li>{{ $obj->review_count }} Reviews</li>
                                    <li class="rating">
                                        @include('components.rating',
                                        ['rating'=> $obj->review_rating,'starsize'=>18,'scoreshow'=>true])
                                    </li>
                                </ul>
                            </div>
                           
                        </div>
                    </div>
                @endforeach
            @endfor
        </div>
        <!-- /carousel -->
    </div>
    <div class="bg_gray">
        <div class="container margin_60_40">
            <div class="main_title center">
                <span><em></em></span>
                <h2>CATEGORIES</h2>
            </div>
            <!-- /main_title -->
            <div class="owl-carousel owl-theme categories_carousel">
                @foreach ($business_types as $obj)
                    <div class="item">
                        <a href="#0">
                            {{-- <span>{{ $obj->business_number }}</span> --}}
                            <img src="{{ asset($obj->picture) }}" alt="">
                            <h3>{{ $obj->name }}</h3>
                        </a>
                    </div>
                @endforeach
            </div>
            <div style="text-align: center; margin-top:10px">
                <a href="#">
                    <p>Show more categories</p>
                </a>
            </div>
            <!-- /carousel -->
        </div>
        <!-- /container -->
    </div>
    <div class="container margin_60_40">
        <div class="main_title center">
            <span><em></em></span>
            <h2>NEWEST LISTING</h2>
            <div>
                <a href="#0">View All</a>
            </div>
        </div>

        <div class="owl-carousel owl-theme carousel_4">
            @for ($i = 0; $i < 5; $i++)
                @foreach ($newlisting_businesses as $obj)
                    <div class="item">
                        <div class="strip">
                            <figure>
                                <span class="favorite">
                                    <i onclick="addFavorite(event,this,{{ $obj->id }}, `{{ $obj->picture }}`, `{{ $obj->favorites && count($obj->favorites) > 0 ? $obj->favorites : null }}`)"
                                        class="@if ($obj->favorites && count($obj->favorites) > 0) fas @else far @endif fa-heart"></i>
                                </span>
                                <img src="{{ asset('user_assets/img/lazy-placeholder.png') }}"
                                    data-src="{{ asset($obj->picture) }}" class="owl-lazy" alt="">
                                <a href="{{ route('user-detail', $obj->id) }}" class="strip_info">
                                    <small>{{ @$obj->businesstype->name }}</small>
                                    <div class="item_title">
                                        <h3>{{ $obj->name }}</h3>
                                        <small>{{ $obj->address }}</small>
                                    </div>
                                </a>
                            </figure>
                            <ul>
                                <li>{{ $obj->review_count }} Reviews</li>
                                <li class="rating">
                                    @include('components.rating',
                                    ['rating'=> $obj->review_rating,'starsize'=>18,'scoreshow'=>true])
                                </li>
                            </ul>
                        </div>
                    </div>
                @endforeach
            @endfor
        </div>
        <!-- /carousel -->
    </div>
    @include('components.wish-modal');
@endsection

@section('script')
    @include('components.toastr')

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
                console.log(place)
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
        src="https://maps.googleapis.com/maps/api/js?key={{ Config::get('const.GOOGLE_MAP_KEY') }}&libraries=places&callback=initMap">
    </script>

@endsection
