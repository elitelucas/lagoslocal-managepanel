@extends('lagos-user.layouts.layout-master')
@section('head')
    <!-- SPECIFIC CSS -->
    <link href="{{ asset('/user_assets/css/review.css') }}" rel="stylesheet">
    <!-- SPECIFIC SCRIPTS -->
    <script src="js/specific_review.js"></script>
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

@endsection

@section('content')
    <div class="container margin_60_40">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <form id="review_form" action="{{ url('review/add') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="business_id" value="{{ $business->id }}">
                    <input type="hidden" name="review_id" value="{{ $review->id }}">
                    <div class="box_general write_review">
                        <div class="row">
                            <div class="col-md-3 col-xs-12">
                                <figure>
                                    <img src="{{ asset($business->picture) }}" alt="" class="lazy w-100">
                                </figure>
                            </div>
                            <div class="col-md-9 col-xs-12">
                                <div style="text-align: center">
                                    <h1 class="add_bottom_15">Review a place you have visited</h1>
                                </div>

                                <label class="d-block add_bottom_15">Your experiences really help other visitors.
                                    Thanks!</label>
                                <h3>{{ $business->name }}</h3>
                                <p>{{ $business->address }}</p>
                                <div class="form-group">
                                    <label>Title of your review</label>
                                    <input class="form-control" type="text" name="title" id="title"
                                        placeholder="If you could say it in one sentence, what would you say?" required>
                                </div>
                                <div class="form-group">
                                    <label>Your review</label>
                                    <textarea class="form-control" style="height: 180px;" name="content" id="content"
                                        placeholder="Write your review to help others learn about this online business"></textarea>
                                </div>
                                <div class="add_bottom_15">
                                    <label>Click to select a rating</label>
                                    <div class="row">
                                        <div class="col-md-3 col-xs-12">
                                            Food
                                        </div>
                                        <div class="col-md-3 col-xs-12">
                                            @include('components.rating',
                                            ['rating'=> 0,'starsize'=>18,'scoreshow'=>false])
                                            <input type="hidden" name="food_rating" id="food_rating" value="0">
                                        </div>
                                        <div class="col-md-3 col-xs-12 review-color">
                                            Click to rate
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3 col-xs-12">
                                            Service
                                        </div>
                                        <div class="col-md-3 col-xs-12">
                                            @include('components.rating',
                                            ['rating'=> 0,'starsize'=>18,'scoreshow'=>false])
                                            <input type="hidden" name="service_rating" id="service_rating" value="0">

                                        </div>
                                        <div class="col-md-3 col-xs-12 review-color">
                                            Click to rate
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3 col-xs-12">
                                            Atmosphere
                                        </div>
                                        <div class="col-md-3 col-xs-12">
                                            @include('components.rating',
                                            ['rating'=> 0,'starsize'=>18,'scoreshow'=>false])
                                            <input type="hidden" name="atmosphere_rating" id="atmosphere_rating" value="0">
                                        </div>
                                        <div class="col-md-3 col-xs-12 review-color">
                                            Click to rate
                                        </div>
                                    </div>
                                </div>

                                <div class="add_bottom_15">
                                    <label>How expensive is this restaurant?</label>
                                </div>
                                <div class="button-content">
                                    <button type="button" class="btn-st-1" data-val="1">
                                        <div>$</div>
                                        <div>Inexensive</div>
                                    </button>
                                    <button type="button" class="btn-st-1" data-val="2">
                                        <div>$$</div>
                                        <div>Moderately expensive</div>
                                    </button>
                                    <button type="button" class="btn-st-1" data-val="3">
                                        <div>$$$</div>
                                        <div>Expensive</div>
                                    </button>
                                    <button type="button" class="btn-st-1" data-val="4">
                                        <div>$$$$</div>
                                        <div>Very expenisve</div>
                                    </button>
                                </div>
                                <input type="hidden" name="price_rating" id="price_rating" value="0">
                                <div class="form-group">
                                    <label>Do you have photos to share?</label>
                                    <div class="mb-2">
                                        <img id="srcImg" style="width:fit-content" alt="no image"
                                            onerror="this.src='{{ asset('user_assets/img/404.svg') }}'" />
                                    </div>
                                    <div class="fileupload">
                                        <input type="file" name="picture" id="imgInp" accept="image/*">
                                    </div>
                                </div>
                                <input type="button" onclick="readySubmit()" value="Submit" class="btn_1">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /row -->
    </div>
@endsection

@section('script')
    @include('components.toastr')

    <script>
        $(document).ready(function() {
            $('.review-star').click(function(e) {
                e.preventDefault();
                let index = $(this).index();

                //draw stars
                $(this).siblings().removeClass('fas').addClass('far');
                $(this).prevAll().addClass('fas');
                $(this).addClass('fas');

                //change description
                if(index==0){
                    $(this).parent().parent().next().text('Terrible');
                }else if(index==1){
                    $(this).parent().parent().next().text('Poor');
                }else if(index==2){
                    $(this).parent().parent().next().text('Average');
                }else if(index==3){
                    $(this).parent().parent().next().text('Very Good');
                }else if(index==4){
                    $(this).parent().parent().next().text('Excellent');
                }


                $(this).parent().next().val(Number(index)+1);

                // let business_id = $(this).parent().parent().attr('data-business-id');
                // $('#business_id_visited').val(business_id);
                // $('#rating_visited').val(Number(index) + 1);
                // $('#change_rating_form').submit();
            })


        

            $("#imgInp").change(function() {
                readURL(this, '#srcImg');
            });
            $('.btn-st-1').click(function() {
                $(this).siblings().removeClass('review-button-selected');
                $(this).addClass('review-button-selected')
                let val = $(this).attr('data-val');
                $('#price_rating').val(val);
            })
        });

        function readURL(input, param) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $(param).attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        function readySubmit() {
            if ($('#title').val() == 0) {
                toastr.error('Please fill the title field.')
            } else if ($('#content').val() == 0) {
                toastr.error('Please fill the content field.')
            } else if ($('#price_rating').val() == 0) {
                toastr.error('Please select price rating field.')
            } else {
                $('#review_form').submit();
            }
        }
    </script>

@endsection
