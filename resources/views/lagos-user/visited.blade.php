@extends('lagos-user.layouts.layout-master')

@section('head')
    <link href="{{ asset('/user_assets/css/detail-page.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
@endsection

@section('content')

    <div class="margin_30_40" style="padding: 50px;">
        <div class="text-center mb-5">
            <h5>
                Review a place you've visited
            </h5>
        </div>
        <div>
            <ul class="ul-no-dot ul-two-columns" id="main_list">
                @foreach ($visited as $obj)
                    <li class="mb-3">
                        <a href="javascript:;" class="d-flex flex-wrap">
                            <div class="mr-2">
                                <figure>
                                    <img src="{{ asset($obj->business->picture) }}" alt="" class="lazy visited-img"
                                        onclick="toReview({{ $obj->business_id }})">

                                </figure>
                            </div>
                            <div>
                                <h5>{{ $obj->business->name }}</h5>
                                <div>
                                    {{ $obj->business->address }}
                                </div>
                                <div class="d-flex" data-business-id="{{ $obj->business_id }}">
                                    @include('components.rating',
                                    ['rating'=> $obj->rating,'starsize'=>18,'scoreshow'=>false])
                                    <div class="ml-2 review-color">
                                        @if (intval($obj->rating > 0 && $obj->rating <= 1))
                                            Terrible
                                        @elseif(intval($obj->rating>1 &&$obj->rating
                                        <=2)) Poor @elseif(intval($obj->rating>2
                                            &&$obj->rating<=3)) Average @elseif(intval($obj->rating>3 &&$obj->rating
                                                <=4)) Very Good @elseif(intval($obj->rating>4
                                                    &&$obj->rating<=5)) Excellent @else Click to rate @endif
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                @endforeach

            </ul>
        </div>
        <div class="text-center">
            <a href="javascript:;" data-page="{{ $page }}" id="show_more">
                Show more suggetions
            </a>
        </div>
    </div>
    <form id="change_rating_form" action="{{ url('visited/change-rating') }}" method="post">
        @csrf
        <input type="hidden" name="business_id" id="business_id_visited">
        <input type="hidden" name="rating" id="rating_visited">
    </form>
    <a id="to_review" href="{{ url('review/add') }}"></a>


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


    <script>
        $(document).ready(function() {
            $('.review-star').click(function(e) {
                e.preventDefault();
                let index = $(this).index();

                let business_id = $(this).parent().parent().attr('data-business-id');
                $('#business_id_visited').val(business_id);
                $('#rating_visited').val(Number(index) + 1);
                $('#change_rating_form').submit();
            })

            $('#show_more').click(function() {
                let page = $(this).attr('data-page');

                $.ajax({
                    type: 'POST',
                    url: '/visited/page',
                    data: {
                        "_token": "{{ csrf_token() }}",
                        page: Number(page) + 1,
                    },
                    success: function(data) {
                        if (data.success == true) {
                            $('#main_list').append(data.html);
                            $('#show_more').attr('data-page', Number(page) + 1);
                        }
                    }
                });
            })
        })

        function toReview(business_id) {
            $('#to_review').attr('href', $('#to_review').attr('href') + '?id=' + business_id);
            $('#to_review')[0].click();
        }
    </script>
@endsection
