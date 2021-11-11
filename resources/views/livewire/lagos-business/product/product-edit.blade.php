<div class="container-fluid py-4">
    <div class="row">
        <div class="col-lg-6">
            <h4>Edit the product</h4>
        </div>
        <div class="col-lg-6 text-right d-flex flex-column justify-content-center">
            <button type="button"
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
                            <img class="w-100 border-radius-lg shadow-lg mt-4"
                                src="{{ asset('/uploads/products/' . $product->picture) }}" alt="product_image">
                        </div>
                        <div class="col-12 mt-4">
                            <div class="d-flex">
                                <button class="btn bg-gradient-primary btn-sm mb-0 me-2" type="button"
                                    name="button">Edit</button>
                                <button class="btn btn-outline-dark btn-sm mb-0" type="button"
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
                            <input class="form-control" type="text" value="{{ $product->name }}" />
                        </div>
                        <div class="col-12 col-sm-6 mt-sm-0">
                            <label class="">Category</label>
                            <select class="form-control" name="choices-category" id="choices-category-edit">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" selected="">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <label class="mt-4">Collection</label>
                            <input class="form-control" type="text" value="Summer" />
                        </div>
                        <div class="col-3">
                            <label class="mt-4">Price ($)</label>
                            <input class="form-control" type="number" value="{{ $product->price }}" />
                        </div>
                        <div class="col-3">
                            <label class="mt-4">Quantity</label>
                            <input class="form-control" type="number" value="{{ $product->quantity }}" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <label class="mt-4">Description</label>
                            <p class="form-text text-muted text-xs ms-1 d-inline">
                                (optional)
                            </p>
                            <div id="edit-deschiption-edit" class="h-50 mb-4">
                                {{ $product->description }}
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
    if (document.getElementById('edit-deschiption-edit')) {
        var quill = new Quill('#edit-deschiption-edit', {
            theme: 'snow' // Specify theme in configuration
        });
    };

    if (document.getElementById('choices-category-edit')) {
        var element = document.getElementById('choices-category-edit');
        const example = new Choices(element, {
            searchEnabled: false
        });
    };

    if (document.getElementById('choices-color-edit')) {
        var element = document.getElementById('choices-color-edit');
        const example = new Choices(element, {
            searchEnabled: false
        });
    };

    if (document.getElementById('choices-currency-edit')) {
        var element = document.getElementById('choices-currency-edit');
        const example = new Choices(element, {
            searchEnabled: false
        });
    };

    if (document.getElementById('choices-tags-edit')) {
        var tags = document.getElementById('choices-tags-edit');
        const examples = new Choices(tags, {
            removeItemButton: true
        });

        examples.setChoices(
            [{
                    value: 'One',
                    label: 'Expired',
                    disabled: true
                },
                {
                    value: 'Two',
                    label: 'Out of Stock',
                    selected: true
                }
            ],
            'value',
            'label',
            false,
        );
    }
</script>
