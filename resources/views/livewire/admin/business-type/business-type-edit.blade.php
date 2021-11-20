<div class="container-fluid py-4">
    <div class="row">
        <div class="col-9 mx-auto">
            <div class="card card-body mt-4">
                <h6 class="mb-0">{{ __('Edit Category') }}</h6>
                <p class="text-sm mb-0">{{ __('Edit business category') }}</p>
                <hr class="horizontal dark my-3">
                <form wire:submit.prevent="edit" action="#" method="POST">
                    <div>
                        <label for="categorytName" class="form-label">{{ __('Category Name') }}</label>
                        <div class="@error('businesstype.name')has-danger @enderror">
                            <input wire:model="businesstype.name" type="text"
                                class="form-control @error('businesstype.name') is-invalid @enderror" id="categorytName">
                        </div>
                        @error('businesstype.name') <div class="text-danger text-xs">{{ $message }}</div>@enderror
                    </div>
                    <div class="d-flex justify-content-end mt-4">
                        <a href="{{ route('admin-businesstype-list') }}" type="button" name="button"
                            class="btn btn-light m-0">{{ __('Back to list') }}</a>
                        <button type="submit" name="button"
                            class="btn bg-gradient-primary m-0 ms-2">{{ __('Submit') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
