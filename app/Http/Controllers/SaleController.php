<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Customer;
use App\Models\Product;
use App\Models\Purchase;
use App\Models\Warehouse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SaleController extends Controller
{
    
    public function Sale()
    {
        if (Auth::id()) {
            $userId = Auth::id();
            // dd($userId);
            $Purchases = Purchase::get();
            // dd($Purchases);
            return view('admin_panel.sale.sales', [
                'Purchases' => $Purchases,
            ]);
        } else {
            return redirect()->back();
        }
    }

    public function add_Sale()
    {
        if (Auth::id()) {
            $userId = Auth::id();
            // dd($userId);
            $Customers = Customer::get();
            $Warehouses = Warehouse::get();
            $Category = Category::get();

            // dd($Customers);
            return view('admin_panel.sale.add_sale', [
                'Customers' => $Customers,
                'Warehouses' => $Warehouses,
                'Category' => $Category,
            ]);
        } else {
            return redirect()->back();
        }
    }

    public function getItemsByCategory($categoryId)
    {
        $items = Product::where('category', $categoryId)->get(); // Adjust according to your database structure
        return response()->json($items);
    }


    public function view($id)
    {
        // Fetch the purchase details
        $purchase = Purchase::findOrFail($id);

        // Decode the JSON fields if necessary
        $purchase->item_category = json_decode($purchase->item_category);
        $purchase->item_name = json_decode($purchase->item_name);
        $purchase->quantity = json_decode($purchase->quantity);
        $purchase->price = json_decode($purchase->price);
        $purchase->total = json_decode($purchase->total);

        return view('admin_panel.purchase.view', [
            'purchase' => $purchase,
        ]);
    }

    public function store_Sale(Request $request)
    {
        // Validate the request
        $validatedData = $request->validate([
            'invoice_no' => 'required|string',
            'supplier' => 'required|string',
            'purchase_date' => 'required|date',
            'warehouse_id' => 'required|string',
            'item_category' => 'required|array',
            'item_name' => 'required|array',
            'quantity' => 'required|array',
            'price' => 'required|array',
            'total' => 'required|array',
            'note' => 'nullable|string',
            'total_price' => 'required|numeric',
            'discount' => 'nullable|numeric',  // Ensure it's numeric
        ]);

        // Ensure discount is numeric and default to 0 if null
        $discount = (float) $request->discount ?? 0;

        // Ensure total_price is numeric as well
        $totalPrice = (float) $request->total_price;

        // Prepare data for storage
        $purchaseData = [
            'invoice_no' => $request->invoice_no,
            'supplier' => $request->supplier,
            'purchase_date' => $request->purchase_date,
            'warehouse_id' => $request->warehouse_id,
            'item_category' => json_encode($request->item_category),
            'item_name' => json_encode($request->item_name),
            'quantity' => json_encode($request->quantity),
            'price' => json_encode($request->price),
            'total' => json_encode($request->total),
            'note' => $request->note,
            'total_price' => $totalPrice,
            'discount' => $discount,
            'Payable_amount' => $totalPrice - $discount, // Correct subtraction with numeric values
        ];

        // Save purchase data
        $purchase = Purchase::create($purchaseData);

        // Step 2: Update Product Stock
        foreach ($request->item_name as $key => $item_name) {
            $item_category = $request->item_category[$key];
            $quantity = $request->quantity[$key];

            // Find the product and update stock
            $product = Product::where('product_name', $item_name)
                ->where('category', $item_category)
                ->first();
            if ($product) {
                $product->stock += $quantity; // Increase the stock
                $product->save();
            }
        }

        return redirect()->back()->with('success', 'Purchase saved successfully and stock updated.');
    }

}
