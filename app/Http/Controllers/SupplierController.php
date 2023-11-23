<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function add_supplier(Request $request)
    {
        $pagename = 'Add supplier';
        return view('admin_panel.supplier.add_supplier', [
            'pagename' => $pagename,
        ]);
    }
    public function all_supplier(Request $request)
    {
        $pagename = 'Add supplier';
        return view('admin_panel.supplier.all_supplier', [
            'pagename' => $pagename,
        ]);
    }
    public function edit_supplier(Request $request)
    {
        $pagename = 'Add supplier';
        return view('admin_panel.supplier.edit_supplier', [
            'pagename' => $pagename,
        ]);
    }
}
