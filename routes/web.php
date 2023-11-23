<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VendorController;
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

// Kashan
// Aiman
// kashan here
Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::get('/dashboard', [LoginController::class, 'dashboard'])->name('dashboard');

//User
Route::get('/add-user', [UserController::class, 'add_user'])->name('add-user');
Route::get('/all-user', [UserController::class, 'all_user'])->name('all-user');
Route::get('/edit-user', [UserController::class, 'edit_user'])->name('edit-user');

//category
Route::get('/add-category', [CategoryController::class, 'add_category'])->name('add-category');
Route::get('/all-category', [CategoryController::class, 'all_category'])->name('all-category');
Route::get('/edit-category', [CategoryController::class, 'edit_category'])->name('edit-category');

//Brand
Route::get('/add-brand', [BrandController::class, 'add_brand'])->name('add-brand');
Route::get('/all-brand', [BrandController::class, 'all_brand'])->name('all-brand');
Route::get('/edit-brand', [BrandController::class, 'edit_brand'])->name('edit-brand');

//Unit
Route::get('/add-unit', [UnitController::class, 'add_unit'])->name('add-unit');
Route::get('/all-unit', [UnitController::class, 'all_unit'])->name('all-unit');
Route::get('/edit-unit', [UnitController::class, 'edit_unit'])->name('edit-unit');

//Vendor
Route::get('/add-vendor', [VendorController::class, 'add_vendor'])->name('add-vendor');
Route::get('/all-vendor', [VendorController::class, 'all_vendor'])->name('all-vendor');
Route::get('/edit-vendor', [VendorController::class, 'edit_vendor'])->name('edit-vendor');

//product
Route::get('/add-product', [ProductController::class, 'add_product'])->name('add-product');
Route::get('/all-product', [ProductController::class, 'all_product'])->name('all-product');
Route::get('/edit-product', [ProductController::class, 'edit_product'])->name('edit-product');

//sales
Route::get('/add-sales', [SalesController::class, 'add_sales'])->name('add-sales');
Route::get('/all-sales', [SalesController::class, 'all_sales'])->name('all-sales');
Route::get('/edit-sales', [SalesController::class, 'edit_sales'])->name('edit-sales');

//customer
Route::get('/add-customer', [CustomerController::class, 'add_customer'])->name('add-customer');
Route::get('/all-customer', [CustomerController::class, 'all_customer'])->name('all-customer');
Route::get('/edit-customer', [CustomerController::class, 'edit_customer'])->name('edit-customer');

//supplier
Route::get('/add-supplier', [SupplierController::class, 'add_supplier'])->name('add-supplier');
Route::get('/all-supplier', [SupplierController::class, 'all_supplier'])->name('all-supplier');
Route::get('/edit-supplier', [SupplierController::class, 'edit_supplier'])->name('edit-supplier');

