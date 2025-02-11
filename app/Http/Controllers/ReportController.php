<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    public function sale_report()
    {
        if (Auth::id()) {
            $userId = Auth::id();
            // dd($userId);
            return view('admin_panel.reporting.sale-report', []);
        } else {
            return redirect()->back();
        }
    }

    public function filterSales(Request $request)
    {
        $start_date = $request->start_date;
        $end_date = $request->end_date;

        $sales = Sale::whereBetween('sale_date', [$start_date, $end_date])
            ->orderBy('sale_date', 'asc')
            ->get();

        return response()->json($sales);
    }
}
