<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
   
    public function category()
    {
        if (Auth::id()) {
            $userId = Auth::id();
            // dd($userId);
            $all_categories = Category::where('admin_or_user_id', '=', $userId)->get();
            return view('admin_panel.category.category', [
                'all_categories' => $all_categories
            ]);
        } else {
            return redirect()->back();
        }
    }
    public function store_category(Request $request)
    {
        if (Auth::id()) {
            $usertype = Auth()->user()->usertype;
            $userId = Auth::id();
            Category::create([
                'admin_or_user_id'    => $userId,
                'category'          => $request->category,
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now(),
            ]);
            return redirect()->back()->with('Category-added', 'Category Added Successfully');
        } else {
            return redirect()->back();
        }
    }
    public function update_category(Request $request, $id)
    {
        Category::where('id', $id)->update([
            // 'ProjectName'    => $request->ProjectName,
            // 'Projectyear' => $request->Projectyear,
            'updated_at' => Carbon::now(),
        ]);

        return Redirect()->back()->with('success-message-updte', 'Project Updated successfully!');
    }

}
