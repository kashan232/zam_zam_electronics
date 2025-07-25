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
                    <h6 class="page-title">Add Product</h6>
                    <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
                        <a href="{{ route('all-product') }}"
                            class="btn btn-sm btn-outline--primary">
                            <i class="la la-undo"></i> Back</a>
                    </div>
                </div>
                <div class="row mb-none-30">
                    <div class="col-lg-12 col-md-12 mb-30">
                        <div class="card">
                            <div class="card-body">
                                @if (session()->has('success'))
                                <div class="alert alert-success">
                                    <strong>Success!</strong> {{ session('success') }}.
                                </div>
                                @endif

                                <form action="{{ route('store-multi-product') }}" method="POST">
                                    @csrf

                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label>Category</label>
                                            <select name="category_id" id="category_id" class="form-control" required>
                                                <option value="">Select Category</option>
                                                @foreach ($all_category as $cat)
                                                <option value="{{ $cat->id }}">{{ $cat->category }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-md-6">
                                            <label>Size</label>
                                            <select name="unit_id" id="unit_id" class="form-control" required>
                                                <option value="">Select Size</option>
                                                {{-- Will be filled via JS --}}
                                            </select>
                                        </div>
                                    </div>

                                    <hr>

                                    <table class="table table-bordered" id="product-entry-table">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>#</th>
                                                <th>Product Name</th>
                                                <th>Price</th>
                                                <th><button type="button" class="btn btn-sm btn-success" id="add-row">+</button></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="row-index">1</td>
                                                <td><input type="text" name="products[0][name]" class="form-control" required></td>
                                                <td><input type="number" name="products[0][price]" class="form-control" required></td>
                                                <td><button type="button" class="btn btn-sm btn-danger remove-row">x</button></td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <div class="form-group text-end">
                                        <button type="submit" class="btn btn-primary mt-3">Save Products</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- bodywrapper__inner end -->
        </div><!-- body-wrapper end -->
    </div>
    @include('admin_panel.include.footer_include')

    <script>
        let rowIndex = 1;

        $('#add-row').click(function() {
            rowIndex++;
            $('#product-entry-table tbody').append(`
            <tr>
                <td class="row-index">${rowIndex}</td>
                <td><input type="text" name="products[${rowIndex}][name]" class="form-control" required></td>
                <td><input type="number" name="products[${rowIndex}][price]" class="form-control" required></td>
                <td><button type="button" class="btn btn-sm btn-danger remove-row">x</button></td>
            </tr>
        `);
        });

        // Remove row
        $(document).on('click', '.remove-row', function() {
            $(this).closest('tr').remove();
            updateRowIndexes();
        });

        // Reorder row numbers
        function updateRowIndexes() {
            rowIndex = 0;
            $('#product-entry-table tbody tr').each(function() {
                $(this).find('.row-index').text(++rowIndex);
            });
        }

        // Auto load sizes (units) based on category
        $('#category_id').change(function() {
            let categoryId = $(this).val();
            $('#unit_id').html('<option>Loading...</option>');

            $.ajax({
                url: "{{ route('get-units-by-category') }}",
                method: "GET",
                data: {
                    category_id: categoryId
                },
                success: function(res) {
                    let html = '<option value="">Select Size</option>';
                    res.units.forEach(unit => {
                        html += `<option value="${unit.id}">${unit.unit}</option>`;
                    });
                    $('#unit_id').html(html);
                }
            });
        });
    </script>