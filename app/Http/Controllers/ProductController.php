<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function add_product(Request $request)
    {
        $pagename = 'Add Product';
        return view('admin_panel.product.add_product', [
            'pagename' => $pagename,
        ]);
    }
    public function all_product(Request $request)
    {
        $pagename = 'All Product';
        return view('admin_panel.product.all_product', [
            'pagename' => $pagename,
        ]);
    }
    public function edit_product(Request $request)
    {
        $pagename = 'Edit Product';
        return view('admin_panel.product.edit_product', [
            'pagename' => $pagename,
        ]);
    }
}
