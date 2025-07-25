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
                    <h6 class="page-title">Cash Transfer</h6>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card b-radius--10">
                            <div class="card-body p-0">
                                @if (session()->has('success'))
                                <div class="alert alert-success">
                                    <strong>Success!</strong> {{ session('success') }}.
                                </div>
                                @endif
                                <div class="table-responsive--sm table-responsive">
                                    <table id="example" class="display  table table--light" style="width:100%">
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