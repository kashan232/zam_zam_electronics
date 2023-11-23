<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function add_user(Request $request)
    {
        $pagename = 'dashboard';
        return view('admin_panel.user.add_user', [
            'pagename' => $pagename,
        ]);
    }
    public function all_user(Request $request)
    {
        $pagename = 'dashboard';
        return view('admin_panel.user.all_user', [
            'pagename' => $pagename,
        ]);
    }
    public function edit_user(Request $request)
    {
        $pagename = 'dashboard';
        return view('admin_panel.user.edit_user', [
            'pagename' => $pagename,
        ]);
    }
}
