@include('admin_panel.include.header_include')

<body>
    <div class="page-wrapper default-version">

        @include('admin_panel.include.sidebar_include')
        @include('admin_panel.include.navbar_include')

        <div class="body-wrapper">
            <div class="bodywrapper__inner">

                <!-- Heading -->
                <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
                    <h3 class="page-title text-center w-100 fw-bold text--primary" style="font-size: 28px;">🧾  Staff Sales Records</h3>
                    <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins w-100 text-end">
                        <a href="{{ route('add-Sale') }}" class="btn btn-outline--primary">
                            <i class="la la-plus"></i> Add New Sale
                        </a>
                    </div>
                </div>

                <!-- Sales Table -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card b-radius--10 bg--white">
                            <div class="card-body p-0">
                                <div class="table-responsive--md table-responsive">
                                    <table id="example" class="display table table--light style--two" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Invoice No</th>
                                                <th>Date</th>
                                                <th>Customer</th>
                                                <th>Total Amount</th>
                                                <th>Discount</th>
                                                <th>Net Total</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($Sales as $Sale)
                                                <tr>
                                                    <td><span class="fw-bold">{{ $Sale->invoice_no }}</span></td>
                                                    <td><small>{{ $Sale->sale_date }}</small></td>
                                                    <td>
                                                        <span class="text--primary fw-bold">{{ $Sale->customer ?? 'Walking Customer' }}</span>
                                                    </td>
                                                    <td><span class="fw-bold">{{ number_format($Sale->total_price, 2) }}</span></td>
                                                    <td>{{ number_format($Sale->discount, 2) }}</td>
                                                    <td><span class="fw-bold">{{ number_format($Sale->Payable_amount, 2) }}</span></td>
                                                    <td>
                                                        <a href="{{ route('sale-receipt', ['id' => $Sale->id]) }}" 
                                                           class="btn btn-sm btn-outline--primary">
                                                           <i class="la la-print"></i> Print
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table><!-- table end -->
                                </div>
                            </div>
                        </div><!-- card end -->
                    </div>
                </div>

            </div><!-- bodywrapper__inner end -->
        </div><!-- body-wrapper end -->

    </div>
    
    @include('admin_panel.include.footer_include')
</body>
