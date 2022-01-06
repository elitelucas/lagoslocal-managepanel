    <!-- /container -->
    <div class="modal fade bs-example-modal-lg" id="business_types_modal" tabindex="-1" role="dialog"
        aria-labelledby="myLargeModalLabel" aria-hidden="true" style="margin-top:100px">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myLargeModalLabel"
                        style="font-family: Poppins, Helvetica, sans-serif">
                        Business Types</i>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <ul class="ul-no-dot ul-two-columns">
                        @foreach ($business_types as $obj)
                            <li>
                                <label class="container_check">{{ $obj->name }}
                                    <input class="business-type" type="checkbox" value="{{ $obj->id }}">
                                    <span class="checkmark"></span>
                                </label>
                            </li>
                        @endforeach
                    </ul>
                    <div class="text-center">
                        <button type="button" class="btn_1 btn_filter">Filter</a>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- /container -->
    <div class="modal fade bs-example-modal-lg" id="features_modal" tabindex="-1" role="dialog"
        aria-labelledby="myLargeModalLabel" aria-hidden="true" style="margin-top:100px">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myLargeModalLabel"
                        style="font-family: Poppins, Helvetica, sans-serif">
                        Restaurant Features</i>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <ul class="ul-no-dot ul-two-columns">
                        @foreach ($features as $obj)
                            <li>
                                <label class="container_check">{{ $obj->name }}
                                    <input class="feature" type="checkbox" value="{{ $obj->id }}">
                                    <span class="checkmark"></span>
                                </label>
                            </li>
                        @endforeach
                    </ul>
                    <div class="text-center">
                        <button type="button" class="btn_1 btn_filter">Filter</a>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- /container -->
    <div class="modal fade bs-example-modal-lg" id="cuisines_modal" tabindex="-1" role="dialog"
        aria-labelledby="myLargeModalLabel" aria-hidden="true" style="margin-top:100px">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myLargeModalLabel"
                        style="font-family: Poppins, Helvetica, sans-serif">
                        Cuisines</i>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <ul class="ul-no-dot ul-two-columns">
                        @foreach ($cuisines as $obj)
                            <li>
                                <label class="container_check">{{ $obj->name }}
                                    <input class="cuisine" type="checkbox" value="{{ $obj->id }}">
                                    <span class="checkmark"></span>
                                </label>
                            </li>
                        @endforeach
                    </ul>
                    <div class="text-center">
                        <button type="button" class="btn_1 btn_filter">Filter</a>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
