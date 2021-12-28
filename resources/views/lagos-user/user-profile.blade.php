@extends('lagos-user.layouts.layout-master')

@section('head')
    <!-- SPECIFIC CSS -->
    <link href="{{ asset('/user_assets/css/profile.css') }}" rel="stylesheet">
    <link href="{{ asset('/user_assets/css/detail-page.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
@endsection

@section('content')
    <div class="page_header element_to_stick">
        @include('components.business-type-bar')
    </div>
    <div class="wrapper">
        <div class="main">
            <div class="d-flex justify-content-between mb-3">
                <div class="d-flex align-items-center">
                    <div>
                        <img class="image" src="{{ asset(Auth::user()->avatar) }}" alt="" onclick="uploadModal()">
                    </div>
                    <div>
                        {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
                    </div>
                </div>
                <div>
                    Edit Profile
                    <i class="fas fa-cog cursor-pointer" onclick="openModal()"></i>
                </div>
            </div>
            <ul class="nav nav-pills border-none" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="pill" href="#home">Profile Overview</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="pill" href="#menu1">Reviews</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="pill" href="#menu2">Favorites</a>
                </li>
            </ul>

        </div>
        <div class="content text-center">
            <div class="tab-content">
                <div id="home" class="container tab-pane active"><br>
                    <h5>Recent Activity</h5>
                    <p>We don`t have any recent activity for you right now.</p>
                </div>
                <div id="menu1" class="container tab-pane fade"><br>
                    @if ($reviews && count($reviews) > 0)
                        <div id="reviews">
                            @foreach ($reviews as $review)
                                <div class="review_card">
                                    <div class="row">
                                        <div class="col-md-2 user_info">
                                            <figure><img src="{{ asset($review->user->avatar) }}" alt=""></figure>
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
                                            @if ($review->picture)
                                                <div>
                                                    <img class="w-30" src="{{ asset($review->picture) }}"
                                                        alt="">
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <!-- /row -->
                                </div>
                            @endforeach
                        </div>
                    @else
                        <h5>Reviews</h5>
                        <p>Write reviews to contribute to the Yelp community and help your friends find all the local gems
                            that you love.</p>
                    @endif
                </div>
                <div id="menu2" class="container tab-pane fade"><br>
                    @if ($favorites && count($favorites) > 0)
                        <div class="owl-carousel owl-theme carousel_4">
                            @foreach ($favorites as $obj)
                                <div class="item">
                                    <div class="strip">
                                        <figure>
                                            <img src="{{ asset('user_assets/img/lazy-placeholder.png') }}"
                                                data-src="{{ asset($obj->business->picture) }}" class="owl-lazy"
                                                alt="">
                                            <a href="{{ route('user-detail', $obj->business->id) }}"
                                                class="strip_info">
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
                                                    ['rating'=>
                                                    $obj->business->review_rating,'starsize'=>18,'scoreshow'=>true])
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            @endforeach
                        </div>

                    @else
                        <h5>Favorites</h5>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                            totam
                            rem aperiam.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>

    @include('components.profile-name-modal')
    @include('components.profile-upload-modal')


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
        $('#avatar').change(function() {
            readURL(this, '#src_image');
        })

        function validate() {
            if ($('#avatar').val() == '')
                return toastr.error('Format not supported,Only .jpeg images are accepted');
            var size = 14097152;
            var file_size = document.getElementById('file_upload').files[0].size;
            if (file_size >= size) {
                toastr.error('File size is too large.')
                return false;
            }
            var type = 'image/jpeg';
            var file_type = document.getElementById('file_upload').files[0].type;
            if (file_type != type) {
                toastr.error('Format not supported,Only .jpeg images are accepted');
                return false;
            }
        }


        function readURL(input, param) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $(param).attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        function triggerUpload() {
            $('#avatar').trigger('click');
        }

        function openModal() {
            $('#name_modal').modal('show');
        }

        function uploadModal() {
            $('#upload_modal').modal('show');
        }
    </script>
@endsection
