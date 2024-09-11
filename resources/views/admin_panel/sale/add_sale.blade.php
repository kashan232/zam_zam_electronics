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
                    <h6 class="page-title">Add Sale</h6>
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
                                                    <tr>
                                                        <td>
                                                            <select name="item_category[]" class="form-control item-category" required>
                                                                <option value="" disabled selected>Select Category</option>
                                                                @foreach($Category as $Categories)
                                                                <option value="{{ $Categories->category }}">{{ $Categories->category }}</option>
                                                                @endforeach
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select name="item_name[]" class="form-control item-name" required>
                                                                <option value="" disabled selected>Select Item</option>
                                                                <!-- Items will be dynamically populated here based on category selection -->
                                                            </select>
                                                        </td>
                                                        <td><input type="number" name="quantity[]" class="form-control quantity" required></td>
                                                        <td><input type="number" name="price[]" class="form-control price" required></td>
                                                        <td><input type="number" name="total[]" class="form-control total" readonly></td>
                                                        <td>
                                                            <button type="button" class="btn btn-danger remove-row">Delete</button>
                                                        </td>
                                                    </tr>
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
                                                            <input type="number" name="discount" class="form-control" step="any">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label>Payable Amount</label>
                                                        <div class="input-group">
                                                            <span class="input-group-text">$</span>
                                                            <input type="number" name="Payable_amount" class="form-control payable_amount" disabled>
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
    @include('admin_panel.include.footer_include')


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const purchaseItems = document.getElementById('purchaseItems');
            const cashReceivedInput = document.getElementById('cashReceived');
            const payableAmountInput = document.querySelector('.payable_amount');
            const changeToReturnInput = document.getElementById('changeToReturn');

            cashReceivedInput.addEventListener('input', function() {
                const cashReceived = parseFloat(cashReceivedInput.value) || 0;
                const payableAmount = parseFloat(payableAmountInput.value) || 0;

                const changeToReturn = cashReceived - payableAmount;
                changeToReturnInput.value = changeToReturn > 0 ? changeToReturn.toFixed(2) : 0;
            });

            // Existing code for adding/removing rows and calculating total
            const addRowButton = document.getElementById('addRow');
            addRowButton.addEventListener('click', function() {
                const newRow = `
            <tr>
                <td>
                    <select name="item_category[]" class="form-control item-category" required>
                        <option value="" disabled selected>Select Category</option>
                        @foreach($Category as $Categories)
                        <option value="{{ $Categories->category }}">{{ $Categories->category }}</option>
                        @endforeach
                    </select>
                </td>
                <td>
                    <select name="item_name[]" class="form-control item-name" required>
                        <option value="" disabled selected>Select Item</option>
                    </select>
                </td>
                <td><input type="number" name="quantity[]" class="form-control quantity" required></td>
                <td><input type="number" name="price[]" class="form-control price" required></td>
                <td><input type="number" name="total[]" class="form-control total" readonly></td>
                <td>
                    <button type="button" class="btn btn-danger remove-row">Delete</button>
                </td>
            </tr>`;
                purchaseItems.insertAdjacentHTML('beforeend', newRow);
            });

            purchaseItems.addEventListener('click', function(e) {
                if (e.target.classList.contains('remove-row')) {
                    e.target.closest('tr').remove();
                    calculateTotalPrice();
                }
            });

            purchaseItems.addEventListener('input', function(e) {
                if (e.target.classList.contains('quantity') || e.target.classList.contains('price')) {
                    const row = e.target.closest('tr');
                    const quantity = parseFloat(row.querySelector('.quantity').value) || 0;
                    const price = parseFloat(row.querySelector('.price').value) || 0;
                    const total = row.querySelector('.total');

                    total.value = (quantity * price).toFixed(2);
                    calculateTotalPrice();
                }
            });

            // Update payable amount when discount is entered
            const discountInput = document.getElementById('discount');
            discountInput.addEventListener('input', function() {
                calculateTotalPrice();
            });

            function calculateTotalPrice() {
                let totalPrice = 0;
                document.querySelectorAll('.total').forEach(function(input) {
                    totalPrice += parseFloat(input.value) || 0;
                });
                document.querySelector('.total_price').value = totalPrice.toFixed(2);

                const discount = parseFloat(discountInput.value) || 0;
                const payableAmount = totalPrice - discount;
                payableAmountInput.value = payableAmount.toFixed(2);

                // Update change returned if cash is selected
                if (paymentMethodSelect.value === 'Cash' && cashReceivedInput.value) {
                    const cashReceived = parseFloat(cashReceivedInput.value) || 0;
                    const change = cashReceived - payableAmount;
                    changeReturnedInput.value = change.toFixed(2);
                }
            }

            // Event listener for category selection (existing code)
            purchaseItems.addEventListener('change', function(e) {
                if (e.target.classList.contains('item-category')) {
                    const categoryName = e.target.value;
                    const row = e.target.closest('tr');
                    const itemSelect = row.querySelector('.item-name');

                    if (categoryName) {
                        fetch(`/get-items-by-category/${categoryName}`)
                            .then(response => response.json())
                            .then(items => {
                                // Clear previous options
                                itemSelect.innerHTML = '<option value="" disabled selected>Select Item</option>';

                                // Populate new options
                                items.forEach(item => {
                                    const option = document.createElement('option');
                                    option.value = item.product_name;
                                    option.textContent = item.product_name;
                                    itemSelect.appendChild(option);
                                });
                            })
                            .catch(error => console.error('Error fetching items:', error));
                    }
                }
            });
        });
    </script>
</body>