<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Categories;
use App\Models\CategoryModel;
use App\Models\HomeModel;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
session_start();

class HomeController extends Controller
{
   private $var;
   private $aq;
   
   public function __construct()
   {
       $this->var=new HomeModel();
       $this->aq = new CategoryModel();
       $this->var_blog =new Blog();
   }
   public function index(Request $request){
    if (!isset($_SESSION['carts' ])) {
        $_SESSION['carts'] = array();
    } 
    // session_destroy();
     $category = $this->var->Getcategory();
     $brand = $this->var->Getbrand();
     $all_products = $this->var->Show_all_product();
     $all_monitor = $this->var->show_monitor();
     $laptop = $this->var->show_laptop();
     $keyboard = $this->var->show_keyboard();
     
     $url_canonical = $request->url();
     $slider = Slider::orderBy('slider_id','DESC')->where('slider_status','1')->inRandomOrder()->take(6)->get();
     $all_blog = $this->var_blog->show_blog();
     $noibat = Product::orderBy('product_view','DESC' )->take(6)->get();
     $one_image =Slider::where('slider_status','1')->orderBy('slider_id','DESC' )->inRandomOrder()->take(2);
  
    return view('client.home')->with('category',$category)->with('brands',$brand)
    ->with('all_products',$all_products)->with('url_canonical',$url_canonical)
    ->with('all_monitor',$all_monitor)->with('laptop',$laptop)
    ->with('keyboard',$keyboard)->with('slider',$slider)
    ->with('all_blog',$all_blog)->with('noibat',$noibat)->with('one_image',$one_image);
   }
   public function shop(Request $request){
    $category = $this->var->Getcategory();
    $brand = $this->var->Getbrand();
    // $all_products = $this->var->Show_shop_product();
    $all_products = Product::paginate(16);
    $url_canonical = $request->url();
    $min_price=Product::min('product_price');
    $max_price=Product::max('product_price');
    $max_price_range= $max_price + 1000000;
    if(isset($_GET['start_price']) && $_GET['end_price']){
        $min_price = $_GET['start_price'];
        $max_price = $_GET['end_price'];
       $price = Product::whereBetween('product_price',[$min_price,$max_price])->orderBy('product_id','ASC')->paginate(10);
       dd($price);
    } 
    return view('client.shop.shop')->with('category',$category)->with('brands',$brand)->with('all_products',$all_products)->with('url_canonical',$url_canonical)
    ->with('max',$max_price)->with('min',$min_price)->with('max_price_range',$max_price_range);
   }
   public function search(Request $request){
    $keyword = $request->keyword;
    $category = $this->var->Getcategory();
    $brand = $this->var->Getbrand();
    $search_products = $this->var->Search_product($keyword);
    $url_canonical = $request->url();
    return view('client.search.search')->with('category',$category)->with('brands',$brand)->with('search_products',$search_products)->with('url_canonical',$url_canonical);
   }
   public function send_mail(){
    $to_name = "Anh Quan";
    $to_email = "nguyenanhquandz01102002@gmail.com";//send to this email

    $data = array('name'=>'Mail tu tai khoan khach hangf','body'=>'Noi dung ve van de...'); 

    Mail::send('page.mail.send-mail',$data,function($message) use ($to_name,$to_email){
        $message->to($to_email)->subject('test mail nhé');//send this mail with subject
        $message->from($to_email,$to_name);//send from this mail
    });
    return Redirect::to('/')->with('message','');
   }
   public function autocomplete_ajax(Request $request){
    $data = $request->all();
    if($data['query']){
        $product = Product::where('product_status',1)->where('product_name','LIKE','%'.$data['query'].'%')->get();
        $output = '<ul class="dropdown-menu" style="display:block;border-radius:10px 10px 10px 10px ; position:absolute; width:530px">';
        foreach($product as $key => $val){
            $output.= '<li class="li_search_ajax" style="font-size:14px; display: flex ;flex-direction:row; align-items: center;" ><img src="upload/productImage/'.$val->product_image.'" width="80"; height="80" /><a href="/chi-tiet-san-pham/'.$val->product_id.'" ><span>'.$val->product_name.'</span></a></li>';
        }
        $output.= '</ul>';
        echo $output;
    }

   }
   public function wishlist(Request $request){
    $category = $this->var->Getcategory();
    $brand = $this->var->Getbrand();
    $all_products = $this->var->Show_all_product();
    $monitor = $this->var->show_monitor();
    $laptop = $this->var->show_laptop();
    $keyboard = $this->var->show_keyboard();
    $url_canonical = $request->url();
    return view('client.wishlist')->with('category',$category)->with('brands',$brand)
    ->with('all_products',$all_products)->with('url_canonical',$url_canonical)
    ->with('monitor',$monitor)->with('laptop',$laptop)
    ->with('keyboard',$keyboard);
   }

  
}
