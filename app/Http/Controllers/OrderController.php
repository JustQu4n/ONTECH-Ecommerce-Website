<?php

namespace App\Http\Controllers;

use App\Models\CouponModel;
use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\Product;
use App\Models\Shipping;
use App\Models\CategoryModel;
use App\Models\BrandModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    public function view_order($order_code){
		$order_details = OrderDetails::with('product')->where('order_code',$order_code)->get();
		$order = Order::where('order_code',$order_code)->get();
		foreach($order as $key => $ord){
			$customer_id = $ord->customer_id;
			$shipping_id = $ord->shipping_id;
			$order_status = $ord->order_status;
		}
		$customer = Customer::where('customer_id',$customer_id)->first();
		$shipping = Shipping::where('shipping_id',$shipping_id)->first();

		$order_details_product = OrderDetails::with('product')->where('order_code', $order_code)->get();

		foreach($order_details_product as $key => $order_d){

			$product_coupon = $order_d->product_coupon;
		}
		if($product_coupon != 'no'){
			$coupon = CouponModel::where('coupon_code',$product_coupon)->first();
			$coupon_condition = $coupon->coupon_condition;
			$coupon_number = $coupon->coupon_number;
		}else{
			$coupon_condition = 2;
			$coupon_number = 0;
		}
		
		return view('admin.order.view-order')->with(compact('order_details','customer','shipping','order_details','coupon_condition','coupon_number','order','order_status'));

	}
    public function manage_order(){
    	$order = Order::orderby('created_at','DESC')->get();
    	return view('admin.order.manage-order')->with(compact('order'));
    }
    public function update_qty(Request $request){
		$data = $request->all();
		$order_details = OrderDetails::where('product_id',$data['order_product_id'])->where('order_code',$data['order_code'])->first();
		$order_details->product_sales_quantity = $data['order_qty'];
		$order_details->save();
	}
	public function update_order_qty(Request $request){
		//update order
		$data = $request->all();
		$order = Order::find($data['order_id']);
		$order->order_status = $data['order_status'];
		$order->save();
		if($order->order_status==2){
			foreach($data['order_product_id'] as $key => $product_id){
				
				$product = Product::find($product_id);
				$product_quantity = $product->product_soluong;
				$product_sold = $product->product_price;
				foreach($data['quantity'] as $key2 => $qty){
						if($key==$key2){
								$pro_remain = $product_quantity - $qty;
								$product->product_soluong = $pro_remain;
								$product->product_price = $product_sold + $qty;
								$product->save();
						}
				}
			}
			//sendmail
			$now = Carbon::now('Asia/Ho_Chi_Minh')->format('d-m-Y H:i:s');
			$title_mail= "ĐƠN HÀNG CỦA BẠN ĐANG ĐƯỢC GIAO: ".''.$now;
			$customer = Customer::where('customer_id',$order->customer_id)->first();
			$data['email'][] = $customer->customer_email;
			  //lay sp
			  foreach($data['order_product_id'] as $key => $product){
				$product_mail = Product::find($product);
				foreach($data['quantity'] as $key2 => $qty){
						if($key==$key2){
							$cart_array[]=array(
							 'product_name'=>$product_mail['product_name'],
							 'product_price'=>$product_mail['product_price'],
							 'product_qty'=>$product_mail['product_qty'],
							);
								
						}
				}
			}
			//lay shipping
		
			   $detail = OrderDetails::where('order_code',$order->order_code)->first();
			   $feeship = $detail->product_feeship;
			   $coupon_mail = $detail->product_coupon;
			   $shipping = Shipping::where('shipping_id',$order->shipping_id)->first();
			  $shipping_array = array(
				'feeship'=>$feeship,
				'customer_name'=>$customer->customer_name,
				'shipping_name'=>$shipping->shipping_name,
				'shipping_email'=>$shipping->shipping_email,
				'shipping_phone'=>$shipping->shipping_phone,
				'shipping_address'=>$shipping->shipping_address,
				'shipping_notes'=>$shipping->shipping_notes,
				'shipping_method'=>$shipping->shipping_method,
			  );
				  
			  //lay ma giam gia
			$ordercode_mail = array(
				'coupon_code'=>$coupon_mail,
				'order_code'=>$detail->order_cod,
		  
			  );
			
			Mail::send('client.mail.mail-confirm-ship',['cart_array'=>$cart_array,'shipping_array'=>$shipping_array,'code'=>$ordercode_mail],function($message) use ($title_mail,$data){
			  $message->to($data['email'])->subject($title_mail);
			  $message->from($data['email'],$title_mail);
			});
		}elseif( $order->order_status==3){
			
			$now = Carbon::now('Asia/Ho_Chi_Minh')->format('d-m-Y H:i:s');
			$title_mail= "ĐƠN HÀNG CỦA BẠN KHÔNG ĐƯỢC XỬ LÝ: ".''.$now;
			$customer = Customer::where('customer_id',$order->customer_id)->first();
			$data['email'][] = $customer->customer_email;
			$data=[];
			Mail::send('client.mail.mail-cancel-ship',$data,function($message) use ($title_mail,$data){
				$message->to($data['email'])->subject($title_mail);
				$message->from($data['email'],$title_mail);
			  });
		}


     
	}
	public function delete_order($order_code){
		Order::where('order_code',$order_code)->delete();
		return Redirect::to('manage-order');

	}

	public function manage_puchase_order(Request $request, $customer_id ){
		$url_canonical = $request->url();
        $cate_product = CategoryModel::Getcategory();
        $brand_product = BrandModel::Getbrand();
		$history_order = Order::where('customer_id',$customer_id)->orderBy('created_at','desc')->get();
		// dd($history_order);
		return view('client.profile-client.manage-purchase-order')->with('brand', $brand_product)->with('category', $cate_product)->with('history_order',$history_order);

	}
	public function view_detail_history(Request $request, $order_code ){
	
		$url_canonical = $request->url();
        $cate_product = CategoryModel::Getcategory();
        $brand_product = BrandModel::Getbrand();
		$order_details = OrderDetails::with('product')->where('order_code',$order_code)->get();
			
		
			// dd($order_details_product);
			foreach($order_details as $ord_detail){
				$id=$ord_detail->product_id;
			}
			$image_product =Product::where('product_id',$id)->first();
			$image = $image_product->product_image;
		return view('client.profile-client.view-detail-history')->with('brand', $brand_product)->with('category', $cate_product)->with('order_details',$order_details)->with('image',$image);
	
}	
}
