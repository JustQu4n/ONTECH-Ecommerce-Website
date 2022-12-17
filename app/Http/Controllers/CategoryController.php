<?php

namespace App\Http\Controllers;

use App\Models\BrandModel;
use App\Models\CategoryModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
session_start();

class CategoryController extends Controller
{
   private $var_category;
   private $var_brand;
   public function __construct()
   {
       $this->var_category=new CategoryModel();
       $this->var_brand =new BrandModel();
   }
   public function AuthLogin(){
    $admin_id =Auth::id();
    if($admin_id){
         return Redirect::to('admin.dashboard');
    }else{
      return Redirect::to('adminlogin')->send();
    }
  }
    public function add_category(){
        $this->AuthLogin();
        return view('admin.category.add-category');
     }
     public function all_category(){
        $this->AuthLogin();
      $show_all_products= $this->var_category->Show_all_category();
        return view('admin.category.all-category')->with('show_all_products',$show_all_products);
     }
     public function save_category(Request $request){
      $request->validate(
        [
            'category_product_name' =>'required|min:5',
            'category_product_image'=>'required',
            
        ],
        [
            'category_product_name.required' =>'Tên danh mục sản phẩm bắt buộc ',
            'category_product_image.required' =>'Hình ảnh danh mục sản phẩm bắt buộc ',
           
        ]
    );

      $data = array();
      $data['category_name'] = $request->category_product_name;
      $get_img = $request->file('category_product_image');
       
      if ($get_img) {
          $get_name_image =$get_img->getClientOriginalName();
          $name_img= current(explode(',',$get_name_image));
          $new_image = $name_img;
          $get_img->move('upload/categoryImage/',$new_image);
          $data['category_image']= $new_image;
          $data['category_status'] = $request->category_product_status;
          $this->var_category->Save_category_product($data);
          Session::put('message', 'Successfully');
          return Redirect::to('all-category');
      }
      $data['category_image']= '';
      $data['category_status'] = $request->category_product_status;
      $this->var_category->Save_category_product($data);
      Session::put('message', 'Successfully');
      return Redirect::to('all-category');
     }
     public function unactive_category_product($category_product_id){
      $this->var_category->Change_status_unactive($category_product_id);
      Session::put('message', 'Successfully');
      return Redirect::to('/all-category');
     }
     public function active_category_product($category_product_id){
      $this->var_category->Change_status_active($category_product_id);
      Session::put('message', 'Successfully');
      return Redirect::to('/all-category');
     }
     public function edit_category($category_product_id){
     $edit_category_product = $this->var_category->Edit_category($category_product_id);
      $manager_category_product = view('admin.category.edit-category')->with('edit_category_product',$edit_category_product);
       return view('layout.adminlayout')->with('admin.category.edit-category',$manager_category_product);

     }
     public function update_category(Request $request,$category_product_id){
      $data = array();
      $data['category_name'] = $request->category_product_name;
      $get_img = $request->file('category_product_image');
       
      if ($get_img) {
          $get_name_image =$get_img->getClientOriginalName();
          $name_img= current(explode(',',$get_name_image));
          $new_image = $name_img;
          $get_img->move('upload/categoryImage/',$new_image);
          $data['category_image']= $new_image;
          $this->var_category->Update_category($category_product_id, $data);
          Session::put('message', 'Successfully');
          return Redirect::to('all-category');
      }
      $data['category_image']= '';
      $this->var_category->Update_category($category_product_id, $data);
      Session::put('message', 'Successfully');
      Session::put('cate_id', $category_product_id);
      return Redirect::to('all-category');

     }
     public function delete_category($category_product_id) {
      $this->var_category->Delete_category($category_product_id);
      Session::put('message','Xoa sản phẩm thành công!');
      return Redirect::to('all-category');
     }

     public function show_category_home($category_id ,Request $request) {
      $category_product= $this->var_category->Getcategory();
      $brand_product= $this->var_brand->GetBrand();
      $category_by_id =$this->var_category->Get_Category_ById($category_id);
      $url_canonical = $request->url();
      // $category_title_name = DB::table('tbl_category_product')->where('tbl_category_product.category_id',$category_id)->limit(1)->get();
      return view('client.shop.shop-by-category')
      ->with('brands', $brand_product)
      ->with('category', $category_product)
      ->with('category_by_id', $category_by_id)
      ->with('url_canonical',$url_canonical);

    //   $cate_product = DB::table('tbl_category_product')->where('category_status','1')->orderBy('category_id','desc')->get();
    //   $brand_product = DB::table('tbl_brand_product')->where('brand_status','1')->orderBy('brand_id','desc')->get();
    //      $category_by_id = DB::table('tbl_product')
    //      ->join('tbl_category_product','tbl_product.category_id','=','tbl_category_product.category_id')
    //      ->where('tbl_product.category_id',$category_id)
    //      ->get();
    //      $category_title_name = DB::table('tbl_category_product')->where('tbl_category_product.category_id',$category_id)->limit(1)->get();
    // return view('page.category.show_category')
    // ->with('brands', $brand_product)
    // ->with('category', $cate_product)
    // ->with('category_by_id', $category_by_id)
    // ->with('category_title', $category_title_name);
}
}
