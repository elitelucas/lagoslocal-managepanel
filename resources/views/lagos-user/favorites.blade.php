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
            <span class="list-button list-button-active mr-3 cursor-pointer" id="my_lists">
                <b> My Lists</b>
            </span>
            <span class="list-button cursor-pointer" id="all_favorites">
                <b>All Favorites</b>
            </span>
        </div>

        <div class="row" id="my_lists_div">
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
        <div class="row" id="all_favorites_div" style="display: none">
            @foreach ($all_favorites as $obj)
                <div class="col-md-3 xs-12">
                    <a href="{{ route('user-detail', $obj->business_id) }}">
                        <figure>
                            <img src="{{ asset('user_assets/img/lazy-placeholder.png') }}"
                                data-src="{{ asset($obj->business->picture) }}" alt="" class="lazy">
                        </figure>
                        <h3>La Monnalisa</h3>
                        <div>
                            @include('components.rating',
                            ['rating'=> $obj->business->review_rating,'starsize'=>18,'scoreshow'=>true])
                            {{ $obj->review_count }} Reviews
                        </div>
                        <div>
                            <small>European</small>

                            <small>
                                @if ($obj->business->price_rating && intval(floor($obj->business->price_rating)) > 0)
                                    @for ($i = 0; $i <= intval(floor($obj->business->price_rating)); $i++)
                                        $
                                    @endfor
                                @endif
                            </small>

                        </div>
                        <div>
                            <small><i class="icon_pin_alt"></i> {{ $obj->business->address }}</small>
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

    <script src="/user_assets/js/specific_detail.js"></script>
    <script src="/user_assets/js/datepicker.min.js"></script>
    <script src="/user_assets/js/datepicker_func_1.js"></script>


    <script>
        $(document).ready(function() {
            $('#all_favorites_div').hide();

            $('#all_favorites').click(function() {
                $(this).addClass('list-button-active');
                $(this).siblings().removeClass('list-button-active');
                $('#all_favorites_div').css('display', 'flex');
                $('#my_lists_div').css('display', 'none');
            })
            $('#my_lists').click(function() {
                $(this).addClass('list-button-active');
                $(this).siblings().removeClass('list-button-active');
                $('#all_favorites_div').css('display', 'none');
                $('#my_lists_div').css('display', 'flex');
            })
        })


    </script>
@endsection
