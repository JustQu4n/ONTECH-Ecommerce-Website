<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CartModel extends Model
{
    use HasFactory;
    public function Product_infor($productId){
        $product_info = DB::table('tbl_product')->where('product_id',$productId)->first();
        return $product_info;
    }
}
