<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class CategoryModel extends Model
{
    use HasFactory;
    static function Getcategory(){
        $cate_product = DB::table('tbl_category_product')->where('category_status','1')->orderBy('category_id','asc')->get();
        return $cate_product;
    }
    static function Save_category_product($data){
     DB::table('tbl_category_product')->insert($data);
    }
    static function Show_all_category(){
        $all_category_product= DB::table('tbl_category_product')->get();
        return $all_category_product;
    }
    static function Change_status_unactive($category_product_id){
        DB::table('tbl_category_product')->where('category_id', $category_product_id)->update(['category_status' => 1]);
    }
    static function Change_status_active($category_product_id){
        DB::table('tbl_category_product')->where('category_id', $category_product_id)->update(['category_status' => 0]);
    }
    static function Edit_category($category_product_id){
        $edit_category_product =DB::table('tbl_category_product')->where('category_id', $category_product_id)->get();
        return $edit_category_product;
    }
    static function Update_category($category_product_id, $data){
        DB::table('tbl_category_product')->where('category_id', $category_product_id)->update($data);
    }
    static function Delete_category($category_product_id){
        DB::table('tbl_category_product')->where('category_id', $category_product_id)->delete();
    }
    static function Get_Category_ById($category_id){
        $category_by_id = DB::table('tbl_product')
        ->join('tbl_category_product','tbl_product.category_id','=','tbl_category_product.category_id')
        ->where('tbl_product.category_id',$category_id)
        ->paginate(10);
        return $category_by_id;
    }
}
