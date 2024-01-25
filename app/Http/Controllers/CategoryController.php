<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;


class CategoryController extends Controller
{
    public function add_category(Request $request)
    {
        $pagename = 'Add Category';
        return view('admin_panel.category.add_category', [
            'pagename' => $pagename,
        ]);
    }
    public function store_category(Request $request)
    {
        $admin_id = $request->session()->get('admin_id');
        $category_img_for_db = "";
        $category_img = $request->file('category_image');
        if ($category_img != null) {
            $name_generate = hexdec(uniqid());
            $image_extension = strtolower($category_img->getClientOriginalExtension());
            $image_name =   $name_generate . "." . $image_extension;

            $upload_location = 'images/category_img/';
            $last_image_name = $upload_location . $image_name;
            $category_img_for_db = $image_name;
            Image::make($category_img)->resize(500, 500)->save($last_image_name);
        }
        Category::create([
            'admin_id'  => $admin_id,
            'category_name'    => $request->category_name,
            'category_code' => $request->category_code,
            'description'  => $request->description,
            'category_image'=> $category_img_for_db,
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now(),
        ]);
        return redirect()->back()->with('category-added', 'Category Added Successfully');
    }
    public function all_category(Request $request)
    {
        $pagename = 'Add Category';
        $admin_id = $request->session()->get('admin_id');
        $all_categories = Category::where('admin_id', '=', $admin_id)->get();
        return view('admin_panel.category.all_category', [
            'pagename' => $pagename,
            'all_categories' => $all_categories,
        ]);
    }
    public function edit_category(Request $request)
    {
        $pagename = 'Add Category';
        return view('admin_panel.category.edit_category', [
            'pagename' => $pagename,
        ]);
    }
}
