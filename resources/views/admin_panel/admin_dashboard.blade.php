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
                    <h6 class="page-title">Dashboard</h6>
                    <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
                    </div>
                </div>

                <div class="row gy-4">

                    <div class="col-xxl-3 col-sm-6">
                        <div class="widget-two style--two box--shadow2 b-radius--5 bg--success">
                            <div class="widget-two__icon b-radius--5 bg--success">
                                <i class="las la-cash-register"></i>
                            </div>

                            <div class="widget-two__content">
                                <h3 class="text-white">Rs. {{ number_format($cashBox, 2) }}</h3>
                                <p class="text-white">Cash Box (Today)</p>
                            </div>
                            <a href="#" class="widget-two__btn">Detail</a>
                        </div>
                    </div>

                    <div class="col-xxl-3 col-sm-6">
                        <div class="card bg-info text-white">
                            <div class="card-body text-center">
                                <h5 class="card-title">Today’s Staff Transfers</h5>
                                <p class="card-text fs-4">
                                    Rs. {{ number_format($todayCashTransfers, 2) }}
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-3 col-sm-6">
                        <div class="widget-two style--two box--shadow2 b-radius--5 bg--1">
                            <div class="widget-two__icon b-radius--5 bg--1">
                                <i class="lab la-buffer"></i>
                            </div>

                            <div class="widget-two__content">
                                <h3 class="text-white">{{$totalsales }}</h3>
                                <p class="text-white">Total Sales</p>
                            </div>
                            <a href="#" class="widget-two__btn">View
                                All</a>
                        </div>
                    </div><!-- dashboard-w1 end -->
                    <div class="col-xxl-3 col-sm-6">
                        <div class="widget-two style--two box--shadow2 b-radius--5 bg--1">
                            <div class="widget-two__icon b-radius--5 bg--1">
                                <i class="lab la-buffer"></i>
                            </div>

                            <div class="widget-two__content">
                                <h3 class="text-white">{{ $categories }}</h3>
                                <p class="text-white">Categories</p>
                            </div>
                            <a href="#" class="widget-two__btn">View
                                All</a>
                        </div>
                    </div><!-- dashboard-w1 end -->
                    <div class="col-xxl-3 col-sm-6">
                        <div class="widget-two style--two box--shadow2 b-radius--5 bg--primary">
                            <div class="widget-two__icon b-radius--5 bg--primary">
                                <i class="lab la-product-hunt"></i>
                            </div>

                            <div class="widget-two__content">
                                <h3 class="text-white">{{ $products }}</h3>
                                <p class="text-white">Products</p>
                            </div>
                            <a href="#" class="widget-two__btn">View
                                All</a>
                        </div>
                    </div><!-- dashboard-w1 end -->
                </div><!-- row end-->

                <div class="row mt-5">
                    <div class="col-12">
                        <div class="card box--shadow2">
                            <div class="card-header bg--primary text-white">
                                <h5 class="mb-0 text-white">Staff Cash Transfer History</h5>
                            </div>
                            <div class="card-body table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead class="table-dark">
                                        <tr>
                                            <th>#</th>
                                            <th>Staff Name</th>
                                            <th>Amount (Rs.)</th>
                                            <th>Transfer Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($staffTransfers as $key => $transfer)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>Staff</td>
                                            <td>{{ number_format($transfer->amount, 2) }}</td>
                                            <td>{{ $transfer->created_at->format('d-M-Y h:i A') }}</td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="4" class="text-center">No transfers found.</td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>



            </div><!-- bodywrapper__inner end -->
        </div><!-- body-wrapper end -->
    </div>

    @include('admin_panel.include.footer_include')