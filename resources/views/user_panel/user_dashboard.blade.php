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
                    <h6 class="page-title">Staff Dashboard</h6>
                    <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
                    </div>
                </div>

                <div class="card">
                    <div class="card-body text-center">
                        <h4 class="mb-3">Today's Sale</h4>
                        <h2 class="text-success">Rs. {{ number_format($transferableAmount, 0) }}</h2>

                        @if($transferableAmount > 0)
                        <form action="{{ route('staff.transfer.cash') }}" method="POST">
                            @csrf
                            <input type="hidden" name="amount" value="{{ $transferableAmount }}">
                            <button type="submit" class="btn btn-danger mt-3">Transfer to Admin</button>
                        </form>
                        @else
                        <p class="text-muted mt-3">Already Transferred</p>
                        @endif
                    </div>
                </div>

            </div><!-- bodywrapper__inner end -->
        </div><!-- body-wrapper end -->
    </div>

    @include('admin_panel.include.footer_include')