<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
   
    public function category()
    {
        return view('admin_panel.category.category');
    }
}
