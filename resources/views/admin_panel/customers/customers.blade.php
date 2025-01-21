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
                    <h6 class="page-title">All Customer</h6>
                    <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
                        <button type="button" class="btn btn-sm btn-outline--primary cuModalBtn" data-modal_title="Add New Customer">
                            <i class="las la-plus"></i>Add New </button>
                    </div>
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
                                <div class="table-responsive--md table-responsive">
                                    <table id="example" class="display  table table--light style--two bg--white" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>S.N.</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Address</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($Customers as $Customer)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $Customer->customer_name }}</td>
                                                <td><a href="#" class="__cf_email__" data-cfemail="d6a5a2b7b0b096a5bfa2b3f8b5b9bb">{{ $Customer->customer_email }}</a>
                                                </td>
                                                <td>{{ $Customer->customer_phone }}</td>
                                                <td>{{ $Customer->customer_address }}</td>
                                                <td>
                                                    <div class="button--group">
                                                        <button type="button" class="btn btn-sm btn-outline--primary editcustomerbtn" data-toggle="modal" data-target="#exampleModal" data-customer-id="{{ $Customer->id }}" data-customer-name="{{ $Customer->customer_name }}" data-customer-email="{{ $Customer->customer_email }}" data-customer-phone="{{ $Customer->customer_phone }}"
                                                            data-customer-address="{{ $Customer->customer_address }}">
                                                            <i class="la la-pencil"></i>Edit </button>
                                                    </div>
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
                <!-- Create Update Modal -->
                <div class="modal fade" id="cuModal">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title"></h5>
                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                    <i class="las la-times"></i>
                                </button>
                            </div>

                            <form action="{{ route('store-customer') }}" method="POST">
                                @csrf
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control" name="customer_name" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" class="form-control" name="customer_email">
                                    </div>
                                    <div class="form-group">
                                        <label>Mobile</label>
                                        <input type="text" class="form-control" name="customer_phone">
                                    </div>
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" class="form-control" name="customer_address">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn--primary w-100 h-45">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Customer</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="{{ route('update-customer') }}" method="POST">
                                @csrf
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="hidden" name="customer_id" id="customer_id">
                                        <input type="text" class="form-control" name="customer_name" id="edit_customer_name" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" class="form-control" name="customer_email" id="edit_customer_email" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Mobile</label>
                                        <input type="text" class="form-control" name="customer_phone" id="edit_customer_phone" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" class="form-control" id="edit_customer_address" name="customer_address" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn--primary w-100 h-45">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


            </div><!-- bodywrapper__inner end -->
        </div><!-- body-wrapper end -->
    </div>
    @include('admin_panel.include.footer_include')

    <script>
        $(document).ready(function() {
            // Edit category button click event
            $('.editcustomerbtn').click(function() {
                // Extract category ID and name from data attributes
                var customerId = $(this).data('customer-id');
                var customername = $(this).data('customer-name');
                var customeremail = $(this).data('customer-email');
                var customerphone = $(this).data('customer-phone');
                var customeraddress = $(this).data('customer-address');

                console.log(customerId, customername, customeremail, customerphone, customeraddress);

                $('#customer_id').val(customerId);
                $('#edit_customer_name').val(customername);
                $('#edit_customer_email').val(customeremail);
                $('#edit_customer_phone').val(customerphone);
                $('#edit_customer_address').val(customeraddress);

            });
        });
    </script>