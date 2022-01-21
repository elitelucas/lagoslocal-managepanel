<div>
    <div class="container-fluid my-3 py-3 d-flex flex-column">
        <div class="row mb-5 justify-content-center align-items-center">
            <div class="col-12">
                <!-- Card Basic Info -->
                <div class="card mt-4">
                    <div class="card-header">
                        <h5>Business Information</h5>
                    </div>
                    @if (session('success'))
                        <div class="mt-3 alert alert-primary alert-dismissible fade show" role="alert">
                            <span class="alert-icon text-white"><i class="ni ni-like-2"></i></span>
                            <span class="alert-text text-white">{{ session('success') }}</span>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <div class="card-body pt-0">
                        <form wire:submit.prevent="save" action="#" method="POST">
                            <div class="row">
                                <div class="col-md-4 col-xs-12">
                                    <div class="row">
                                        <div class="col-12">
                                            <input type="file" wire:model="picture" id="file-input" accept="image/*"
                                                class="d-none">
                                            <span class="h-12 w-12 rounded-full overflow-hidden bg-gray-100">
                                                @if ($picture)
                                                    <img src="{{ $picture->temporaryUrl() }}"
                                                        class="w-100 border-radius-lg shadow-lg mt-4"
                                                        alt="Profile Photo">
                                                @else
                                                    <img src="{{ $business->picture ? asset($business->picture) : asset('/assets/img/image_placeholder.jpg') }}"
                                                        class="w-100 border-radius-lg shadow-lg mt-4"
                                                        alt="Profile Photo">
                                                @endif
                                            </span>
                                        </div>
                                        <div class="col-12 mt-4">
                                            <div class="d-flex">
                                                <label for="file-input" class="btn bg-gradient-primary btn-sm mb-0 me-2"
                                                    type="button" name="button">Upload Image</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 col-xs-12">
                                    <div class="row">
                                        <div class="col-12 align-self-center">
                                            <label class="form-label">Business Name</label>
                                            <div class="input-group">
                                                <input wire:model="business.name" name="name" class="form-control"
                                                    type="text">
                                            </div>
                                        </div>
                                        <div class="col-12 align-self-center">
                                            <label class="form-label">Business Description</label>
                                            <div class="input-group">
                                                <input wire:model="business.description" name="name"
                                                    class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div wire:ignore class="col-12 align-self-center">
                                            <label class="form-label">Business Type</label>
                                            <select wire:model="business.business_type_id" class="form-control">
                                                <option value="">---Select below---</option>
                                                @foreach ($business_types as $business_type)
                                                    <option value="{{ $business_type->id }}">
                                                        {{ $business_type->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col-6 align-self-center">
                                    <label class="form-label">Call</label>
                                    <div class="input-group">
                                        <input wire:model="business.call" name="call" class="form-control" type="text"
                                            placeholder="(+1) 23456789">
                                    </div>
                                </div>
                                <div class="col-6 align-self-center">
                                    <label class="form-label">Website link</label>
                                    <div class="input-group">
                                        <input wire:model="business.website" name="website" class="form-control"
                                            type="text" placeholder="https://mybusiness.com">
                                    </div>
                                </div>
                                <div class="col-12 align-self-center">
                                    <label class="form-label">Address</label>
                                    <div class="input-group mb-2">
                                        <input wire:model="business.address" id="address" name="address"
                                            class="form-control" type="text">
                                        <input wire:model="business.lat" type="hidden">
                                        <input wire:model="business.lng" type="hidden">
                                    </div>
                                    <div wire:ignore id="map" style="height: 400px;">
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <button type="submit"
                                    class="btn bg-gradient-dark btn-sm float-end mt-6 mb-0">{{ __('Save changes') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="../../../assets/js/plugins/choices.min.js"></script>


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
            if (elem.innerHTML == "Switch to visible") {
                elem.innerHTML = "Switch to invisible"
            } else {
                elem.innerHTML = "Switch to visible"
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
    var map;
    var marker;
    var geocoder;

    var livewireready = false;
    var googlemapready = false;
    document.addEventListener('livewire:load', function() {
        livewireready = true;
        if (livewireready && googlemapready)
            setMap()
    })

    function initMap() {
        var input = document.getElementById('address');
        var autocomplete = new google.maps.places.Autocomplete(input);

        autocomplete.addListener('place_changed', function() {
            var place = autocomplete.getPlace();
            map = new google.maps.Map(document.getElementById("map"), {
                center: {
                    lat: place.geometry.location.lat(),
                    lng: place.geometry.location.lng(),
                },
                zoom: 11, // add business
                // zoom: 16, //userside
            });
            map.addListener('click', function(e) {
                marker && marker.setMap(null);
                addMarker(e.latLng);
            });


            var address = '';
            if (place.address_components) {
                address = [
                    (place.address_components[0] && place.address_components[0].short_name || ''),
                    (place.address_components[1] && place.address_components[1].short_name || ''),
                    (place.address_components[2] && place.address_components[2].short_name || '')
                ].join(' ');
            }

            addMarker(place.geometry.location,input.value);
            if (!place.geometry) {
                window.alert("Autocomplete's returned place contains no geometry");
                return;
            }
        });
        googlemapready = true;
        if (livewireready && googlemapready)
            setMap()
    }

    function setMap() {
        var lagoslocation = {
            lat: 6.514,
            lng: 3.294
        };

        if (@this.business.lat && @this.business.lng) {
            lagoslocation = {
                lat: Number(@this.business.lat),
                lng: Number(@this.business.lng)
            };
        }

        map = new google.maps.Map(document.getElementById("map"), {
            center: lagoslocation,
            zoom: 11, // add business
            // zoom: 16, //userside
        });
        geocoder = new google.maps.Geocoder();

        map.addListener('click', function(e) {
            marker && marker.setMap(null);
            addMarker(e.latLng);
        });

        //show marker if exist
        if (@this.business.lat && @this.business.lng && @this.business.address) {
            var newlatLng = new google.maps.LatLng(@this.business.lat, @this.business.lng);
            addMarker(newlatLng,@this.business.address);
        }
    }

    function addMarker(latLng,addr) {
        // add mark
        // var newlatLng = new google.maps.LatLng(latLng.lat(), latLng.lng());
        marker = new google.maps.Marker({
            map: map,
            position: latLng,
            label: {
                text: @this.business.name,
                fontSize: '20px',
                color: '#03153e',
                fontWeight: 'bold',
            },
            draggable: true
        });
        // Get address
        geocoder.geocode({
            'latLng': latLng
        }, function(results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                if (results[0]) {
                    //do something
                    console.log('Current Lat: ' + latLng.lat() + ' Current Lng: ' + latLng.lng(),
                        'Current Address: ' + results[0].formatted_address);
                    @this.setAddress(
                      addr?addr:results[0].formatted_address, latLng.lat(), latLng.lng())
                }
            }
        });
    }
</script>
<script
src="https://maps.googleapis.com/maps/api/js?key={{ Config::get('const.GOOGLE_MAP_KEY') }}&libraries=places&callback=initMap&v=weekly&channel=2"
async>
</script>
