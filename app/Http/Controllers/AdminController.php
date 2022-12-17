<?php

namespace App\Http\Controllers;

use App\Models\AdminModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use App\Models\Customer;
use App\Models\Visitor;
use App\Models\Order;
use App\Models\OrderDetails;
use Illuminate\Support\Carbon;
use App\Models\Product;
use App\Models\Blog;

session_start();
class AdminController extends Controller
{  private $var_admin;
   public function __construct()
   {
       $this->var_admin= new AdminModel();
   }
   public function AuthLogin(){
      // $admin_id = Session::get('admin_id');
      $admin_id = Auth::id();
      if($admin_id){
           return Redirect::to('admin.dashboard');
      }else{
        return Redirect::to('login-auth')->send();
      }
    }
   public function index(){
    return view('adminlogin');
   }
   public function show_dashboard(Request $request){
      $this->AuthLogin();

       $user_ip_address = $request->ip();
       $early_last_month = Carbon::now('Asia/Ho_Chi_Minh')->subMonth()->startOfMonth()->toDateString();
       $end_of_last_month = Carbon::now('Asia/Ho_Chi_Minh')->subMonth()->endOfMonth()->toDateString();
       $early_this_month = Carbon::now('Asia/Ho_Chi_Minh')->startOfMonth()->toDateString();
       $oneyear = Carbon::now('Asia/Ho_Chi_Minh')->subDay(365)->toDateString();
       $now = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();

      //total last month
      $visitor_of_lastmonth = Visitor::whereBetween('date_vistior',[ $early_last_month , $end_of_last_month])->get();
      $visitor_of_last_month_count =  $visitor_of_lastmonth->count();
      //total this month
      $visitor_of_thismonth = Visitor::whereBetween('date_vistior',[ $early_this_month , $now])->get();
      $visitor_of_this_month_count =  $visitor_of_thismonth->count();

        //total one year
        $visitor_of_year = Visitor::whereBetween('date_vistior',[  $oneyear , $now])->get();
        $visitor_of_year_count =  $visitor_of_year->count();

         //total visitor
      $visitor = Visitor::all();
      $visitor_total = $visitor->count();
      
       $visitor_current = Visitor::where('ip_address', $user_ip_address);
      $visitor_count = $visitor_current->count();
      if( $visitor_count < 1 ){
        $visitor = new Visitor();
        $visitor->ip_address = $user_ip_address;
        $visitor->date_vistior = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
        $visitor->save();
        
      }
     
      //view_product
      $product_view = Product::orderBy('product_view','DESC' )->take(10)->get();
      //view_blog
      $blog_view = Blog::orderBy('blog_view','DESC' )->take(10)->get();

      //count_order
      $order = Order::all();
      $order_count = $order->count();
      //count_user
      $customer = Customer::all();
      $customer_count = $customer->count();

    
       return view('admin.dashboard',compact('visitor_total','visitor_count','visitor_of_year_count','visitor_of_this_month_count','visitor_of_last_month_count','product_view','blog_view','order_count','customer_count'));
    }
    public function dashboard(Request $request){
      $admin_email =$request->admin_email;
      $admin_password =md5($request->admin_password);
     $result= $this->var_admin->Insert_User( $admin_email, $admin_password);
      if($result){
          Session::put('admin_name',$result->admin_name);
          Session::put('admin_id',$result->admin_id);
         return  Redirect::to('/dashboard');
      }else{
          Session::put('message','tai khoan hoac mat khau bi sai!');
          return  Redirect::to('/admin');
      }
    }
    public function logout(){
      $this->AuthLogin();
      Session::put('admin_id',null);
      Session::put('admin_name',null);
      return  Redirect::to('/admin');
    }
   public function client_login(){
    return view('clientlogin');
   }
   public function view_profile_ad($profile_id){
    $proflie = Admin::where('admin_id', $profile_id);
     return view('admin.profile.view-profile',compact('proflie'));
  
   }
   public function edit_profile($admin_id){
   $proflie = Admin::where('admin_id', $admin_id);
    return view('admin.profile.edit-profile', compact('proflie'));
   }
   public function save_profile_ad(Request $request , $admin_id ){
     $data = array();
     $data['admin_email'] = $request->admin_email;
     $data['admin_name'] = $request->admin_name;
     $data['admin_password'] = md5($request->admin_newpass);
     $data['admin_phone'] = $request->admin_phone ;
     $get_img = $request->file('admin_image');
     if ($get_img) {
      $get_name_image =$get_img->getClientOriginalName();
      $name_img= current(explode(',',$get_name_image));
      $new_image = $name_img;
      $get_img->move('upload/userImage/',$new_image);
      $data['admin_image']= $new_image;
      $this->var_admin->Update_User($admin_id, $data);
      Session::put('message', 'Successfully');
      return Redirect::to('view-profile-ad');
  }
  $data['admin_image']= '';
  $this->var_admin->Update_User($admin_id ,$data);
  Session::put('message', 'Successfully');
  return Redirect::to('show_dashboard');
      
   }
   
   public function setting_home(){
    return view('admin.layout-web.setting-layout');
   }
}
