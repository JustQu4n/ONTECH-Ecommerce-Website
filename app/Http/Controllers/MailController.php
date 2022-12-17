<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Models\CategoryModel;
use App\Models\BrandModel;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send_coupon(){
        $customer_vip = Customer::where('customer_vip',1)->get();
        $now = Carbon::now('Asia/Ho_Chi_Minh')->format('d-m-Y H:i:s');
        $title_mail= "Mã khuyến mãi ngày".''.$now;
        $data=[];
        foreach($customer_vip as $vip){
            $data['email'][]=$vip->customer_email;
        }
            Mail::send('client.mail.send-mail-coupon',$data,function($message) use ($title_mail,$data){
                $message->to($data['email'])->subject($title_mail);
                $message->from($data['email'],$title_mail);
            });
            return redirect()->back()->with('message','Gui khuyến mai thanh cong!'); 
       
    }
    public function mail_example(){
       return view('client.mail.send-mail-coupon');
    }
    public function forget_password(Request $request){
        $cate_product = CategoryModel::Getcategory();
        $brand_product = BrandModel::Getbrand();
        $url_canonical = $request->url();
        return view('client.login.forget-password')->with('brand', $brand_product)->with('category', $cate_product)->with('url_canonical', $url_canonical);
    }
    public function send_password(Request $request){
        $data = $request->all();
        $now = Carbon::now('Asia/Ho_Chi_Minh')->format('d-m-Y H:i:s');
        $title_mail= "<H1>LẤY LẠI MẬT KHẨU :</H1> ".''.$now;
        $customer = Customer::where('customer_email','=',$data['email_account'])->first();
        if($customer){
            $count_customers =$customer->count();
            if($count_customers==0){
                return redirect()->back()->with('error','Email chua dc dang ky');

            }else{
                $token_random = Str::random();
                $customer =Customer::find($customer->customer_id);
                $customer->customer_token = $token_random;
                $customer->save();

                $to_email = $data['email_account'];
                $link_reset_pass = url('/update-new-pass?email='.$to_email.'&token='.$token_random);
                $data =array(
                     "name"=>$title_mail,
                    "body"=> $link_reset_pass,
                    "email"=>$data['email_account'],
                );
                Mail::send('client.login.forget-pass-notify',['data'=>$data],function($message) use ($title_mail,$data){
                    $message->to($data['email'])->subject($title_mail);
                    $message->from($data['email'],$title_mail);
                });
                return redirect()->back()->with('message','Gui khuyến mai thanh cong!'); 
            }
        }
    }
    public function update_new_password(Request $request){
        $cate_product = CategoryModel::Getcategory();
        $brand_product = BrandModel::Getbrand();
        $url_canonical = $request->url();
        return view('client.login.new-pass')->with('brand', $brand_product)->with('category', $cate_product)->with('url_canonical', $url_canonical);
    }
    public function reset_new_password(Request $request){
        $data = $request->all();
        $token_random = Str::random();
        $customer = Customer::where('customer_email','=',$data['email'])->where('customer_token','=',$data['token'])->get();
        $count =$customer->count();
        if($count>0){
            foreach($customer as $key =>$cs){
                $customer_id = $cs->customer_id;
            }
            $reset = Customer::find($customer_id);
            $reset->customer_password = md5($data['password_account']);
            $reset->customer_token =  $token_random ;
            $reset->save();
            return redirect('login-client')->with('message',' thanh cong!'); 
        }else{
            return redirect('forget-pass')->with('message',' thanh cong!'); 
        }
    } 
}
