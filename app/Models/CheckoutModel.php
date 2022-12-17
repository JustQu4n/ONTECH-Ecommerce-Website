<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class CheckoutModel extends Model
{
    use HasFactory;
    static function Insert_Customer($data){
        $insertcustomer = DB::table('tbl_customer')->insertGetId($data);
        return $insertcustomer;
    }
    static function Insert_Shipping($data){
        $insertcustomer = DB::table('tbl_shipping')->insertGetId($data);
        return $insertcustomer;
    }
    static  function Seclect_Customer($email,$passworsd){
      $result  =  DB::table('tbl_customer')->where('customer_email',$email)->where('customer_password',$passworsd)->first();
      return $result;
    }
    // static function Insert_Payment($data){
    //     $insertpayment = DB::table('tbl_payment')->insertGetId([$data]);
    //     return $insertpayment;
    // }
    // static function Insert_Order($data){
    //     $insertorder = DB::table('tbl_order')->insertGetId([$data]);
    //     return $insertorder;
    // }
    // static function Insert_Order_Detail($data){
    //     $insertod = DB::table('tbl_order_detail')->insert($data);
    //     return $insertod;
    // }
    static function Show_all_order(){
        $all_product =  DB::table('tbl_order')
        ->join('tbl_customer','tbl_order.customer_id', '=','tbl_customer.customer_id')
         ->select('tbl_order.*','tbl_customer.customer_name')
        ->orderBy('tbl_order.order_id','desc')
        ->get();
        return $all_product;
    }
    static function Show_detail_order_by_id(){
        $all_product =  DB::table('tbl_order')
        ->join('tbl_customer','tbl_order.customer_id', '=','tbl_customer.customer_id')
        ->join('tbl_shipping','tbl_order.shipping_id', '=','tbl_shipping.shipping_id')
        ->join('tbl_order_detail','tbl_order.order_id', '=','tbl_order_detail.order_id')
         ->select('tbl_order.*','tbl_customer.*','tbl_shipping.*','tbl_order_detail.*')
        ->first();
        return $all_product;
    }
}
