<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function add_sales(Request $request)
    {
        $pagename = 'Add Sales';
        return view('admin_panel.sales.add_sales', [
            'pagename' => $pagename,
        ]);
    }
    public function all_sales(Request $request)
    {
        $pagename = 'All sales';
        return view('admin_panel.sales.all_sales', [
            'pagename' => $pagename,
        ]);
    }
    public function edit_sales(Request $request)
    {
        $pagename = 'Edit sales';
        return view('admin_panel.sales.add_sales', [
            'pagename' => $pagename,
        ]);
    }
}
