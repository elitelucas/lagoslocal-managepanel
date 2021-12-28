@extends('lagos-user.layouts.layout-master')

@section('head')
    <!-- SPECIFIC CSS -->
    <link href="{{ asset('user_assets/css/listing.css') }}" rel="stylesheet">
    <link href="{{ asset('user_assets/css/home.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
@endsection

@section('content')
    <div class="page_header element_to_stick">
        @include('components.business-type-bar')
        <div class="container" style="margin-top: 30px">
            <div class="row">
                <div class="col-12" style="text-align: center">
                    <h1 style="font-size: 2rem">Restaurants in Abule Egba</h1>
                </div>
            </div>
            <!-- /row -->
        </div>
    </div>

    <!-- /page_header -->
    <div class="collapse" id="collapseMap">
        {{-- <div id="map" class="map"></div> --}}
    </div>
    <!-- /Map -->

    <div class="margin_30_40" style="padding: 50px;">
        <div class="row">
            <aside class="col-xl-2 col-lg-12 sidebar_fixed">
                <div class="clearfix">
                    <a class="btn_map mobile btn_filters" data-toggle="collapse" href="#collapseMap"><i
                            class="icon_pin_alt"></i></a>
                    <a href="#0" class="open_filters btn_filters"><i class="icon_adjust-vert"></i><span>Filters</span></a>
                </div>

                <div class="filter_col">
                    <div class="inner_bt"><a href="#" class="open_filters"><i class="icon_close"></i></a>
                    </div>
                    <p>Filters</p>
                    <!-- /filter_type -->
                    <div class="filter_type">
                        <h4><a href="#filter_1" data-toggle="collapse" class="closed">Spent</a></h4>
                        <div class="collapse " id="filter_1">
                            <ul>
                                <li>
                                    <label class="container_check">$
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="container_check">$$
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="container_check">$$$
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="container_check">$$$$
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="filter_type">
                        <h4><a href="#filter_2" data-toggle="collapse" class="closed">Establishment Type</a></h4>
                        <div class="collapse " id="filter_2">
                            <ul>
                                <li>
                                    <label class="container_check">Active Life
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="container_check">Arts & Entertainment
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="container_check">Beauty & Spas
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="container_check">Education
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="container_check">Event Planning & Services
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="container_check">Financial Services
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="container_check">Mass Media
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="container_check">Public Services & Government
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="container_check">Shopping
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <!-- /filter_type -->
                    </div>

                    <!-- /filter_type -->
                    <div class="filter_type">
                        <h4><a href="#filter_4" data-toggle="collapse" class="closed">Restaurant features</a></h4>
                        <div class="collapse " id="filter_4">
                            <ul>
                                <li>
                                    <label class="container_check">Delivery
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="container_check">Takeout
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="container_check">Pick up
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /filter_type -->
                    <div class="filter_type">
                        <h4><a href="#filter_3" data-toggle="collapse" class="closed">Cuisine</a></h4>
                        <div class="collapse " id="filter_3">
                            <ul>
                                <li>
                                    <label class="container_check">American
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="container_check">Chinese
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="container_check">European
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="container_check">Japanese
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="container_check">Nigerian
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /filter_type -->
                    <div class="buttons">
                        <a href="#0" class="btn_1 full-width">Filter</a>
                    </div>
                </div>
            </aside>
            <div class="col-xl-6 col-lg-5    ">
                <div class="list_home custom_list_list">
                    <ul>
                        @for ($i = 0; $i < 5; $i++)
                            @foreach ($businesses as $obj)
                                <li>
                                    <a href="{{ route('user-detail', $obj->id) }}">
                                        <figure>
                                            <img src="{{ asset('user_assets/img/lazy-placeholder.png') }}"
                                                data-src="{{ asset($obj->picture) }}" alt="" class="lazy">
                                            <span class="favorite">
                                                <i class="@if ($obj->favorites && count($obj->favorites) > 0) fas @else far @endif fa-heart"
                                                    onclick="addFavorite(event,this,{{ $obj->id }}, `{{ $obj->picture }}`, `{{ $obj->favorites&&count($obj->favorites) > 0 ? $obj->favorites : null }}`)"></i>
                                            </span>
                                        </figure>
                                        <h3>La Monnalisa</h3>
                                        <ul>
                                            <li class="rating">
                                                @include('components.rating',
                                                ['rating'=> $obj->review_rating,'starsize'=>18,'scoreshow'=>true])
                                            </li>
                                            <li>{{ $obj->review_count }} Reviews</li>
                                        </ul>
                                        <div>
                                            <small>European</small> <small>$$</small>
                                        </div>
                                        <div>
                                            <small><i class="icon_pin_alt"></i> Abule Egba</small>
                                        </div>
                                        <div>
                                            <small><i class="fa fa-check"></i> Delivery</small>
                                            <small><i class="fa fa-check"></i> Checkout</small>
                                        </div>
                                        <div>
                                            <small><i class="fa fa-note"></i> This is my favorite in a sunny place. The
                                                eggs are really good bacon... <strong>more</strong></small>
                                        </div>
                                    </a>
                                </li>
                            @endforeach
                        @endfor
                    </ul>
                </div>
                <div class="pagination_fg">
                    <a href="#">&laquo;</a>
                    <a href="#" class="active">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">4</a>
                    <a href="#">5</a>
                    <a href="#">&raquo;</a>
                </div>
            </div>

            <div class="col-xl-4 col-lg-7 sidebar_fixed">
                <div id="map" class="map" style="width:100%; height: 700px"></div>
            </div>
            <!-- /col -->
        </div>
    </div>

    @include('components.wish-modal');

@endsection

@section('script')
    @include('components.toastr')

    <!-- SPECIFIC SCRIPTS -->
    <script src="user_assets/js/sticky_sidebar.min.js"></script>
    <script src="user_assets/js/specific_listing.js"></script>

    <!-- Map -->
    <script src="user_assets/js/main_map_scripts.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key={{ Config::get('const.GOOGLE_MAP_KEY') }}&&callback=initMap"
        async defer></script>

    <script>
        var data_markersData = {
            'Marker': [{
                    type_point: 'Italian Food',
                    name: 'Restaurant Name',
                    location_latitude: 48.865633,
                    location_longitude: 2.321236,
                    map_image_url: 'user_assets/img/thumb_map_single_restaurant.jpg',
                    rate: 'Superb | 7.5',
                    name_point: 'Restaurant Name',
                    get_directions_start_address: '',
                    phone: '+3934245255',
                    url_point: 'detail-restaurant.html'
                },
                {
                    type_point: 'Italian Food',
                    name: 'Restaurant Name',
                    location_latitude: 48.854183,
                    location_longitude: 2.354808,
                    map_image_url: 'user_assets/img/thumb_map_single_restaurant.jpg',
                    rate: 'Superb | 7.5',
                    name_point: 'Restaurant Name',
                    get_directions_start_address: '',
                    phone: '+3934245255',
                    url_point: 'detail-restaurant.html'
                },
                {
                    type_point: 'Italian Food',
                    name: 'Restaurant Name',
                    location_latitude: 48.863893,
                    location_longitude: 2.342348,
                    map_image_url: 'user_assets/img/thumb_map_single_restaurant.jpg',
                    rate: 'Superb | 7.5',
                    name_point: 'Restaurant Name',
                    get_directions_start_address: '',
                    phone: '+3934245255',
                    url_point: 'detail-restaurant.html'
                },
                {
                    type_point: 'Italian Food',
                    name: 'Restaurant Name',
                    location_latitude: 48.860642,
                    location_longitude: 2.352245,
                    map_image_url: 'user_assets/img/thumb_map_single_restaurant.jpg',
                    rate: 'Superb | 7.5',
                    name_point: 'Restaurant Name',
                    get_directions_start_address: '',
                    phone: '+3934245255',
                    url_point: 'detail-restaurant.html'
                },
                {
                    type_point: 'Italian Food',
                    name: 'Restaurant Name',
                    location_latitude: 48.858370,
                    location_longitude: 2.294481,
                    map_image_url: 'user_assets/img/thumb_map_single_restaurant.jpg',
                    rate: 'Superb | 7.5',
                    name_point: 'Restaurant Name',
                    get_directions_start_address: '',
                    phone: '+3934245255',
                    url_point: 'detail-restaurant.html'
                },
                {
                    type_point: 'Italian Food',
                    name: 'Restaurant Name',
                    location_latitude: 48.837273,
                    location_longitude: 2.335387,
                    map_image_url: 'user_assets/img/thumb_map_single_restaurant.jpg',
                    rate: 'Superb | 7.5',
                    name_point: 'Restaurant Name',
                    get_directions_start_address: '',
                    phone: '+3934245255',
                    url_point: 'detail-restaurant.html'
                },
                {
                    type_point: 'Italian Food',
                    name: 'Restaurant Name',
                    location_latitude: 48.860819,
                    location_longitude: 2.354507,
                    map_image_url: 'user_assets/img/thumb_map_single_restaurant.jpg',
                    rate: 'Superb | 7.5',
                    name_point: 'Restaurant Name',
                    get_directions_start_address: '',
                    phone: '+3934245255',
                    url_point: 'detail-restaurant.html'
                },
                {
                    type_point: 'Italian Food',
                    name: 'Restaurant Name',
                    location_latitude: 48.853798,
                    location_longitude: 2.333328,
                    map_image_url: 'user_assets/img/thumb_map_single_restaurant.jpg',
                    rate: 'Superb | 7.5',
                    name_point: 'Restaurant Name',
                    get_directions_start_address: '',
                    phone: '+3934245255',
                    url_point: 'detail-restaurant.html'
                },
                {
                    type_point: 'Italian Food',
                    name: 'Restaurant Name',
                    location_latitude: 48.862880,
                    location_longitude: 2.287205,
                    map_image_url: 'user_assets/img/thumb_map_single_restaurant.jpg',
                    rate: 'Superb | 7.5',
                    name_point: 'Restaurant Name',
                    get_directions_start_address: '',
                    url_point: 'detail-restaurant.html'
                },
                {
                    type_point: 'Italian Food',
                    name: 'Restaurant Name',
                    location_latitude: 48.865784,
                    location_longitude: 2.307314,
                    map_image_url: 'user_assets/img/thumb_map_single_restaurant.jpg',
                    rate: 'Superb | 7.5',
                    name_point: 'Restaurant Name',
                    get_directions_start_address: '',
                    phone: '+3934245255',
                    url_point: 'detail-restaurant.html'
                },
                {
                    type_point: 'Italian Food',
                    name: 'Restaurant Name',
                    location_latitude: 48.852729,
                    location_longitude: 2.350564,
                    map_image_url: 'user_assets/img/thumb_map_single_restaurant.jpg',
                    rate: 'Superb | 7.5',
                    name_point: 'Restaurant Name',
                    get_directions_start_address: '',
                    phone: '+3934245255',
                    url_point: 'detail-restaurant.html'
                },
                {
                    type_point: 'Italian Food',
                    name: 'Restaurant Name',
                    location_latitude: 48.870587,
                    location_longitude: 2.318943,
                    map_image_url: 'user_assets/img/thumb_map_single_restaurant.jpg',
                    rate: 'Superb | 7.5',
                    name_point: 'Restaurant Name',
                    get_directions_start_address: '',
                    phone: '+3934245255',
                    url_point: 'detail-restaurant.html'
                }
            ]

        };
    </script>
@endsection
