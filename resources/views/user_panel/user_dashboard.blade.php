@include('user_panel.include.header_include')

<body>
    <!-- page-wrapper start -->
    <div class="page-wrapper default-version">
        @include('admin_panel.include.sidebar_include')
        <!-- sidebar end -->

        <!-- navbar-wrapper start -->
        @include('user_panel.include.navbar_include')
        <!-- navbar-wrapper end -->

        <div class="body-wrapper">
            <div class="bodywrapper__inner">

                <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
                    <h6 class="page-title">Create Sale</h6>
                    <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
                        <a href="https://script.viserlab.com/torylab/admin/purchase/all"
                            class="btn btn-sm btn-outline--primary">
                            <i class="la la-undo"></i> Back</a>
                    </div>
                </div>

                <div class="row gy-3">
                    <div class="col-lg-12 col-md-12 mb-30">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('store-Sale') }}" method="POST">
                                    @csrf
                                    <div class="row mb-3">
                                        <div class="col-xl-4 col-sm-6">
                                            <div class="form-group" id="supplier-wrapper">
                                                <label class="form-label">Customers</label>
                                                <select name="customer" class="select2-basic form-control" required>
                                                    <option selected disabled>Select One</option>
                                                    @foreach($Customers as $Customer)
                                                    <option value="{{ $Customer->customer_name }}"> {{ $Customer->customer_name }} </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-sm-6">
                                            <div class="form-group">
                                                <label>Date</label>
                                                <input name="sale_date" type="date" data-language="en"
                                                    class="datepicker-here form-control bg--white"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-sm-6">
                                            <div class="form-group">
                                                <label class="form-label">Warehouse</label>
                                                <select name="warehouse_id" class="form-control " required>
                                                    <option selected disabled>Select One</option>
                                                    @foreach($Warehouses as $Warehouse)
                                                    <option value="{{ $Warehouse->name }}">{{ $Warehouse->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Items List -->
                                    <div class="row mt-2 mb-2">
                                        <div class="search-container">
                                            <label class="form-label" style="font-size: 20px;">Search Products</label>
                                            <input type="text" id="productSearch" placeholder="Search Products..." class="form-control">
                                            <ul id="searchResults" class="list-group"></ul>
                                        </div>



                                    </div>
                                    <div class="row mb-3">
                                        <div class="table-responsive">
                                            <table class="productTable table border">
                                                <thead class="border bg--dark">
                                                    <tr>
                                                        <th>Category</th>
                                                        <th>Name</th>
                                                        <th>Quantity<span class="text--danger">*</span></th>
                                                        <th>Price<span class="text--danger">*</span></th>
                                                        <th>Total</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="purchaseItems">
                                                </tbody>

                                            </table>
                                            <button type="button" class="btn btn-primary mt-4 mb-4" id="addRow">Add More</button>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-8 col-sm-6">
                                            <div class="form-group">
                                                <label>Sale Note</label>
                                                <textarea name="note" class="form-control"></textarea>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-sm-6">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label>Total Price</label>
                                                        <div class="input-group">
                                                            <span class="input-group-text">$</span>
                                                            <input type="number" name="total_price" class="form-control total_price" required readonly>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label>Discount</label>
                                                        <div class="input-group">
                                                            <span class="input-group-text">$</span>
                                                            <input type="number" id="discount" name="discount" class="form-control" step="any">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label>Payable Amount</label>
                                                        <div class="input-group">
                                                            <span class="input-group-text">$</span>
                                                            <input type="number" name="payable_amount" class="form-control payable_amount" readonly>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Cash Payment Fields Start -->
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label>Cash Received</label>
                                                        <div class="input-group">
                                                            <span class="input-group-text">$</span>
                                                            <input type="number" name="cash_received" id="cashReceived" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label>Change to Return</label>
                                                        <div class="input-group">
                                                            <span class="input-group-text">$</span>
                                                            <input type="number" name="change_to_return" id="changeToReturn" class="form-control" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Cash Payment Fields End -->

                                            </div>
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

    @include('user_panel.include.footer_include')