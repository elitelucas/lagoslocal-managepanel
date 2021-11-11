<div class="container-fluid">
    <div class="page-header min-height-300 border-radius-xl mt-4"
        style="background-image: url('../../../assets/img/curved-images/curved0.jpg'); background-position-y: 50%;">
        <span class="mask bg-gradient-primary opacity-6"></span>
    </div>
    <div class="card mx-4 mt-n8">
        <div class="card-header d-flex align-items-center border-bottom py-3">
            <div class="d-flex align-items-center">
                <a href="javascript:;">
                    <img src="../../../assets/img/team-4.jpg" class="avatar">
                </a>
                <div class="mx-3">
                    <a href="javascript:;"
                        class="text-dark font-weight-600 text-sm">{{ @$review->customer->first_name }}
                        {{ @$review->customer->last_name }}</a>
                    <small class="d-block text-muted">{{ date('Y-m-d', strtotime($review->created_at)) }}</small>
                </div>
            </div>
            <div class="text-end ms-auto">
                <li class="d-flex">
                    <h5 class="mt-n1">Rating:&emsp;</h5>
                    @include('components.rating',['rating'=> $review->rating ,'starsize'=>20,'scoreshow'=>false])
                </li>
            </div>
        </div>
        <div class="card-body">
            <p class="mb-4">
                {{ $review->content }}
            </p>
            <img alt="Image placeholder" src="../../../assets/img/meeting.jpg" class="img-fluid border-radius-lg">
            <div class="row align-items-center px-2 mt-3">
                <div class="col-sm-6">
                    <div class="d-flex">
                        <a class="d-flex align-items-center" href="javascript:;">
                            <i class="fa fa-thumbs-up text-secondary me-1"></i>
                            <span class="text-dark text-sm me-3">35</span>
                        </a>
                        <a class="d-flex align-items-center" href="javascript:;">
                            <i class="fa fa-thumbs-down text-secondary me-1"></i>
                            <span class="text-dark text-sm me-3">4</span>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 d-none d-sm-block">
                    <div class="d-flex align-items-center justify-content-sm-end">
                        <div class="d-flex align-items-center">
                            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-toggle="tooltip"
                                data-original-title="Jessica Rowland">
                                <img alt="Image placeholder" src="../../../assets/img/team-5.jpg"
                                    class="">
                            </a>
                            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-toggle="tooltip"
                                data-original-title="Audrey Love">
                                <img alt="Image placeholder" src="../../../assets/img/team-2.jpg"
                                    class="rounded-circle">
                            </a>
                            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-toggle="tooltip"
                                data-original-title="Michael Lewis">
                                <img alt="Image placeholder" src="../../../assets/img/team-1.jpg"
                                    class="rounded-circle">
                            </a>
                        </div>
                        <small class="ps-2 font-weight-bold">and 30+ more</small>
                    </div>
                </div>
                <hr class="horizontal dark my-3">
            </div>
            <!-- Comments -->
            <div class="mb-1">
                <div class="d-flex mt-4 mb-2">
                    <div class="flex-grow-1 my-auto">
                        <form>
                            <textarea class="form-control" placeholder="Write your comment" rows="1"></textarea>
                        </form>
                    </div>
                </div>
                <button type="button" class="btn btn-sm bg-gradient-success mb-0">
                    Leave Comment
                </button>
            </div>
        </div>
    </div>
</div>
