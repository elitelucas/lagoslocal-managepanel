    <!-- /container -->
    <div class="modal fade bs-example-modal-lg" id="create_modal" tabindex="-1" role="dialog"
        aria-labelledby="myLargeModalLabel" aria-hidden="true" style="margin-top:100px">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myLargeModalLabel"
                        style="font-family: Poppins, Helvetica, sans-serif">
                        <i class="far fa-heart"> Save to Favorites</i>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div>
                        Save your amazing ideas all in one place
                    </div>
                    <div class="mt-10" id="wish_list">

                    </div>
                    <div onclick="openNameModal()">
                        <svg width="50" height="50" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M32 24V40M40 32H24H40Z" stroke="black" stroke-linecap="square" />
                            <rect x="0.5" y="0.5" width="63" height="63" rx="9.5" stroke="#333333" />
                        </svg>
                        <span class="ml-10 cursor-pointer">
                            Create new list
                        </span>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div class="modal fade bs-example-modal-lg" id="name_modal" tabindex="-1" role="dialog"
        aria-labelledby="myLargeModalLabel" aria-hidden="true" style="margin-top:100px">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myLargeModalLabel"
                        style="font-family: Poppins, Helvetica, sans-serif">
                        Name a List
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('/list/favorite') }}" method="post">
                        @csrf
                        <div class="mb-10">
                            <input type="text" class="w-100" name="name" id="list_name" placeholder="name">
                        </div>
                        <input type="hidden" name="business_id" id="business_id">
                        <input type="hidden" name="business_picture" id="business_picture">
                        <div class="mb-10">
                            <input type="submit" class="btn_1 pull-right" value="create">
                        </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <script>
        function addFavorite(e, that, id, picture, favorites) {
            var path = '{{ asset('') }}'
            e.preventDefault();
            e.stopPropagation();
            $('#business_id').val(id);
            $('#business_picture').val(picture);
            var favorites = favorites;
            if (favorites) {
                var ss = JSON.parse(favorites);
                $('#wish_list').children().remove();
                ss.forEach(function(item) {
                    $('#wish_list').append(`
                    <div class="mb-2">
                        <img style="width:50px;height:50px" src="${path+item.picture.slice(1,item.picture.length)}" alt="">
                        <span>${item.name}</span>
                    </div>
                    `)
                })
            }

            $('#create_modal').modal('show');
        }

        function openNameModal() {
            $('#name_modal').modal('show');
            $('#create_modal').modal('hide');
        }
    </script>
