<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Discount extends Model
{
    use HasFactory;

    static function getDiscount($code, $date) { 
         
        $discount = DB::table('tbl_discount') -> select('percent_dis') -> where('dis_code', $code) -> where('dis_status', 1) -> where('date_end','>=', $date)-> first(); 
        return $discount; 
    }

    // get list_discounts
    static  function getListDiscounts() {
        $list_discounts = DB::table('tbl_discount') -> get(); 
        return $list_discounts;
    }
    // ad discount
    static  function add($data) {
        $add = DB::table('tbl_discount') -> insert($data);
        return $add;
    }

    // delete discount 
    static function remove($id) {
        $remove = DB::table('tbl_discount') -> where('dis_id', $id)->delete();
        return $remove; 
    }

    // d
    static function getDiscountByID($id) {
        $discount = DB::table('tbl_discount')->where('dis_id', $id) ->  first();
        return $discount;
    }

    // update discount
    static function updateDiscount($id, $data) {
            $update = DB::table('tbl_discount') ->  where('dis_id', $id) -> update($data);
            return $update; 
    }

    // active discount 
    static  function active($id) {
        $active = DB::table('tbl_discount') -> where('dis_id', $id) -> update(['dis_status' => 1]);
        return $active;
    }

    static  function unActive($id) {
        $unActive = DB::table('tbl_discount') -> where('dis_id', $id) -> update(['dis_status' => 0]);
        return $unActive;
    }



}
