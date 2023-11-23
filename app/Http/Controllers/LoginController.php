<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {

    }
    public function dashboard(Request $request)
    {
        $pagename = 'dashboard';
        return view('admin_panel.dasboard', [
            'pagename' => $pagename,
        ]);
    }
}
