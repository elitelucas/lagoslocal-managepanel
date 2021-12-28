    <!-- /container -->
    <div class="modal fade bs-example-modal-lg" id="upload_modal" tabindex="-1" role="dialog"
        aria-labelledby="myLargeModalLabel" aria-hidden="true" style="margin-top:100px">
        <div class="modal-dialog modal-lg w-35">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myLargeModalLabel"
                        style="font-family: Poppins, Helvetica, sans-serif">
                        Select Profile Photo</i>
                    </h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div>
                        <img src="{{ asset(Auth::user()->avatar) }}" id="src_image" alt="">
                    </div>
                    <div>
                        <form action="{{ url('/user-profile/photo') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-2">
                                <small>
                                    Note: Photo must be less than 14MB.
                                </small>
                            </div>
                            <div>
                                <button type="button" onclick="triggerUpload()" class="btn-st-1 w-100 p-5" data-val="4">
                                    + Upload Photo
                                </button>
                            </div>
                            <div class="mb-3">
                                <input type="file" name="avatar" id="avatar" style="display: none">
                            </div>
                            <div class="pull-right">
                                <input class="btn_1" onclick="return validate()" type="submit" value="Submit">
                            </div>
                        </form>
                    </div>

                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->



