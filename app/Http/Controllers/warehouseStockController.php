<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Warehouse;
use App\Models\WarehouseProductStock;
use App\Models\WarehouseStock;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class warehouseStockController extends Controller
{
    public function warehouse_stock()
    {
        if (Auth::id()) {
            $userId = Auth::id();
            // dd($userId);
            $Warehouses = Warehouse::get();
            $Category = Category::get();
            // dd($Purchases);
            return view('admin_panel.warehousestock.add_warehouse_stock', [
                'Warehouses' => $Warehouses,
                'Category' => $Category,
            ]);
        } else {
            return redirect()->back();
        }
    }

    public function store_warehouse_stock(Request $request)
    {
        $request->validate([
            'stock_date' => 'required|date',
            'warehouse_id' => 'required',
            'supplier_name' => 'required',
            'item_category' => 'required|array',
            'item_name' => 'required|array',
            'unit' => 'required|array',
            'quantity' => 'required|array',
        ]);

        $warehouseName = $request->warehouse_id; // ID nahi, name store ho raha hai
        $supplier_name = $request->supplier_name; // ID nahi, name store ho raha hai
        $userId = Auth::id();

        foreach ($request->item_name as $index => $productName) {
            $category = $request->item_category[$index];
            $model = $request->unit[$index];
            $quantity = (int) $request->quantity[$index];

            // Insert new stock entry
            WarehouseStock::create([
                'admin_or_user_id'    => $userId,
                'stock_date' => $request->stock_date,
                'warehouse_name' => $warehouseName,
                'supplier_name' => $supplier_name,
                'category' => $category,
                'product_name' => $productName,
                'model' => $model,
                'quantity' => $quantity,
            ]);

            // Update warehouse_product_stock
            $existingStock = WarehouseProductStock::where([
                'warehouse_name' => $warehouseName,
                'category' => $category,
                'product_name' => $productName,
                'model' => $model,
            ])->first();

            if ($existingStock) {
                // Agar record exist karta hai to quantity update karein
                $existingStock->increment('quantity', $quantity);
            } else {
                // Naya record create karein agar nahi hai
                WarehouseProductStock::create([
                    'warehouse_name' => $warehouseName,
                    'category' => $category,
                    'product_name' => $productName,
                    'model' => $model,
                    'unit' => $model,
                    'quantity' => $quantity,
                ]);
            }
        }

        return back()->with('success', 'Warehouse stock added successfully!');
    }


    public function listing_warehouse_stock()
    {
        if (Auth::id()) {
            $userId = Auth::id();
            // dd($userId);
            $WarehouseStocks = WarehouseStock::where('admin_or_user_id', '=', $userId)->get();
            return view('admin_panel.warehousestock.listing_warehouse_stock', [
                'WarehouseStocks' => $WarehouseStocks
            ]);
        } else {
            return redirect()->back();
        }
    }

    public function product_warehouse_stock()
    {
        if (Auth::id()) {
            $userId = Auth::id();
            // dd($userId);
            $Warehouses = Warehouse::get();
            $Categories = Category::get();
            // dd($Purchases);
            return view('admin_panel.warehousestock.product_warehouse_stock', [
                'Warehouses' => $Warehouses,
                'Categories' => $Categories,
            ]);
        } else {
            return redirect()->back();
        }
    }


    public function getProductsByCategory(Request $request)
    {
        // Ensure categoryName is being received properly
        $categoryName = $request->input('categoryName');

        // Get products by category
        $products = Product::where('category', $categoryName)->pluck('product_name');

        // Return the products as JSON
        return response()->json($products);
    }

    public function filterWarehouseStock(Request $request)
    {
        $warehouseName = $request->input('warehouse_name');
        $category = $request->input('category');
        $productName = $request->input('product_name');

        $query = WarehouseProductStock::query();

        if ($warehouseName) {
            $query->where('warehouse_name', $warehouseName);
        }
        if ($category) {
            $query->where('category', $category);
        }
        if ($productName) {
            $query->where('product_name', $productName);
        }

        $stocks = $query->get();

        return response()->json($stocks);
    }
}
