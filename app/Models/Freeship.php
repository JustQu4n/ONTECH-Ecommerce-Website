<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Freeship extends Model
{
    use HasFactory;
    public $timestamps = false; //set time to false
    protected $fillable = [
    	'fee_tp', 'fee_qh','fee_xaid','fee_feeship'
    ];
    protected $primaryKey = 'fee_id';
 	protected $table = 'tbl_feeship';

     public function city(){
        return $this->belongsTo('App\Models\City', 'fee_tp');
    }
    public function province(){
        return $this->belongsTo('App\Models\Province', 'fee_qh');
    }
    public function wards(){
        return $this->belongsTo('App\Models\Wards', 'fee_xaid');
    }
}
