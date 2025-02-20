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
                    <h6 class="page-title">All Purchases Return</h6>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card b-radius--10 bg--transparent">
                            <div class="card-body p-0 ">
                                <div class="table-responsive--md table-responsive">
                                    <table id="example" class="display table table--light style--two bg--white" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Return Date</th>
                                                <th>Supplier</th>
                                                <th>Warehouse</th>
                                                <th>Item Name</th>
                                                <th>Return Quantity</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($PurchaseReturns as $PurchaseReturn)
                                            <tr>
                                                <td>{{ $PurchaseReturn->purchase_date }}</td>
                                                <td>{{ $PurchaseReturn->supplier_name }}</td>
                                                <td>{{ $PurchaseReturn->warehouse_id }}</td>
                                                <td>
                                                    @php
                                                    $items = json_decode($PurchaseReturn->item_name, true);
                                                    @endphp
                                                    @foreach($items as $item)
                                                    <span class="fw-bold">{{ $item }}</span><br>
                                                    @endforeach
                                                </td>
                                                <td>
                                                    @php
                                                    $quantities = json_decode($PurchaseReturn->return_quantity, true);
                                                    @endphp
                                                    @foreach($quantities as $quantity)
                                                    <span>{{ $quantity }}</span><br>
                                                    @endforeach
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div><!-- card end -->
                    </div>
                </div>
            </div><!-- bodywrapper__inner end -->
        </div><!-- body-wrapper end -->

    </div>
    @include('admin_panel.include.footer_include')