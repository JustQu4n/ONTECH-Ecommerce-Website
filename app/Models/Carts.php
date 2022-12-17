<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Carts extends Model
{
  static function insert_item($data){
            DB::table('tbl_cart_by_client')->insert($data);
  }
}
