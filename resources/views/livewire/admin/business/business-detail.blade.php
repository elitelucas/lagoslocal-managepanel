<div>
    <div class="container-fluid my-3 py-3 d-flex flex-column">
        <div class="row mb-5 justify-content-center align-items-center">
            <div class="col-9">
                <!-- Card Profile -->
                <div class="card card-body" id="profile">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-auto">
                            <div class="avatar avatar-xl position-relative">
                                <div>
                                    <span class="h-12 w-12 rounded-full overflow-hidden bg-gray-100">
                                        <img src="/businesses/1.jpg" alt="Profile Photo">
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto my-auto">
                            <div class="h-100">
                                @if ($business->first_name && $business->last_name)
                                    <h5 class="mb-1">
                                        {{ $business->first_name . ' ' . $business->last_name }}
                                    </h5>
                                @else
                                    <h5 class="mb-1">
                                        {{ $business->name }}
                                    </h5>
                                @endif
                                <p class="mb-0 font-weight-bold text-sm">
                                </p>
                            </div>
                        </div>
                        <div class="col-auto ms-auto">
                            <div class="form-check form-switch">
                                @if ($business->approved)
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" checked
                                        onchange="visible()">
                                    <label class="form-check-label" for="flexSwitchCheckDefault">
                                        <small id="profileVisibility">Switch to block</small>
                                    </label>
                                @else
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault"
                                        onchange="visible()">
                                    <label class="form-check-label" for="flexSwitchCheckDefault">
                                        <small id="profileVisibility">Switch to approve</small>
                                    </label>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div>
                        @error('upload') <div class="text-danger text-xs mt-3">{{ $message }} @enderror
                        </div>
                    </div>

                    <!-- Card Basic Info -->
                    <div class="card mt-4" id="basic-info">
                        <div class="card-header">
                            <h5>Business Info</h5>
                        </div>
                        <div class="card-body pt-0">
                            <form wire:submit.prevent="save" action="#" method="POST">
                                <div class="row">
                                    <div class="col-12">
                                        <label class="form-label" for="#firstName">{{ __('Description') }}</label>
                                        <div class="input-group">
                                            <input id="firstName" class="form-control" type="text"
                                                value="{{ $business->description }}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">{{ __('Business Type') }}</label>
                                        <div class="input-group">
                                            <input class="form-control" type="text"
                                                value="{{ @$business->businesstype->name }}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">{{ __('Call') }}</label>
                                        <div class="input-group">
                                            <input class="form-control" type="text" value="{{ $business->call }}"
                                                readonly>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">{{ __('Website link') }}</label>
                                        <div class="input-group">
                                            <input class="form-control" type="text"
                                                value="{{ $business->website }}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Address</label>
                                        <div class="input-group mb-2">
                                            <input value="{{ $business->address }}" name="address"
                                                class="form-control" type="text" readonly>
                                        </div>
                                        <div wire:ignore id="map" style="height: 400px;">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../../../assets/js/plugins/choices.min.js"></script>
    <script
        src="https://maps.googleapis.com/maps/api/js?key={{ Config::get('const.GOOGLE_MAP_KEY') }}&v=weekly&channel=2"
        async>
    </script>
    <script>
        if (document.getElementById('choices-gender')) {
            var gender = document.getElementById('choices-gender');
            const example = new Choices(gender);
        }

        if (document.getElementById('choices-language')) {
            var language = document.getElementById('choices-language');
            const example = new Choices(language);
        }

        if (document.getElementById('choices-skills')) {
            var skills = document.getElementById('choices-skills');
            const example = new Choices(skills, {
                delimiter: ',',
                editItems: true,
                maxItemCount: 5,
                removeItemButton: true,
                addItems: true
            });
        }

        if (document.getElementById('choices-year')) {
            var year = document.getElementById('choices-year');
            setTimeout(function() {
                const example = new Choices(year);
            }, 1);

            for (y = 1900; y <= 2020; y++) {
                var optn = document.createElement("OPTION");
                optn.text = y;
                optn.value = y;

                if (y == 2020) {
                    optn.selected = true;
                }

                year.options.add(optn);
            }
        }

        if (document.getElementById('choices-day')) {
            var day = document.getElementById('choices-day');
            setTimeout(function() {
                const example = new Choices(day);
            }, 1);


            for (y = 1; y <= 31; y++) {
                var optn = document.createElement("OPTION");
                optn.text = y;
                optn.value = y;

                if (y == 1) {
                    optn.selected = true;
                }

                day.options.add(optn);
            }

        }

        if (document.getElementById('choices-month')) {
            var month = document.getElementById('choices-month');
            setTimeout(function() {
                const example = new Choices(month);
            }, 1);

            var d = new Date();
            var monthArray = new Array();
            monthArray[0] = "January";
            monthArray[1] = "February";
            monthArray[2] = "March";
            monthArray[3] = "April";
            monthArray[4] = "May";
            monthArray[5] = "June";
            monthArray[6] = "July";
            monthArray[7] = "August";
            monthArray[8] = "September";
            monthArray[9] = "October";
            monthArray[10] = "November";
            monthArray[11] = "December";
            for (m = 0; m <= 11; m++) {
                var optn = document.createElement("OPTION");
                optn.text = monthArray[m];
                // server side month start from one
                optn.value = (m + 1);
                // if june selected
                if (m == 1) {
                    optn.selected = true;
                }
                month.options.add(optn);
            }
        }

        function visible() {
            var elem = document.getElementById('profileVisibility');
            if (elem) {
                if (elem.innerHTML == "Switch to approve") {
                    elem.innerHTML = "Switch to block"
                    @this.approveBusiness(true)
                } else {
                    elem.innerHTML = "Switch to approve"
                    @this.approveBusiness(false)
                }
            }
        }

        var openFile = function(event) {
            var input = event.target;

            // Instantiate FileReader
            var reader = new FileReader();
            reader.onload = function() {
                imageFile = reader.result;

                document.getElementById("imageChange").innerHTML = '<img width="200" src="' + imageFile +
                    '" class="rounded-circle w-100 shadow" />';
            };
            reader.readAsDataURL(input.files[0]);
        };

        // Google map
        let map;
        let marker;
        var geocoder;
        document.addEventListener('livewire:load', function() {
            initMap()
        })

        function initMap() {
            var lagoslocation = {
                lat: 6.514,
                lng: 3.294
            };

            if ({{ $business->lat }} && {{ $business->lng }}) {
                lagoslocation = {
                    lat: Number({{ $business->lat }}),
                    lng: Number({{ $business->lng }})
                };
            }

            map = new google.maps.Map(document.getElementById("map"), {
                center: lagoslocation,
                zoom: 11, // add business
                // zoom: 16, //userside
            });
            geocoder = new google.maps.Geocoder();

            //show marker if exist
            if ({{ $business->lat }} && {{ $business->lng }}) {
                var newlatLng = new google.maps.LatLng({{ $business->lat }}, {{ $business->lng }});
                addMarker(newlatLng);
            }
        }

        function addMarker(latLng) {
            // add mark
            // var newlatLng = new google.maps.LatLng(latLng.lat(), latLng.lng());
            marker = new google.maps.Marker({
                map: map,
                position: latLng,
                label: {
                    text: '{{ $business->name }}',
                    fontSize: '20px',
                    color: '#03153e',
                    fontWeight: 'bold',
                },
                draggable: true
            });
        }
    </script>
