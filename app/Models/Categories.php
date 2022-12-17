<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;
    public $timestamps = false; //set time to false
    protected $fillable = [
    	'category_name', 'category_image','category_status',
    ];
    protected $primaryKey = 'category_id';
 	protected $table = 'tbl_category_product';
     public function product(){
        return $this->hasMany('App\Models\Product');
}
}
