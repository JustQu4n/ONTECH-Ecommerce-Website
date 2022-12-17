<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use App\Models\Admin;
use App\Models\Role;
use Illuminate\Support\Facades\Session;
session_start();

class UserController extends Controller
{
   public function index(){
    $admin = Admin::with('role')->orderby('admin_id', 'desc')->paginate(5);
    return view('admin.user.manage-user')->with(compact('admin'));
   }
   public function add_user(){
    return view('admin.user.add-user');
   }
   public function save_user(Request $request){
    $data = $request->all();
    $admin = new Admin();
    $admin->admin_name = $data['user_name'];
    $admin->admin_email = $data['user_email'];
    $admin->admin_phone = $data['user_phone'];
    $admin->admin_password = md5($data['user_pass']);
    $get_img = $request->file('user_image');
       
    if ($get_img) {
        $get_name_image =$get_img->getClientOriginalName();
        $name_img= current(explode(',',$get_name_image));
        $new_image = $name_img;
        $get_img->move('upload/userImage/',$new_image);
        $admin->admin_image = $new_image;
        $admin->save();
        Session::put('message', 'Successfully');
        return Redirect::to('/manage-user');
    }
  

   }
   public function assign_role(Request $request){
        $data = $request->all();
        $user = Admin::where('admin_email',$data['admin_email'])->first();
        $user->role()->detach();
        if($request['author_role']){
           $user->role()->attach(Role::where('name','author')->first());     
        }
        if($request['staff_role']){
           $user->role()->attach(Role::where('name','staff')->first());     
        }
        if($request['admin_role']){
           $user->role()->attach(Role::where('name','admin')->first());     
        }
        return redirect()->back();
    }
}
