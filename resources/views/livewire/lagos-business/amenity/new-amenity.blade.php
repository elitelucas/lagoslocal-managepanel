<div class="container-fluid py-4">
    <div class="row">
        <div class="col-lg-6">
            <h4>Add Amenity</h4>
        </div>
        <div class="col-lg-6 text-right d-flex flex-column justify-content-center">
            <button type="button" wire:click="addAmenity"
                class="btn bg-gradient-primary mb-0 ms-lg-auto me-lg-0 me-auto mt-lg-0 mt-2">Save</button>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-lg-12 mt-lg-0 mt-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="font-weight-bolder">Amenity Information</h5>
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <label>Name</label>
                            <input class="form-control" type="text" wire:model.lazy="name" />
                            @error('name') <div class="text-danger text-xs">{{ $message }}</div> @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="../../../assets/js/plugins/quill.min.js"></script>
<script src="../../../assets/js/plugins/choices.min.js"></script>
