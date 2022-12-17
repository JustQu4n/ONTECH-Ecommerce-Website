<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ProductModel extends Model
{
    use HasFactory;
    public function Getcategory(){
        $cate_product = DB::table('tbl_category_product')->orderBy('category_id','desc')->get();
        return $cate_product;
    }
    public function Getbrand(){
        $brand_product = DB::table('tbl_brand_product')->orderBy('brand_id','desc')->get();
        return $brand_product;
    }
    public function Save_product($data){
        DB::table('tbl_product')->insert($data);
    }
    public function Show_all_product(){
        $all_product =  DB::table('tbl_product')
        ->join('tbl_category_product','tbl_category_product.category_id', '=','tbl_product.category_id')
        ->join('tbl_brand_product','tbl_brand_product.brand_id', '=','tbl_product.brand_id')
        ->orderBy('tbl_product.product_id','desc')
        ->get();
        return $all_product;
    }
    
    public function Active_status($product_id){
        DB::table('tbl_product')->where('product_id', $product_id)->update(['product_status' => 1]);
    }
    public function Unactive_status($product_id){
        DB::table('tbl_product')->where('product_id', $product_id)->update(['product_status' => 0]);
        
    }
    public function Edit_product($product_id){
         $edit_product =DB::table('tbl_product')->where('product_id', $product_id)->get();
         return $edit_product;
    }
    public function Update_product($product_id,$data){
        DB::table('tbl_product')->where('product_id', $product_id)->update($data);
    }
    public function Delete_product($product_id){
        DB::table('tbl_product')->where('product_id', $product_id)->delete();
    }
    public function Details_product($product_id){
        $detail_product = DB::table('tbl_product')
   ->join('tbl_category_product','tbl_product.category_id','=','tbl_category_product.category_id')
   ->join('tbl_brand_product','tbl_product.brand_id','=','tbl_brand_product.brand_id')
   ->where('tbl_product.product_id',$product_id)->get();
   return $detail_product;
    }
    public function Relate_product($category_id,$product_id){
        $related_product = DB::table('tbl_product')
        ->join('tbl_category_product','tbl_product.category_id','=','tbl_category_product.category_id')
        ->join('tbl_brand_product','tbl_product.brand_id','=','tbl_brand_product.brand_id')
        ->where('tbl_category_product.category_id',$category_id)->whereNotIn('tbl_product.product_id',[$product_id])->get();
        return $related_product;
    }
   
}
