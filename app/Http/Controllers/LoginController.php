<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryModel;
use App\Models\BrandModel;
use App\Models\CheckoutModel;
use App\Models\Customer;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class LoginController extends Controller
{
    public function login_client(Request $request)
    {
        $cate_product = CategoryModel::Getcategory();
        $brand_product = BrandModel::Getbrand();
        $url_canonical = $request->url();
        return view('client.login.login')->with('brand', $brand_product)->with('category', $cate_product)->with('url_canonical', $url_canonical);
    }
    public function register_client(Request $request)
    {
        $cate_product = CategoryModel::Getcategory();
        $brand_product = BrandModel::Getbrand();
        $url_canonical = $request->url();
        return view('client.login.register')->with('brand', $brand_product)->with('category', $cate_product)->with('url_canonical', $url_canonical);
    }
    public function add_customer(Request $request)
    {
        $data = array();
        $data['customer_name'] = $request->c_name;
        $data['customer_email'] = $request->c_email;
        $data['customer_password'] = md5($request->c_password);
        $data['customer_phone'] = $request->c_sdt;
        // echo '<pre>';print_r($data);echo '</pre>';
        $insert_customer = CheckoutModel::Insert_Customer($data);
        // $insertcustomer = DB::table('tbl_customer')->insertGetId($data);
        Session::put('customer_id', $request->customer_id);
        Session::put('customer_name', $request->customer_name);

        return Redirect::to('login-client');
    }
    public function view_profile(Request $request, $customer_id)
    {
        $url_canonical = $request->url();
        $cate_product = CategoryModel::Getcategory();
        $brand_product = BrandModel::Getbrand();
        return view('client.profile-client.view-profile')->with('brand', $brand_product)->with('category', $cate_product)->with('url_canonical', $url_canonical);
    }
 
    public function logout_client()
    {
        // Session::flush();
       Session::flush();
        return Redirect::to('/');
    }
    public function login_customer(Request $request)
    {
        $email = $request->email_acc;
        $password = md5($request->pass_acc);
        $result = CheckoutModel::Seclect_Customer($email, $password);
        if ($result) {
            Session::put('customer_id', $result->customer_id);
            Session::put('customer_name', $result->customer_name);
            Session::put('customer_email', $result->customer_email);
            Session::put('customer_phone', $result->customer_phone);
            Session::put('customer_address', $result->customer_address);
           Session::put('customer_image', $result->customer_image);
        
            return Redirect::to('/');
        } else {
            Session::put('message', 'tai khoan hoac mat khau bi sai!');
            return Redirect::to('/');
        }
    }
    public function update_infor_client(Request $request, $customer_id){
        $client = Customer::find($customer_id);
        $data = array();
        $client->customer_name = $request->customer_name;
        $client->customer_email = $request->customer_email;
        $client->customer_phone = $request->customer_phone;
        $client->customer_address = $request->customer_address;
        $client->customer_fb = $request->customer_facebook;
        $client->save($data);
        return Redirect::to('manage-profile-client/'.$customer_id); 
        Session::put('message', 'Thay đổi tài khoản thành công');
   
    }
    public function update_avatar_client(Request $request, $customer_id){
        $client = Customer::find($customer_id);
        $data = array();
        $get_img = $request->file('client_avatar');
        if ($get_img) {
            $get_name_image =$get_img->getClientOriginalName();
            $name_img= current(explode(',',$get_name_image));
            $new_image = $name_img;
            $get_img->move('upload/clientImage/',$new_image);
            $client->customer_image = $new_image;
            $client->save($data);
            return Redirect::to('manage-profile-client/'.$customer_id); 
            Session::put('message', 'Thay đổi tài khoản thành công');
        }
         $client->customer_image ='';
         $client->save($data);
        return Redirect::to('manage-profile-client/'.$customer_id); 
        Session::put('message', 'Thay đổi tài khoản thành công');
    }
    public function update_password_client(Request $request, $customer_id){
        $client = Customer::find($customer_id);
        $client->customer_password =  md5($request->customer_password);
        $client->save();
        return Redirect::to('manage-profile-client/'.$customer_id); 
        Session::put('message', 'Thay đổi tài khoản thành công');
    }
}
