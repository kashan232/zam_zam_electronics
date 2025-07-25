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

            $all_product = Product::with(['category', 'unit'])
                ->where('admin_or_user_id', $userId)
                ->get();

            $categories = Category::all(); // Add this
            $units = Unit::all(); // Add this

            return view('admin_panel.product.all_product', [
                'all_product' => $all_product,
                'categories' => $categories,
                'units' => $units,
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
            $all_unit = Unit::where('admin_or_user_id', '=', $userId)->get();

            return view('admin_panel.product.add_product', [
                'all_category' => $all_category,
                'all_unit' => $all_unit,

            ]);
        } else {
            return redirect()->back();
        }
    }



    public function getUnitsByCategory(Request $request)
    {
        $units = Unit::where('category_id', $request->category_id)->get();
        return response()->json(['units' => $units]);
    }

    public function getUnitsByproduct($categoryId)
    {
        $units = Unit::where('category_id', $categoryId)->get();
        return response()->json($units);
    }


    public function storeMultipleProducts(Request $request)
    {
        $category_id = $request->input('category_id');
        $unit_id = $request->input('unit_id');
        $products = $request->input('products');

        $userId = Auth::id();

        foreach ($products as $product) {
            Product::create([
                'admin_or_user_id' => $userId,
                'category_id' => $category_id,
                'unit_id'     => $unit_id,
                'product_name' => $product['name'],
                'retail_price' => $product['price'],
                'created_at'  => now(),
                'updated_at'  => now(),
            ]);
        }

        return redirect()->back()->with('success', 'Products Added Successfully!');
    }


    public function update(Request $request)
    {
        $product = Product::findOrFail($request->product_id);
        $product->product_name = $request->product_name;
        $product->category_id = $request->category_id;
        $product->unit_id = $request->unit_id;
        $product->retail_price = $request->retail_price;
        $product->save();

        return back()->with('success', 'Product updated successfully.');
    }

    public function getProductDetails($productName)
    {
        $product = Product::where('product_name', $productName)->first();
        if ($product) {
            return response()->json([
                'retail_price' => $product->retail_price,
                'stock' => $product->stock,
            ]);
        }
        return response()->json(['message' => 'Product not found'], 404);
    }

    public function searchProducts(Request $request)
    {
        $query = $request->get('q');

        // Perform a search based on the product name
        $products = Product::where('product_name', 'like', '%' . $query . '%')
            ->get(['id', 'category', 'product_name', 'retail_price']);

        return response()->json($products);
    }

    public function product_alerts()
    {
        if (Auth::id()) {
            $userId = Auth::id();
            $lowStockProducts = Product::whereRaw('CAST(stock AS UNSIGNED) <= CAST(alert_quantity AS UNSIGNED)')->get();
            // dd($lowStockProducts);
            return view('admin_panel.product.product_alerts', [
                'lowStockProducts' => $lowStockProducts,
            ]);
        } else {
            return redirect()->back();
        }
    }
    public function delete_product(Request $request)
    {
        if (Auth::id()) {
            $product = Product::find($request->id);

            if ($product) {
                $product->delete();
                return response()->json(['success' => true, 'message' => 'Product deleted successfully.']);
            } else {
                return response()->json(['success' => false, 'message' => 'Product not found.']);
            }
        }
        return response()->json(['success' => false, 'message' => 'Unauthorized request.']);
    }
}
