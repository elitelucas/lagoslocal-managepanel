@extends('lagos-user.layouts.layout-master')

@section('head')
    <link href="{{ asset('/user_assets/css/detail-page.css') }}" rel="stylesheet">
    <link href="{{ asset('/user_assets/css/toggle-type-bar.css') }}" rel="stylesheet">
    <link href="{{ asset('user_assets/css/listing.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

    <meta name="description"
        content="If you are a curious troop of common buyers or seasoned businessmen, looking for new housing schemes in Lahore 2022, then this blog is for you.">
    <link rel="canonical" href="{{ Request::fullUrl() }}">

    <meta property="og:image" content="{{ asset($business->picture) }}" />
    <meta property="og:image:alt" content="Select a business" />

    <!-- open graph tags for facebook -->
    <meta name="facebook:title" content="Business Chapter">
    <meta name="facebook:description" content="In this section, you can create a business">
    <meta name="facebook:image" itemprop="image" content="{{ asset($business->picture) }}">
    <meta name="facebook:card" content="In this section, you can create a business.">
@endsection

@section('content')
    <div class="page_header element_to_stick">
        @include('components.business-type-bar')
    </div>

    <div class="margin_30_40" style="padding: 50px;">
        <div class="container margin_detail">
            <div>
                <h5>
                    {{ $business->name }}
                </h5>
                <div class="d-flex justify-content-between detail-header">
                    <div class="detail-align">
                        <div>
                            @include('components.rating',
                            ['rating'=> $business->review_rating,'starsize'=>13,'scoreshow'=>true])
                        </div>
                        <div class="detail-ml">
                            open until {{ $business->close_time }}
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="mr-10">
                            <a href="{{ url('visited') }}">
                                <i class="fas fa-edit">
                                    write a review
                                </i>
                            </a>
                        </div>
                        <div class="mr-10">
                            <a href="javascript:;">
                                <i onclick="addFavorite(event,this,{{ $business->id }}, `{{ $business->picture }}`, `{{ $business->favorites && count($business->favorites) > 0 ? $business->favorites : null }}`)"
                                    class="@if ($business->favorites && count($business->favorites) > 0) fas @else far @endif fa-heart">
                                    save
                                </i>
                            </a>
                        </div>
                        <div>
                            <a href="javascript:;"
                                onclick="window.open('http://www.facebook.com/sharer.php?u={{ url('detail/' . $business->id) }}','newwindow','width=500,height=500'); return false;">
                                <i class="fas fa-share">
                                    share
                                </i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="mt-10 mb-10 row detail-web-images">
                    <div class="col-md-6 col-xs-12">
                        <img class="lazy w-100 object-fit-cover main-image" src="{{ asset($business->picture) }}" alt="">
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="row" style="margin-bottom:30px">
                            @if (isset($business->products[0]->picture))
                                <div class="col-md-6 col-xs-12">
                                    <img class="lazy w-100 object-fit-cover sub-images cursor-pointer product-images"
                                        data-name='{{ $business->products[0]->name }}'
                                        data-picture='{{ $business->products[0]->picture }}'
                                        data-description='{{ $business->products[0]->description }}'
                                        src="{{ asset($business->products[0]->picture) }}" alt="">
                                </div>
                            @endif
                            @if (isset($business->products[1]->picture))
                                <div class="col-md-6 col-xs-12">
                                    <img class="lazy w-100 object-fit-cover sub-images sub-images-radius-top cursor-pointer product-images"
                                        data-name='{{ $business->products[1]->name }}'
                                        data-picture='{{ $business->products[1]->picture }}'
                                        data-description='{{ $business->products[1]->description }}'
                                        src="{{ asset($business->products[1]->picture) }}" alt="">
                                </div>
                            @endif
                        </div>
                        <div class="row">
                            @if (isset($business->products[2]->picture))
                                <div class="col-md-6 col-xs-12">
                                    <img class="lazy w-100 object-fit-cover sub-images cursor-pointer product-images"
                                        data-name='{{ $business->products[2]->name }}'
                                        data-picture='{{ $business->products[2]->picture }}'
                                        data-description='{{ $business->products[2]->description }}'
                                        src="{{ asset($business->products[2]->picture) }}" alt="">
                                </div>
                            @endif
                            @if (isset($business->products[3]->picture))
                                <div class="col-md-6 col-xs-12">
                                    <img class="lazy w-100 object-fit-cover sub-images sub-images-radius-bottom cursor-pointer product-images"
                                        data-name='{{ $business->products[3]->name }}'
                                        data-picture='{{ $business->products[3]->picture }}'
                                        data-description='{{ $business->products[3]->description }}'
                                        src="{{ asset($business->products[3]->picture) }}" alt="">
                                </div>
                            @endif
                        </div>

                    </div>

                </div>
                <div class="detail-mobile-images">
                    <div class="owl-carousel owl-theme categories_carousel">
                        <div class="item">
                            <img class="banner-img cursor-pointer" src="{{ asset($business->picture) }}"
                                alt="">
                        </div>
                        @if (isset($business->products[0]->picture))
                            <div class="item">
                                <img class="banner-img cursor-pointer product-images"
                                    data-name='{{ $business->products[0]->name }}'
                                    data-picture='{{ $business->products[0]->picture }}'
                                    data-description='{{ $business->products[0]->description }}'
                                    src="{{ asset($business->products[0]->picture) }}" alt="">
                            </div>
                        @endif
                        @if (isset($business->products[1]->picture))
                            <div class="item">
                                <img class="banner-img cursor-pointer product-images"
                                    data-name='{{ $business->products[1]->name }}'
                                    data-picture='{{ $business->products[1]->picture }}'
                                    data-description='{{ $business->products[1]->description }}'
                                    src="{{ asset($business->products[1]->picture) }}" alt="">
                            </div>
                        @endif
                        @if (isset($business->products[2]->picture))
                            <div class="item">
                                <img class="banner-img cursor-pointer product-images"
                                    data-name="{{ $business->products[2]->name }}"
                                    data-picture='{{ $business->products[2]->picture }}'
                                    data-description="{{ $business->products[2]->description }}"
                                    src="{{ asset($business->products[2]->picture) }}" alt="">
                            </div>
                        @endif
                        @if (isset($business->products[3]->picture))
                            <div class="item">
                                <img class="banner-img cursor-pointer product-images"
                                    data-name="{{ $business->products[3]->name }}"
                                    data-picture="{{ $business->products[3]->picture }}"
                                    data-description="{{ $business->products[3]->description }}"
                                    src="{{ asset($business->products[3]->picture) }}" alt="">
                            </div>
                        @endif
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div id="collapse-A" role="tabpanel" aria-labelledby="heading-A">
                        <div class="card-body info_content">
                            <div class="add_bottom_25"></div>
                            <h2>Our products</h2>
                            <div class="pictures magnific-gallery clearfix">
                                @if (count($business->products) >= 4)
                                    @for ($i = 4; $i < count($business->products); $i++)
                                        <figure>
                                            <img src="{{ asset('products/1.jpg') }}"
                                                data-src="{{ $business->products[$i]->picture }}"
                                                data-name='{{ $business->products[$i]->name }}'
                                                data-picture='{{ $business->products[$i]->picture }}'
                                                data-description='{{ $business->products[$i]->description }}'
                                                class="lazy cursor-pointer product-images" alt="">

                                        </figure>
                                    @endfor
                                @endif
                            </div>
                            <!-- /pictures -->
                            <h3>Services Offered</h3>
                            <div>
                                <div>
                                    <?php
                                    if (isset($business->services) && count($business->services) > 0) {
                                        foreach ($business->services as $key => $service) {
                                            $service_arr[floor($key / 2)][] = $service;
                                        }
                                    }
                                    ?>

                                    @if (isset($service_arr) && count($service_arr) > 0)
                                        @foreach ($service_arr as $arr)
                                            <div class="row">
                                                @foreach ($arr as $service)
                                                    <div class="col-3">
                                                        <span class="icon_check"></span>
                                                        &nbsp;{{ $service->name }}
                                                    </div>
                                                @endforeach
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                                {{-- <div>
                                    <small>
                                        <strong class="cursor-pointer">Show more</strong>
                                    </small>
                                </div> --}}
                            </div>

                            <hr>
                            <h3>Amenities and More</h3>
                            <div>
                                <div>
                                    @if (isset($business->amenities) && count($business->amenities) > 0)
                                        @foreach ($business->amenities as $amenity)
                                            <div>
                                                <span class="icon_check"></span>
                                                &nbsp;{{ $amenity->name }}
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                                {{-- <div>
                                    <small>
                                        <strong class="cursor-pointer">Show more</strong>
                                    </small>
                                </div> --}}
                            </div>
                            <hr>
                        </div>
                    </div>
                    <!-- /tab -->

                    <div class="card-header" role="tab" id="heading-B">
                        <h5>
                            Reviews
                        </h5>
                    </div>
                    <div class="card-body reviews">
                        {{-- <div class="row add_bottom_45 d-flex align-items-center">
                            <div class="col-md-3">
                                <div id="review_summary">
                                    <strong>8.5</strong>
                                    <em>Superb</em>
                                    <small>Based on 4 reviews</small>
                                </div>
                            </div>
                            <div class="col-md-9 reviews_sum_details">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>Food Quality</h6>
                                        <div class="row">
                                            <div class="col-xl-10 col-lg-9 col-9">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 90%"
                                                        aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-lg-3 col-3"><strong>9.0</strong></div>
                                        </div>
                                        <!-- /row -->
                                        <h6>Service</h6>
                                        <div class="row">
                                            <div class="col-xl-10 col-lg-9 col-9">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 95%"
                                                        aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-lg-3 col-3"><strong>9.5</strong></div>
                                        </div>
                                        <!-- /row -->
                                    </div>
                                    <div class="col-md-6">
                                        <h6>Location</h6>
                                        <div class="row">
                                            <div class="col-xl-10 col-lg-9 col-9">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 60%"
                                                        aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-lg-3 col-3"><strong>6.0</strong></div>
                                        </div>
                                        <!-- /row -->
                                        <h6>Price</h6>
                                        <div class="row">
                                            <div class="col-xl-10 col-lg-9 col-9">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 60%"
                                                        aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-lg-3 col-3"><strong>6.0</strong></div>
                                        </div>
                                        <!-- /row -->
                                    </div>
                                </div>
                                <!-- /row -->
                            </div>
                        </div> --}}

                        <div id="reviews">

                            @foreach ($reviews as $review)
                                <div class="review_card">
                                    <div class="row">
                                        <div class="col-md-2 user_info">
                                            @if (isset($review->user->avatar))
                                                <figure><img src="{{ asset($review->user->avatar) }}" alt=""></figure>
                                            @endif
                                            <h5>{{ $review->user->first_name }} {{ $review->user->last_name }}</h5>
                                        </div>
                                        <div class="col-md-10 review_content">
                                            <div
                                                class="clearfix add_bottom_15 d-flex justify-content-between align-items-center ">
                                                <span class="rating">
                                                    @include('components.rating',
                                                    ['rating'=> $review->rating,'starsize'=>18,'scoreshow'=>true])
                                                </span>
                                                <span>
                                                    {{ date_format($review->created_at, 'Y/m/d') }}
                                                </span>
                                            </div>
                                            <h4>{{ $review->title }}</h4>
                                            <p>{{ $review->content }}</p>
                                            <div>
                                                @if ($review->picture)
                                                    <img class="w-30" src="{{ asset($review->picture) }}"
                                                        alt="">
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /row -->
                                </div>
                            @endforeach


                        </div>
                        <!-- /reviews -->
                        <div class="text-right"><a href="{{ url('visited') }}" class="btn_1">Leave a
                                review</a></div>
                    </div>
                </div>
                <!-- /col -->

                <div class="col-lg-4" id="sidebar_fixed">
                    <div class="p-2 mb-3 border">
                        <div>
                            <h5>
                                Location and Contact
                            </h5>
                        </div>
                        <div id="map" class="map" style="width:100%; height: 300px"></div>
                        @if (isset($business->address))
                            <div>
                                <i class="fas fa-map-marker-alt"></i>
                                <small class="ml-2">{{ $business->address }}</small>
                            </div>
                        @endif
                        @if (isset($business->website))
                            <div>
                                <i class="fas fa-globe"></i>
                                <a target="_blank" href="{{ $business->website }}">
                                    <small class="ml-2">{{ $business->website }}</small>
                                </a>

                            </div>
                        @endif
                        @if (isset($business->call))
                            <div>
                                <i class="fas fa-phone"></i>
                                <small class="ml-2">{{ $business->call }}</small>
                            </div>
                        @endif
                        <div>
                            <i class="far fa-clock"></i>
                            <small class="ml-2">
                                <strong>Mon - @if ($business->sunday_status) Sun @else Sat @endif</strong>
                                @if (isset($business->open_time) && isset($business->close_time))
                                    {{ $business->open_time }} - {{ $business->close_time }}
                                @endif
                            </small>
                        </div>
                        <div>
                            <button class="btn_1 full-width mt-2">Contact</button>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /row -->
        </div>
    </div>
    @include('components.wish-modal');
    @include('components.product-modal')

    <!-- /container -->
@endsection

@section('script')
    @include('components.toastr')

    <!-- SPECIFIC SCRIPTS -->
    <script src="/user_assets/js/sticky_sidebar.min.js"></script>
    <script src="/user_assets/js/specific_listing.js"></script>

    <!-- Map -->

    <script src="/user_assets/js/sticky_sidebar.min.js"></script>
    <script src="/user_assets/js/specific_detail.js"></script>
    <script src="/user_assets/js/datepicker.min.js"></script>
    <script src="/user_assets/js/datepicker_func_1.js"></script>
    <script src="/user_assets/js/toggle-type-bar.js"></script>


    <script>
        var page_name='detail'
        var data_markersData = {
            'Marker': [JSON.parse('{!! $map_data !!}')]
        };
        $(document).on('click', '.product-images',function(){
            let name=$(this).attr('data-name')
            let description=$(this).attr('data-description')
            let picture=$(this).attr('data-picture')
            $('#product_name').text(name)
            $('#product_description').text(description)
            $('#product_image').attr('src',"{{asset('/')}}"+(picture[0]=='/'?picture.substring(1):picture))
            $('#product_modal').modal('show');
        })
    </script>
    <script src="/user_assets/js/main_map_scripts.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key={{ Config::get('const.GOOGLE_MAP_KEY') }}&&callback=initMap"
        async defer></script>
@endsection
