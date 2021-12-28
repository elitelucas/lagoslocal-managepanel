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
                    <div class="box_general write_review">
                        <div style="text-align: center">
                            <h1 class="add_bottom_15">Review a place you have visited</h1>
                        </div>

                        <label class="d-block add_bottom_15">Your experiences really help other visitors. Thanks!</label>
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
                        </div>
                        <input type="range" style="width:116px" min="0" max="6" step="0.5" value="0"
                            data-orientation="horizontal" id="food_quality" name="food_quality">
                        <input type="hidden" name="rating" id="review_rating" value="0">

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
            var dd='';
            for (let i = 0; i < 5; i++) {
                dd += `<i class="far fa-star" style="color:#ff7600; font-size:18px;"></i>`;
            }
            $("input[name=food_quality]").after(`
                <div class = "rating ms-auto rating-bar" >
                     ${dd}
                </div>
            `)


            $(document).on("click", "input[name=food_quality]", function() {
                let bar_rating = $(this).val();
                let stars_i = '';
                $(this).next().remove();

                if (bar_rating > 5) {
                    bar_rating = 5;
                }

                for (let i = 0; i < 5; i++) {
                    if (bar_rating >= i + 1) {
                        stars_i += `<i class="fas fa-star" style="color:#ff7600; font-size:18px;"></i>`
                    } else if (bar_rating > i) {
                        stars_i +=
                            `<i class="fas fa-star-half-alt" style="color:#ff7600; font-size:18px;"></i>`
                    } else {
                        stars_i += `<i class="far fa-star" style="color:#ff7600; font-size:18px;"></i>`
                    }
                }

                $(this).after(`
                <div class = "rating ms-auto rating-bar" >
                     ${stars_i}
                </div>
                `)

                $('#review_rating').val(bar_rating);
            });

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
