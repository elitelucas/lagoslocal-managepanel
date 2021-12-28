<div class="container-fluid py-4">
    <div class="d-flex justify-content-between">
        <h5>Products List</h5>
        <a href="{{ route('product-new') }}" class="btn bg-gradient-primary btn-sm mb-0" type="button">+&nbsp;New
            Product</a>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div>
                    @if (session('success'))
                        <div class="mt-3 alert alert-primary alert-dismissible fade show" role="alert">
                            <span class="alert-icon text-white"><i class="ni ni-like-2"></i></span>
                            <span class="alert-text text-white">{{ session('success') }}</span>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                </div>
                <div class="table-responsive">
                    <table class="table table-flush" id="datatable-search">
                        <thead class="thead-light">
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Photo</th>
                                <th>Category</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Creation Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach ($products as $key => $obj)
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="customCheck2">
                                            </div>
                                            <p class="text-xs font-weight-bold ms-2 mb-0">{{ $key + 1 }}</p>
                                        </div>
                                    </td>
                                    <td class="font-weight-bold">
                                        <span class="my-2 text-xs">{{ $obj->name }}</span>
                                    </td>
                                    <td class="font-weight-bold">
                                        <img src="{{ $obj->picture ? $obj->picture : asset('/assets/img/image_placeholder.jpg') }}"
                                            alt="picture" class="avatar avatar-xxl me-2 rounded-3">
                                    </td>
                                    <td class="font-weight-bold">
                                        <span class="my-2 text-xs">{{ @$obj->category->name }}</span>
                                    </td>
                                    <td class="font-weight-bold">
                                        <span class="my-2 text-xs">$ {{ $obj->price }}</span>
                                    </td>
                                    <td class="font-weight-bold">
                                        <span class="my-2 text-xs">{{ $obj->quantity }}</span>
                                    </td>
                                    <td class="font-weight-bold">
                                        <span class="my-2 text-xs">{{ $obj->created_at }}</span>
                                    </td>
                                    <td>
                                        <a href="{{ route('product-edit', ['id' => $obj->id]) }}"
                                            class="mx-3" data-bs-toggle="tooltip"
                                            data-bs-original-title="Edit">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <span>
                                            <i onclick="confirm('Are you sure you want to remove the product?') || event.stopImmediatePropagation()"
                                                wire:click="delete({{ $obj->id }})"
                                                class="cursor-pointer fas fa-trash text-secondary"></i>
                                        </span>
                                    </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Kanban scripts -->
<script src="../../../assets/js/plugins/datatables.js"></script>
<script>
    const dataTableSearch = new simpleDatatables.DataTable("#datatable-search", {
        searchable: true,
        fixedHeight: false,
        perPageSelect: false
    });

    document.querySelectorAll(".export").forEach(function(el) {
        el.addEventListener("click", function(e) {
            var type = el.dataset.type;

            var data = {
                type: type,
                filename: "soft-ui-" + type,
            };

            if (type === "csv") {
                data.columnDelimiter = "|";
            }

            dataTableSearch.export(data);
        });
    });
</script>
