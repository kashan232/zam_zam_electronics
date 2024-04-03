
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


                <div class="row gy-4 mb-30">
                    <div class="col-xxl-3 col-sm-6">
                        <div class="widget-two box--shadow2 b-radius--5 bg--white">
                            <i class="las la-shopping-cart overlay-icon text--primary"></i>

                            <div class="widget-two__icon b-radius--5   bg--primary  ">
                                <i class="las la-shopping-cart"></i>
                            </div>

                            <div class="widget-two__content">
                                <h3>$637,823,750.00</h3>
                                <p>Sales</p>
                            </div>

                            <a href="https://script.viserlab.com/torylab/admin/sale/all"
                                class="widget-two__btn btn btn-outline--primary">View All</a>
                        </div>

                    </div><!-- dashboard-w1 end -->

                    <div class="col-xxl-3 col-sm-6">
                        <div class="widget-two box--shadow2 b-radius--5 bg--white">
                            <i class="las la-undo overlay-icon text--warning"></i>

                            <div class="widget-two__icon b-radius--5   bg--warning  ">
                                <i class="las la-undo"></i>
                            </div>

                            <div class="widget-two__content">
                                <h3>$99,025,000.00</h3>
                                <p>Sales Return</p>
                            </div>

                            <a href="https://script.viserlab.com/torylab/admin/sale-return/all"
                                class="widget-two__btn btn btn-outline--warning">View All</a>
                        </div>

                    </div><!-- dashboard-w1 end -->

                    <div class="col-xxl-3 col-sm-6">
                        <div class="widget-two box--shadow2 b-radius--5 bg--white">
                            <i class="las la-shopping-bag overlay-icon text--success"></i>

                            <div class="widget-two__icon b-radius--5   bg--success  ">
                                <i class="las la-shopping-bag"></i>
                            </div>

                            <div class="widget-two__content">
                                <h3>$1,202,670,360.00</h3>
                                <p>Purchases</p>
                            </div>

                            <a href="https://script.viserlab.com/torylab/admin/purchase/all"
                                class="widget-two__btn btn btn-outline--success">View All</a>
                        </div>

                    </div><!-- dashboard-w1 end -->

                    <div class="col-xxl-3 col-sm-6">
                        <div class="widget-two box--shadow2 b-radius--5 bg--white">
                            <i class="las la-share overlay-icon text--danger"></i>

                            <div class="widget-two__icon b-radius--5   bg--danger  ">
                                <i class="las la-share"></i>
                            </div>

                            <div class="widget-two__content">
                                <h3>$247,649,800.00</h3>
                                <p>Purchases Return</p>
                            </div>

                            <a href="https://script.viserlab.com/torylab/admin/purchase-return/all"
                                class="widget-two__btn btn btn-outline--danger">View All</a>
                        </div>

                    </div><!-- dashboard-w1 end -->
                </div><!-- row end-->

                <div class="row gy-4 mb-30">
                    <!-- <div class="col-xxl-7">
                        <div class="d-flex justify-content-between align-items-center flex-wrap mb-3">
                            <h5>Monthly Purchase & Sales Report (Last 12 Month)</h5>
                        </div>
                        <div class="card">
                        </div>
                    </div> -->

                    <div class="col-xxl-5">
                        <div class="d-flex justify-content-between align-items-center flex-wrap mb-3">
                            <h5>Top Selling Products</h5>
                        </div>
                        <div class="card">
                            <div class="card-body p-0">
                                <div class="table-responsive--sm table-responsive">
                                    <table class="table table--light">
                                        <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th>SKU</th>
                                                <th>Quantity</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>

                                                <td data-label="Product">
                                                    1. &nbsp;
                                                    <a class="text--dark"
                                                        href="https://script.viserlab.com/torylab/admin/product/edit/3">Mini
                                                        Computer Vacuum...</a>
                                                </td>
                                                <td data-label="Quantity">MCV001 </td>
                                                <td data-label="Quantity">48500
                                                    piece </td>
                                            </tr>
                                            <tr>

                                                <td data-label="Product">
                                                    2. &nbsp;
                                                    <a class="text--dark"
                                                        href="https://script.viserlab.com/torylab/admin/product/edit/2">Air
                                                        Blower Dust Clea...</a>
                                                </td>
                                                <td data-label="Quantity">AIB001 </td>
                                                <td data-label="Quantity">22000
                                                    piece </td>
                                            </tr>
                                            <tr>

                                                <td data-label="Product">
                                                    3. &nbsp;
                                                    <a class="text--dark"
                                                        href="https://script.viserlab.com/torylab/admin/product/edit/6">5L
                                                        Sunflower Oil</a>
                                                </td>
                                                <td data-label="Quantity">GSO002 </td>
                                                <td data-label="Quantity">9500
                                                    kg </td>
                                            </tr>
                                            <tr>

                                                <td data-label="Product">
                                                    4. &nbsp;
                                                    <a class="text--dark"
                                                        href="https://script.viserlab.com/torylab/admin/product/edit/8">50KG
                                                        Bag Imported Mo...</a>
                                                </td>
                                                <td data-label="Quantity">GMD001 </td>
                                                <td data-label="Quantity">8850
                                                    bag </td>
                                            </tr>
                                            <tr>

                                                <td data-label="Product">
                                                    5. &nbsp;
                                                    <a class="text--dark"
                                                        href="https://script.viserlab.com/torylab/admin/product/edit/7">50KG
                                                        Bag Miniket Ric...</a>
                                                </td>
                                                <td data-label="Quantity">GWR001 </td>
                                                <td data-label="Quantity">8550
                                                    bag </td>
                                            </tr>
                                            <tr>

                                                <td data-label="Product">
                                                    6. &nbsp;
                                                    <a class="text--dark"
                                                        href="https://script.viserlab.com/torylab/admin/product/edit/1">Deskotp
                                                        Stand Fan F5</a>
                                                </td>
                                                <td data-label="Quantity">DSF001 </td>
                                                <td data-label="Quantity">600
                                                    piece </td>
                                            </tr>
                                            <tr>

                                                <td data-label="Product">
                                                    7. &nbsp;
                                                    <a class="text--dark"
                                                        href="https://script.viserlab.com/torylab/admin/product/edit/5">2L
                                                        Sunflower Oil</a>
                                                </td>
                                                <td data-label="Quantity">GSO001 </td>
                                                <td data-label="Quantity">580
                                                    ltr </td>
                                            </tr>
                                            <tr>

                                                <td data-label="Product">
                                                    8. &nbsp;
                                                    <a class="text--dark"
                                                        href="https://script.viserlab.com/torylab/admin/product/edit/4">PIXMA
                                                        MegaTank G3260...</a>
                                                </td>
                                                <td data-label="Quantity">CPG3260 </td>
                                                <td data-label="Quantity">440
                                                    piece </td>
                                            </tr>
                                        </tbody>
                                    </table><!-- table end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row gy-4 mb-30">
                    <div class="col-xl-6">
                        <div class="d-flex justify-content-between align-items-center flex-wrap mb-3">
                            <h5>Product Alert Items </h5>
                            <a href="https://script.viserlab.com/torylab/admin/product/alert"
                                class="btn btn-sm btn-outline--primary">View All</a>
                        </div>
                        <div class="card">
                            <div class="card-body p-0">
                                <div class="table-responsive--sm table-responsive">
                                    <table class="table table--light">
                                        <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th>Warehouse</th>
                                                <th>Alert</th>
                                                <th>Stock</th>
                                                <th>Unit</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="fw-bold"> 5L Sunflower Oil </td>
                                                <td> Warehouse Two </td>
                                                <td>
                                                    <span class="bg--warning px-2 rounded">
                                                        100
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="bg--danger px-2 rounded">
                                                        50
                                                    </span>
                                                </td>
                                                <td>
                                                    kg
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="fw-bold"> 50KG Bag Miniket Rice </td>
                                                <td> Warehouse Two </td>
                                                <td>
                                                    <span class="bg--warning px-2 rounded">
                                                        200
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="bg--danger px-2 rounded">
                                                        100
                                                    </span>
                                                </td>
                                                <td>
                                                    bag
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="fw-bold"> 50KG Bag Miniket Rice </td>
                                                <td> Warehouse One </td>
                                                <td>
                                                    <span class="bg--warning px-2 rounded">
                                                        200
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="bg--danger px-2 rounded">
                                                        150
                                                    </span>
                                                </td>
                                                <td>
                                                    bag
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table><!-- table end -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="d-flex justify-content-between align-items-center flex-wrap mb-3">
                            <h5>Latest Sale Returns </h5>
                            <a href="https://script.viserlab.com/torylab/admin/sale-return/all"
                                class="btn btn-sm btn-outline--primary">View All</a>
                        </div>
                        <div class="card">
                            <div class="card-body p-0">
                                <div class="table-responsive--sm table-responsive">
                                    <table class="table table--light">
                                        <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Invoice No. </th>
                                                <th>Customer</th>
                                                <th>Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    22 Oct, 2022
                                                </td>

                                                <td>
                                                    <a class="text--dark"
                                                        href="https://script.viserlab.com/torylab/admin/sale-return/edit/7">S-000015</a>
                                                </td>

                                                <td>
                                                    Ocean Mccullough
                                                </td>

                                                <td>
                                                    $14,000,000.00
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    22 Sep, 2022
                                                </td>

                                                <td>
                                                    <a class="text--dark"
                                                        href="https://script.viserlab.com/torylab/admin/sale-return/edit/6">S-000013</a>
                                                </td>

                                                <td>
                                                    Isaiah Fowler
                                                </td>

                                                <td>
                                                    $13,300,000.00
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    22 Aug, 2022
                                                </td>

                                                <td>
                                                    <a class="text--dark"
                                                        href="https://script.viserlab.com/torylab/admin/sale-return/edit/5">S-000010</a>
                                                </td>

                                                <td>
                                                    Carl Kemp
                                                </td>

                                                <td>
                                                    $10,000,000.00
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    22 Jul, 2022
                                                </td>

                                                <td>
                                                    <a class="text--dark"
                                                        href="https://script.viserlab.com/torylab/admin/sale-return/edit/4">S-000008</a>
                                                </td>

                                                <td>
                                                    Isaiah Fowler
                                                </td>

                                                <td>
                                                    $48,000,000.00
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    22 Jul, 2022
                                                </td>

                                                <td>
                                                    <a class="text--dark"
                                                        href="https://script.viserlab.com/torylab/admin/sale-return/edit/3">S-000007</a>
                                                </td>

                                                <td>
                                                    Shelley Burgess
                                                </td>

                                                <td>
                                                    $300,000.00
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    22 Jul, 2022
                                                </td>

                                                <td>
                                                    <a class="text--dark"
                                                        href="https://script.viserlab.com/torylab/admin/sale-return/edit/2">S-000006</a>
                                                </td>

                                                <td>
                                                    Isaiah Fowler
                                                </td>

                                                <td>
                                                    $425,000.00
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    22 Jun, 2022
                                                </td>

                                                <td>
                                                    <a class="text--dark"
                                                        href="https://script.viserlab.com/torylab/admin/sale-return/edit/1">S-000004</a>
                                                </td>

                                                <td>
                                                    Isaiah Fowler
                                                </td>

                                                <td>
                                                    $13,000,000.00
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table><!-- table end -->
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row gy-4">
                    <div class="col-xxl-3 col-sm-6">
                        <div class="widget-two style--two box--shadow2 b-radius--5 bg--1">
                            <div class="widget-two__icon b-radius--5 bg--1">
                                <i class="lab la-buffer"></i>
                            </div>

                            <div class="widget-two__content">
                                <h3 class="text-white">8</h3>
                                <p class="text-white">Categories</p>
                            </div>
                            <a href="https://script.viserlab.com/torylab/admin/category" class="widget-two__btn">View
                                All</a>
                        </div>
                    </div><!-- dashboard-w1 end -->
                    <div class="col-xxl-3 col-sm-6">
                        <div class="widget-two style--two box--shadow2 b-radius--5 bg--primary">
                            <div class="widget-two__icon b-radius--5 bg--primary">
                                <i class="lab la-product-hunt"></i>
                            </div>

                            <div class="widget-two__content">
                                <h3 class="text-white">14</h3>
                                <p class="text-white">Products</p>
                            </div>
                            <a href="https://script.viserlab.com/torylab/admin/product/all" class="widget-two__btn">View
                                All</a>
                        </div>
                    </div><!-- dashboard-w1 end -->

                    <div class="col-xxl-3 col-sm-6">
                        <div class="widget-two style--two box--shadow2 b-radius--5 bg--18">
                            <div class="widget-two__icon b-radius--5 bg--18">
                                <i class="las la-user-friends"></i>
                            </div>

                            <div class="widget-two__content">
                                <h3 class="text-white">12</h3>
                                <p class="text-white">Suppliers</p>
                            </div>
                            <a href="https://script.viserlab.com/torylab/admin/supplier/all"
                                class="widget-two__btn">View All</a>
                        </div>
                    </div><!-- dashboard-w1 end -->

                    <div class="col-xxl-3 col-sm-6">
                        <div class="widget-two style--two box--shadow2 b-radius--5 bg--19">
                            <div class="widget-two__icon b-radius--5 bg--19">
                                <i class="las la-users"></i>
                            </div>

                            <div class="widget-two__content">
                                <h3 class="text-white">12</h3>
                                <p class="text-white">Customers</p>
                            </div>
                            <a href="https://script.viserlab.com/torylab/admin/customer/all"
                                class="widget-two__btn">View All</a>
                        </div>
                    </div><!-- dashboard-w1 end -->
                </div><!-- row end-->



            </div><!-- bodywrapper__inner end -->
        </div><!-- body-wrapper end -->
    </div>

@include('admin_panel.include.footer_include')
    