<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CouponModel extends Model
{
    use HasFactory;
    public $timestamps = false;
   protected $fillable = [
    'coupon_name','coupon_time','coupon_condition','coupon_code','coupon_number',
   ];
   protected $primaryKey = 'coupon_id';
   protected $table = 'tbl_coupon';
}
