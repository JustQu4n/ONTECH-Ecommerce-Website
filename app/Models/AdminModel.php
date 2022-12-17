<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AdminModel extends Model
{
    use HasFactory;
    public function Insert_User($admin_email,$admin_password){
        $result= DB::table('tbl_admin')->where('admin_email',$admin_email)->where('admin_password',$admin_password)->first();
        return $result;
    }
    public function Edit_Admin($admin_id){
        $edit_admin =DB::table('tbl_admin')->where('admin_id', $admin_id)->get();
        return $edit_admin;
    }
    public function Update_User($admin_id, $data){
        DB::table('tbl_admin')->where('admin_id', $admin_id)->update($data);
    }
   
}
