@extends('lagos-user.layouts.layout-master')

@section('head')
    <!-- SPECIFIC CSS -->
    <link href="{{ asset('user_assets/css/listing.css') }}" rel="stylesheet">
    <link href="{{ asset('user_assets/css/home.css') }}" rel="stylesheet">
    <link href="{{ asset('/user_assets/css/toggle-type-bar.css') }}" rel="stylesheet">

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
                                        <input class="price-rating" type="checkbox" value="1">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="container_check">$$
                                        <input class="price-rating" type="checkbox" value="2">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="container_check">$$$
                                        <input class="price-rating" type="checkbox" value="3">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="container_check">$$$$
                                        <input class="price-rating" type="checkbox" value="4">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="filter_type">
                        <h4><a href="#filter_2" data-toggle="collapse" class="closed">Establishment Type
                                &nbsp;&nbsp;</a>
                        </h4>
                        <div class="collapse " id="filter_2">
                            <ul>
                                @foreach ($business_types as $key => $obj)
                                    @if ($key < 2)
                                        <li>
                                            <label class="container_check">{{ $obj->name }}
                                                <input class="business-type" type="checkbox" value="{{ $obj->id }}">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                    @endif
                                @endforeach
                                <li>
                                    <a href="javascript:;" id="see_all_business_types"><strong>see all</strong></a>
                                </li>
                            </ul>
                        </div>
                        <!-- /filter_type -->
                    </div>

                    <!-- /filter_type -->
                    <div class="filter_type">
                        <h4><a href="#filter_4" data-toggle="collapse" class="closed">Restaurant features</a>
                        </h4>
                        <div class="collapse " id="filter_4">
                            <ul>
                                @foreach ($features as $key => $obj)
                                    @if ($key < 2)
                                        <li>
                                            <label class="container_check">{{ $obj->name }}
                                                <input class="feature" type="checkbox" value="{{ $obj->id }}">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                    @endif
                                @endforeach
                                <li>
                                    <a href="javascript:;" id="see_all_features"><strong>see all</strong></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /filter_type -->
                    <div class="filter_type">
                        <h4><a href="#filter_3" data-toggle="collapse" class="closed">Cuisine</a></h4>
                        <div class="collapse " id="filter_3">
                            <ul>
                                @foreach ($cuisines as $key => $obj)
                                    @if ($key < 2)
                                        <li>
                                            <label class="container_check">{{ $obj->name }}
                                                <input class="cuisine" type="checkbox" value="{{ $obj->id }}">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                    @endif
                                @endforeach
                                <li>
                                    <a href="javascript:;" id="see_all_cuisines"><strong>see all</strong></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <input type="hidden" name="address" value="{{ $address }}">
                    <!-- /filter_type -->
                    <div class="buttons">
                        <button type="button" class="btn_1 full-width btn_filter">Filter</a>
                    </div>

                </div>
            </aside>
            <div class="col-xl-6 col-lg-5    ">
                <div class="list_home custom_list_list">
                    <ul>
                        @foreach ($businesses as $obj)
                            <li class="main_li">
                                <div>
                                    <input type="hidden" class="price-rating"
                                        value={{ intval(floor($obj->price_rating)) }}>
                                    <input type="hidden" class="business-type-id" value="{{ $obj->business_type_id }}">
                                    <input type="hidden" class="feature-ids" value="{{ $obj->feature_ids }}">
                                    <input type="hidden" class="cuisine-ids" value="{{ $obj->cuisine_ids }}">
                                </div>
                                <a href="{{ route('user-detail', $obj->id) }}">
                                    <div>
                                        <figure>
                                            <img src="{{ asset('user_assets/img/lazy-placeholder.png') }}"
                                                data-src="{{ asset($obj->picture) }}" alt="" class="lazy">
                                            <span class="favorite">
                                                <i class="@if ($obj->favorites && count($obj->favorites) > 0) fas @else far @endif fa-heart"
                                                    onclick="addFavorite(event,this,{{ $obj->id }}, `{{ $obj->picture }}`, `{{ $obj->favorites && count($obj->favorites) > 0 ? $obj->favorites : null }}`)"></i>
                                            </span>
                                        </figure>
                                    </div>

                                    <div class="list-mobile-margin">
                                        <h3>{{ $obj->name }}</h3>
                                        <ul>
                                            <li class="rating">
                                                @include('components.rating',
                                                ['rating'=> $obj->review_rating,'starsize'=>18,'scoreshow'=>true])
                                            </li>
                                            <li>{{ $obj->review_count }} Reviews</li>
                                        </ul>
                                        <div>
                                            <small>
                                                @if ($obj->price_rating && intval(floor($obj->price_rating)) > 0)
                                                    @for ($i = 0; $i <= intval(floor($obj->price_rating)); $i++)
                                                        $
                                                    @endfor
                                                @endif
                                            </small>

                                        </div>
                                        <div>
                                            <small><i class="icon_pin_alt"></i> {{ $obj->address }}</small>
                                        </div>
                                        <div>
                                            @if (isset($obj->services[0]->name))
                                                <small><i class="fa fa-check"></i>
                                                    {{ $obj->services[0]->name }}</small>
                                            @endif
                                            @if (isset($obj->services[1]->name))
                                                <small><i class="fa fa-check"></i>
                                                    {{ $obj->services[1]->name }}</small>
                                            @endif
                                        </div>
                                        <div>
                                            <small><i class="fa fa-note"></i> {{ $obj->description }}</small>
                                        </div>
                                    </div>

                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                @if (isset($total_page_cnt))
                    <div class="pagination_fg">
                        @if ($page > 5)
                            <a href="javascript:;" id="prev_page">&laquo;</a>
                        @endif

                        @foreach ($arr as $obj)
                            <a href="javascript:;" class="@if ($obj == $page) active page-num @else page-num @endif">{{ $obj }}</a>
                        @endforeach

                        @if ($arr[count($arr) - 1] < $total_page_cnt)
                            <a href="javascript:;" id="next_page">&raquo;</a>
                        @endif
                    </div>
                @endif
            </div>

            <div class="col-xl-4 col-lg-7 sidebar_fixed">
                <div id="map" class="map" style="width:100%; height: 700px"></div>
            </div>
            <!-- /col -->
        </div>
    </div>
    <form action="{{ url('list/filter') }}" id="filter_form" method="post">
        @csrf
        <input type="hidden" name="address" value="{{ $address }}">
    </form>

    <form action="{{ url('list') }}" id="page_form" method="get">
        @csrf
        <input type="hidden" name="address" value="{{ $address }}">
        <input type="hidden" name="page" id="current_page" value="{{ $page }}">
        <input type="hidden" id="total_page_cnt" value="{{ $total_page_cnt }}">
        <input type="hidden" name="business_type_id" value="{{ $business_type_id }}">
    </form>

    @include('components.wish-modal');
    @include('components.filter-see-all-modal');

    @include('components.map-data',
    ['data'=> $businesses])

@endsection

@section('script')
    @include('components.toastr')

    <!-- SPECIFIC SCRIPTS -->
    <script src="user_assets/js/sticky_sidebar.min.js"></script>
    <script src="user_assets/js/specific_listing.js"></script>
    <script src="/user_assets/js/toggle-type-bar.js"></script>

    <script>
        // var data_markersData = {};
        // data_markersData.Marker = [];
        // $(document).ready(function() {
        //     if ($('.map-data').length) {
        //         $('.map-data').each(function() {
        //             data_markersData.Marker.push({
        //                 type_point: $(this).find('.business_type').val(),
        //                 name: $(this).find('.name').val(),
        //                 location_latitude: 48,
        //                 location_longitude: 3,
        //                 map_image_url: $(this).find('.picture').val(),
        //                 rate: $(this).find('.review_rating').val(),
        //                 name_point: $(this).find('.name').val(),
        //                 get_directions_start_address: '',
        //                 phone: $(this).find('.call').val(),
        //                 url_point: $(this).find('.website').val(),
        //             })
        //         })
        //     }

        // })

        var data_markersData = {
            'Marker': JSON.parse("{!! $map_data !!}")
        };
        if (data_markersData && data_markersData.length > 0)
            data_markersData.Marker.forEach(function(item) {
                item.location_latitude = Number(item.location_latitude);
                item.location_longitude = Number(item.location_longitude);
            })

        $(document).ready(function() {
            var price_rating = [];
            var business_type = [];
            var feature = [];
            var cuisine = [];
            $(document).on('click', '.container_check .price-rating', function() {
                getCheckboxIds(price_rating, $(this).val())
            })
            $(document).on('click', '.container_check .business-type', function() {
                getCheckboxIds(business_type, $(this).val())
            })
            $(document).on('click', '.container_check .feature', function() {
                getCheckboxIds(feature, $(this).val())
            })
            $(document).on('click', '.container_check .cuisine', function() {
                getCheckboxIds(cuisine, $(this).val())
            })

            $('.btn_filter').click(function() {
                sideFilter(price_rating, '.price-rating');
                sideFilter(business_type, '.business-type-id');

                sideFilterByArr(feature, '.feature-ids');
                sideFilterByArr(cuisine, '.cuisine-ids');


                // if (business_type.length > 0) {
                //     business_type.forEach(function(item) {
                //         $('#filter_form')
                //             .append(`<input type="hidden" name="business_type[]" value="${item}">`)
                //     })
                // }
                // if (feature.length > 0) {
                //     feature.forEach(function(item) {
                //         $('#filter_form')
                //             .append(`<input type="hidden" name="feature[]" value="${item}">`)
                //     })
                // }
                // if (cuisine.length > 0) {
                //     cuisine.forEach(function(item) {
                //         $('#filter_form')
                //             .append(`<input type="hidden" name="cuisine[]" value="${item}">`)
                //     })
                // }

                // $('#filter_form').submit();
            })
            $('#see_all_business_types').click(function() {
                $('#business_types_modal').modal('show');
            })
            $('#see_all_features').click(function() {
                $('#features_modal').modal('show');
            })
            $('#see_all_cuisines').click(function() {
                $('#cuisines_modal').modal('show');
            })

        })

        function sideFilter(arr, kind) {

            if (arr.length > 0) {
                let idx = [];
                $('.main_li').each(function(index) {
                    let val = $(this).children().find(kind).val();
                    arr.forEach(function(item) {
                        if (val == item) {
                            idx.push(index);
                        }
                    })
                })
                if (idx.length > 0) {
                    $(`.main_li`).css('display', 'none')
                    idx.forEach(function(item) {
                        $('.main_li').eq(item).css('display', 'block')
                    })
                } else {
                    $('.main_li').css('display', 'none')
                }
            }
        }

        function sideFilterByArr(arr, kind) {
            if (arr.length > 0) {
                let idx = [];
                $('.main_li').each(function(index) {
                    let val = JSON.parse($(this).children().find(kind).val());
                    console.log(val);
                    arr.forEach(function(item) {
                        val.forEach(function(obj) {
                            if (obj == item) {
                                idx.push(index);
                            }
                        })
                    })
                })
                if (idx.length > 0) {
                    $(`.main_li`).css('display', 'none')
                    idx.forEach(function(item) {
                        $('.main_li').eq(item).css('display', 'block')
                    })
                } else {
                    $('.main_li').css('display', 'none')
                }
            }
        }

        function getCheckboxIds(arr, val) {
            let ctn = 0;
            let idx;
            if (arr.length > 0) {
                arr.forEach(function(item, index) {
                    if (item == val) {
                        ctn = 1;
                        idx = index;
                    }
                })
            }

            if (ctn) {
                arr.splice(idx, 1);
            } else {
                arr.push(val);
            }
        }
        $(document).on('click', '#prev_page', function() {
            let current_page = parseInt($('#current_page').val());

            let new_page = (parseInt(Math.ceil(current_page / 5)) - 1) * 5;
            $('#current_page').val(new_page);
            $('#page_form').submit();

        })
        $(document).on('click', '#next_page', function() {
            let current_page = parseInt($('#current_page').val());

            let new_page = (parseInt(Math.ceil(current_page / 5))) * 5+1;
            $('#current_page').val(new_page);
            $('#page_form').submit();

        })
        $(document).on('click','.page-num',function(){
            let current_page = parseInt($('#current_page').val());
            if($(this).text()==current_page)
            return;
            $('#current_page').val($(this).text());
            $('#page_form').submit();
        })
    </script>
    <!-- Map -->
    <script src="user_assets/js/main_map_scripts.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key={{ Config::get('const.GOOGLE_MAP_KEY') }}&&callback=initMap"
        async defer></script>
@endsection
