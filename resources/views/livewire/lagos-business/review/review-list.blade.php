<div class="container-fluid py-4">
    <div class="d-flex justify-content-between">
        <h5>Business Review List</h5>
        <div class="">          
            <div style="display:inline-block">
                @include('components.rating',['rating'=>$total_rating,'starsize'=>'20'])
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="table-responsive">
                    <table class="table table-flush" id="datatable-search">
                        <thead class="thead-light">
                            <tr>
                                <th>Id</th>
                                <th>Date</th>
                                <th>Customer</th>
                                <th>Rating</th>
                                <th>Content</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach ($reviews as $obj)
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="customCheck2">
                                            </div>
                                            <p class="text-xs font-weight-bold ms-2 mb-0">#{{ $obj->id }}</p>
                                        </div>
                                    </td>


                                    <td class="font-weight-bold">
                                        <span class="my-2 text-xs">{{ $obj->created_at }}</span>
                                    </td>
                                    <td class="text-xs font-weight-bold">
                                        <div class="d-flex align-items-center">
                                            <span>{{ @$obj->customer->first_name }}
                                                {{ @$obj->customer->last_name }}</span>
                                        </div>
                                    </td>
                                    <td class="text-xs font-weight-bold">
                                        <span class="my-2 text-xs">{{ $obj->rating }}</span>
                                    </td>
                                    <td class="text-xs font-weight-bold">
                                        <span class="my-2 text-xs">{{ substr($obj->content, 0, 40) }}...</span>
                                    </td>
                                    <td>
                                        <a href="{{ route('review-detail', ['id' => $obj->id]) }}"
                                            class="mx-3" data-bs-toggle="tooltip"
                                            data-bs-original-title="View Review">
                                            <i class="fas fa-eye"></i>
                                        </a>
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
