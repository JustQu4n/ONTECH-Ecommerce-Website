<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Blog extends Model
{
    use HasFactory;
    public $timestamps = false; //set time to false
    protected $fillable = [
    	'blog_title','blog_image','blog_content','content_short',
    ];
    protected $primaryKey = 'blog_id';
 	protected $table = 'blog';

    public function Save_blog($data){
       $insert = DB::table('blog')->insert($data);
        return  $insert;
    }
    static function update_blog($blog_id,$data){
        $insert = DB::table('blog')->where('blog_id',$blog_id)->update($data);
         return  $insert;
     }
    static function show_blog(){
        $blog= DB::table('blog')->paginate(10);
        return $blog;
    }
    public function show_detail_blog($blog_id){
        $detail= DB::table('blog')->where('blog.blog_id',$blog_id)->get();
        return $detail;
    }
    static function blog_view(){
        $blog_view= DB::table('blog')->get();
        return $blog_view;
    }
    
    static function edit_by_id($blog_id){
        $detail= DB::table('blog')->where('blog.blog_id',$blog_id)->get();
        return $detail;
    }
   
}
