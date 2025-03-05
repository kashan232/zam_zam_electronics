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
                    <h6 class="page-title">Sale Return</h6>
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
                                @if (session()->has('success'))
                                <div class="alert alert-success">
                                    <strong>Success!</strong> {{ session('success') }}.
                                </div>
                                @endif
                                <form action="{{ route('store-sale-return') }}" method="POST">
                                    @csrf
                                    <div class="row mb-3">
                                        <div class="col-xl-4 col-sm-6">
                                            <div class="form-group">
                                                <label class="form-label">Sale ID</label>
                                                <input type="text" name="sale_id" class="form-control" value="{{ $sale->id }}" readonly>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-sm-6">
                                            <div class="form-group">
                                                <label class="form-label">Customer</label>
                                                <input type="text" name="customer" class="form-control" value="{{ $sale['customer'] }}" readonly>
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-sm-6">
                                            <div class="form-group">
                                                <label>Date</label>
                                                <input name="sale_date" type="date" class="form-control bg--white" required value="{{ $sale['sale_date'] }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="table-responsive">
                                            <table class="productTable table border">
                                                <thead class="border bg--dark">
                                                    <tr>
                                                        <th>Category</th>
                                                        <th>Name</th>
                                                        <th>Quantity</th>
                                                        <th>Return Quantity</th>
                                                        <th>Price</th>
                                                        <th>Return Amount</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="purchaseItems">
                                                    @foreach(json_decode($sale['quantity'], true) as $index => $qty)
                                                    <tr>
                                                        <td><input type="text" class="form-control" name="item_category[]" value="{{ json_decode($sale['item_category'], true)[$index] }}" readonly></td>
                                                        <td><input type="text" class="form-control" name="item_name[]" value="{{ json_decode($sale['item_name'], true)[$index] }}" readonly></td>
                                                        <td><input type="number" class="form-control" name="quantity[]" value="{{ $qty }}" readonly></td>
                                                        <td>
                                                            <input type="number" class="form-control return-qty" name="return_quantity[]" min="0" max="{{ $qty }}" value="0" data-index="{{ $index }}">
                                                        </td>
                                                        <td><input type="number" class="form-control price" name="price[]" value="{{ json_decode($sale['price'], true)[$index] }}" readonly data-index="{{ $index }}"></td>
                                                        <td>
                                                            <input type="number" class="form-control return-total" name="return_total[]" value="0" readonly data-index="{{ $index }}">
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <h4>Choose Action</h4>
                                    <div class="form-group">
                                        <select id="action" name="action" class="form-control">
                                            <option value="">-- Select Action --</option>
                                            <option value="return">Return</option>
                                            <option value="exchange">Exchange</option>
                                        </select>
                                    </div>

                                    <!-- Return Section -->
                                    <div id="return_section" class="d-none">
                                        <div class="form-group">
                                            <label><strong>Deduct Amount:</strong></label>
                                            <input type="number" id="deduct_amount" name="deduct_amount" class="form-control" value="0" min="0">
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Final Return Amount:</strong></label>
                                            <input type="number" id="final_return" class="form-control" readonly>
                                        </div>
                                    </div>

                                    <!-- Exchange Section -->
                                    <div id="exchange_section" class="d-none">
                                        <div class="form-group">
                                            <label><strong>Category:</strong></label>
                                            <select id="exchange_category" name="exchange_category" class="form-control">
                                                <option value="">-- Select Category --</option>
                                                @foreach($categories as $category)
                                                <option value="{{ $category->category }}">{{ $category->category }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label><strong>Product:</strong></label>
                                            <select id="exchange_product" name="exchange_product" class="form-control">
                                                <option value="">-- Select Product --</option>
                                            </select>
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
        document.addEventListener("DOMContentLoaded", function() {
            let categorySelect = document.getElementById("exchange_category");
            let productSelect = document.getElementById("exchange_product");

            categorySelect.addEventListener("change", function() {
                let categoryId = this.value;
                productSelect.innerHTML = '<option value="">-- Select Product --</option>';
                productSelect.disabled = true;

                if (categoryId) {
                    let url = "{{ route('get-items-by-category', ':id') }}".replace(':id', categoryId);

                    fetch(url)
                        .then(response => response.json())
                        .then(data => {
                            data.forEach(product => {
                                let option = document.createElement("option");
                                option.value = product.product_name;
                                option.textContent = product.product_name;
                                productSelect.appendChild(option);
                            });
                            productSelect.disabled = false;
                        })
                        .catch(error => console.error("Error loading products:", error));
                }
            });
        });
    </script>


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let returnInputs = document.querySelectorAll(".return-qty");
            let returnAmount = document.getElementById("final_return");
            let deductAmount = document.getElementById("deduct_amount");
            let action = document.getElementById("action");

            let returnSection = document.getElementById("return_section");
            let exchangeSection = document.getElementById("exchange_section");

            function calculateReturnAmount() {
                let totalReturnAmount = 0;
                returnInputs.forEach(input => {
                    let index = input.dataset.index;
                    let returnQty = parseFloat(input.value) || 0;
                    let price = parseFloat(document.querySelector(`.price[data-index="${index}"]`).value) || 0;
                    let returnTotal = returnQty * price;

                    document.querySelector(`.return-total[data-index="${index}"]`).value = returnTotal;
                    totalReturnAmount += returnTotal;
                });

                let deduct = parseFloat(deductAmount.value) || 0;
                returnAmount.value = Math.max(0, totalReturnAmount - deduct); // Ensure it doesn't go below 0
            }

            returnInputs.forEach(input => {
                input.addEventListener("input", calculateReturnAmount);
            });

            deductAmount.addEventListener("input", calculateReturnAmount);

            action.addEventListener("change", function() {
                returnSection.classList.toggle("d-none", this.value !== "return");
                exchangeSection.classList.toggle("d-none", this.value !== "exchange");
            });

            calculateReturnAmount(); // Initial calculation when page loads
        });
    </script>


</body>