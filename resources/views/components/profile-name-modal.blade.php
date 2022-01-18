    <!-- /container -->
    <div class="modal fade bs-example-modal-lg" id="name_modal" tabindex="-1" role="dialog"
        aria-labelledby="myLargeModalLabel" aria-hidden="true" style="padding-top:50px">
        <div class="modal-dialog modal-lg">
            <div class="modal-content modal-responsive-width">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myLargeModalLabel"
                        style="font-family: Poppins, Helvetica, sans-serif">
                         Edit Profile</i>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="d-flex">
                        <div>
                            <img class="modal-image" src="{{ asset(Auth::user()->avatar?Auth::user()->avatar:'avatars/team-1.jpg')}}" alt="">
                        </div>
                        <div>
                            <form action="{{url('/user-profile/edit')}}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label>
                                        First Name
                                    </label>
                                    <input type="text" name="firstname" id="firstname" value="{{Auth::user()->first_name}}" required>
                                </div>
                                <div class="mb-3">
                                    <label>
                                        Last Name
                                    </label>
                                    <input type="text" name="lastname" id="lastname" value="{{Auth::user()->last_name}}" required>
                                </div>
                                <div class="pull-right">
                                    <input class="btn_1"  type="submit" value="Submit">
                                </div>
                            </form>                            
                        </div>
                    </div>
                    
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->



    <script>
       
    </script>
