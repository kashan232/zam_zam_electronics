<?php

namespace App\Http\Controllers;

use App\Models\CashTransfer;
use App\Models\Category;
use App\Models\Customer;
use App\Models\Product;
use App\Models\Sale;
use App\Models\Warehouse;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class HomeController extends Controller
{
    public function home()
    {
        if (Auth::id()) {
            $usertype = Auth()->user()->usertype;

            if ($usertype == 'staff') {
                $userId = Auth::id();

                // Get today's sales
                $today = now()->toDateString();
                $todaySalesTotal = Sale::where('userid', $userId)
                    ->whereDate('created_at', $today)
                    ->sum('Payable_amount');

                // Get transferred total for today
                $alreadyTransferred = CashTransfer::where('staff_id', $userId)
                    ->whereDate('transfer_date', $today)
                    ->sum('amount');

                $transferableAmount = $todaySalesTotal - $alreadyTransferred;

                return view('user_panel.user_dashboard', compact('transferableAmount'));
            } else if ($usertype == 'admin') {
                $userId = Auth::id();

                $all_product = Product::where('admin_or_user_id', '=', $userId)->get();

                $totalStockValue = $all_product->sum(function ($product) {
                    return $product->stock * $product->wholesale_price;
                });

                foreach ($all_product as $product) {
                    $product->total_stock_value = $product->stock * $product->wholesale_price;
                }

                $categories = DB::table('categories')->count();
                $products = DB::table('products')->count();
                $suppliers = DB::table('suppliers')->count();
                $customers = DB::table('customers')->count();
                $totalsales = DB::table('sales')->sum('Payable_amount');

                // 💰 Today's Cash Box
                $cashBox = DB::table('sales')
                    ->whereDate('created_at', Carbon::today())
                    ->sum('Payable_amount');

                // 📦 Today’s Staff Cash Transfers
                $todayCashTransfers = DB::table('cash_transfers')
                    ->whereDate('transfer_date', Carbon::today())
                    ->sum('amount');

               $staffTransfers = CashTransfer::latest()
                    ->limit(10)
                    ->get();

                return view('admin_panel.admin_dashboard', compact(
                    'all_product',
                    'totalStockValue',
                    'categories',
                    'products',
                    'suppliers',
                    'customers',
                    'totalsales',
                    'cashBox',
                    'todayCashTransfers',
                    'staffTransfers' // 👈 pass to blade
                ));
            }
        } else {
            return Redirect()->route('login');
        }
    }

    public function adminpage()
    {
        return view('admin_panel.admin_page');
    }

    public function dashboard()
    {
        return view('admin_panel.dashboard');
    }

    public function Admin_Change_Password()
    {
        if (Auth::id()) {
            $userId = Auth::id();
            return view('admin_panel.change_password', []);
        } else {
            return redirect()->back();
        }
    }

    public function updte_change_Password(Request $request)
    {
        if (Auth::id()) {
            // dd($request);
            // Validate the form data
            $request->validate([
                'old_password' => 'required',
                'new_password' => 'required|min:8',
                'retype_new_password' => 'required|same:new_password'
            ]);

            // Get the current authenticated user
            $user = Auth::user();
            // dd($user);
            // Check if the old password matches
            if (!Hash::check($request->input('old_password'), $user->password)) {
                return redirect()->back()->withErrors(['old_password' => 'Old password is incorrect']);
            }

            // Check if the user is an admin
            if ($user->usertype !== 'admin') {
                return redirect()->back()->withErrors(['error' => 'Unauthorized action']);
            }

            // Update the password
            $user->password = Hash::make($request->input('new_password'));
            $user->save();

            // Add a success message to the session
            Session::flash('success', 'Password changed successfully');

            // Redirect back with success message
            return redirect()->back();
        } else {
            return redirect()->back();
        }
    }

    // Staff work 

    public function getProductsByCategory(Request $request)
    {
        $categoryname = $request->categoryname;
        // dd($categoryname);
        // Fetch products based on the selected category
        $products = Product::where('category', $categoryname)->get();
        // dd($products);
        // Return JSON response
        return response()->json($products);
    }

    public function getProductByBarcode(Request $request)
    {
        $barcode = $request->query('barcode'); // Get barcode from query parameters
        $product = Product::where('barcode_number', $barcode)->first();

        if ($product) {
            return response()->json($product);
        } else {
            return response()->json(null, 404);
        }
    }

    public function transferCash(Request $request)
    {
        $userId = Auth::id();
        $amount = $request->amount;

        CashTransfer::create([
            'staff_id' => $userId,
            'amount' => $amount,
            'transfer_date' => now()->toDateString(),
        ]);

        return redirect()->back()->with('success', 'Amount successfully transferred to admin.');
    }

    public function cash_transfser(Request $request)
    {
        
        $staffTransfers = CashTransfer::latest()
            ->get();

        return view('admin_panel.cash_transfer', compact(
            'staffTransfers'
        ));
    }
}
