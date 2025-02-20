@include('admin_panel.include.header_include')

<body>
    <div class="page-wrapper default-version">

        @include('admin_panel.include.sidebar_include')
        @include('admin_panel.include.navbar_include')

        <div class="body-wrapper">
            <div class="bodywrapper__inner">

                <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
                    <h6 class="page-title">Add Purchase Return</h6>
                    <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
                        <a href="#" class="btn btn-sm btn-outline--primary">
                            <i class="la la-undo"></i> Back</a>
                    </div>
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
                                <form action="{{ route('store-purchase-return') }}" method="POST">
                                    @csrf
                                    <!-- Invoice and Supplier Info -->
                                    <div class="row mb-3">
                                        <div class="col-xl-4 col-sm-4">
                                            <div class="form-group">
                                                <label>Date</label>
                                                <input name="purchase_date" type="date" class="datepicker-here form-control bg--white" value="{{ $purchase->purchase_date }}">
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-sm-4">
                                            <div class="form-group">
                                                <label class="form-label">Warehouse/Shop</label>
                                                <input name="warehouse_id" type="text" class="datepicker-here form-control bg--white" value="{{ $purchase->warehouse_id }}">
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-sm-4">
                                            <div class="form-group">
                                                <label class="form-label">Supplier Name </label>
                                                <input type="text" class="form-control" placeholder="Enter Name" name="supplier_name" value="{{ $purchase->supplier_name }}">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Product Items List -->
                                    <div class="row mb-3">
                                        <div class="table-responsive">
                                            <table class="table border">
                                                <thead class="border bg--dark">
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Purchase Quantity</th>
                                                        <th>Stock Quantity</th>
                                                        <th>Return Quantity</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="purchaseItems">
                                                    @foreach($itemNames as $index => $itemName)
                                                    <tr>
                                                        <td>
                                                            <input type="hidden" name="item_name[]" value="{{ $itemName }}">
                                                            {{ $itemName }}
                                                        </td> <!-- Item Name -->
                                                        <td>{{ $quantities[$index] }}</td> <!-- Purchase Quantity -->
                                                        <td>{{ $stocks[$index] }}</td> <!-- Stock Quantity -->
                                                        <td>
                                                            <input type="number" name="return_qty[]" class="form-control return-quantity" value="0" min="0" max="{{ $stocks[$index] }}">
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn--primary w-100 h-45">Submit Return</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div><!-- bodywrapper__inner end -->
        </div><!-- body-wrapper end -->

    </div>

    @include('admin_panel.include.footer_include')
