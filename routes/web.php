<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\StaffSalaryController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\WarehouseController;
use App\Http\Controllers\warehouseStockController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// code deploy 
// pos start
// Old Pos setup
// Software deployed
// Zam Zam Electronic Deployed
Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/home', [HomeController::class, 'home'])->middleware(['auth'])->name('home');
Route::get('/admin-page', [HomeController::class, 'adminpage'])->middleware(['auth','admin'])->name('admin-page');
Route::get('/Admin-Change-Password', [HomeController::class, 'Admin_Change_Password'])->name('Admin-Change-Password');
Route::post('/updte-change-Password', [HomeController::class, 'updte_change_Password'])->name('updte-change-Password');

// staff dashboard work 
Route::get('/get-products-by-category', [HomeController::class, 'getProductsByCategory'])->name('get.products.by.category');
Route::get('/get-product-by-barcode', [HomeController::class, 'getProductByBarcode'])->name('get.product.by.barcode');
Route::post('/staff/transfer-cash', [HomeController::class, 'transferCash'])->name('staff.transfer.cash');
Route::get('/cash-transfser', [HomeController::class, 'cash_transfser'])->name('cash-transfser');


//category
Route::get('/category', [CategoryController::class, 'category'])->middleware(['auth','admin'])->name('category');
Route::post('/store-category', [CategoryController::class, 'store_category'])->name('store-category');
Route::post('/update-category', [CategoryController::class, 'update_category'])->name('update-category');

//brand
Route::get('/brand', [BrandController::class, 'brand'])->middleware(['auth','admin'])->name('brand');
Route::post('/store-brand', [BrandController::class, 'store_brand'])->name('store-brand');
Route::post('/update-brand', [BrandController::class, 'update_brand'])->name('update-brand');

//unit
Route::get('/unit', [UnitController::class, 'unit'])->middleware(['auth','admin'])->name('unit');
Route::post('/store-unit', [UnitController::class, 'store_unit'])->name('store-unit');
Route::post('/update-unit', [UnitController::class, 'update_unit'])->name('update-unit');

//product
Route::get('/all-product', [ProductController::class, 'all_product'])->middleware(['auth','admin'])->name('all-product');
Route::get('/add-product', [ProductController::class, 'add_product'])->middleware(['auth','admin'])->name('add-product');
Route::get('/get-units-by-category', [ProductController::class, 'getUnitsByCategory'])->name('get-units-by-category');
Route::post('/store-multi-product', [ProductController::class, 'storeMultipleProducts'])->name('store-multi-product');
Route::post('/update-product', [ProductController::class, 'update'])->name('update-product');
Route::get('/get-units/{categoryId}', [ProductController::class, 'getUnitsByproduct'])->name('get.units.by.category');

Route::get('/product-alerts', [ProductController::class, 'product_alerts'])->name('product-alerts');
Route::post('/delete-product', [ProductController::class, 'delete_product'])->name('delete.product');

//warehouse
Route::get('/warehouse', [WarehouseController::class, 'warehouse'])->middleware(['auth','admin'])->name('warehouse');
Route::post('/store-warehouse', [WarehouseController::class, 'store_warehouse'])->name('store-warehouse');
Route::post('/update-warehouse', [WarehouseController::class, 'update_warehouse'])->name('update-warehouse');

// warehouse stock manage
Route::get('/warehouse-stock', [warehouseStockController::class, 'warehouse_stock'])->middleware(['auth','admin'])->name('warehouse-stock');
Route::post('/store-warehouse-stock', [warehouseStockController::class, 'store_warehouse_stock'])->name('store-warehouse-stock');
Route::get('/listing-warehouse-stock', [warehouseStockController::class, 'listing_warehouse_stock'])->middleware(['auth','admin'])->name('listing-warehouse-stock');
Route::get('/product-warehouse-stock', [warehouseStockController::class, 'product_warehouse_stock'])->middleware(['auth','admin'])->name('product-warehouse-stock');
Route::get('/get-products-by-category', [warehouseStockController::class, 'getProductsByCategory'])->name('get-products-by-category');
Route::get('/filter-warehouse-stock', [warehouseStockController::class, 'filterWarehouseStock'])->name('filter-warehouse-stock');

Route::get('/warehouse-to-shop-stock', [warehouseStockController::class, 'warehouse_to_shop_stock'])->name('warehouse-to-shop-stock');
Route::get('/get-stock', [warehouseStockController::class, 'getStock'])->name('get-stock');
Route::post('/store-warehouse-to-shop', [warehouseStockController::class, 'store_warehouse_to_shop'])->name('store-warehouse-to-shop');
Route::post('/transfer-warehouse-stock', [warehouseStockController::class, 'transfer_warehouse_stock'])->name('transfer-warehouse-stock');
Route::get('/All-Stock-Transfer', [warehouseStockController::class, 'All_Stock_Transfer'])->name('All-Stock-Transfer');

// Route::post('/store-Purchase', [PurchaseController::class, 'store_Purchase'])->name('store-Purchase');
// Route::post('/update-Purchase', [PurchaseController::class, 'update_Purchase'])->name('update-Purchase');
// Route::post('/purchases-payment', [PurchaseController::class, 'purchases_payment'])->name('purchases-payment');
// Route::get('/get-items-by-category/{categoryId}', [PurchaseController::class, 'getItemsByCategory'])->name('get-items-by-category');

// Route::get('/purchase-view/{id}', [PurchaseController::class, 'view'])->name('purchase-view');
// Route::get('/purchase-return/{id}', [PurchaseController::class, 'purchase_return'])->name('purchase-return');
// Route::post('/store-purchase-return', [PurchaseController::class, 'store_purchase_return'])->name('store-purchase-return');
// Route::get('/all-purchase-return', [PurchaseController::class, 'all_purchase_return'])->name('all-purchase-return');
// Route::post('/purchase-return-payment', [PurchaseController::class, 'purchase_return_payment'])->name('purchase-return-payment');
// Route::get('/get-unit-by-product/{productId}', [PurchaseController::class, 'getUnitByProduct'])->name('get-unit-by-product');


// Route::get('/purchase-return-damage-item/{id}', [PurchaseController::class, 'purchase_return_damage_item'])->name('purchase-return-damage-item');
// Route::post('/store-purchase-return-damage-item', [PurchaseController::class, 'store_purchase_return_damage_item'])->name('store-purchase-return-damage-item');
// Route::get('/all-purchase-return-damage-item', [PurchaseController::class, 'all_purchase_return_damage_item'])->name('all-purchase-return-damage-item');

//supplier
Route::get('/supplier', [SupplierController::class, 'supplier'])->middleware(['auth','admin'])->name('supplier');
Route::post('/store-supplier', [SupplierController::class, 'store_supplier'])->name('store-supplier');
Route::post('/update-supplier', [SupplierController::class, 'update_supplier'])->name('update-supplier');

//Staff
Route::get('/staff', [StaffController::class, 'staff'])->middleware(['auth','admin'])->name('staff');
Route::post('/store-staff', [StaffController::class, 'store_staff'])->name('store-staff');
Route::post('/update-staff', [StaffController::class, 'update_staff'])->name('update-staff');

//Staff Salary 
Route::get('/StaffSalary', [StaffSalaryController::class, 'StaffSalary'])->middleware(['auth','admin'])->name('StaffSalary');
Route::post('/store-StaffSalary', [StaffSalaryController::class, 'store_StaffSalary'])->name('store-StaffSalary');
Route::post('/update-StaffSalary', [StaffSalaryController::class, 'update_StaffSalary'])->name('update-StaffSalary');


//Purchase 
Route::get('/Purchase', [PurchaseController::class, 'Purchase'])->middleware(['auth','admin'])->name('Purchase');
Route::get('/add-purchase', [PurchaseController::class, 'add_purchase'])->middleware(['auth','admin'])->name('add-purchase');
Route::post('/store-Purchase', [PurchaseController::class, 'store_Purchase'])->name('store-Purchase');
Route::post('/update-Purchase', [PurchaseController::class, 'update_Purchase'])->name('update-Purchase');
Route::post('/purchases-payment', [PurchaseController::class, 'purchases_payment'])->name('purchases-payment');
Route::get('/get-items-by-category/{categoryId}', [PurchaseController::class, 'getItemsByCategory'])->name('get-items-by-category');

Route::get('/purchase-view/{id}', [PurchaseController::class, 'view'])->name('purchase-view');
Route::get('/purchase-return/{id}', [PurchaseController::class, 'purchase_return'])->name('purchase-return');
Route::post('/store-purchase-return', [PurchaseController::class, 'store_purchase_return'])->name('store-purchase-return');
Route::get('/all-purchase-return', [PurchaseController::class, 'all_purchase_return'])->name('all-purchase-return');
Route::post('/purchase-return-payment', [PurchaseController::class, 'purchase_return_payment'])->name('purchase-return-payment');
Route::get('/get-unit-by-product/{productId}', [PurchaseController::class, 'getUnitByProduct'])->name('get-unit-by-product');


Route::get('/purchase-return-damage-item/{id}', [PurchaseController::class, 'purchase_return_damage_item'])->name('purchase-return-damage-item');
Route::post('/store-purchase-return-damage-item', [PurchaseController::class, 'store_purchase_return_damage_item'])->name('store-purchase-return-damage-item');
Route::get('/all-purchase-return-damage-item', [PurchaseController::class, 'all_purchase_return_damage_item'])->name('all-purchase-return-damage-item');


//Sale 
Route::get('/Sale', [SaleController::class, 'Sale'])->name('Sale');
Route::get('/add-Sale', [SaleController::class, 'add_Sale'])->name('add-Sale');
Route::post('/store-Sale', [SaleController::class, 'store_Sale'])->name('store-Sale');
Route::get('/all-sales', [SaleController::class, 'all_sales'])->name('all-sales');
Route::get('/staff-sales', [SaleController::class, 'staff_sales'])->name('staff-sales');
Route::get('/get-customer-amount/{id}', [SaleController::class, 'get_customer_amount'])->name('get-customer-amount');
Route::get('/sale-return/{id}', [SaleController::class, 'sale_return'])->name('sale-return');
Route::post('/store-sale-return', [SaleController::class, 'store_sale_return'])->name('store-sale-return');

Route::get('/all-sales-return', [SaleController::class, 'all_sales_return'])->name('all-sales-return');

// Route for downloading invoice
Route::get('/invoice/download/{id}', [SaleController::class, 'downloadInvoice'])->name('invoice.download');
Route::get('/get-product-details/{productName}', [ProductController::class, 'getProductDetails'])->name('get-product-details');


Route::get('/search-products', [ProductController::class, 'searchProducts'])->name('search-products');

Route::get('/sale-receipt/{id}', [SaleController::class, 'showReceipt'])->name('sale-receipt');


//Customer
Route::get('/customer', [CustomerController::class, 'customer'])->name('customer');
Route::post('/store-customer', [CustomerController::class, 'store_customer'])->name('store-customer');
Route::post('/update-customer', [CustomerController::class, 'update_customer'])->name('update-customer');
Route::post('/customer/recovery', [CustomerController::class, 'processRecovery'])->name('customer.recovery');
Route::get('/customer-recovires', [CustomerController::class, 'customer_recovires'])->middleware(['auth','admin'])->name('customer-recovires');
Route::post('/customer/credit', [CustomerController::class, 'addCredit'])->name('customer.credit');

Route::get('/sale-report', [ReportController::class, 'sale_report'])->name('sale-report');
Route::get('/filter-sales', [ReportController::class, 'filterSales'])->name('filter.sales');

Route::get('/purchase-report', [ReportController::class, 'purchase_report'])->name('purchase-report');

Route::get('/filter-purchase', [ReportController::class, 'filterpurchase'])->name('filter.purchase');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';
