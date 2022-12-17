<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
session_start();

class GalleryController extends Controller
{
    public function AuthLogin(){
        // $admin_id = Session::get('admin_id');
        $admin_id = Auth::id();
        if($admin_id){
             return Redirect::to('admin.dashboard');
        }else{
          return Redirect::to('login-auth')->send();
        }
      }
      public function add_gallery($product_id){
        $pro_id = $product_id;
        return view('admin.product.add-gallery',compact('pro_id'));
      }
      public function select_gallery(Request $request){
       $product_id = $request->pro_id;
       $gallery = Gallery::where('product_id',$product_id)->get();
       $gallery_count = $gallery->count();
       $output = "";
       $output= '<table class="table table-hover">
       <thead>
         <tr>
           <th>STT</th>
           <th>Tên hình ảnh</th>
           <th>Hình ảnh</th>
           <th>Action</th>
         </tr>
       </thead> 
       <tbody> <form>
       ';
        if($gallery_count>0){
            $i = 0;
            $output.=csrf_field();
            foreach($gallery as $key => $gll){
                $output.='               
                <tr>
                    <td>
                     '.++$i.'
                     </td>
                   <td contenteditable data-gal_id="'.$gll->gallery_id.'" class="edit_gal_name" >
                       '.$gll->gallery_name.'
                      </td>
                   <td>
                      <img src="'.url('upload/gallery/'.$gll->gallery_image).'" width="100" height="100">
                      <br>
                      <input type="file" class="file_image" data-gal_id="'.$gll->gallery_id.'" id="file-'.$gll->gallery_id.'" name="file" accept="image/*" style="width:40%; height:10%;">
                    </td>
                    <td >
                       <button type="button" data-gal_id="'.$gll->gallery_id.'" class="btn btn-danger delete-gallery">Xoá</button>
                    </td>
                </tr>
                ';
              
            }
            
        }else{
            $output.='
            <tr>
               <td class="min-width" colspan="4">
                   <p>Sản phẩm chưa có ảnh</p>
               </td>
             
            </tr>';
        }
        $output.=' </form>
            </tbody>
            </table>
            ';
        echo $output;

      }
      public function insert_gallery(Request $request, $product_id){
          $get_image = $request->file('file');
          if($get_image){
            foreach($get_image as $image){
            $get_name_image =$image->getClientOriginalName();
            $name_img= current(explode(',',$get_name_image));
            $new_image = $name_img;
            $image->move('upload/gallery/',$new_image);
            $gallery = new Gallery();
            $gallery->gallery_name =  $new_image;
            $gallery->gallery_image =  $new_image;
            $gallery->product_id =  $product_id;
            $gallery->save();
            }
          }
          Session::put('message','Thêm ảnh thành công');
          return Redirect::back();
          
      }
      public function update_gallery_name(Request $request){
        $gal_id = $request->gal_id;
        $gal_text = $request->gal_text;
        $gallery =  Gallery::find( $gal_id );
        $gallery->gallery_name =  $gal_text;
        $gallery->save();

      }
      public function delete_gallery(Request $request){
        $gal_id = $request->gal_id;
        $gallery =  Gallery::find( $gal_id );
       unlink('upload/gallery/'.$gallery->gallery_image);
       $gallery->delete();
      }
      public function update_gallery_image(Request $request){
        $get_image =$request->file('file');
        $gal_id =$request->gal_id;
        if($get_image){
            $get_name_image =$get_image->getClientOriginalName();
            $name_img= current(explode(',',$get_name_image));
            $new_image = $name_img;
            $get_image->move('upload/gallery/',$new_image);

            $gallery = Gallery::find($gal_id);
            unlink('upload/gallery/'.$gallery->gallery_image);
            $gallery->gallery_image =  $new_image;
            $gallery->save();
            
      }
    }
}
