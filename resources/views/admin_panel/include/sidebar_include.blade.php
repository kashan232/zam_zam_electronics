<div class="sidebar bg--dark">
    <button class="res-sidebar-close-btn"><i class="la la-times"></i></button>
    <div class="sidebar__inner">
        <div class="sidebar__logo">
            <a href="#" class="sidebar__main-logo">
                <img src="{{ asset('assets/admin/images/dashbord_logo.png') }}" alt="image">
            </a>
        </div>
        <div class="sidebar__menu-wrapper" id="sidebar__menuWrapper">
            <ul class="sidebar__menu">
                <li class="sidebar-menu-item active">
                    <a href="{{ route('home') }}" class="nav-link ">
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
                                <a class="nav-link" href="{{ route('staff') }}">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title">All Staff</span>
                                </a>
                            </li>

                            <li class="sidebar-menu-item ">
                                <a class="nav-link" href="{{ route('StaffSalary') }}">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title">Staff Salary</span>
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
                                <a href="{{ route('category') }}" class="nav-link">
                                    <i class="menu-icon la la-dot-circle"></i>
                                    <span class="menu-title">Categories</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item  ">
                                <a href="{{ route('brand') }}" class="nav-link">
                                    <i class="menu-icon la la-dot-circle"></i>
                                    <span class="menu-title">Brands</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item  ">
                                <a href="{{ route('unit') }}" class="nav-link">
                                    <i class="menu-icon la la-dot-circle"></i>
                                    <span class="menu-title">Units</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item  ">
                                <a href="{{ route('all-product') }}"
                                    class="nav-link">
                                    <i class="menu-icon la la-dot-circle"></i>
                                    <span class="menu-title">Products</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="sidebar-menu-item ">
                    <a href="{{ route('warehouse') }}" class="nav-link ">
                        <i class="menu-icon la la-warehouse"></i>
                        <span class="menu-title">Warehouse</span>
                    </a>
                </li>

                <li class="sidebar-menu-item">
                    <a href="{{ route('supplier') }}" class="nav-link">
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
                                <a href="{{ route('Purchase') }}"
                                    class="nav-link">
                                    <i class="menu-icon la la-dot-circle"></i>
                                    <span class="menu-title">All Purchases</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item  ">
                                <a href="{{ route('all-purchase-return') }}"
                                    class="nav-link">
                                    <i class="menu-icon la la-dot-circle"></i>
                                    <span class="menu-title">Purchases Return</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="sidebar-menu-item  ">
                    <a href="{{ route('all-purchase-return-damage-item') }}"
                        class="nav-link">
                        <i class="menu-icon la la-dot-circle"></i>
                        <span class="menu-title">Claim Returns</span>
                    </a>
                </li>
                
                <li class="sidebar-menu-item">
                    <a href="{{ route('customer') }}" class="nav-link">
                        <i class="menu-icon la la-users"></i>
                        <span class="menu-title">Customer</span>
                    </a>
                </li>

                <li class="sidebar-menu-item sidebar-dropdown">
                    <a href="javascript:void(0)" class="">
                        <i class="menu-icon la la-shopping-cart"></i>
                        <span class="menu-title">Sale</span>
                    </a>
                    <div class="sidebar-submenu">
                        <ul>
                            <li class="sidebar-menu-item  ">
                                <a href="{{ route('all-sales') }}" class="nav-link">
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
                                <a href="https://script.viserlab.com/torylab/admin/reports/data-entry/customer"
                                    class="nav-link">
                                    <i class="menu-icon la la-dot-circle"></i>
                                    <span class="menu-title">Claim Returns</span>
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