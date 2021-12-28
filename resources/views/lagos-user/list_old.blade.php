@extends('lagos-user.layouts.layout-master')

@section('head')
    <!-- SPECIFIC CSS -->
    <link href="{{ asset('user_assets/css/listing.css') }}" rel="stylesheet">
@endsection

@section('content') 
    <div class="page_header element_to_stick">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7 col-md-7 d-none d-md-block">
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Category</a></li>
                            <li>Page active</li>
                        </ul>
                    </div>
                    <h1>145 businesses in Lagos city</h1>
                </div>
                <div class="col-xl-4 col-lg-5 col-md-5">
                    <div class="search_bar_list">
                        <input type="text" class="form-control" placeholder="Search again...">
                        <input type="submit" value="Search">
                    </div>
                </div>
            </div>
            <!-- /row -->
        </div>
    </div>
    <!-- /page_header -->
    <div class="collapse" id="collapseMap">
        <div id="map" class="map"></div>
    </div>
    <!-- /Map -->

    <div class="container margin_30_40">
        <div class="row">
            <aside class="col-lg-3" id="sidebar_fixed">
                <div class="clearfix">
                    <a class="btn_map d-flex align-items-center justify-content-center" data-toggle="collapse"
                        href="#collapseMap" aria-expanded="false" aria-controls="collapseMap"><span class="btn_map_txt"
                            data-text-swap="Hide Map" data-text-original="View on Map">View on
                            Map</span></a>
                    <div class="sort_select">
                        <select name="sort" id="sort">
                            <option value="popularity" selected="selected">Sort by Popularity</option>
                            <option value="rating">Sort by Average rating</option>
                            <option value="date">Sort by newness</option>
                        </select>
                    </div>
                    <a class="btn_map mobile btn_filters" data-toggle="collapse" href="#collapseMap"><i
                            class="icon_pin_alt"></i></a>
                    <a href="#0" class="open_filters btn_filters"><i class="icon_adjust-vert"></i><span>Filters</span></a>
                </div>
                <div class="filter_col">
                    <div class="inner_bt"><a href="#" class="open_filters"><i class="icon_close"></i></a>
                    </div>
                    <div class="filter_type">
                        <h4><a href="#filter_1" data-toggle="collapse" class="opened">Categories</a></h4>
                        <div class="collapse show" id="filter_1">
                            <ul>
                                <li>
                                    <label class="container_check">Active Life <small>12</small>
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="container_check">Arts & Entertainment <small>24</small>
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="container_check">Beauty & Spas <small>23</small>
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="container_check">Education <small>11</small>
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="container_check">Event Planning & Services <small>18</small>
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="container_check">Financial Services <small>12</small>
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="container_check">Mass Media <small>15</small>
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="container_check">Public Services & Government <small>18</small>
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="container_check">Shopping <small>45</small>
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
                        <h4><a href="#filter_2" data-toggle="collapse" class="closed">Rating</a></h4>
                        <div class="collapse" id="filter_2">
                            <ul>
                                <li>
                                    <label class="container_check">Superb 9+ <small>06</small>
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="container_check">Very Good 8+ <small>12</small>
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="container_check">Good 7+ <small>17</small>
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="container_check">Pleasant 6+ <small>43</small>
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /filter_type -->
                    {{-- <div class="filter_type">
                        <h4><a href="#filter_3" data-toggle="collapse" class="closed">Distance</a></h4>
                        <div class="collapse" id="filter_3">
                            <div class="distance"> Radius around selected destination <span></span> km</div>
                            <div class="add_bottom_15"><input type="range" min="10" max="100" step="10" value="30"
                                    data-orientation="horizontal"></div>
                        </div>
                    </div> --}}
                    <!-- /filter_type -->
                    <div class="filter_type">
                        <h4><a href="#filter_4" data-toggle="collapse" class="closed">Price</a></h4>
                        <div class="collapse" id="filter_4">
                            <ul>
                                <li>
                                    <label class="container_check">$0 — $50<small>11</small>
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="container_check">$50 — $100<small>08</small>
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="container_check">$100 — $150<small>05</small>
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="container_check">$150 — $200<small>18</small>
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

            <div class="col-lg-9">
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                        <div class="strip">
                            <figure>
                                <span class="ribbon off">-30%</span>
                                <img src="user_assets/img/lazy-placeholder.png" data-src="user_assets/img/location_1.jpg"
                                    class="img-fluid lazy" alt="">
                                <a href="detail-restaurant.html" class="strip_info">
                                    <small>Pizza</small>
                                    <div class="item_title">
                                        <h3>Da Alfredo</h3>
                                        <small>27 Old Gloucester St</small>
                                    </div>
                                </a>
                            </figure>
                            <ul>
                                <li><span>Avg. Price 24$</span></li>
                                <li>
                                    <div class="score"><span>Superb<em>350 Reviews</em></span><strong>8.9</strong>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /strip grid -->
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                        <div class="strip">
                            <figure>
                                <span class="ribbon off">-40%</span>
                                <img src="user_assets/img/lazy-placeholder.png" data-src="user_assets/img/location_2.jpg"
                                    class="img-fluid lazy" alt="">
                                <a href="detail-restaurant.html" class="strip_info">
                                    <small>Burghers</small>
                                    <div class="item_title">
                                        <h3>Best Burghers</h3>
                                        <small>27 Old Gloucester St</small>
                                    </div>
                                </a>
                            </figure>
                            <ul>
                                <li><span>Avg. Price 14$</span></li>
                                <li>
                                    <div class="score"><span>Superb<em>350 Reviews</em></span><strong>9.5</strong>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /strip grid -->
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                        <div class="strip">
                            <figure>
                                <img src="user_assets/img/lazy-placeholder.png" data-src="user_assets/img/location_3.jpg"
                                    class="img-fluid lazy" alt="">
                                <a href="detail-restaurant.html" class="strip_info">
                                    <small>Vegetarian</small>
                                    <div class="item_title">
                                        <h3>Vego Life</h3>
                                        <small>27 Old Gloucester St</small>
                                    </div>
                                </a>
                            </figure>
                            <ul>
                                <li><span>Avg. Price 21$</span></li>
                                <li>
                                    <div class="score"><span>Superb<em>350 Reviews</em></span><strong>7.5</strong>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /strip grid -->
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                        <div class="strip">
                            <figure>
                                <span class="ribbon off">-25%</span>
                                <img src="user_assets/img/lazy-placeholder.png" data-src="user_assets/img/location_4.jpg"
                                    class="img-fluid lazy" alt="">
                                <a href="detail-restaurant.html" class="strip_info">
                                    <small>Japanese</small>
                                    <div class="item_title">
                                        <h3>Sushi Temple</h3>
                                        <small>27 Old Gloucester St</small>
                                    </div>
                                </a>
                            </figure>
                            <ul>
                                <li><span>Avg. Price 12$</span></li>
                                <li>
                                    <div class="score"><span>Superb<em>350 Reviews</em></span><strong>9.5</strong>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /strip grid -->
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                        <div class="strip">
                            <figure>
                                <span class="ribbon off">-30%</span>
                                <img src="user_assets/img/lazy-placeholder.png" data-src="user_assets/img/location_5.jpg"
                                    class="img-fluid lazy" alt="">
                                <a href="detail-restaurant.html" class="strip_info">
                                    <small>Pizza</small>
                                    <div class="item_title">
                                        <h3>Auto Pizza</h3>
                                        <small>27 Old Gloucester St</small>
                                    </div>
                                </a>
                            </figure>
                            <ul>
                                <li><span>Avg. Price 25$</span></li>
                                <li>
                                    <div class="score"><span>Superb<em>350 Reviews</em></span><strong>7.0</strong>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /strip grid -->
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                        <div class="strip">
                            <figure>
                                <img src="user_assets/img/lazy-placeholder.png" data-src="user_assets/img/location_6.jpg"
                                    class="img-fluid lazy" alt="">
                                <a href="detail-restaurant.html" class="strip_info">
                                    <small>Burghers</small>
                                    <div class="item_title">
                                        <h3>Alliance</h3>
                                        <small>27 Old Gloucester St</small>
                                    </div>
                                </a>
                            </figure>
                            <ul>
                                <li><span>Avg. Price 18$</span></li>
                                <li>
                                    <div class="score"><span>Superb<em>350 Reviews</em></span><strong>8.9</strong>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /strip grid -->
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                        <div class="strip">
                            <figure>
                                <span class="ribbon off">-30%</span>
                                <img src="user_assets/img/lazy-placeholder.png" data-src="user_assets/img/location_7.jpg"
                                    class="img-fluid lazy" alt="">
                                <a href="detail-restaurant.html" class="strip_info">
                                    <small>Chinese</small>
                                    <div class="item_title">
                                        <h3>Alliance</h3>
                                        <small>27 Old Gloucester St</small>
                                    </div>
                                </a>
                            </figure>
                            <ul>
                                <li><span>Avg. Price 25$</span></li>
                                <li>
                                    <div class="score"><span>Superb<em>350 Reviews</em></span><strong>8.9</strong>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /strip grid -->
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                        <div class="strip">
                            <figure>
                                <img src="user_assets/img/lazy-placeholder.png" data-src="user_assets/img/location_8.jpg"
                                    class="img-fluid lazy" alt="">
                                <a href="detail-restaurant.html" class="strip_info">
                                    <small>Sushi</small>
                                    <div class="item_title">
                                        <h3>Dragon Tower</h3>
                                        <small>27 Old Gloucester St</small>
                                    </div>
                                </a>
                            </figure>
                            <ul>
                                <li><span>Avg. Price 28$</span></li>
                                <li>
                                    <div class="score"><span>Superb<em>350 Reviews</em></span><strong>8.9</strong>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /strip grid -->
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                        <div class="strip">
                            <figure>
                                <img src="user_assets/img/lazy-placeholder.png" data-src="user_assets/img/location_9.jpg"
                                    class="img-fluid lazy" alt="">
                                <a href="detail-restaurant.html" class="strip_info">
                                    <small>Mexican</small>
                                    <div class="item_title">
                                        <h3>El Paso Tacos</h3>
                                        <small>27 Old Gloucester St</small>
                                    </div>
                                </a>
                            </figure>
                            <ul>
                                <li><span>Avg. Price 29$</span></li>
                                <li>
                                    <div class="score"><span>Superb<em>350 Reviews</em></span><strong>8.9</strong>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /strip grid -->
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                        <div class="strip">
                            <figure>
                                <img src="user_assets/img/lazy-placeholder.png" data-src="user_assets/img/location_10.jpg"
                                    class="img-fluid lazy" alt="">
                                <a href="detail-restaurant.html" class="strip_info">
                                    <small>Bakery</small>
                                    <div class="item_title">
                                        <h3>Monnalisa</h3>
                                        <small>27 Old Gloucester St</small>
                                    </div>
                                </a>
                            </figure>
                            <ul>
                                <li><span>Avg. Price 29$</span></li>
                                <li>
                                    <div class="score"><span>Superb<em>350 Reviews</em></span><strong>8.9</strong>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /strip grid -->
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                        <div class="strip">
                            <figure>
                                <img src="user_assets/img/lazy-placeholder.png" data-src="user_assets/img/location_11.jpg"
                                    class="img-fluid lazy" alt="">
                                <a href="detail-restaurant.html" class="strip_info">
                                    <small>Mexican</small>
                                    <div class="item_title">
                                        <h3>Guachamole</h3>
                                        <small>135 Newtownards Road</small>
                                    </div>
                                </a>
                            </figure>
                            <ul>
                                <li><span>Avg. Price 29$</span></li>
                                <li>
                                    <div class="score"><span>Superb<em>350 Reviews</em></span><strong>8.9</strong>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /strip grid -->
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                        <div class="strip">
                            <figure>
                                <img src="user_assets/img/lazy-placeholder.png" data-src="user_assets/img/location_12.jpg"
                                    class="img-fluid lazy" alt="">
                                <a href="detail-restaurant.html" class="strip_info">
                                    <small>Chinese</small>
                                    <div class="item_title">
                                        <h3>Pechino Express</h3>
                                        <small>27 Old Gloucester St</small>
                                    </div>
                                </a>
                            </figure>
                            <ul>
                                <li><span>Avg. Price 29$</span></li>
                                <li>
                                    <div class="score"><span>Superb<em>350 Reviews</em></span><strong>8.9</strong>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /strip grid -->
                </div>
                <!-- /row -->
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
            <!-- /col -->
        </div>
    </div>
    <!-- /container -->
@endsection

@section('script')
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
