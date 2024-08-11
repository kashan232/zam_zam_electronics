<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Purchase;
use App\Models\StaffSalary;
use App\Models\Supplier;
use App\Models\User;
use App\Models\Warehouse;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PurchaseController extends Controller
{
    public function Purchase()
    {
        if (Auth::id()) {
            $userId = Auth::id();
            // dd($userId);
            $Purchases = Purchase::get();
            // dd($Purchases);
            return view('admin_panel.purchase.purchase', [
                'Purchases' => $Purchases,
            ]);
        } else {
            return redirect()->back();
        }
    }

    public function add_purchase()
    {
        if (Auth::id()) {
            $userId = Auth::id();
            // dd($userId);
            $Suppliers = Supplier::get();
            $Warehouses = Warehouse::get();
            $Category = Category::get();
            return view('admin_panel.purchase.add_purchase', [
                'Suppliers' => $Suppliers,
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


    public function store_Purchase(Request $request)
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
            'total_price' => 'required|numeric', // Keep numeric validation if you expect decimal values
            'discount' => 'nullable|numeric',   // Keep numeric validation if you expect decimal values
        ]);

        // Set default discount if not provided
        $discount = $request->discount ?? 0;

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
            'total_price' => $request->total_price,
            'discount' => $discount,
            'Payable_amount' => $request->total_price - $discount, // Handle as a numeric value, not decimal
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

    public function purchases_payment(Request $request)
    {
        // Retrieve the purchase record
        $purchase = Purchase::find($request->purchase_id);

        if ($purchase) {
            // Update the paid amount and calculate the remaining amount
            $paidAmount = $request->paid_amount;
            $newPaidAmount = $purchase->paid_amount + $paidAmount;
            $remainingAmount = $purchase->Payable_amount - $newPaidAmount;

            // Update the purchase record
            $purchase->paid_amount = $newPaidAmount; // Assuming you have a 'paid_amount' column in your purchase table
            $purchase->due_amount = $remainingAmount > 0 ? $remainingAmount : 0; // Calculate due amount
            $purchase->Payable_amount = $remainingAmount <= 0 ? 0 : $remainingAmount; // Update payable amount

            // Update the status based on whether the payment is complete or not
            if ($remainingAmount <= 0) {
                $purchase->status = 'Paid'; // Assuming you have a 'status' column in your purchase table
            } else {
                $purchase->status = 'Unpaid';
            }

            $purchase->save();

            return redirect()->back()->with('success', 'Payment made successfully. Status updated.');
        }

        return redirect()->back()->with('error', 'Purchase record not found.');
    }

    // public function purchase_return($id)
    // {
    //     if (Auth::id()) {
    //         $userId = Auth::id();
    //         $Suppliers = Supplier::get();
    //         $Warehouses = Warehouse::get();
    //         $Category = Category::get();

    //         // Fetch the specific purchase by ID
    //         $purchase = Purchase::with('item_name')->where('id', $id)->first();

    //         return view('admin_panel.purchase_return.add_purchase_return', [
    //             'Suppliers' => $Suppliers,
    //             'Warehouses' => $Warehouses,
    //             'Category' => $Category,
    //             'purchase' => $purchase,
    //         ]);
    //     } else {
    //         return redirect()->back();
    //     }
    // }
}
