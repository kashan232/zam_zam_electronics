<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UnitController extends Controller
{
    public function add_unit(Request $request)
    {
        $pagename = 'Add Unit';
        return view('admin_panel.Unit.add_unit', [
            'pagename' => $pagename,
        ]);
    }
    public function all_unit(Request $request)
    {
        $pagename = 'ALL Unit';
        return view('admin_panel.Unit.all_unit', [
            'pagename' => $pagename,
        ]);
    }
    public function edit_unit(Request $request)
    {
        $pagename = 'Edit Unit';
        return view('admin_panel.Unit.edit_unit', [
            'pagename' => $pagename,
        ]);
    }
}
