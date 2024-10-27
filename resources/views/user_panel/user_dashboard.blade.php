<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Admin | Dashboard</title>
    <meta name="description" content="Updates and statistics" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="user_assets/assets/css/stylec619.css?v=1.0" rel="stylesheet" type="text/css" />
    <link href="user_assets/assets/api/pace/pace-theme-flat-top.css" rel="stylesheet" type="text/css" />
    <link href="user_assets/assets/api/mcustomscrollbar/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css" />
    <link href="../../cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="../../unpkg.com/multiple-select%401.5.2/dist/multiple-select.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <link rel="shortcut icon" href="user_assets/assets/media/logos/favicon.html" />
</head>
<body id="tc_body" class="header-fixed header-mobile-fixed subheader-enabled aside-enabled aside-fixed">
    @include('user_panel.include.header')
    <div class="contentPOS">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-4 order-xl-first order-last">
                    <div class="card card-custom gutter-b bg-white border-0">
                        <div class="card-body">
                            <div class="d-flex justify-content-between colorfull-select">
                                <div class="selectmain">
                                    <label>Category</label>
                                    <select id="categorySelect" class="arabic-select w-150px bag-primary">
                                        <option value="">Select Category</option>
                                        @foreach ($categories as $category)
                                        <option value="{{ $category->category }}">{{ $category->category }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="product-items">
                            <div class="row" id="productContainer">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-8 col-md-8">
                    <div class="">
                        <div class="card card-custom gutter-b bg-white border-0 table-contentpos">
                            <div class="card-body">
                                <div class="d-flex justify-content-between colorfull-select">
                                    <div class="selectmain">
                                        <label class="text-dark d-flex">Choose a Customer</label>
                                        <select class="arabic-select select-down ">
                                            @foreach($Customers as $Customer)
                                            <option value="{{ $Customer->customer_name }}">{{ $Customer->customer_name }}</option>
                                            @endforeach
                                            <option value="1">walk in customer</option>
                                        </select>
                                    </div>

                                    <div class="d-flex flex-column selectmain">
                                        <label class="text-dark d-flex"> Scan Barcode </label>
                                        <input type="text" id="barcodeInput" placeholder="Scan Barcode Here" />
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="card card-custom gutter-b bg-white border-0 table-contentpos">

                            <div class="table-datapos mt-3 ">
                                <div class="table-responsive" id="printableTable">
                                    <table id="orderTable" class="table table-bordered table-hover table-striped align-middle" style="width:100%;">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th style="width: 40%; text-align:center;font-weight:bold;">Description</th>
                                                <th style="width: 15%; text-align:center;font-weight:bold;">Qty</th>
                                                <th style="width: 15%; text-align:center;font-weight:bold;">Price</th>
                                                <th style="width: 20%; text-align:center;font-weight:bold;">Subtotal</th>
                                                <th class="text-center no-sort" style="width: 10%;"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group row mb-0">
                                    <div class="col-md-12 btn-submit d-flex justify-content-end">
                                        <button type="submit" class="btn btn-danger me-2 confirm-delete" title="Delete">
                                            <i class="fas fa-trash-alt me-2"></i>
                                            Suspand/Cancel
                                        </button>
                                        <button type="submit" class="btn btn-secondary white">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-folder-fill svg-sm me-2" viewBox="0 0 16 16">
                                                <path d="M9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.826a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3zm-8.322.12C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139z" />
                                            </svg>
                                            Draft Order
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-4">
                    <div class="card card-custom gutter-b bg-white border-0">
                        <div class="card-body">
                            <div class="shop-profile">
                                <div class="media">
                                    <div class="bg-primary w-100px h-100px d-flex justify-content-center align-items-center">
                                        <h2 class="mb-0 white">{{ substr(Auth::user()->name, 0, 1) }}</h2>
                                    </div>
                                    <div class="media-body ms-3 mt-5">
                                        <h3 class="title font-weight-bold">{{ Auth::user()->name }} </h3>
                                        <p class="adddress">
                                            {{ Auth::user()->email }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="resulttable-pos">
                                <table class="table right-table">
                                    <tbody>
                                        <tr class="d-flex align-items-center justify-content-between">
                                            <th class="border-0 font-size-h5 mb-0 font-size-bold text-dark">Total Items</th>
                                            <td class="border-0 justify-content-end d-flex text-dark font-size-base" id="totalItems">0</td>
                                        </tr>
                                        <tr class="d-flex align-items-center justify-content-between">
                                            <th class="border-0 font-size-h5 mb-0 font-size-bold text-dark">Subtotal</th>
                                            <td class="border-0 justify-content-end d-flex text-dark font-size-base" id="subtotal">Rs. 0</td>
                                        </tr>
                                        <tr class="d-flex align-items-center justify-content-between">
                                            <th class="border-0">DISCOUNT</th>
                                            <td class="border-0 justify-content-end d-flex text-dark font-size-base">
                                                <input type="number" id="discountInput" placeholder="Enter discount" style="width: 80px;" />
                                                Rs.
                                            </td>
                                        </tr>
                                        <tr class="d-flex align-items-center justify-content-between">
                                            <th class="border-0 font-size-h5 mb-0 font-size-bold text-dark">TOTAL</th>
                                            <td class="border-0 justify-content-end d-flex text-primary font-size-base" id="totalAmount">Rs. 0</td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                            <div class="d-flex justify-content-end align-items-center flex-column buttons-cash">
                                <div>
                                    <a href="#" class="btn btn-primary white mb-2" data-bs-toggle="modal" data-bs-target="#payment-popup">
                                        <i class="fas fa-money-bill-wave me-2"></i>
                                        Pay With Cash
                                    </a>
                                </div>
                                <div>
                                    <a href="#" class="btn btn-outline-warning ">
                                        <i class="fas fa-credit-card me-2"></i>
                                        Pay With Card
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

   @include('user_panel.include.payments')

   @include('user_panel.include.sales')
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="user_assets/assets/js/plugin.bundle.min.js"></script>
    <script src="user_assets/assets/js/bootstrap.bundle.min.js"></script>
    <script src="../../cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="../../unpkg.com/multiple-select%401.5.2/dist/multiple-select.min.js"></script>
    <script src="user_assets/assets/js/sweetalert.js"></script>
    <script src="user_assets/assets/js/sweetalert1.js"></script>
    <script src="user_assets/assets/js/script.bundle.js"></script>
    
    <script>
        $(document).ready(function() {
            let totalItems = 0;
            let subtotal = 0;
            function updateTotals() {
                $('#totalItems').text(totalItems);
                $('#subtotal').text(`Rs. ${subtotal}`);
                const discount = parseInt($('#discountInput').val()) || 0;
                const netTotal = subtotal - discount;
                $('#totalAmount').text(`Rs. ${netTotal}`);
            }
            function recalculateSubtotal() {
                subtotal = 0;
                $('#orderTable tbody tr').each(function() {
                    const price = parseInt($(this).find('td:eq(2)').text().replace('Rs. ', ''));
                    const qty = parseInt($(this).find('input.quantity-input').val());
                    subtotal += price * qty;
                });
            }
            function addProductToTable(productName, productPrice) {
                var existingRow = $("#orderTable tbody").find(`tr:contains('${productName}')`);
                if (existingRow.length > 0) {
                    var qtyInput = existingRow.find('input[type="number"]');
                    var newQty = parseInt(qtyInput.val()) + 1;
                    qtyInput.val(newQty);
                    updateSubtotal(existingRow, newQty, productPrice);
                } else {
                    var newRow = `
            <tr>
                <td class="text-center align-middle">${productName}</td>
                <td class="text-center align-middle">
                    <input type="number" value="1" class="form-control border-dark w-75 mx-auto quantity-input" style="min-width: 60px;">
                </td>
                <td class="text-center align-middle">Rs. ${productPrice}</td>
                <td class="text-center align-middle">Rs. ${productPrice}</td>
                <td class="text-center align-middle">
                    <a href="#" class="confirm-delete btn btn-sm btn-outline-danger" title="Delete">
                        <i class="fas fa-trash-alt"></i>
                    </a>
                </td>
            </tr>`;
                    $('#orderTable tbody').append(newRow);
                    totalItems++; // Increment totalItems when a new product is added
                }
                recalculateSubtotal();
                updateTotals();
            }
            function updateSubtotal(row, qty, price) {
                var rowSubtotal = qty * price;
                row.find('td:eq(3)').text(`Rs. ${rowSubtotal}`);
                recalculateSubtotal();
                updateTotals();
            }
            $('#categorySelect').on('change', function() {
                var categoryname = $(this).val();
                $('#productContainer').empty();

                if (categoryname) {
                    $.ajax({
                        url: "{{ route('get.products.by.category') }}",
                        method: "GET",
                        data: {
                            categoryname: categoryname
                        },
                        success: function(products) {
                            var productHtml = '';
                            $.each(products, function(key, product) {
                                productHtml += `
                            <div class="col-xl-4 col-lg-2 col-md-3 col-sm-4 col-6">
                                <div class="productCard" data-product-name="${product.product_name}" data-product-price="${parseInt(product.retail_price)}">
                                    <div class="productThumb">
                                        <img class="img-fluid" src="/product_images/${product.image}" alt="product image">
                                    </div>
                                    <div class="productContent text-center">
                                        <a href="#" style="font-size:18px;" class="add-to-order" data-product-id="${product.id}">${product.product_name}</a>
                                        <span style="font-weight:bold;font-size:16px;">Rs. ${parseInt(product.retail_price)}</span>
                                    </div>
                                </div>
                            </div>`;
                            });
                            $('#productContainer').html(productHtml);
                        }
                    });
                }
            });
            $(document).on('click', '.add-to-order', function(e) {
                e.preventDefault();
                var productName = $(this).closest('.productCard').data('product-name');
                var productPrice = parseInt($(this).closest('.productCard').data('product-price'));
                addProductToTable(productName, productPrice);
            });
            $(document).on('change', '.quantity-input', function() {
                var row = $(this).closest('tr');
                var qty = parseInt($(this).val());
                var price = parseInt(row.find('td:eq(2)').text().replace('Rs. ', ''));
                updateSubtotal(row, qty, price);
            });
            $('#discountInput').on('input', function() {
                updateTotals();
            });
            $(document).on('click', '.confirm-delete', function(e) {
                e.preventDefault();
                var row = $(this).closest('tr');
                row.remove();
                totalItems--;
                recalculateSubtotal();
                updateTotals();
            });
        });
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('barcodeInput').focus();
            document.getElementById('barcodeInput').addEventListener('keypress', function(e) {
                if (e.key === 'Enter') {
                    e.preventDefault();
                    let barcode = this.value.trim();
                    if (barcode.length > 0) {
                        console.log('Barcode scanned:', barcode); // Log the barcode for debugging
                        fetch(`/get-product-by-barcode?barcode=${barcode}`) // Use query parameter for barcode
                            .then(response => {
                                if (!response.ok) {
                                    throw new Error('Network response was not ok'); // Throw an error if the response is not okay
                                }
                                return response.json();
                            })
                            .then(data => {
                                console.log('AJAX request successful:', data); // Log the response
                                if (data) {
                                    addProductToTable(data.product_name, parseInt(data.retail_price));
                                } else {
                                    alert('Product not found!'); // Alert if no product is found
                                }
                            })
                            .catch(error => {
                                console.error('AJAX request failed:', error); // Log error details
                            });
                        this.value = '';
                    }
                }
            });
            function addProductToTable(productName, productPrice) {
                const tableBody = document.querySelector("#orderTable tbody");
                const existingRow = Array.from(tableBody.querySelectorAll("tr")).find(row =>
                    row.cells[0].textContent.includes(productName)
                );

                if (existingRow) {
                    const qtyInput = existingRow.querySelector('input[type="number"]');
                    const newQty = parseInt(qtyInput.value) + 1; // Increase the quantity by 1
                    qtyInput.value = newQty; // Update the input value
                    updateSubtotal(existingRow, newQty, productPrice); // Update the subtotal for that row
                } else {
                    const newRow = document.createElement('tr');
                    newRow.innerHTML = `
            <td class="text-center align-middle">${productName}</td>
            <td class="text-center align-middle">
                <input type="number" value="1" class="form-control border-dark w-75 mx-auto quantity-input" style="min-width: 60px;">
            </td>
            <td class="text-center align-middle">Rs. ${productPrice}</td>
            <td class="text-center align-middle">Rs. ${productPrice}</td>
            <td class="text-center align-middle">
                <a href="#" class="confirm-delete btn btn-sm btn-outline-danger" title="Delete">
                    <i class="fas fa-trash-alt"></i>
                </a>
            </td>`;
                    tableBody.appendChild(newRow);
                }
                recalculateSubtotal();
                updateTotals();
            }
            function updateSubtotal(row, quantity, price) {
                const subtotalCell = row.cells[3]; // Assuming the subtotal is in the fourth cell
                const newSubtotal = quantity * price;
                subtotalCell.textContent = `Rs. ${newSubtotal}`;
            }
            function recalculateSubtotal() {
                const tableBody = document.querySelector("#orderTable tbody");
                const rows = tableBody.querySelectorAll("tr");
                let subtotal = 0;
                let totalItems = 0;
                rows.forEach(row => {
                    const qtyInput = row.querySelector('input[type="number"]');
                    const qty = parseInt(qtyInput.value);
                    const priceCell = row.cells[2].textContent.replace('Rs. ', '');
                    const price = parseFloat(priceCell);
                    subtotal += qty * price;
                    totalItems += qty;
                });
                const subtotalElement = document.getElementById('subtotal'); // Make sure to have an element with id 'subtotal'
                subtotalElement.textContent = `Rs. ${subtotal.toFixed(2)}`;
                const totalItemsElement = document.getElementById('totalItems'); // Make sure to have an element with id 'totalItems'
                totalItemsElement.textContent = totalItems;
            }
            function updateTotals() {
                const discountInput = document.getElementById('discount'); // Make sure to have an input for discount
                const discount = parseFloat(discountInput.value) || 0;
                const subtotalElement = document.getElementById('subtotal');
                const subtotal = parseFloat(subtotalElement.textContent.replace('Rs. ', '')) || 0;
                const total = subtotal - discount;
                const totalElement = document.getElementById('total'); // Make sure to have an element with id 'total'
                totalElement.textContent = `Rs. ${total.toFixed(2)}`;
            }
        });
    </script>
</body>
</html>