<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="active">
                    <a href="{{ route('dashboard') }}"><img src="assets/img/icons/dashboard.svg" alt="img"><span>
                            Dashboard</span> </a>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"><img src="assets/img/icons/product.svg"
                            alt="img"><span> POS</span> <span class="menu-arrow"></span></a>
                    {{-- <ul>
                        <li><a href="userlist.html">Product List</a></li>
                        <li><a href="adduser.html">Add Product</a></li>
                    </ul> --}}
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"><img src="assets/img/icons/product.svg"
                            alt="img"><span> User</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{ route('all-user') }}">User List</a></li>
                        <li><a href="{{ route('add-user') }}">Add User</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"><img src="assets/img/icons/product.svg"
                            alt="img"><span> Category</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{ route('all-category') }}">Category List</a></li>
                        <li><a href="{{ route('add-category') }}">Add Category</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"><img src="assets/img/icons/product.svg"
                            alt="img"><span> Brand</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{ route('all-brand') }}">Brand List</a></li>
                        <li><a href="{{ route('add-brand') }}">Add Brand</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"><img src="assets/img/icons/product.svg"
                            alt="img"><span> Unit</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{ route('all-unit') }}">Unit List</a></li>
                        <li><a href="{{ route('add-unit') }}">Add Unit</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"><img src="assets/img/icons/product.svg"
                            alt="img"><span> Vendor</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{ route('all-vendor') }}">Vendor List</a></li>
                        <li><a href="{{ route('add-vendor') }}">Add Vendor</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"><img src="assets/img/icons/product.svg"
                            alt="img"><span> Product</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{ route('all-product') }}">Product List</a></li>
                        <li><a href="{{ route('add-product') }}">Add Product</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"><img src="assets/img/icons/sales1.svg"
                            alt="img"><span> Sales</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{ route('all-sales') }}">Sales List</a></li>
                        <li><a href="{{ route('add-sales') }}">Add Sales</a></li>
                        {{-- <li><a href="{{ route('all-vendor') }}">New Sales</a></li> --}}
                        {{-- <li><a href="salesreturnlists.html">Sales Return List</a></li>
                        <li><a href="createsalesreturns.html">New Sales Return</a></li> --}}
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"><img src="assets/img/icons/sales1.svg"
                            alt="img"><span> Customer</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{ route('all-customer') }}">Customer List</a></li>
                        <li><a href="{{ route('add-customer') }}">Add Customer</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"><img src="assets/img/icons/sales1.svg"
                            alt="img"><span> Supplies</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{ route('all-supplier') }}">Supplies List</a></li>
                        <li><a href="{{ route('add-supplier') }}">Add Supplies</a></li>
                    </ul>
                </li>
                {{-- <li class="submenu">
                    <a href="javascript:void(0);"><img src="assets/img/icons/purchase1.svg"
                            alt="img"><span> Purchase</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="purchaselist.html">Purchase List</a></li>
                        <li><a href="addpurchase.html">Add Purchase</a></li>
                        <li><a href="importpurchase.html">Import Purchase</a></li>
                    </ul>
                </li> --}}
                {{-- <li class="submenu">
                    <a href="javascript:void(0);"><img src="assets/img/icons/expense1.svg"
                            alt="img"><span> Expense</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="expenselist.html">Expense List</a></li>
                        <li><a href="createexpense.html">Add Expense</a></li>
                        <li><a href="expensecategory.html">Expense Category</a></li>
                    </ul>
                </li> --}}
                {{-- <li class="submenu">
                    <a href="javascript:void(0);"><img src="assets/img/icons/transfer1.svg"
                            alt="img"><span> Transfer</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="transferlist.html">Transfer List</a></li>
                        <li><a href="addtransfer.html">Add Transfer </a></li>
                        <li><a href="importtransfer.html">Import Transfer </a></li>
                    </ul>
                </li> --}}
                {{-- <li class="submenu">
                    <a href="javascript:void(0);"><img src="assets/img/icons/return1.svg"
                            alt="img"><span> Return</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="salesreturnlist.html">Sales Return List</a></li>
                        <li><a href="createsalesreturn.html">Add Sales Return </a></li>
                        <li><a href="purchasereturnlist.html">Purchase Return List</a></li>
                        <li><a href="createpurchasereturn.html">Add Purchase Return </a></li>
                    </ul>
                </li> --}}
                {{-- <li class="submenu">
                    <a href="javascript:void(0);"><img src="assets/img/icons/users1.svg"
                            alt="img"><span> People</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="customerlist.html">Customer List</a></li>
                        <li><a href="addcustomer.html">Add Customer </a></li>
                        <li><a href="supplierlist.html">Supplier List</a></li>
                        <li><a href="addsupplier.html">Add Supplier </a></li>
                        <li><a href="userlist.html">User List</a></li>
                        <li><a href="adduser.html">Add User</a></li>
                        <li><a href="storelist.html">Store List</a></li>
                        <li><a href="addstore.html">Add Store</a></li>
                    </ul>
                </li> --}}
                {{-- <li class="submenu">
                    <a href="javascript:void(0);"><img src="assets/img/icons/time.svg" alt="img"><span>
                            Report</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="purchaseorderreport.html">Purchase order report</a></li>
                        <li><a href="inventoryreport.html">Inventory Report</a></li>
                        <li><a href="salesreport.html">Sales Report</a></li>
                        <li><a href="invoicereport.html">Invoice Report</a></li>
                        <li><a href="purchasereport.html">Purchase Report</a></li>
                        <li><a href="supplierreport.html">Supplier Report</a></li>
                        <li><a href="customerreport.html">Customer Report</a></li>
                    </ul>
                </li> --}}
                {{-- <li class="submenu">
                    <a href="javascript:void(0);"><img src="assets/img/icons/users1.svg"
                            alt="img"><span> Users</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="newuser.html">New User </a></li>
                        <li><a href="userlists.html">Users List</a></li>
                    </ul>
                </li> --}}
                {{-- <li class="submenu">
                    <a href="javascript:void(0);"><img src="assets/img/icons/settings.svg"
                            alt="img"><span> Settings</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="generalsettings.html">General Settings</a></li>
                        <li><a href="emailsettings.html">Email Settings</a></li>
                        <li><a href="paymentsettings.html">Payment Settings</a></li>
                        <li><a href="currencysettings.html">Currency Settings</a></li>
                        <li><a href="grouppermissions.html">Group Permissions</a></li>
                        <li><a href="taxrates.html">Tax Rates</a></li>
                    </ul>
                </li> --}}
            </ul>
        </div>
    </div>
</div>