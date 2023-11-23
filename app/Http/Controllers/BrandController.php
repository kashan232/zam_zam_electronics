<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function add_brand(Request $request)
    {
        $pagename = 'Add Brand';
        return view('admin_panel.Brand.add_brand', [
            'pagename' => $pagename,
        ]);
    }
    public function all_brand(Request $request)
    {
        $pagename = 'ALl Brand';
        return view('admin_panel.Brand.all_brand', [
            'pagename' => $pagename,
        ]);
    }
    public function edit_brand(Request $request)
    {
        $pagename = 'Edit Brand';
        return view('admin_panel.Brand.edit_brand', [
            'pagename' => $pagename,
        ]);
    }
}
