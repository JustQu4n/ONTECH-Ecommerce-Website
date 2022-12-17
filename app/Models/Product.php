<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = false; //set time to false
    protected $fillable = [
    	'product_name','category_id','brand_id','product_view','product_soluong','product_desc','product_content','product_price','product_price_sell','product_image','product_status'
    ];
    protected $primaryKey = 'product_id';
 	protected $table = 'tbl_product';
   
}
