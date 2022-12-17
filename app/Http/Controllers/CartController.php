<?php

namespace App\Http\Controllers;


use App\Models\CartModel;
use App\Models\Carts;
use App\Models\CouponModel;
use App\Models\HomeModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\DB;

session_start();

class CartController extends Controller
{
    private $home;
    private $cart;
    private $save;
    public function __construct()
    {
        $this->home = new HomeModel();
        $this->cart = new CartModel();
        $this->save = new Carts();
    }


    public function save_cart(Request $request)
    {

        $productId = $request->productid_hidden;

        $quantity = $request->qty;

        $product_info =  $this->cart->Product_infor($productId);

        $data['id'] = $product_info->product_id;
        $data['qty'] = $quantity;
        $data['name'] = $product_info->product_name;
        $data['price'] = $product_info->product_price;
        $data['weight'] = "123";
        $data['options']['image'] = $product_info->product_image;
        Cart::add($data);

        // Cart::destroy();
        return Redirect::to('/show-cart');
        return Redirect::to('/');
    }
    public function show_cart()
    {
        $category = $this->home->Getcategory();
        $brand = $this->home->Getbrand();
        $all_products = $this->home->Show_all_product();
        return view('page.cart.cart')->with('category', $category)->with('brand', $brand);
    }
    public function delete_cart($rowId)
    {
        Cart::update($rowId, 0);
        Session::forget('cart');
        // Session::forget('coupon');
        return Redirect::to('/show-cart');
    }
    public function update_cart_quantity(Request $request)
    {
        $rowId = $request->rowId_cart;
        $qty = $request->qty;
        Cart::update($rowId, $qty);

        return Redirect::to('/show-cart');
    }

    //CART AJAX
    //   public function check_coupon(Request $request){
    //     $data = $request->all();
    //     $coupon = CouponModel::where('coupon_code',$data['coupon'])->first();
    //     if($coupon){
    //         $count_coupon = $coupon->count();
    //         if($count_coupon>0){
    //             $coupon_session = Session::get('coupon');
    //             if($coupon_session==true){
    //                 $is_avaiable = 0;
    //                 if($is_avaiable==0){
    //                     $cou[] = array(
    //                         'coupon_code' => $coupon->coupon_code,
    //                         'coupon_condition' => $coupon->coupon_condition,
    //                         'coupon_number' => $coupon->coupon_number,

    //                     );
    //                     Session::put('coupon',$cou);
    //                 }
    //             }else{
    //                 $cou[] = array(
    //                         'coupon_code' => $coupon->coupon_code,
    //                         'coupon_condition' => $coupon->coupon_condition,
    //                         'coupon_number' => $coupon->coupon_number,

    //                     );
    //                 Session::put('coupon',$cou);
    //             }
    //             Session::save();
    //             return redirect()->back()->with('message','Thêm mã giảm giá thành công');
    //         }

    //     }else{
    //         return redirect()->back()->with('error','Mã giảm giá không đúng');
    //     }
    // }   
    // public function gio_hang(Request $request){



    //     $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get(); 
    //     $brand_product = DB::table('tbl_brand_product')->where('brand_status','0')->orderby('brand_id','desc')->get(); 
    //     $url_canonical = $request->url();
    //     return view('page.cart.cart-ajax2')->with('category',$cate_product)->with('brands',$brand_product)->with('url_canonical',$url_canonical);
    // }
    // public function add_cart_ajax(Request $request){
    //     // Session::forget('cart');
    //     $data = $request->all();
    //     $session_id = substr(md5(microtime()),rand(0,26),5);
    //     $cart = Session::get('cart');

    //         if($cart==true){
    //         $is_avaiable = 0;
    //         foreach($cart as $key => $val){
    //             if($val['product_id']==$data['cart_product_id']){
    //                 $is_avaiable++;
    //             }
    //         }
    //         if($is_avaiable == 0){
    //             $cart[] = array(
    //             'session_id' => $session_id,
    //             'product_name' => $data['cart_product_name'],
    //             'product_id' => $data['cart_product_id'],
    //             'product_image' => $data['cart_product_image'],
    //             'product_qty' => $data['cart_product_qty'],
    //             'product_price' => $data['cart_product_price'],
    //             );
    //             Session::put('cart',$cart);

    //         }
    //     }else{
    //         $cart[] = array(
    //             'session_id' => $session_id,
    //             'product_name' => $data['cart_product_name'],
    //             'product_id' => $data['cart_product_id'],
    //             'product_image' => $data['cart_product_image'],
    //             'product_qty' => $data['cart_product_qty'],
    //             'product_price' => $data['cart_product_price'],

    //         );

    //         Session::put('cart',$cart);
    //     }

    //     Session::save();

    // }   
    // public function delete_product($session_id){
    //     $cart = Session::get('cart');
    //     // echo '<pre>';
    //     // print_r($cart);
    //     // echo '</pre>';
    //     if($cart==true){
    //         foreach($cart as $key => $val){
    //             if($val['session_id']==$session_id){
    //                 unset($cart[$key]);
    //             }
    //         }
    //         Session::put('cart',$cart);
    //         return redirect()->back()->with('message','Xóa sản phẩm thành công');

    //     }else{
    //         return redirect()->back()->with('message','Xóa sản phẩm thất bại');
    //     }

    // }
    // public function update_cart(Request $request){
    //     $data = $request->all();
    //     $cart = Session::get('cart');
    //     if($cart==true){
    //         foreach($data['cart_qty'] as $key => $qty){
    //             foreach($cart as $session => $val){
    //                 if($val['session_id']==$key){
    //                     $cart[$session]['product_qty'] = $qty;
    //                 }
    //             }
    //         }
    //         Session::put('cart',$cart);
    //         return redirect()->back()->with('message','Cập nhật số lượng thành công');
    //     }else{
    //         return redirect()->back()->with('message','Cập nhật số lượng thất bại');
    //     }
    // }
    // public function delete_all_product(){
    //     $cart = Session::get('cart');
    //     if($cart==true){
    //         Session::forget('cart');
    //         Session::forget('coupon');
    //         return redirect()->back()->with('message','Xóa hết giỏ thành công');
    //     }
    // }
    public function check_coupon(Request $request)
    {
        $data = $request->all();
        $coupon = CouponModel::where('coupon_code', $data['coupon'])->first();
        if ($coupon) {
            $coupon_time = $coupon->coupon_time;
            if ($coupon_time > 0) {
                $coupon_session = isset($_SESSION['coupon']) ? $_SESSION['coupon'] : null;
                if ($coupon_session) {
                    $cou = array(
                        'coupon_code' => $coupon->coupon_code,
                        // 'coupon_condition' => $coupon->coupon_condition,
                        'coupon_number' => $coupon->coupon_number,
                    );
                    $_SESSION['coupon'] = $cou;
                } else {
                    $cou = array(
                        'coupon_code' => $coupon->coupon_code,
                        // 'coupon_condition' => $coupon->coupon_condition,
                        'coupon_number' => $coupon->coupon_number,

                    );
                    $_SESSION['coupon'] = $cou;
                }
                Session::save();
                return redirect()->back()->with('message', 'Thêm mã giảm giá thành công');
            } else {
                return redirect()->back()->with('error', 'Mã giảm giá đã hết lượt sử dụng');
            }
        } else {
            return redirect()->back()->with('error', 'Mã giảm giá không đúng');
        }
    }
    public function gio_hang(Request $request)
    {
        if (!isset($_SESSION['carts'])) {
            $_SESSION['carts'] = array();
        }
        $url_canonical = $request->url();
        //--seo
        $cate_product = DB::table('tbl_category_product')->where('category_status', '0')->orderby('category_id', 'desc')->get();
        $brand_product = DB::table('tbl_brand_product')->where('brand_status', '0')->orderby('brand_id', 'desc')->get();
        return view('client.cart.cart')->with('category', $cate_product)->with('brand', $brand_product)->with('url_canonical', $url_canonical);
    }
    public function add_cart_ajax(Request $request)
    {

        // Session::forget('cart');
        $data = $request->all();
        $carts = $_SESSION['carts'];

        if ($carts == true) {
            $is_avaiable = 0;
            foreach ($carts as $key) {
                if ($key['product_id'] == $data['cart_product_id']) {
                    $is_avaiable += $key['product_qty'];
                }
            }
            if ($is_avaiable == 0) {
                $cart = array(

                    'product_id' => $data['cart_product_id'],
                    'product_name' => $data['cart_product_name'],
                    'product_image' => $data['cart_product_image'],
                    'product_qty' => $data['cart_product_qty'],
                    'product_price' => $data['cart_product_price'],
                );
                $_SESSION['carts'][$data['cart_product_id']] = $cart;
                $_SESSION['quantity'] += $data['cart_product_qty'];
            } else {
                // $cart[] = array(
                //     'product_name' => $data['cart_product_name'],
                //     'product_image' => $data['cart_product_image'],
                //     'product_qty' => $data['cart_product_qty'],
                //     'product_price' => $data['cart_product_price'],
                // );
                $_SESSION['carts'][$data['cart_product_id']]['product_qty'] = $data['cart_product_qty'] + $is_avaiable;
                $_SESSION['quantity'] += $data['cart_product_qty'];
            }
        } else {
            $_SESSION['carts'] = array();
            $_SESSION['quantity'] = 0;

            $cart = array(
                'product_id' => $data['cart_product_id'],
                'product_name' => $data['cart_product_name'],
                'product_image' => $data['cart_product_image'],
                'product_qty' => $data['cart_product_qty'],
                'product_price' => $data['cart_product_price'],
            );
            $_SESSION['carts'][$data['cart_product_id']] = $cart;
            $_SESSION['quantity'] += $data['cart_product_qty'];
        }
    }
    public function delete_product($product_id)
    {
        if (isset($_SESSION['carts'])) {
            $carts = $_SESSION['carts'];
            foreach ($carts as $id => $key) {

                if ($key['product_id'] == $product_id) {
                    $_SESSION['quantity'] -= $key['product_qty'];
                    unset( $_SESSION['carts'][$id]);
                    return redirect()->back()->with('message', 'Xóa sản phẩm thành công');
                }
            }
            return redirect()->back()->with('message', 'Xóa sản phẩm thất bại');
        } else {
            return redirect()->back()->with('message', 'Xóa sản phẩm thất bại');
        }
    }
    public function update_cart(Request $request)
    {
        $data = $request->all();
        $cart = Session::get('cart');
        if ($cart == true) {
            foreach ($data['cart_qty'] as $key => $qty) {
                foreach ($cart as $session => $val) {
                    if ($val['session_id'] == $key) {
                        $cart[$session]['product_qty'] = $qty;
                    }
                }
            }
            Session::put('cart', $cart);
            return redirect()->back()->with('message', 'Cập nhật số lượng thành công');
        } else {
            return redirect()->back()->with('message', 'Cập nhật số lượng thất bại');
        }
    }
    public function delete_all_product()
    {
        $carts = $_SESSION['carts'];
        if ($carts == true) {
            // Session::destroy();

            Session::forget('quantity');
            Session::forget('cart');
            Session::forget('coupon');
            return redirect()->back()->with('message', 'Xóa hết giỏ thành công');
        }
    }
    public function add_cart_db(Request $request, $customer_id)
    {
        $data = array();
        $data['customer_id'] = $customer_id;
        $data['product_id'] = $request->product_id;
        $data['qty'] = $request->qty;
        Carts::insert_item($data);
        //    dd($data);
        Session::put('message', 'Successfully');
        return Redirect::to('/cart');
    }
}
