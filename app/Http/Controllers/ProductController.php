<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Unit;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function all_product()
    {
        if (Auth::id()) {
            $userId = Auth::id();
            // $all_unit = Unit::where('admin_or_user_id', '=', $userId)->get();
            $all_product = Product::where('admin_or_user_id', '=', $userId)->get();
            return view('admin_panel.product.all_product', [
                // 'all_unit' => $all_unit
                'all_product' => $all_product,
            ]);
        } else {
            return redirect()->back();
        }
    }
    public function add_product()
    {
        if (Auth::id()) {
            $userId = Auth::id();
            $all_category = Category::where('admin_or_user_id', '=', $userId)->get();
            $all_brand = Brand::where('admin_or_user_id', '=', $userId)->get();
            $all_unit = Unit::where('admin_or_user_id', '=', $userId)->get();
            
            return view('admin_panel.product.add_product', [
                'all_category' => $all_category,
                'all_brand' => $all_brand,
                'all_unit' => $all_unit,
                
            ]);
        } else {
            return redirect()->back();
        }
    }
    public function store_product(Request $request)
    {
        if (Auth::id()) {
            $usertype = Auth()->user()->usertype;
            $userId = Auth::id();

             // Handle image upload
             $image = $request->file('image');
             $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
             $imagePath = 'product_images/' . $imageName;
 
             // Save the original image to the public directory
             $image->move(public_path('product_images'), $imageName);

            Product::create([
                'admin_or_user_id' => $userId,
                'product_name'     => $request->product_name,
                'category'         => $request->category,
                'brand'            => $request->brand,
                'sku'              => $request->sku,
                'unit'             => $request->unit,
                'alert_quantity'   => $request->alert_quantity,
                'note'             => $request->note,
                'image'            => $imageName,
                'created_at'       => Carbon::now(),
                'updated_at'       => Carbon::now(),
            ]);
            return redirect()->back()->with('unit-added', 'Unit Added Successfully');
        } else {
            return redirect()->back();
        }
    }
    public function edit_product($id)
    {
        if (Auth::id()) {
            $userId = Auth::id();
            $all_category = Category::where('admin_or_user_id', '=', $userId)->get();
            $all_brand = Brand::where('admin_or_user_id', '=', $userId)->get();
            $all_unit = Unit::where('admin_or_user_id', '=', $userId)->get();
            $product_details = Product::findOrFail($id);
            
            return view('admin_panel.product.edit_product', [
                'all_category' => $all_category,
                'all_brand' => $all_brand,
                'all_unit' => $all_unit,
                'product_details' => $product_details,
                
            ]);
        } else {
            return redirect()->back();
        }
    }
}
