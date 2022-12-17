<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Slider;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class SliderController extends Controller
{
	public function AuthLogin(){
        $admin_id = Auth::id();
        if($admin_id){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin')->send();
        }
    }
    public function manage_slider(){
    	$all_slide = Slider::orderBy('slider_id','DESC')->get();
    	return view('admin.slider.manage-slider')->with(compact('all_slide'));
       
    }
    public function add_slider(){
    	return view('admin.slider.manage-slider');
    }
    public function unactive_slide($slide_id){
        $this->AuthLogin();
        // DB::table('tbl_slider')->where('slider_id',$slide_id)->update(['slider_status'=>1]);
        Slider::where('slider_id',$slide_id)->update(['slider_status'=>1]);
        Session::put('message','Không kích hoạt slider thành công');
        return Redirect::to('manage-slider');

    }
    public function active_slide($slide_id){
        $this->AuthLogin();
        Slider::where('slider_id',$slide_id)->update(['slider_status'=>0]);
        Session::put('message','Kích hoạt slider thành công');
        return Redirect::to('manage-slider');

    }
    public function delete_slider($slider_id){
        Slider::where('slider_id',$slider_id)->delete();
        return Redirect::to('manage-slider');
    }

    public function insert_slider(Request $request){
    	
    	$this->AuthLogin();

   		$data = $request->all();
       	$get_image = request('slider_image');
      
        if($get_image){
            $get_name_image =$get_image->getClientOriginalName();
            $name_img= current(explode(',',$get_name_image));
            $new_image = $name_img;
            $get_image->move('upload/sliderImage/',$new_image);

            $slider = new Slider();
            $slider->slider_name = $data['slider_name'];
            $slider->slider_image = $new_image;
            $slider->slider_status = $data['slider_status'];
           	$slider->save();
            Session::put('message','Thêm slider thành công');
            return Redirect::to('manage-slider');
        }else{
        	Session::put('message','Làm ơn thêm hình ảnh');
    		return Redirect::to('manage-slider');
        }
       	
    }
}
