@include('admin_panel.include.header_include')

<body>
    <!-- page-wrapper start -->
    <div class="page-wrapper default-version">

        <!-- sidebar start -->
        @include('admin_panel.include.sidebar_include')
        <!-- sidebar end -->

        <!-- navbar-wrapper start -->
        @include('admin_panel.include.navbar_include')
        <!-- navbar-wrapper end -->

        <div class="body-wrapper">
            <div class="bodywrapper__inner">

                <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
                    <h6 class="page-title">Add Warehouse</h6>
                </div>

                <div class="row gy-3">
                    <div class="col-lg-12 col-md-12 mb-30">
                        <div class="card">
                            <div class="card-body">
                            @if (session()->has('success'))
                                <div class="alert alert-success">
                                    <strong>Success!</strong> {{ session('success') }}.
                                </div>
                                @endif

                                <form action="{{ route('store-Purchase') }}" method="POST">
                                    @csrf
                                    <div class="row mb-3">
                                        <div class="col-xl-4 col-sm-4">
                                            <div class="form-group">
                                                <label>Date</label>
                                                <input name="purchase_date" type="date" class="datepicker-here form-control bg--white" required>
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-sm-4">
                                            <div class="form-group">
                                                <label class="form-label">Warehouse/Shop</label>
                                                <select name="warehouse_id" class="form-control" required>
                                                    <option selected disabled>Select One</option>
                                                    <option value="Shop">Shop</option>
                                                    {{-- @foreach($WarehouseStock as $WarehouseStock)
                                                    <option value="{{ $Warehouse->name }}">{{ $Warehouse->name }}</option>
                                                    @endforeach --}}
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-sm-4">
                                            <div class="form-group">
                                                <label class="form-label">Supplier Name </label>
                                                <input type="text" class="form-control" placeholder="Enter Name" name="supplier_name">
                                            </div>
                                        </div>


                                    </div>

                                    <div class="row mb-3">
                                        <div class="table-responsive">
                                            <table class="productTable table border">
                                                <thead class="border bg--dark">
                                                    <tr>
                                                        <th>Category</th>
                                                        <th>Name</th>
                                                        <th>Unit</th>
                                                        <th>Quantity<span class="text--danger">*</span></th>
                                                        <th>Price<span class="text--danger">*</span></th>
                                                    </tr>
                                                </thead>
                                                <tbody id="purchaseItems">
                                                    <tr>
                                                        {{-- <td>
                                                            <select name="item_category[]" class="form-control item-category" required>
                                                                <option value="" disabled selected>Select Category</option>
                                                                @foreach($Category as $Categories)
                                                                <option value="{{ $Categories->category }}">{{ $Categories->category }}</option>
                                                                @endforeach
                                                            </select>
                                                        </td> --}}
                                                        <td>
                                                            <select name="item_name[]" class="form-control item-name" required>
                                                                <option value="" disabled selected>Select Item</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <input type="text" name="unit[]" class="form-control unit" readonly> <!-- Readonly Unit column -->
                                                        </td>
                                                        <td>
                                                            <input type="number" name="quantity[]" class="form-control quantity" required>
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-danger remove-row">Delete</button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <button type="button" class="btn btn-primary mt-4 mb-4" id="addRow">Add More</button>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn--primary w-100 h-45">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div><!-- bodywrapper__inner end -->
        </div><!-- body-wrapper end -->

    </div>
    @include('admin_panel.include.footer_include')
