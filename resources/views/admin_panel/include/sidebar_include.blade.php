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
                        <i class="menu-icon fas fa-home"></i>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </li>

                <!-- <li class="sidebar-menu-item sidebar-dropdown">
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
                </li> -->


                <li class="sidebar-menu-item ">
                    <a href="{{ route('category') }}" class="nav-link ">
                        <i class="menu-icon fas fa-boxes"></i>
                        <span class="menu-title">Categories</span>
                    </a>
                </li>

                <li class="sidebar-menu-item ">
                    <a href="{{ route('brand') }}" class="nav-link ">
                        <i class="menu-icon fas fa-building"></i>
                        <span class="menu-title">Brands</span>
                    </a>
                </li>

                <li class="sidebar-menu-item ">
                    <a href="{{ route('unit') }}" class="nav-link ">
                        <i class="menu-icon fas fa-palette"></i>
                        <span class="menu-title">Models</span>
                    </a>
                </li>

                <li class="sidebar-menu-item ">
                    <a href="{{ route('all-product') }}" class="nav-link ">
                        <i class="menu-icon fas fa-box-open"></i>
                        <span class="menu-title">Products</span>
                    </a>
                </li>

                <li class="sidebar-menu-item ">
                    <a href="{{ route('warehouse') }}" class="nav-link ">
                        <i class="menu-icon fas fa-warehouse"></i>
                        <span class="menu-title">Warehouse</span>
                    </a>
                </li>

                <li class="sidebar-menu-item sidebar-dropdown">
                    <a href="javascript:void(0)" class="">
                        <i class="menu-icon fas fa-shopping-basket"></i>
                        <span class="menu-title">Warehouse Stock</span>
                    </a>
                    <div class="sidebar-submenu ">
                        <ul>
                            <li class="sidebar-menu-item ">
                                <a href="{{ route('warehouse-stock') }}"
                                    class="nav-link">
                                    <i class="menu-icon la la-dot-circle"></i>
                                    <span class="menu-title">Add warehouse Stock</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item ">
                                <a href="{{ route('listing-warehouse-stock') }}"
                                    class="nav-link">
                                    <i class="menu-icon la la-dot-circle"></i>
                                    <span class="menu-title">All warehouse Stock</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item ">
                                <a href="{{ route('product-warehouse-stock') }}"
                                    class="nav-link">
                                    <i class="menu-icon la la-dot-circle"></i>
                                    <span class="menu-title">Warehouse Prodct Stock</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </li>

                <li class="sidebar-menu-item sidebar-dropdown">
                    <a href="javascript:void(0)" class="">
                        <i class="menu-icon fas fa-shopping-basket"></i>
                        <span class="menu-title">Stock Transfer</span>
                    </a>
                    <div class="sidebar-submenu ">
                        <ul>
                            <li class="sidebar-menu-item ">
                                <a href="{{ route('warehouse-to-shop-stock') }}"
                                    class="nav-link">
                                    <i class="menu-icon la la-dot-circle"></i>
                                    <span class="menu-title">Stock Transfer</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item ">
                                <a href="{{ route('All-Stock-Transfer') }}"
                                    class="nav-link">
                                    <i class="menu-icon la la-dot-circle"></i>
                                    <span class="menu-title">All Stock Transfer</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="sidebar-menu-item ">
                    <a href="{{ route('product-alerts') }}" class="nav-link ">
                        <i class="menu-icon fas fa-bell"></i>

                        <span class="menu-title">Stock Alerts</span>
                        @php
                        $lowStockProductsCount = DB::table('products')
                        ->whereRaw('CAST(stock AS UNSIGNED) <= CAST(alert_quantity AS UNSIGNED)')
                            ->count();
                            @endphp


                            @if($lowStockProductsCount > 0)
                            <small>&nbsp;<i class="fa fa-circle text--danger" aria-hidden="true" aria-label="Returned" data-bs-original-title="Returned"></i></small>
                            @endif
                    </a>
                </li>

                <li class="sidebar-menu-item sidebar-dropdown">
                    <a href="javascript:void(0)" class="">
                        <i class="menu-icon fas fa-shopping-basket"></i>
                        <span class="menu-title">Purchase</span>
                    </a>
                    <div class="sidebar-submenu ">
                        <ul>
                            <li class="sidebar-menu-item ">
                                <a href="{{ route('add-purchase') }}"
                                    class="nav-link">
                                    <i class="menu-icon la la-dot-circle"></i>
                                    <span class="menu-title">Add Purchases</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item ">
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

                <li class="sidebar-menu-item sidebar-dropdown">
                    <a href="javascript:void(0)" class="">
                        <i class="menu-icon fas fa-shopping-cart"></i>
                        <span class="menu-title">Sale</span>
                    </a>
                    <div class="sidebar-submenu">
                        <ul>
                            <li class="sidebar-menu-item">
                                <a href="{{ route('add-Sale') }}" class="nav-link">
                                    <i class="menu-icon la la-dot-circle"></i>
                                    <span class="menu-title">Add Sales</span>
                                </a>
                            </li>

                            <li class="sidebar-menu-item">
                                <a href="{{ route('all-sales') }}" class="nav-link">
                                    <i class="menu-icon la la-dot-circle"></i>
                                    <span class="menu-title">All Sales</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>


                <li class="sidebar-menu-item sidebar-dropdown">
                    <a href="javascript:void(0)" class="">
                        <i class="menu-icon fas fa-chart-pie"></i>
                        <i class=""></i>
                        <span class="menu-title">Reporting</span>
                    </a>
                    <div class="sidebar-submenu ">
                        <ul>
                            <li class="sidebar-menu-item ">
                                <a href="{{ route('sale-report') }}"
                                    class="nav-link">
                                    <i class="menu-icon la la-dot-circle"></i>
                                    <span class="menu-title">Sales Report</span>
                                </a>
                            </li>

                        </ul>
                        <ul>
                            <li class="sidebar-menu-item ">
                                <a href="{{ route('purchase-report') }}"
                                    class="nav-link">
                                    <i class="menu-icon la la-dot-circle"></i>
                                    <span class="menu-title"> Purchase Report </span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </li>








                <!-- <li class="sidebar-menu-item">
                    <a href="{{ route('supplier') }}" class="nav-link">
                        <i class="menu-icon la la-user-friends"></i>
                        <span class="menu-title">Supplier</span>
                    </a>
                </li> -->

                <!-- <li class="sidebar-menu-item sidebar-dropdown">
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
                </li> -->

                <!-- <li class="sidebar-menu-item  ">
                    <a href="{{ route('all-purchase-return-damage-item') }}"
                        class="nav-link">
                        <i class="menu-icon la la-dot-circle"></i>
                        <span class="menu-title">Claim Returns</span>
                    </a>
                </li> -->

                <!-- <li class="sidebar-menu-item">
                    <a href="{{ route('customer') }}" class="nav-link">
                        <i class="menu-icon la la-users"></i>
                        <span class="menu-title">Customer</span>
                    </a>
                </li> -->

                <!-- <li class="sidebar-menu-item">
                    <a href="{{ route('customer-recovires') }}" class="nav-link">
                        <i class="menu-icon la la-users"></i>
                        <span class="menu-title">Customer Recoveries</span>
                    </a>
                </li> -->

                <!-- <li class="sidebar-menu-item sidebar-dropdown">
                    <a href="javascript:void(0)" class="">
                        <i class="menu-icon la la-shopping-cart"></i>
                        <span class="menu-title">Sale</span>
                    </a>
                    <div class="sidebar-submenu">
                        <ul>
                            <li class="sidebar-menu-item">
                                <a href="{{ route('all-sales') }}" class="nav-link">
                                    <i class="menu-icon la la-dot-circle"></i>
                                    <span class="menu-title">All Sales</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item  ">
                                <a href="#"
                                    class="nav-link">
                                    <i class="menu-icon la la-dot-circle"></i>
                                    <span class="menu-title">Sales Return</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li> -->
            </ul>

            <div class="text-center mb-3 text-uppercase">
                <span class="text--primary">POS</span>
                <span class="text--success">System </span>
            </div>
        </div>
    </div>
</div>