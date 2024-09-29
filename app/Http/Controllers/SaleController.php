<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Customer;
use App\Models\Product;
use App\Models\Purchase;
use App\Models\Sale;
use App\Models\Warehouse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf; // If using barryvdh/laravel-dompdf

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
        // Generate a unique invoice number
        $invoiceNo = Sale::generateInvoiceNo();
        // dd($invoiceNo);  
        // Debugging: Log the request data to check incoming values
        \Log::info('Request Data:', $request->all());

        // Ensure discount, cash received, and change return are numeric
        $discount = (float) ($request->input('discount', 0));
        $totalPrice = (float) $request->input('total_price', 0);
        $cashReceived = (float) $request->input('cash_received', 0);
        $changeToReturn = (float) $request->input('change_to_return', 0); // Fixed field name

        // Debugging: Log the processed values
        \Log::info('Processed Values:', [
            'discount' => $discount,
            'total_price' => $totalPrice,
            'cash_received' => $cashReceived,
            'change_to_return' => $changeToReturn, // Fixed field name
        ]);

        // Prepare data for storage
        $saleData = [
            'invoice_no' => $invoiceNo,
            'customer' => $request->input('customer', ''),
            'sale_date' => $request->input('sale_date', ''),
            'warehouse_id' => $request->input('warehouse_id', ''),
            'item_category' => json_encode($request->input('item_category', [])),
            'item_name' => json_encode($request->input('item_name', [])),
            'quantity' => json_encode($request->input('quantity', [])),
            'price' => json_encode($request->input('price', [])),
            'total' => json_encode($request->input('total', [])),
            'note' => $request->input('note', ''),
            'total_price' => $totalPrice,
            'discount' => $discount,
            'Payable_amount' => $totalPrice - $discount,
            'cash_received' => $cashReceived,
            'change_return' => $changeToReturn, // Fixed field name
        ];

        // Save sale data
        $sale = Sale::create($saleData);

        // Update Product Stock
        foreach ($request->input('item_name', []) as $key => $item_name) {
            $item_category = $request->input('item_category', [])[$key] ?? '';
            $quantity = $request->input('quantity', [])[$key] ?? 0;

            // Find the product by name and category and update stock
            $product = Product::where('product_name', $item_name)
                ->where('category', $item_category)
                ->first();

            if ($product) {
                $product->stock -= $quantity; // Decrease stock for sales
                $product->save();
            } else {
                // Handle case when product is not found (optional)
                return redirect()->back()->with('error', "Product $item_name in category $item_category not found.");
            }
        }
        // Redirect to receipt page for printing
        return redirect()->route('sale-receipt', ['id' => $sale->id])
            ->with('success', 'Sale recorded successfully. Redirecting to receipt...');
    }


    public function all_sales()
    {
        if (Auth::id()) {
            $userId = Auth::id();

            // Retrieve all Sales with their related Purchase data (including invoice_no)
            $Sales = Sale::get();
            // dd($Sales);
            return view('admin_panel.sale.sales', [
                'Sales' => $Sales,
            ]);
        } else {
            return redirect()->back();
        }
    }


    public function downloadInvoice($id)
    {
        // Fetch the sale data
        $sale = Sale::findOrFail($id);

        // Fetch the customer information based on the customer name in the sale
        $customer = Customer::where('customer_name', $sale->customer)->first();

        // If customer is not found, handle the case (optional)
        if (!$customer) {
            abort(404, 'Customer not found for this sale.');
        }

        // Load the view and pass both sale and customer data
        $pdf = Pdf::loadView('admin_panel.invoices.invoice', ['sale' => $sale, 'customer' => $customer]);

        // Download the PDF file
        return $pdf->download('invoice-' . $sale->invoice_no . '.pdf');
    }

    public function showReceipt($id)
    {
        // Fetch the sale data using the sale ID
        $sale = Sale::findOrFail($id);

        // Pass sale data to the receipt view
        return view('admin_panel.sale.receipt', compact('sale'));
    }
}
