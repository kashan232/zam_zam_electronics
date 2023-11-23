<?php

namespace App\Http\Controllers;

use App\Models\PosUser;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

class UserController extends Controller
{
    public function add_user(Request $request)
    {
        $pagename = 'dashboard';
        $admin_id = $request->session()->get('admin_id');
        return view('admin_panel.user.add_user', [
            'pagename' => $pagename,
        ]);
    }
    public function store_user(Request $request)
    {
        $admin_id = $request->session()->get('admin_id');
        $user_img_for_db = "";
        $user_img = $request->file('user_image');
        if ($user_img != null) {
            $name_generate = hexdec(uniqid());
            $image_extension = strtolower($user_img->getClientOriginalExtension());
            $image_name =   $name_generate . "." . $image_extension;

            $upload_location = 'images/user_img/';
            $last_image_name = $upload_location . $image_name;
            $user_img_for_db = $image_name;
            Image::make($user_img)->resize(500, 500)->save($last_image_name);
        }
        PosUser::create([
            'admin_id'  => $admin_id,
            'f_name'    => $request->f_name,
            'l_name'    => $request->l_name,
            'user_name' => $request->user_name,
            'password'  => $request->password,
            'phone'     => $request->phone,
            'email'     => $request->email,
            'role'      => $request->role,
            'city'      => $request->city,
            'user_image'=> $user_img_for_db,
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now(),
        ]);
        return redirect()->back()->with('user-added', 'User Added Successfully');
    }
    public function all_user(Request $request)
    {
        $pagename = 'All User';
        $admin_id = $request->session()->get('admin_id');
        $all_users = PosUser::where('admin_id', '=', $admin_id)->get();
        return view('admin_panel.user.all_user', [
            'pagename'  => $pagename,
            'all_users' => $all_users,
        ]);
    }
    public function edit_user(Request $request)
    {
        $pagename = 'dashboard';
        return view('admin_panel.user.edit_user', [
            'pagename' => $pagename,
        ]);
    }
}
