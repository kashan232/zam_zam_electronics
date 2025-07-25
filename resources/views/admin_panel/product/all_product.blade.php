<!-- meta tags and other links -->
@include('admin_panel.include.header_include')

<body>
    <!-- page-wrapper start -->
    <div class="page-wrapper default-version">
        @include('admin_panel.include.sidebar_include')
        <!-- sidebar end -->

        <!-- navbar-wrapper start -->
        @include('admin_panel.include.navbar_include')
        <!-- navbar-wrapper end -->

        <div class="body-wrapper">
            <div class="bodywrapper__inner">
                <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
                    <h6 class="page-title">All Products</h6>
                    <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">

                        <a href="{{ route('add-product') }}" class="btn btn-outline--primary">
                            <i class="la la-plus"></i>Add New </a>

                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card b-radius--10">
                            <div class="card-body p-0">
                                <div class="table-responsive--md table-responsive">
                                    <table id="example" class="display  table table--light style--two bg--white"
                                        style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Name </th>
                                                <th>Category </th>
                                                <th>Size</th>
                                                <th>Retail Price</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($all_product as $product)
                                            <tr>
                                                <td>
                                                    <span class="fw-bold">{{ $product->product_name }}</span>
                                                </td>
                                                <td>
                                                    {{ $product->category->category ?? 'N/A' }}
                                                </td>
                                                <td>
                                                    {{ $product->unit->unit ?? 'N/A' }}
                                                </td>
                                                <td>{{ $product->retail_price }}</td>
                                                <td>
                                                    <!-- Edit Button -->
                                                    <button type="button"
                                                        class="btn btn-sm btn-outline--primary ms-1 editBtn"
                                                        data-id="{{ $product->id }}"
                                                        data-name="{{ $product->product_name }}"
                                                        data-category="{{ $product->category_id }}"
                                                        data-size="{{ $product->unit_id }}"
                                                        data-retail_price="{{ $product->retail_price }}"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#editModal">
                                                        <i class="las la-pen"></i> Edit
                                                    </button>

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
            </div>
        </div>
    </div>

    <!-- Edit Product Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form action="{{ route('update-product') }}" method="POST">
                @csrf
                <input type="hidden" name="product_id" id="modal_product_id">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel">Edit Product</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <div class="mb-3">
                            <label for="modal_product_name" class="form-label">Product Name</label>
                            <input type="text" class="form-control" name="product_name" id="modal_product_name" required>
                        </div>

                        <div class="mb-3">
                            <label for="modal_category" class="form-label">Category</label>
                            <select name="category_id" class="form-control">
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    {{ $category->id == $product->category_id ? 'selected' : '' }}>
                                    {{ $category->category }}
                                </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="modal_size" class="form-label">Size</label>
                            <select name="unit_id" class="form-control" id="modal_unit_select">
                                <option value="">Select Size</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="modal_retail_price" class="form-label">Retail Price</label>
                            <input type="number" class="form-control" name="retail_price" id="modal_retail_price" required>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn--primary">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


    @include('admin_panel.include.footer_include')
    <script>
        $(document).ready(function() {
            $('.editBtn').click(function() {
                let id = $(this).data('id');
                let name = $(this).data('name');
                let categoryId = $(this).data('category');
                let sizeId = $(this).data('size');
                let price = $(this).data('retail_price');

                $('#modal_product_id').val(id);
                $('#modal_product_name').val(name);
                $('#modal_category').val(categoryId);
                $('#modal_retail_price').val(price);

                // Load units based on category (ajax)
                $.ajax({
                    url: `/get-units/${categoryId}`,
                    method: 'GET',
                    success: function(data) {
                        let options = `<option value="">Select Size</option>`;
                        data.forEach(function(unit) {
                            options += `<option value="${unit.id}" ${unit.id == sizeId ? 'selected' : ''}>${unit.unit}</option>`;
                        });
                        $('#modal_unit_select').html(options);
                    }
                });
            });

            // When category is changed in modal (optional)
            $('#modal_category').on('change', function() {
                const categoryId = $(this).val();
                $.ajax({
                    url: "{{ route('get.units.by.category', ':id') }}".replace(':id', categoryId),
                    method: 'GET',
                    success: function(data) {
                        let options = `<option value="">Select Size</option>`;
                        data.forEach(function(unit) {
                            options += `<option value="${unit.id}">${unit.unit}</option>`;
                        });
                        $('#modal_unit_select').html(options);
                    }
                });

            });
        });
    </script>