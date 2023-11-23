<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function add_customer(Request $request)
    {
        $pagename = 'Add customer';
        return view('admin_panel.customer.add_customer', [
            'pagename' => $pagename,
        ]);
    }
    public function all_customer(Request $request)
    {
        $pagename = 'All customer';
        return view('admin_panel.customer.all_customer', [
            'pagename' => $pagename,
        ]);
    }
    public function edit_customer(Request $request)
    {
        $pagename = 'Edit customer';
        return view('admin_panel.customer.edit_customer', [
            'pagename' => $pagename,
        ]);
    }
}
