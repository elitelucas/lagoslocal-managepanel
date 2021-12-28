@extends('lagos-user.layouts.layout-master')

@section('head')
    <link href="{{ asset('/user_assets/css/detail-page.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
@endsection

@section('content')

    <div class="m-5 ">
        <h3 class="text-center">
            Favorites
        </h3>
    </div>

    <div class="p-4">
        <div class="mb-3">
            <span class="list-button list-button-active mr-3 cursor-pointer">
                <b> My Lists</b>
            </span>
            <span class="list-button cursor-pointer" onclick="">
                <b>All Favorites</b>
            </span>
        </div>

        <div class="row">
            @foreach ($favorites as $item)
                <div class="col-md-3 xs-12">
                    <a href="{{ route('favorite-detail', $item->name) }}" class="strip_info">
                        <img src="{{ asset($item->picture) }}" alt="">
                        <div>
                            <h5>{{ $item->name }}</h5>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

    <!-- /container -->
@endsection

@section('script')
    @include('components.toastr')

    <!-- SPECIFIC SCRIPTS -->
    <script src="/user_assets/js/sticky_sidebar.min.js"></script>
    <script src="/user_assets/js/specific_listing.js"></script>

    <!-- Map -->
    <script src="/user_assets/js/main_map_scripts.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key={{ Config::get('const.GOOGLE_MAP_KEY') }}&&callback=initMap"
        async defer></script>
    <script src="/user_assets/js/sticky_sidebar.min.js"></script>
    <script src="/user_assets/js/specific_detail.js"></script>
    <script src="/user_assets/js/datepicker.min.js"></script>
    <script src="/user_assets/js/datepicker_func_1.js"></script>


    <script>
        var data_markersData = {
            'Marker': [{
                    type_point: 'Italian Food',
                    name: 'Restaurant Name',
                    location_latitude: 48.865633,
                    location_longitude: 2.321236,
                    map_image_url: '/user_assets/img/thumb_map_single_restaurant.jpg',
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
                    map_image_url: '/user_assets/img/thumb_map_single_restaurant.jpg',
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
                    map_image_url: '/user_assets/img/thumb_map_single_restaurant.jpg',
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
                    map_image_url: '/user_assets/img/thumb_map_single_restaurant.jpg',
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
                    map_image_url: '/user_assets/img/thumb_map_single_restaurant.jpg',
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
                    map_image_url: '/user_assets/img/thumb_map_single_restaurant.jpg',
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
                    map_image_url: '/user_assets/img/thumb_map_single_restaurant.jpg',
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
                    map_image_url: '/user_assets/img/thumb_map_single_restaurant.jpg',
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
                    map_image_url: '/user_assets/img/thumb_map_single_restaurant.jpg',
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
                    map_image_url: '/user_assets/img/thumb_map_single_restaurant.jpg',
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
                    map_image_url: '/user_assets/img/thumb_map_single_restaurant.jpg',
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
                    map_image_url: '/user_assets/img/thumb_map_single_restaurant.jpg',
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
