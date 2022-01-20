@extends('lagos-user.layouts.layout-home')
@section('head')
    <!-- SPECIFIC CSS -->
    <link href="{{ asset('user_assets/css/home.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
@endsection

@section('content')
    <div class="hero_single version_2">
        <div class="opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.3)">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-9 col-lg-10 col-md-8">
                        <h1>LOCAL BUSINESS NEARBY</h1>
                        {{-- <p>All businesses <span class="element" style="font-weight: 500"></span></p> --}}
                        <form action="{{ url('/list') }}" method="get" id="search_form">
                            <input type="hidden" name="page" value="1">
                            <div class="row no-gutters custom-search-input">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input class="form-control" id="search_business_type" type="text"
                                            placeholder="What are you looking for..." autocomplete="off" required>
                                        <input id="search_business_type_id" name="business_type_id" type="hidden">
                                        <i class="icon_search"></i>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control no_border_r" name="address" type="text" id="autocomplete"
                                            placeholder="Address, neighborhood..." required>
                                        <i class="icon_pin_alt"></i>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <input type="submit" value="Search">
                                </div>
                            </div>
                            <div class="row no-gutters" style="position: absolute; width:100%" id="trending_search_wrapper">
                                <div class="col-lg-4 bg-white black-color border border-dark border-radius-5 mt-1 text-left p-2 box-shadow"
                                    id="trending_search_div" style="display:none">
                                    <div class="mb-3">
                                        <h5>Recently Viewed</h5>
                                        <div>
                                            @foreach ($recently_visited as $obj)
                                                <div class="mb-1 cursor-pointer businesses"
                                                    data-business-id="{{ $obj->business_id }}">
                                                    {{ $obj->business->name }}
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div>
                                        <h5>Trending Searches</h5>
                                        <div>
                                            @foreach ($trending_searches as $obj)
                                                <div class="mb-1 cursor-pointer business-types"
                                                    data-business-type-id="{{ $obj->business_type_id }}"
                                                    data-business-type-name="{{ $obj->businesstype->name }}">
                                                    <img src="{{ asset('user_assets/img/business_type_icons/circle/' . $obj->businesstype->name . '.png') }}"
                                                        alt="">
                                                    {{ $obj->businesstype->name }}
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row no-gutters" id="search_result_wrapper" style="position: absolute; width:100%">

                            </div>
                            <!-- /row -->
                        </form>
                    </div>
                </div>
                <!-- /row -->
            </div>
        </div>
    </div>

    <div class="add_top_30 text-center">
        @foreach ($popular_business_types as $obj)
            <button style="vertical-align: baseline" class="btn round-btn popular-business-types border border-dark"
                data-business-type-id="{{ $obj->id }}" data-business-type-name="{{ $obj->name }}">
                <img src="{{ asset('user_assets/img/business_type_icons/raw/' . $obj->name . '.png') }}" alt="">
                {{ $obj->name }}
            </button>
        @endforeach
    </div>

    <div class="container margin_60_40" id="popular_businesses">
        <div class="main_title center">
            <span><em></em></span>
            <h2>POPULAR BUSINESSES</h2>
            {{-- <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p> --}}
        </div>

        <div class="owl-carousel owl-theme carousel_4">
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
                                <small>{{ $obj->businesstype->name }}</small>
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
        </div>
        <!-- /carousel -->
    </div>
    <div class="bg_gray">
        <div class="container margin_60_40" id="categories">
            <div class="main_title center">
                <span><em></em></span>
                <h2>CATEGORIES</h2>
            </div>
            <!-- /main_title -->
            <div id="business_categories">
                <div class="owl-carousel owl-theme categories_carousel">
                    @foreach ($business_types as $obj)
                        <div class="item">
                            <a href="javascript:;" class="popular-business-types"
                                data-business-type-id="{{ $obj->id }}" data-business-type-name="{{ $obj->name }}">
                                {{-- <span>{{ $obj->business_number }}</span> --}}
                                <img src="{{ asset($obj->picture) }}" alt="" style="object-fit: contain">
                                <h3>{{ $obj->name }}</h3>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>


            <div style="text-align: center; margin-top:10px">
                <a href="javascript:;" onclick="moreCategories()">
                    <p>Show more categories</p>
                </a>
            </div>
            <!-- /carousel -->
        </div>
        <!-- /container -->
    </div>
    <div class="container margin_60_40" id="newest_businesses">
        <div class="main_title center">
            <span><em></em></span>
            <h2>NEWEST LISTING</h2>
            {{-- <div>
                <a href="#0">View All</a>
            </div> --}}
        </div>

        <div class="owl-carousel owl-theme carousel_4">
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
        </div>
        <!-- /carousel -->
    </div>
    <a id="go_detail" href="{{ url('detail') }}"></a>
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
        var asset = '{{ asset('/') }}';

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
        $(document).ready(function() {
            let val = '';
            $('#search_business_type').keyup(function(e) {
                e.preventDefault();
                val = $(this).val();
                let i = 1;
                if (val == '') {
                    $('#search_result_wrapper').empty();
                    $('#trending_search_div').css('display', 'block')
                } else {
                    $('#trending_search_div').css('display', 'none')
                    $('#search_result_wrapper').css('display', 'block')
                }

                if (val != '') {
                    console.log('sdf')
                    $.ajax({
                        type: 'POST',
                        url: '/home/search-business',
                        data: {
                            "_token": "{{ csrf_token() }}",
                            val
                        },
                        success: function(data) {
                            $('#search_result_wrapper').empty();
                            if (val != '' && data.success && data.business_types &&
                                data.business_types.length > 0) {
                                $('#search_result_wrapper').html(`
                                        <div id="search_result_div"
                                            class="col-lg-4 bg-white black-color border border-dark border-radius-5 mt-1 text-left p-2 ">
                                        </div>
                                    `)
                                data.business_types.forEach(function(item) {
                                    $('#search_result_div').append(`
                                        <div class="mb-1 cursor-pointer business-types"
                                            data-business-type-id="${item.id}"
                                            data-business-type-name="${item.name}">
                                            <svg width="28" height="28" viewBox="0 0 34 34" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10 9V12C10 13.6569 11.3431 15 13 15C14.6569 15 16 13.6569 16 12V9M13 9V25V9ZM23 17C21 16.3333 20 15 20 13C20 11 21 9.66667 23 9V25V17Z"
                                                    stroke="#333333" stroke-linecap="square" />
                                                <rect x="0.5" y="0.5" width="33" height="33" rx="16.5" stroke="#333333" />
                                            </svg>
                                            ${item.name}
                                        </div>
                                    `)
                                })
                            }
                        }
                    });
                } else {
                    $('#search_result_wrapper').empty();
                }

            })

            $('#search_business_type').focus(function() {
                if (val == '')
                    $('#trending_search_div').css('display', 'block')
                else
                    $('#search_result_wrapper').css('display', 'block')

            }).blur(function() {
                $('#trending_search_div').css('display', 'none')
            })


            $(document).on('mousedown', '.business-types', function(e) {
                let business_type_id = $(this).attr('data-business-type-id')
                let business_type_name = $(this).attr('data-business-type-name')
                $('#search_business_type').val(business_type_name)
                $('#search_business_type_id').val(business_type_id)

                $('#search_result_wrapper').css('display', 'none')
            })
            $(document).on('mousedown', '.businesses', function() {
                let business_id = $(this).attr('data-business-id');
                $('#go_detail').attr('href', '{{ url('detail') }}' + '/' + business_id);
                $('#go_detail')[0].click();
            })


            $(document).on('mousedown', '.popular-business-types', function(e) {
                let business_type_id = $(this).attr('data-business-type-id')
                let business_type_name = $(this).attr('data-business-type-name')
                $('#search_business_type').val(business_type_name)
                $('#search_business_type_id').val(business_type_id)

                $('#search_form').submit();

            })
        })

        function moreCategories() {
            $.ajax({
                type: 'POST',
                url: '/home/more-categories',
                data: {
                    "_token": "{{ csrf_token() }}",
                },
                success: function(data) {
                    if (data.success) {
                        $('#business_categories').html(data.html)
                        var owl = $(".owl-carousel");
                        owl.owlCarousel({
                            items: 4,
                            loop: false,
                            margin: 20,
                            dots: false,
                            lazyLoad: true,
                            navText: ["<i class='arrow_carrot-left'></i>",
                                "<i class='arrow_carrot-right'></i>"
                            ],
                            nav: true,
                            responsive: {
                                0: {
                                    items: 1,
                                    nav: false,
                                    dots: true
                                },
                                560: {
                                    items: 2,
                                    nav: false,
                                    dots: true
                                },
                                768: {
                                    items: 2,
                                    nav: false,
                                    dots: true
                                },
                                991: {
                                    items: 3,
                                    nav: true,
                                    dots: false
                                },
                                1230: {
                                    items: 4,
                                    nav: true,
                                    dots: false
                                }
                            }
                        });

                    }

                }
            });
        }
    </script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key={{ Config::get('const.GOOGLE_MAP_KEY') }}&libraries=places&callback=initMap">
    </script>

@endsection
