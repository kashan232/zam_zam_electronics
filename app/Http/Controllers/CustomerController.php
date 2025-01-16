<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    public function customer()
    {
        if (Auth::id()) {
            $userId = Auth::id();
            // dd($userId);
            $Customers = Customer::all();
            return view('admin_panel.customers.customers', [
                'Customers' => $Customers
            ]);
        } else {
            return redirect()->back();
        }
    }

    public function store_customer(Request $request)
    {
        if (Auth::id()) {
            $usertype = Auth()->user()->usertype;
            $userId = Auth::id();
            Customer::create([
                'admin_or_user_id'    => $userId,
                'customer_name'          => $request->customer_name,
                'customer_email'          => $request->customer_email,
                'customer_phone'          => $request->customer_phone,
                'customer_address'          => $request->customer_address,
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now(),
            ]);
            return redirect()->back()->with('success', 'Customer has been  created successfully');
        } else {
            return redirect()->back();
        }
    }
    public function update_customer(Request $request)
    {
        if (Auth::id()) {
            $usertype = Auth()->user()->usertype;
            $userId = Auth::id();
            // dd($request);
            $update_id = $request->input('customer_id');
            $name = $request->input('customer_name');
            $email = $request->input('customer_email');
            $phone = $request->input('customer_phone');
            $address = $request->input('customer_address');

            Customer::where('id', $update_id)->update([
                'customer_name'          => $name,
                'customer_email'          => $email,
                'customer_phone'          => $phone,
                'customer_address'          => $address,
                'updated_at' => Carbon::now(),
            ]);
            return redirect()->back()->with('success', 'Customer Updated Successfully');
        } else {
            return redirect()->back();
        }
    }
}
