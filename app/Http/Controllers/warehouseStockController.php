<?php

namespace App\Http\Controllers;

use App\Models\WarehouseStock;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class warehouseStockController extends Controller
{
    public function warehouse_stock()
    {
        if (Auth::id()) {
            $userId = Auth::id();
            // dd($userId);
            $WarehouseStock = WarehouseStock::get();
            // dd($Purchases);
            return view('admin_panel.warehousestock.add_warehouse_stock', [
                // 'WarehouseStock' => $WarehouseStock,
            ]);
        } else {
            return redirect()->back();
        }
    }
}
