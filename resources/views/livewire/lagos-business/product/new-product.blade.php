<div class="container-fluid py-4">
    <div class="row">
        <div class="col-lg-6">
            <h4>Add product</h4>
        </div>
        <div class="col-lg-6 text-right d-flex flex-column justify-content-center">
            <button type="button" wire:click="addProduct"
                class="btn bg-gradient-primary mb-0 ms-lg-auto me-lg-0 me-auto mt-lg-0 mt-2">Save</button>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-lg-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="font-weight-bolder">Product Image</h5>
                    <div class="row">
                        <div class="col-12">
                            <input type="file" wire:model="picture" id="file-input" accept="image/*"
                                class="d-none">
                            <span class="h-12 w-12 rounded-full overflow-hidden bg-gray-100">
                                @if ($picture)
                                    <img src="{{ $picture->temporaryUrl() }}"
                                        class="w-100 border-radius-lg shadow-lg mt-4" alt="Profile Photo">
                                @else
                                    <img src="{{ asset('/assets/img/image_placeholder.jpg') }}"
                                        class="w-100 border-radius-lg shadow-lg mt-4" alt="Profile Photo">
                                @endif
                            </span>
                        </div>
                        <div class="col-12 mt-4">
                            <div class="d-flex">
                                <label for="file-input" class="btn bg-gradient-primary btn-sm mb-0 me-2" type="button"
                                    name="button">Upload</label>
                                <button class="btn btn-outline-dark btn-sm mb-0" wire:click="removePicture"
                                    name="button">Remove</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8 mt-lg-0 mt-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="font-weight-bolder">Product Information</h5>
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <label>Name</label>
                            <input class="form-control" type="text" wire:model.lazy="name" />
                            @error('name') <div class="text-danger text-xs">{{ $message }}</div> @enderror
                        </div>
                        <div class="col-12 col-sm-6 mt-sm-0">
                            <div wire:ignore>
                                <label class="">Category</label>
                                <select wire:model="category_id" class="form-control" id="choices-category-edit">
                                    <option selected value="">Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('category_id') <div class="text-danger text-xs">{{ $message }}</div> @enderror
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-4">
                            <label class="mt-4">Price ($)</label>
                            <input wire:model.lazy="price" class="form-control" type="number" value="" />
                        </div>
                        <div class="col-4">
                            <label class="mt-4">Quantity</label>
                            <input wire:model.lazy="quantity" class="form-control" type="number" value="" />
                        </div>
                        <div class="col-4">
                            <label class="mt-4">Collection</label>
                            <input class="form-control" type="text" value="Summer" />
                        </div>
                    </div>
                    <div class="row" wire:ignore>
                        <div class="col-sm-12">
                            <label class="mt-4">Description</label>
                            <p class="form-text text-muted text-xs ms-1 d-inline">
                                (optional)
                            </p>
                            <div wire:ignore>
                                <div x-data x-ref="quill" x-init="
                                quill = new Quill($refs.quill, {theme: 'snow'});
                                quill.on('text-change', function () {
                                    $dispatch('quill-text-change', quill.root.innerHTML);
                                });
                                " x-on:quill-text-change.debounce.2000ms="@this.set('description', $event.detail)">
                                    {!! $description !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="../../../assets/js/plugins/quill.min.js"></script>
<script src="../../../assets/js/plugins/choices.min.js"></script>
<script>
    if (document.getElementById('choices-category-edit')) {
        var element = document.getElementById('choices-category-edit');
        const example = new Choices(element, {
            searchEnabled: true
        });
    };
</script>
