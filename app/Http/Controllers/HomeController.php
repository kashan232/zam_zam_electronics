<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    public function home()
    {
        if (Auth::id()) {
            $usertype = Auth()->user()->usertype;

            if ($usertype == 'user') {
                return view('user_panel.user_dashboard');
            } else if ($usertype == 'admin') {
                $userId = Auth::id();
                $totalPurchasesPrice = \App\Models\Purchase::sum('total_price');
                $totalPurchaseReturnsPrice = \App\Models\PurchaseReturn::sum('total_price');
                $all_product = Product::where('admin_or_user_id', '=', $userId)->get();
                // dd($all_product);

                $categories = DB::table('categories')->count();
                $products = DB::table('products')->count();
                $suppliers = DB::table('suppliers')->count();
                $customers = DB::table('customers')->count();


                return view('admin_panel.admin_dashboard', compact('totalPurchasesPrice', 'totalPurchaseReturnsPrice','all_product','categories','products','suppliers','customers'));
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
}
