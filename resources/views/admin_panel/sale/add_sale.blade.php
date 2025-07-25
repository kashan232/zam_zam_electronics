@include('admin_panel.include.header_include')

<style>
    .product-list {
        height: 600px;
        overflow-y: auto;
        padding-right: 10px;
    }

    .product-card {
        border: 1px solid #dcdcdc;
        border-radius: 10px;
        padding: 12px;
        background-color: #fff;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
        cursor: pointer;
        height: 100%;
        transition: 0.3s;
    }

    .product-card:hover {
        background-color: #f3faff;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
    }

    .product-name {
        font-size: 16px;
        font-weight: 600;
        margin-bottom: 5px;
    }

    .product-info small {
        font-size: 13px;
        color: #777;
    }


    .bill-section {
        height: 600px;
        overflow-y: auto;
        padding-right: 10px;
        background: #fdfdfd;
        border-left: 1px solid #ddd;
    }
</style>

<body>
    <div class="page-wrapper default-version">
        @include('admin_panel.include.sidebar_include')
        @include('admin_panel.include.navbar_include')

        <div class="body-wrapper">
            <div class="bodywrapper__inner">
                <div class="text-center">
                    <h1 class="fw-bold" style="font-size: 32px; color: #2c3e50; letter-spacing: 1px;">
                        🛒 POS Sale Screen
                    </h1>
                    <p style="font-size: 14px; color: #7f8c8d;">Easily add and manage your sales below</p>
                </div>

                <form action="{{ route('store-Sale') }}" method="POST">
                    @csrf

                    <div class="row mt-2 mb-2">
                        <!-- Left: Product Filters & List -->
                        <div class="col-md-6">
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label>Category</label>
                                    <select id="categorySelect" class="form-control">
                                        <option value="">Select Category</option>
                                        @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->category }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label>Size</label>
                                    <select id="sizeSelect" class="form-control">
                                        <option value="">Select Size</option>
                                    </select>
                                </div>
                                <div class="col-md-12 pt-2 pb-2">
                                    <label>Search Product</label>
                                    <input type="text" id="searchProduct" class="form-control" placeholder="Search by name">
                                </div>
                            </div>

                            <div class="product-list">
                                <div class="row" id="productList"></div>
                            </div>
                        </div>

                        <!-- Right: Bill / Selected Items -->
                        <div class="col-md-6">
                            <h5>🧾 Bill / Selected Items</h5>
                            <div class="bill-section">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="row">
                                            <!-- Customer Name -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="customer_name" class="form-label">Customer Name</label>
                                                    <input type="text" id="customer_name" name="customer_name" class="form-control"
                                                        placeholder="Enter customer name" value="Walking Customer">
                                                </div>
                                            </div>

                                            <!-- Sale Date -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="sale_date" class="form-label">Sale Date</label>
                                                    <input type="date" id="sale_date" name="sale_date" class="form-control"
                                                        value="{{ \Carbon\Carbon::now()->format('Y-m-d') }}">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>


                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Qty</th>
                                            <th>Total</th>
                                            <th>X</th>
                                        </tr>
                                    </thead>
                                    <tbody id="selectedItems"></tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="2" class="text-end"><strong>Grand Total</strong></td>
                                            <td colspan="2"><input type="text" id="grandTotal" class="form-control" readonly value="0.00"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" class="text-end"><strong>Discount (PKR)</strong></td>
                                            <td colspan="2">
                                                <input type="number" step="0.01" min="0" id="discount" name="discount" class="form-control" value="0">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" class="text-end"><strong>Net Total</strong></td>
                                            <td colspan="2">
                                                <input type="text" id="netTotal" name="Payable_amount" class="form-control" readonly value="0.00">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" class="text-end"><strong>Cash Received</strong></td>
                                            <td colspan="2">
                                                <input type="number" step="0.01" min="0" id="cashReceived" class="form-control" placeholder="Enter cash received">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" class="text-end"><strong>Cash Return</strong></td>
                                            <td colspan="2">
                                                <input type="text" id="cashReturn" class="form-control" readonly value="0.00">
                                            </td>
                                        </tr>


                                    </tfoot>
                                </table>
                                <button type="submit" class="btn btn-success w-100 mt-2">🧾 Submit Sale</button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

    @include('admin_panel.include.footer_include')

    <script>
        let allProducts = @json($products);

        $(document).ready(function() {
            const sizeSelect = $('#sizeSelect');
            const productList = $('#productList');

            // 👇 Category change handler
            $('#categorySelect').change(function() {
                const categoryId = $(this).val();
                if (!categoryId) {
                    sizeSelect.html('<option value="">Select Size</option>');
                    renderProducts();
                    return;
                }

                // ✅ Route-based call
                const url = `{{ route('get.units.by.category', ':id') }}`.replace(':id', categoryId);

                $.get(url, function(units) {
                    let options = '<option value="">Select Size</option>';
                    units.forEach(unit => {
                        options += `<option value="${unit.id}">${unit.unit}</option>`;
                    });
                    sizeSelect.html(options);

                    // ✅ Size change triggers render
                    sizeSelect.off('change').on('change', renderProducts);

                    renderProducts(); // re-render products after units are loaded
                });
            });

            // Search input triggers product re-filter
            $('#searchProduct').on('input', renderProducts);

            function renderProducts() {
                const filter = {
                    category: $('#categorySelect').val(),
                    size: $('#sizeSelect').val(),
                    search: $('#searchProduct').val()?.toLowerCase()
                };

                const filtered = allProducts.filter(p => {
                    return (!filter.category || p.category_id == filter.category) &&
                        (!filter.size || p.unit_id == filter.size) &&
                        (!filter.search || p.product_name.toLowerCase().includes(filter.search));
                });

                const container = $('#productList');
                container.empty();

                filtered.forEach(product => {
                    const card = `
                <div class="col-md-4 mb-3">
                    <div class="product-card"
                        data-id="${product.id}" 
                        data-name="${product.product_name}" 
                        data-price="${product.retail_price}" 
                        data-unit="${product.unit?.unit}">
                        <div class="product-name">${product.product_name}</div>
                        <div class="product-info">
                            <small>${product.unit?.unit}</small>
                            <div style="font-weight: bold; font-size: 18px; color: red;">Rs. ${product.retail_price}</div>
                        </div>
                    </div>
                </div>
                `;
                    container.append(card);
                });
            }

            renderProducts(); // initial call

            // 👉 Product card clicked — Add to bill
            $('#productList').on('click', '.product-card', function() {
                const id = $(this).data('id');
                const name = $(this).data('name');
                const price = parseFloat($(this).data('price')).toFixed(2);

                // Prevent duplicate
                if ($(`#selectedItems input[value="${id}"]`).length) return;

                const row = `
            <tr>
                <td>${name}<input type="hidden" name="product_ids[]" value="${id}"></td>
                <td><input type="number" class="form-control quantity" name="quantity[]" value="1" min="1" data-price="${price}"></td>
                <td><input type="text" class="form-control total" value="${price}"></td>
                <td><button type="button" class="btn btn-sm btn-danger remove">X</button></td>
            </tr>`;
                $('#selectedItems').append(row);
                updateGrandTotal();
            });

            // 👉 Quantity change = total update
            $('#selectedItems').on('input', '.quantity', function() {
                let qty = parseInt($(this).val()) || 1;
                if (qty < 1) qty = 1;
                $(this).val(qty);

                const price = parseFloat($(this).data('price'));
                const total = (qty * price).toFixed(2);
                $(this).closest('tr').find('.total').val(total);
                updateGrandTotal();
            });

            // 👉 Remove item from bill
            $('#selectedItems').on('click', '.remove', function() {
                $(this).closest('tr').remove();
                updateGrandTotal();
            });
            $('#discount').on('input', updateGrandTotal);
            $('#selectedItems').on('input', '.total', updateGrandTotal);
            // 👉 Calculate grand total
            function updateGrandTotal() {
                let grand = 0;
                $('#selectedItems .total').each(function() {
                    grand += parseFloat($(this).val()) || 0;
                });

                $('#grandTotal').val(grand.toFixed(2));

                const discount = parseFloat($('#discount').val()) || 0;
                const net = Math.max(grand - discount, 0);
                $('#netTotal').val(net.toFixed(2));
            }

            $('#cashReceived').on('input', function() {
                const received = parseFloat($(this).val()) || 0;
                const netTotal = parseFloat($('#netTotal').val()) || 0;
                const change = Math.max(received - netTotal, 0);
                $('#cashReturn').val(change.toFixed(2));
            });

            // 🔁 Update cash return whenever net total changes too
            $('#discount').on('input', function() {
                $('#cashReceived').trigger('input');
            });
            $('#selectedItems').on('input', '.quantity, .total', function() {
                $('#cashReceived').trigger('input');
            });

        });
    </script>

</body>