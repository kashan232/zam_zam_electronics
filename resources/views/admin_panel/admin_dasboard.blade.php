<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToryLab - Dashboard</title>
    
    <link rel= "stylesheet" href= "https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" >

    <link rel="shortcut icon" type="image/png" href="assets/images/logoIcon/favicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/global/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/admin/css/vendor/bootstrap-toggle.min.css">
    <link rel="stylesheet" href="assets/global/css/all.min.css">
    <link rel="stylesheet" href="assets/global/css/line-awesome.min.css">


    <link rel="stylesheet" href="assets/admin/css/vendor/select2.min.css">
    <link rel="stylesheet" href="assets/admin/css/vendor/datepicker.min.css">
    <link rel="stylesheet" href="assets/admin/css/app.css?v=1">
    <link rel="stylesheet" href="assets/admin/css/custom.css">

    <style>
        .widget-two__btn {
            right: 15px !important;
        }
    </style>
</head>

<body>
    <!-- page-wrapper start -->
    <div class="page-wrapper default-version">
        <div class="sidebar bg--dark">
            <button class="res-sidebar-close-btn"><i class="la la-times"></i></button>
            <div class="sidebar__inner">
                <div class="sidebar__logo">
                    <a href="#" class="sidebar__main-logo">
                        <img src="https://script.viserlab.com/torylab/assets/images/logoIcon/logo.png" alt="image">
                    </a>
                </div>


                <div class="sidebar__menu-wrapper" id="sidebar__menuWrapper">
                    <ul class="sidebar__menu">
                        <li class="sidebar-menu-item active">
                            <a href="index.html" class="nav-link ">
                                <i class="menu-icon la la-home"></i>
                                <span class="menu-title">Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-menu-item sidebar-dropdown">
                            <a class="" href="javascript:void(0)">
                                <i class="menu-icon las la-users"></i>
                                <span class="menu-title">Manage Staff</span>
                            </a>
                            <div class="sidebar-submenu ">
                                <ul>
                                    <li class="sidebar-menu-item ">
                                        <a class="nav-link" href="staff.html">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">All Staff</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="sidebar-menu-item sidebar-dropdown">
                            <a href="javascript:void(0)" class="">
                                <i class="menu-icon lab la-product-hunt"></i>
                                <span class="menu-title">Manage Product</span>
                            </a>
                            <div class="sidebar-submenu  ">
                                <ul>
                                    <li class="sidebar-menu-item  ">
                                        <a href="category.html" class="nav-link">
                                            <i class="menu-icon la la-dot-circle"></i>
                                            <span class="menu-title">Categories</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item  ">
                                        <a href="brands.html" class="nav-link">
                                            <i class="menu-icon la la-dot-circle"></i>
                                            <span class="menu-title">Brands</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item  ">
                                        <a href="unit.html" class="nav-link">
                                            <i class="menu-icon la la-dot-circle"></i>
                                            <span class="menu-title">Units</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item  ">
                                        <a href="product_all.html"
                                            class="nav-link">
                                            <i class="menu-icon la la-dot-circle"></i>
                                            <span class="menu-title">Products</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="sidebar-menu-item ">
                            <a href="warehouse.html" class="nav-link ">
                                <i class="menu-icon la la-warehouse"></i>
                                <span class="menu-title">Warehouse</span>
                            </a>
                        </li>

                        <li class="sidebar-menu-item  ">
                            <a href="customer.html" class="nav-link">
                                <i class="menu-icon la la-users"></i>
                                <span class="menu-title">Customer</span>
                            </a>
                        </li>

                        <li class="sidebar-menu-item  ">
                            <a href="supplier.html" class="nav-link">
                                <i class="menu-icon la la-user-friends"></i>
                                <span class="menu-title">Supplier</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item sidebar-dropdown">
                            <a href="javascript:void(0)" class="">
                                <i class="menu-icon la la-shopping-bag"></i>
                                <span class="menu-title">Purchase</span>
                            </a>
                            <div class="sidebar-submenu  ">
                                <ul>
                                    <li class="sidebar-menu-item  ">
                                        <a href="purchase/purchase_all.html"
                                            class="nav-link">
                                            <i class="menu-icon la la-dot-circle"></i>
                                            <span class="menu-title">All Purchases</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item  ">
                                        <a href="purchase_return/purchase_return_all.html"
                                            class="nav-link">
                                            <i class="menu-icon la la-dot-circle"></i>
                                            <span class="menu-title">Purchases Return</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="sidebar-menu-item sidebar-dropdown">
                            <a href="javascript:void(0)" class="">
                                <i class="menu-icon la la-shopping-cart"></i>
                                <span class="menu-title">Sale</span>
                            </a>
                            <div class="sidebar-submenu  ">
                                <ul>
                                    <li class="sidebar-menu-item  ">
                                        <a href="sale/sale_all.html" class="nav-link">
                                            <i class="menu-icon la la-dot-circle"></i>
                                            <span class="menu-title">All Sales</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item  ">
                                        <a href="sale_return/sale_return.html"
                                            class="nav-link">
                                            <i class="menu-icon la la-dot-circle"></i>
                                            <span class="menu-title">Sales Return</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="sidebar-menu-item ">
                            <a href="https://script.viserlab.com/torylab/admin/adjustment/all" class="nav-link ">
                                <i class="menu-icon la la-balance-scale"></i>
                                <span class="menu-title">Adjustment</span>
                            </a>
                        </li>

                        <li class="sidebar-menu-item ">
                            <a href="https://script.viserlab.com/torylab/admin/transfer/all" class="nav-link ">
                                <i class="menu-icon la la-retweet"></i>
                                <span class="menu-title">Transfer</span>
                            </a>
                        </li>

                        <li class="sidebar-menu-item sidebar-dropdown">
                            <a href="javascript:void(0)" class="">
                                <i class="menu-icon la la-wallet"></i>
                                <span class="menu-title">Expense</span>
                            </a>
                            <div class="sidebar-submenu  ">
                                <ul>
                                    <li class="sidebar-menu-item  ">
                                        <a href="https://script.viserlab.com/torylab/admin/expense-type"
                                            class="nav-link">
                                            <i class="menu-icon la la-dot-circle"></i>
                                            <span class="menu-title">Type</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item  ">
                                        <a href="https://script.viserlab.com/torylab/admin/expense" class="nav-link">
                                            <i class="menu-icon la la-dot-circle"></i>
                                            <span class="menu-title">All Expenses</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar__menu-header">Reports</li>

                        <li class="sidebar-menu-item sidebar-dropdown">
                            <a href="javascript:void(0)" class="">
                                <i class="menu-icon la la-money-check-alt"></i>
                                <span class="menu-title">Payment Report</span>
                            </a>
                            <div class="sidebar-submenu  ">
                                <ul>
                                    <li class="sidebar-menu-item  ">
                                        <a href="https://script.viserlab.com/torylab/admin/reports/payment/supplier"
                                            class="nav-link">
                                            <i class="menu-icon la la-dot-circle"></i>
                                            <span class="menu-title">Supplier Payments</span>
                                        </a>
                                    </li>

                                    <li class="sidebar-menu-item  ">
                                        <a href="https://script.viserlab.com/torylab/admin/reports/payment/customer"
                                            class="nav-link">
                                            <i class="menu-icon la la-dot-circle"></i>
                                            <span class="menu-title">Customer Payments</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="sidebar-menu-item  ">
                            <a href="https://script.viserlab.com/torylab/admin/reports/stock/index" class="nav-link">
                                <i class="menu-icon la la-list"></i>
                                <span class="menu-title">Stock Report</span>
                            </a>
                        </li>

                        <li class="sidebar-menu-item sidebar-dropdown">
                            <a href="javascript:void(0)" class="">
                                <i class="menu-icon la la-database"></i>
                                <span class="menu-title">Data Entry Report</span>
                            </a>

                            <div class="sidebar-submenu  ">
                                <ul>
                                    <li class="sidebar-menu-item  ">
                                        <a href="https://script.viserlab.com/torylab/admin/reports/data-entry/product"
                                            class="nav-link">
                                            <i class="menu-icon la la-dot-circle"></i>
                                            <span class="menu-title">Product</span>
                                        </a>
                                    </li>

                                    <li class="sidebar-menu-item  ">
                                        <a href="https://script.viserlab.com/torylab/admin/reports/data-entry/customer"
                                            class="nav-link">
                                            <i class="menu-icon la la-dot-circle"></i>
                                            <span class="menu-title">Customer</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item  ">
                                        <a href="https://script.viserlab.com/torylab/admin/reports/data-entry/supplier"
                                            class="nav-link">
                                            <i class="menu-icon la la-dot-circle"></i>
                                            <span class="menu-title">Supplier</span>
                                        </a>
                                    </li>

                                    <li class="sidebar-menu-item  ">
                                        <a href="https://script.viserlab.com/torylab/admin/reports/data-entry/purchase"
                                            class="nav-link">
                                            <i class="menu-icon la la-dot-circle"></i>
                                            <span pan class="menu-title">Purchase</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item  ">
                                        <a href="https://script.viserlab.com/torylab/admin/reports/data-entry/purchase-return"
                                            class="nav-link">
                                            <i class="menu-icon la la-dot-circle"></i>
                                            <span class="menu-title">Purchase Return</span>
                                        </a>
                                    </li>

                                    <li class="sidebar-menu-item  ">
                                        <a href="https://script.viserlab.com/torylab/admin/reports/data-entry/sale"
                                            class="nav-link">
                                            <i class="menu-icon la la-dot-circle"></i>
                                            <span pan class="menu-title">Sale</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item  ">
                                        <a href="https://script.viserlab.com/torylab/admin/reports/data-entry/sale-return"
                                            class="nav-link">
                                            <i class="menu-icon la la-dot-circle"></i>
                                            <span class="menu-title">Sale Return</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item  ">
                                        <a href="https://script.viserlab.com/torylab/admin/reports/data-entry/adjustment"
                                            class="nav-link">
                                            <i class="menu-icon la la-dot-circle"></i>
                                            <span class="menu-title">Adjustment</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item  ">
                                        <a href="https://script.viserlab.com/torylab/admin/reports/data-entry/transfer"
                                            class="nav-link">
                                            <i class="menu-icon la la-dot-circle"></i>
                                            <span class="menu-title">Transfer</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item  ">
                                        <a href="https://script.viserlab.com/torylab/admin/reports/data-entry/expense"
                                            class="nav-link">
                                            <i class="menu-icon la la-dot-circle"></i>
                                            <span class="menu-title">Expense</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item  ">
                                        <a href="https://script.viserlab.com/torylab/admin/reports/data-entry/supplier-payment"
                                            class="nav-link">
                                            <i class="menu-icon la la-dot-circle"></i>
                                            <span class="menu-title">Supplier Payment</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item  ">
                                        <a href="https://script.viserlab.com/torylab/admin/reports/data-entry/customer-payment"
                                            class="nav-link">
                                            <i class="menu-icon la la-dot-circle"></i>
                                            <span class="menu-title">Customer Payment</span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        <li class="sidebar__menu-header">Settings</li>
                        <li class="sidebar-menu-item ">
                            <a href="https://script.viserlab.com/torylab/admin/general-setting" class="nav-link">
                                <i class="menu-icon la la-life-ring"></i>
                                <span class="menu-title">General Setting</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item ">
                            <a href="https://script.viserlab.com/torylab/admin/setting/system-configuration"
                                class="nav-link">
                                <i class="menu-icon la la-cog"></i>
                                <span class="menu-title">System Configuration</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item ">
                            <a href="https://script.viserlab.com/torylab/admin/setting/logo-icon" class="nav-link">
                                <i class="menu-icon la la-images"></i>
                                <span class="menu-title">Logo & Favicon</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item sidebar-dropdown">
                            <a href="javascript:void(0)" class="">
                                <i class="menu-icon la la-bell"></i>
                                <span class="menu-title">Notification Setting</span>
                            </a>
                            <div class="sidebar-submenu  ">
                                <ul>
                                    <li class="sidebar-menu-item  ">
                                        <a href="https://script.viserlab.com/torylab/admin/notification/global"
                                            class="nav-link">
                                            <i class="menu-icon la la-dot-circle"></i>
                                            <span class="menu-title">Global Template</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item  ">
                                        <a href="https://script.viserlab.com/torylab/admin/notification/email/setting"
                                            class="nav-link">
                                            <i class="menu-icon la la-dot-circle"></i>
                                            <span class="menu-title">Email Setting</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item  ">
                                        <a href="https://script.viserlab.com/torylab/admin/notification/sms/setting"
                                            class="nav-link">
                                            <i class="menu-icon la la-dot-circle"></i>
                                            <span class="menu-title">SMS Setting</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item  ">
                                        <a href="https://script.viserlab.com/torylab/admin/notification/templates"
                                            class="nav-link">
                                            <i class="menu-icon la la-dot-circle"></i>
                                            <span class="menu-title">Notification Templates</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="sidebar__menu-header">Extra</li>
                        <li class="sidebar-menu-item sidebar-dropdown">
                            <a href="javascript:void(0)" class="">
                                <i class="menu-icon la la-server"></i>
                                <span class="menu-title">System</span>
                            </a>
                            <div class="sidebar-submenu  ">
                                <ul>
                                    <li class="sidebar-menu-item  ">
                                        <a href="https://script.viserlab.com/torylab/admin/system/info"
                                            class="nav-link">
                                            <i class="menu-icon la la-dot-circle"></i>
                                            <span class="menu-title">Application</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item  ">
                                        <a href="https://script.viserlab.com/torylab/admin/system/server-info"
                                            class="nav-link">
                                            <i class="menu-icon la la-dot-circle"></i>
                                            <span class="menu-title">Server</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item  ">
                                        <a href="https://script.viserlab.com/torylab/admin/system/optimize"
                                            class="nav-link">
                                            <i class="menu-icon la la-dot-circle"></i>
                                            <span class="menu-title">Cache</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item  ">
                                        <a href="https://script.viserlab.com/torylab/admin/system/system-update"
                                            class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Update</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-menu-item  ">
                            <a href="https://script.viserlab.com/torylab/admin/request-report" class="nav-link"
                                data-default-url="https://script.viserlab.com/torylab/admin/request-report">
                                <i class="menu-icon la la-bug"></i>
                                <span class="menu-title">Report & Request </span>
                            </a>
                        </li>
                    </ul>
                    <div class="text-center mb-3 text-uppercase">
                        <span class="text--primary">torylab</span>
                        <span class="text--success">V1.1 </span>
                    </div>
                </div>
            </div>
        </div>
        <!-- sidebar end -->

        <!-- navbar-wrapper start -->
        <nav class="navbar-wrapper bg--dark">
            <div class="navbar__left">
                <button type="button" class="res-sidebar-open-btn me-3"><i class="las la-bars"></i></button>
                <form class="navbar-search">
                    <input type="search" name="#0" class="navbar-search-field" id="searchInput" autocomplete="off"
                        placeholder="Search here...">
                    <i class="las la-search"></i>
                    <ul class="search-list"></ul>
                </form>
            </div>
            <div class="navbar__right">
                <ul class="navbar__action-list">

                    <li class="dropdown">
                        <button type="button" class="" data-bs-toggle="dropdown" data-display="static"
                            aria-haspopup="true" aria-expanded="false">
                            <span class="navbar-user">
                                <span class="navbar-user__thumb"><img
                                        src="https://script.viserlab.com/torylab/assets/admin/images/profile/6353ef7e9631b1666445182.jpg"
                                        alt="image"></span>
                                <span class="navbar-user__info">
                                    <span class="navbar-user__name">Super Admin</span>
                                </span>
                                <span class="icon"><i class="las la-chevron-circle-down"></i></span>
                            </span>
                        </button>
                        <div class="dropdown-menu dropdown-menu--sm p-0 border-0 box--shadow1 dropdown-menu-right">
                            <a href="https://script.viserlab.com/torylab/admin/profile"
                                class="dropdown-menu__item d-flex align-items-center px-3 py-2">
                                <i class="dropdown-menu__icon las la-user-circle"></i>
                                <span class="dropdown-menu__caption">Profile</span>
                            </a>
                            <a href="https://script.viserlab.com/torylab/admin/password"
                                class="dropdown-menu__item d-flex align-items-center px-3 py-2">
                                <i class="dropdown-menu__icon las la-key"></i>
                                <span class="dropdown-menu__caption">Password</span>
                            </a>
                            <a href="https://script.viserlab.com/torylab/admin/logout"
                                class="dropdown-menu__item d-flex align-items-center px-3 py-2">
                                <i class="dropdown-menu__icon las la-sign-out-alt"></i>
                                <span class="dropdown-menu__caption">Logout</span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
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
                    <div class="col-xxl-7">
                        <div class="d-flex justify-content-between align-items-center flex-wrap mb-3">
                            <h5>Monthly Purchase & Sales Report (Last 12 Month)</h5>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div id="apex-bar-chart"> </div>
                            </div>
                        </div>
                    </div>

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

    <script src="assets/global/js/jquery-3.6.0.min.js"></script>
    <script src="assets/global/js/bootstrap.bundle.min.js"></script>
    <script src="assets/admin/js/vendor/bootstrap-toggle.min.js"></script>
    <script src="assets/admin/js/vendor/jquery.slimscroll.min.js"></script>

    <link rel="stylesheet" href="assets/global/css/iziToast.min.css">
    <script src="assets/global/js/iziToast.min.js"></script>

    <script>
        "use strict";
        function notify(status, message) {
            if (typeof message == 'string') {
                iziToast[status]({
                    message: message,
                    position: "topRight"
                });
            } else {
                $.each(message, function (i, val) {
                    iziToast[status]({
                        message: val,
                        position: "topRight"
                    });
                });
            }
        }
    </script>


    <script src="https://script.viserlab.com/torylab/assets/admin/js/nicEdit.js"></script>
    <script src="https://script.viserlab.com/torylab/assets/admin/js/vendor/select2.min.js"></script>
    <script src="https://script.viserlab.com/torylab/assets/admin/js/app.js?v=1"></script>
    <script src="https://script.viserlab.com/torylab/assets/admin/js/cu-modal.js"></script>

    <script>
        "use strict";
        bkLib.onDomLoaded(function () {
            $(".nicEdit").each(function (index) {
                $(this).attr("id", "nicEditor" + index);
                new nicEditor({
                    fullPanel: true
                }).panelInstance('nicEditor' + index, {
                    hasPanel: true
                });
            });
        });

        (function ($) {

            $(document).on('mouseover ', '.nicEdit-main,.nicEdit-panelContain', function () {
                $('.nicEdit-main').focus();
            });

            $("form").on('submit', function (e) {
                let form = $(this)[0];
                if ($(form).find('.nicEdit').length == 0) {
                    e.preventDefault();
                    $(this).find('[type="submit"]').attr("disabled", "disabled");
                    form.submit();
                }
            });

        })(jQuery);
    </script>

    <script>
        var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
        (function () {
            var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/5fe0b9b2a8a254155ab5421d/1eq2tap1m';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>

    <script>
        if (window.top != window.self) {
            document.body.innerHTML += '<div style="position:fixed;top:0;width:100%;z-index:9999999;background:#f8d7da;color:#721c24;text-align:center; padding: 20px;"><p style="font-size:20px; font-weight: bold;">You are using this website under an external iframe!!</p><p style="font-size:16px; margin-top: 20px;">for a better experience, please browse directly instead of an external iframe.</p><a href="' + window.self.location + '" target="_blank" style=" margin-top:20px; color: #fff;background-color: #dc3545; padding: 5px 10px; border-radius: 5px; text-decoration: none;">Browse Directly</a></div>';
        }
    </script>


    <script>
        adroll_adv_id = "YXRNNTO7ZBAMFBH67UUE5M";
        adroll_pix_id = "MMQQDWGN25EXPHGRPA3NLR";
        adroll_version = "2.0";
        (function (w, d, e, o, a) {
            w.__adroll_loaded = true;
            w.adroll = w.adroll || [];
            w.adroll.f = ['setProperties', 'identify', 'track'];
            var roundtripUrl = "https://s.adroll.com/j/" + adroll_adv_id
                + "/roundtrip.js";
            for (a = 0; a < w.adroll.f.length; a++) {
                w.adroll[w.adroll.f[a]] = w.adroll[w.adroll.f[a]] || (function (n) {
                    return function () {
                        w.adroll.push([n, arguments])
                    }
                })(w.adroll.f[a])
            }
            e = d.createElement('script');
            o = d.getElementsByTagName('script')[0];
            e.async = 1;
            e.src = roundtripUrl;
            o.parentNode.insertBefore(e, o);
        })(window, document);
        adroll.track("pageView");
    </script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-1ME4K0RD7K"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'G-1ME4K0RD7K');
    </script>
    <script src="https://script.viserlab.com/torylab/assets/admin/js/vendor/apexcharts.min.js"></script>

    <script>
        "use strict";
        window.onload = function () {

            var options = {
                series: [{
                    name: 'Total Purchase',
                    data: []
                },
                {
                    name: 'Total Purchase Return',
                    data: []
                },
                {
                    name: 'Total Sale',
                    data: []
                },
                {
                    name: 'Total Sale Return',
                    data: []
                }
                ],
                chart: {
                    type: 'bar',
                    height: 417,
                    toolbar: {
                        show: false
                    }
                },
                plotOptions: {
                    bar: {
                        horizontal: false,
                        columnWidth: '50%',
                        endingShape: 'rounded'
                    },
                },
                dataLabels: {
                    enabled: false,
                },
                stroke: {
                    show: true,
                    width: 2,
                    colors: ['transparent']
                },
                xaxis: {
                    categories: []
                },
                yaxis: {
                    title: {
                        text: "USD",
                        style: {
                            color: '#7c97bb'
                        }
                    }
                },
                grid: {
                    xaxis: {
                        lines: {
                            show: false
                        }
                    },
                    yaxis: {
                        lines: {
                            show: false
                        }
                    },
                },
                fill: {
                    colors: ['#008ffb', '#fbb225', '#00e396', '#ea5455'],
                    opacity: 1
                },
                tooltip: {
                    y: {
                        formatter: function (val) {
                            return `$ ${val}`
                        }
                    }
                },
                legend: {
                    markers: {
                        width: 12,
                        height: 12,
                        strokeWidth: 0,
                        strokeColor: '#fff',
                        fillColors: ['#008ffb', '#fbb225', '#00e396', '#ea5455'],
                        radius: 12,
                    },
                }
            };

            var chart = new ApexCharts(document.querySelector("#apex-bar-chart"), options);
            chart.render();
        }
    </script>
    <script>
        if ($('li').hasClass('active')) {
            $('#sidebar__menuWrapper').animate({
                scrollTop: eval($(".active").offset().top - 320)
            }, 500);
        }
    </script>

</body>

</html>