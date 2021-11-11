<div>
    <div class="container-fluid my-3 py-3 d-flex flex-column">
        <div class="row mb-5 justify-content-center align-items-center">
            <div class="col-9">
                <!-- Card Basic Info -->
                <div class="card mt-4">
                    <div class="card-header">
                        <h5>Business Information</h5>
                    </div>
                    <div class="card-body pt-0">
                        <form wire:submit.prevent="save" action="#" method="POST">
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
                                        <input wire:model="business.description" name="name" class="form-control"
                                            type="text">
                                    </div>
                                </div>
                                <div wire:ignore class="col-12 align-self-center">
                                    <label class="form-label">Business Type</label>
                                    <select wire:model="business.business_type_id" class="form-control">
                                        <option value="">---Select below---</option>
                                        @foreach ($business_types as $business_type)
                                            <option value="{{ $business_type->id }}">{{ $business_type->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-6 align-self-center">
                                    <label class="form-label">Call</label>
                                    <div class="input-group">
                                        <input wire:model="business.call" name="call" class="form-control"
                                            type="text" placeholder="(+1) 23456789">
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
                                    <div class="input-group">
                                        <input wire:model="business.address" name="address" class="form-control"
                                            type="text">
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
</script>
