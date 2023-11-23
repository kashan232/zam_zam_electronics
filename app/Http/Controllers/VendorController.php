<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VendorController extends Controller
{
    public function add_vendor(Request $request)
    {
        $pagename = 'Add Vendor';
        return view('admin_panel.vendor.add_vendor', [
            'pagename' => $pagename,
        ]);
    }
    public function all_vendor(Request $request)
    {
        $pagename = 'All Vendor';
        return view('admin_panel.vendor.all_vendor', [
            'pagename' => $pagename,
        ]);
    }
    public function edit_vendor(Request $request)
    {
        $pagename = 'edit Vendor';
        return view('admin_panel.vendor.edit_vendor', [
            'pagename' => $pagename,
        ]);
    }
}
