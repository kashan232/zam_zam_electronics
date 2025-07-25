<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Unit;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UnitController extends Controller
{
    public function unit()
    {
        if (Auth::id()) {
            $userId = Auth::id();

            $all_unit = Unit::where('admin_or_user_id', '=', $userId)
                ->get();
            $all_categories = Category::where('admin_or_user_id', '=', $userId)
                ->get();
            return view('admin_panel.unit.unit', [
                'all_unit' => $all_unit,
                'all_categories' => $all_categories
            ]);
        } else {
            return redirect()->back();
        }
    }

    public function store_unit(Request $request)
    {
        if (Auth::id()) {
            $userId = Auth::id();

            Unit::create([
                'admin_or_user_id' => $userId,
                'category_id'      => $request->category_id,
                'unit'             => $request->unit,
                'created_at'       => Carbon::now(),
                'updated_at'       => Carbon::now(),
            ]);

            return redirect()->back()->with('success', 'Unit Added Successfully');
        } else {
            return redirect()->back();
        }
    }


    public function update_unit(Request $request)
    {
        if (Auth::id()) {
            $update_id = $request->input('unit_id');
            Unit::where('id', $update_id)->update([
                'unit'        => $request->unit_name,
                'category_id' => $request->edit_category_id,
                'updated_at'  => Carbon::now(),
            ]);

            return redirect()->back()->with('success', 'Unit Updated Successfully');
        } else {
            return redirect()->back();
        }
    }
}
