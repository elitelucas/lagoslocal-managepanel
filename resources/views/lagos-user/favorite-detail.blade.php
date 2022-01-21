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
            <h5>{{ $favorites[0]->name }}</h5>
        </div>

        <div class="owl-carousel owl-theme carousel_4">
            @foreach ($favorites as $obj)
                <div class="item">
                    <div class="strip">
                        <figure>
                            <img src="{{ asset('user_assets/img/lazy-placeholder.png') }}"
                                data-src="{{ asset($obj->business->picture) }}" class="owl-lazy" alt="">
                            <a href="{{ route('user-detail', $obj->business->id) }}" class="strip_info">
                                <small>{{ @$obj->business->businesstype->name }}</small>
                                <div class="item_title">
                                    <h3>{{ $obj->business->name }}</h3>
                                    <small>{{ $obj->business->address }}</small>
                                </div>
                            </a>
                        </figure>
                        <div>
                            <ul>
                                <li>{{ $obj->business->review_count }} Reviews</li>
                                <li class="rating">
                                    @include('components.rating',
                                    ['rating'=> $obj->business->review_rating,'starsize'=>18,'scoreshow'=>true])
                                </li>
                            </ul>
                        </div>
                     
                    </div>
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

    <script src="/user_assets/js/specific_detail.js"></script>
    <script src="/user_assets/js/datepicker.min.js"></script>
    <script src="/user_assets/js/datepicker_func_1.js"></script>


@endsection
