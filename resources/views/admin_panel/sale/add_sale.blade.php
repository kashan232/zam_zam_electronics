@include('admin_panel.include.header_include')

<style>
    .search-container {
        position: relative;
        width: 100%;
        /* Adjust width as needed */
    }

    #productSearch {
        width: 100%;
        padding: 8px;
    }

    #searchResults {
        position: absolute;
        width: 100%;
        max-height: 200px;
        overflow-y: auto;
        background-color: #fff;
        border: 1px solid #ddd;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        z-index: 1000;
    }

    .search-result-item {
        padding: 10px;
        cursor: pointer;
    }

    .search-result-item:hover {
        background-color: #f0f0f0;
    }
</style>

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
                            @if (session()->has('error'))
                                <div class="alert alert-danger">
                                    <strong>Error!</strong> {{ session('error') }}.
                                </div>
                                @endif
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
                                                            <span class="input-group-text">Pkr</span>
                                                            <input type="number" name="total_price" class="form-control total_price" required readonly>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label>Discount</label>
                                                        <div class="input-group">
                                                            <span class="input-group-text">Pkr</span>
                                                            <input type="number" id="discount" name="discount" class="form-control" step="any">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label>Payable Amount</label>
                                                        <div class="input-group">
                                                            <span class="input-group-text">Pkr</span>
                                                            <input type="number" name="payable_amount" class="form-control payable_amount" readonly>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Cash Payment Fields Start -->
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label>Cash Received</label>
                                                        <div class="input-group">
                                                            <span class="input-group-text">Pkr</span>
                                                            <input type="number" name="cash_received" id="cashReceived" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label>Change to Return</label>
                                                        <div class="input-group">
                                                            <span class="input-group-text">Pkr</span>
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
            const totalPriceInput = document.querySelector('.total_price');
            const discountInput = document.getElementById('discount');
            const payableAmountInput = document.querySelector('.payable_amount');
            const cashReceivedInput = document.getElementById('cashReceived');
            const changeToReturnInput = document.getElementById('changeToReturn');

            // Function to calculate payable amount after applying discount
            function calculatePayableAmount() {
                const totalPrice = parseFloat(totalPriceInput.value) || 0;
                const discount = parseFloat(discountInput.value) || 0;
                const payableAmount = totalPrice - discount;
                payableAmountInput.value = payableAmount.toFixed(2);
            }

            // Function to calculate change to return
            function calculateChangeToReturn() {
                const payableAmount = parseFloat(payableAmountInput.value) || 0;
                const cashReceived = parseFloat(cashReceivedInput.value) || 0;
                const changeToReturn = cashReceived - payableAmount;
                changeToReturnInput.value = changeToReturn > 0 ? changeToReturn.toFixed(2) : 0;
            }

            // Event listener for discount input
            discountInput.addEventListener('input', function() {
                calculatePayableAmount();
                calculateChangeToReturn(); // Recalculate change in case cash was already entered
            });

            // Event listener for cash received input
            cashReceivedInput.addEventListener('input', function() {
                calculateChangeToReturn();
            });

            // Function to calculate total price from items
            function calculateTotalPrice() {
                let totalPrice = 0;
                document.querySelectorAll('.total').forEach(function(input) {
                    totalPrice += parseFloat(input.value) || 0;
                });
                totalPriceInput.value = totalPrice.toFixed(2);
                calculatePayableAmount();
            }


            // Add row button
            const addRowButton = document.getElementById('addRow');
            addRowButton.addEventListener('click', function() {
                const newRow = createNewRow();
                purchaseItems.insertAdjacentHTML('beforeend', newRow);
            });

            // Create new row template
            function createNewRow(category = '', productName = '', price = '') {
                return `
            <tr>
                <td>
                    <select name="item_category[]" class="form-control item-category" required>
                        <option value="" disabled ${category ? '' : 'selected'}>Select Category</option>
                        @foreach($Category as $Categories)
                        <option value="{{ $Categories->category }}" ${category === '{{ $Categories->category }}' ? 'selected' : ''}>{{ $Categories->category }}</option>
                        @endforeach
                    </select>
                </td>
                <td>
                    <select name="item_name[]" class="form-control item-name" required>
                        <option value="" disabled ${productName ? '' : 'selected'}>Select Item</option>
                        <option value="${productName}" selected>${productName}</option>
                    </select>
                </td>
                <td><input type="number" name="quantity[]" class="form-control quantity" required></td>
                <td><input type="number" name="price[]" class="form-control price" value="${price}" required></td>
                <td><input type="number" name="total[]" class="form-control total" readonly></td>
                <td>
                    <button type="button" class="btn btn-danger remove-row">Delete</button>
                </td>
            </tr>`;
            }

            // Remove row functionality
            purchaseItems.addEventListener('click', function(e) {
                if (e.target.classList.contains('remove-row')) {
                    e.target.closest('tr').remove();
                    calculateTotalPrice();
                }
            });

            // Quantity and price input change
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

            // Category selection event
            purchaseItems.addEventListener('change', function(e) {
                if (e.target.classList.contains('item-category')) {
                    const categoryName = e.target.value;
                    const row = e.target.closest('tr');
                    const itemSelect = row.querySelector('.item-name');

                    if (categoryName) {
                        fetch(`{{ route('get-items-by-category', ':categoryId') }}`.replace(':categoryId', categoryName))
                            .then(response => response.json())
                            .then(items => {
                                itemSelect.innerHTML = '<option value="" disabled selected>Select Item</option>';
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

            // Product name selection event
            purchaseItems.addEventListener('change', function(e) {
                if (e.target.classList.contains('item-name')) {
                    const productName = e.target.value;
                    const row = e.target.closest('tr');
                    const priceInput = row.querySelector('.price');

                    if (productName) {
                        fetch(`{{ route('get-product-details', ':productName') }}`.replace(':productName', productName))
                        .then(response => response.json())
                            .then(product => {
                                priceInput.value = product.retail_price;
                            })
                            .catch(error => console.error('Error fetching product details:', error));
                    }
                }
            });

            // Search product functionality
            $('#productSearch').on('keyup', function() {
                const query = $(this).val();
                searchProducts(query);
            });

            function searchProducts(query) {
                if (query.length > 0) {
                    $.ajax({
                        url: "{{ route('search-products') }}", // Using Laravel's route name
                        type: 'GET',
                        data: {
                            q: query
                        },
                        success: function(data) {
                            displaySearchResults(data);
                        },
                        error: function(error) {
                            console.error('Error in AJAX request:', error);
                        }
                    });
                } else {
                    $('#searchResults').html('');
                }
            }

            function displaySearchResults(products) {
                const searchResults = $('#searchResults');
                searchResults.html('');
                products.forEach(product => {
                    const listItem = `<li class="list-group-item search-result-item" data-category="${product.category}" data-product-name="${product.product_name}" data-price="${product.retail_price}">
                ${product.category} - ${product.product_name} - ${product.retail_price}
            </li>`;
                    searchResults.append(listItem);
                });
            }

            // Click event for search results
            $('#searchResults').on('click', '.search-result-item', function() {
                const category = $(this).data('category');
                const productName = $(this).data('product-name');
                const price = $(this).data('price');

                // Create a new row and insert it as the first row
                const newRow = createNewRow(category, productName, price);
                purchaseItems.insertAdjacentHTML('afterbegin', newRow);
                $('#searchResults').html(''); // Clear search results after adding
                calculateTotalPrice(); // Update total price after adding the new row
            });
        });
    </script>
</body>