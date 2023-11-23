<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function add_category(Request $request)
    {
        $pagename = 'Add Category';
        return view('admin_panel.category.add_category', [
            'pagename' => $pagename,
        ]);
    }
    public function all_category(Request $request)
    {
        $pagename = 'Add Category';
        return view('admin_panel.category.all_category', [
            'pagename' => $pagename,
        ]);
    }
    public function edit_category(Request $request)
    {
        $pagename = 'Add Category';
        return view('admin_panel.category.edit_category', [
            'pagename' => $pagename,
        ]);
    }
}
