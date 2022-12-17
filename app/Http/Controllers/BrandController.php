<?php

namespace App\Http\Controllers;

use App\Models\BrandModel;
use App\Models\CategoryModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
session_start();
class BrandController extends Controller
{
   private $var_brand;
   private $var_category;
   public function __construct()
   {
       $this->var_brand=new BrandModel();
       $this->var_category = new CategoryModel();
   }
   public function AuthLogin(){
    $admin_id = Auth::id();
    if($admin_id){
         return Redirect::to('admin.dashboard');
    }else{
      return Redirect::to('login-auth')->send();
    }
  }
    public function add_brand(){
        $this->AuthLogin();
        return view('admin.brand.add-brand');
     }
     public function all_brand(){
        $this->AuthLogin();
      $show_all_products= $this->var_brand->Show_all_brand();
        return view('admin.brand.all-brand')->with('show_all_products',$show_all_products);
     }
     public function save_brand(Request $request){
      $data = array();
      $data['brand_name'] = $request->brand_product_name;
      $get_img = $request->file('brand_product_image');
       
      if ($get_img) {
          $get_name_image =$get_img->getClientOriginalName();
          $name_img= current(explode(',',$get_name_image));
          $new_image = $name_img;
          $get_img->move('upload/brandImage/',$new_image);
          $data['brand_image']= $new_image;
          $data['brand_status'] = $request->brand_product_status;
          $this->var_brand->Save_brand_product($data);
          Session::put('message', 'Successfully');
          return Redirect::to('all-brand');
      }
      $data['brand_image']= '';
      $data['brand_status'] = $request->brand_product_status;
      $this->var_brand->Save_brand_product($data);
      Session::put('message', 'Successfully');
      return Redirect::to('all-brand');
     }
     public function unactive_brand_product($brand_product_id){
      $this->var_brand->Change_status_unactive($brand_product_id);
      Session::put('message', 'Successfully');
      return Redirect::to('/all-brand');
     }
     public function active_brand_product($brand_product_id){
      $this->var_brand->Change_status_active($brand_product_id);
      Session::put('message', 'Successfully');
      return Redirect::to('/all-brand');
     }
     public function edit_brand($brand_product_id){
        $this->AuthLogin();
     $edit_brand_product = $this->var_brand->Edit_brand($brand_product_id);
      $manager_brand_product = view('admin.brand.edit-brand')->with('edit_brand_product',$edit_brand_product);
       return view('layout.adminlayout')->with('admin.brand.edit-brand',$manager_brand_product);

     }
     public function update_brand(Request $request,$brand_product_id){
      $data = array();
      $data['brand_name'] = $request->brand_product_name;
      $get_img = $request->file('brand_product_image');
       
      if ($get_img) {
          $get_name_image =$get_img->getClientOriginalName();
          $name_img= current(explode(',',$get_name_image));
          $new_image = $name_img;
          $get_img->move('upload/brandImage/',$new_image);
          $data['brand_image']= $new_image;
          $this->var_brand->Update_brand($brand_product_id, $data);
          Session::put('message', 'Successfully');
          return Redirect::to('all-brand');
      }
      $data['brand_image']= '';
      $this->var_brand->Update_brand($brand_product_id, $data);
      Session::put('message', 'Successfully');
      return Redirect::to('all-brand');

     }
     public function delete_brand($brand_product_id) {
      $this->var_brand->Delete_brand($brand_product_id);
      Session::put('message','Xoa sản phẩm thành công!');
      return Redirect::to('all-brand');
     }
     public function show_brand_home($brand_id, Request $request) {
      $cate_product = $this->var_category->Getcategory();
     $brand_product =  $this->var_brand->GetBrand();
      $brand_by_id = $this->var_brand->Get_Brand_ById($brand_id);
      $url_canonical = $request->url();
      // $brand_title_name = DB::table('tbl_brand_product')->where('tbl_brand_product.brand_id',$brand_id)->limit(1)->get();
  return view('client.shop.shop-by-brand')
  ->with('brands', $brand_product)
  ->with('category', $cate_product)
  ->with('brand_by_id', $brand_by_id)
  ->with('url_canonical',$url_canonical);
  }
  
}
