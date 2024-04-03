<?php

namespace App\Http\Controllers;

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
            $all_unit = Unit::where('admin_or_user_id', '=', $userId)->get();
            return view('admin_panel.unit.unit', [
                'all_unit' => $all_unit
            ]);
        } else {
            return redirect()->back();
        }
    }
    public function store_unit(Request $request)
    {
        if (Auth::id()) {
            $usertype = Auth()->user()->usertype;
            $userId = Auth::id();
            Unit::create([
                'admin_or_user_id'    => $userId,
                'unit'          => $request->unit,
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now(),
            ]);
            return redirect()->back()->with('unit-added', 'Unit Added Successfully');
        } else {
            return redirect()->back();
        }
    }
}
