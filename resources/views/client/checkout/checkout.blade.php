@extends('layout.homelayout')
@section('content')
     
<section class="checkout-wrapper pt-50">
    <div class="container">
       <div class="row justify-content-center">
          <div class="col-lg-8">
             <div class="checkout-steps-form-style-1 mt-50">
                <ul id="checkout-steps">
                   <li data-vjstepno="1">
                      <h6 class="title">ĐIỀN THÔNG TIN GỬI HÀNG</h6>
                      <form >
                        @csrf
                        {{-- <input type="hidden" name="customer_id"  value="{{ Session::get('customer_id') ? Session::get('customer_id') : ''}}"> --}}
                      <section class="checkout-steps-form-content">
                         <div class="row">
                            <div class="col-md-12">
                               <div class="single-form form-default">
                                  <label>Họ và tên</label>
                                  <div class="row">
                                     <div class="col-md-12 form-input form">
                                        <input type="text" name="shipping_name" class="shipping_name" value="{{ Session::get('customer_name') ? Session::get('customer_name') : ''}}" placeholder="First Name">
                                     </div>
                                   
                                  </div>
                               </div>
                            </div>
                            <div class="col-md-6">
                               <div class="single-form form-default">
                                  <label>Địa chỉ E-mail</label>
                                  <div class="form-input form">
                                     <input type="text" name="shipping_email" class="shipping_email"  value="{{ Session::get('customer_email') ? Session::get('customer_email') : ''}}" placeholder="Email Address">
                                  </div>
                               </div>
                            </div>
                            <div class="col-md-6">
                               <div class="single-form form-default">
                                  <label>Số điện thoại</label>
                                  <div class="form-input form">
                                     <input type="text"  name="shipping_phone" class="shipping_phone"  value="{{ Session::get('customer_phone') ? Session::get('customer_phone') : ''}}" placeholder="Phone Number">
                                  </div>
                               </div>
                            </div>
                            <div class="col-md-12">
                               <div class="single-form form-default mb-20">
                                  <label>Địa chỉ giao hàng</label>
                                  <div class="form-input form">
                                     <input type="text"  name="shipping_address" class="shipping_address"  value="{{ Session::get('customer_address') ? Session::get('customer_address') : ''}}" >
                                  </div>
                               </div>
                            </div>
                            
                              <div class="card-style mb-30">
                                  <div class="form-group mb-20">
                                      <label for="exampleInputPassword1">Chọn thành phố</label>
                                      <select name="city" id="city" class="form-control input-sm m-bot15 choose city">
  
                                          <option value="">Chọn tỉnh thành phố</option>
                                          @foreach ($city as $key => $ci)
                                              <option value="{{ $ci->matp }}">{{ $ci->name_city }}</option>
                                          @endforeach
  
                                      </select>
                                  </div>
                                  <div class="form-group mb-20">
                                      <label for="exampleInputPassword1">Chọn quận huyện</label>
                                      <select name="province" id="province"
                                          class="form-control input-sm m-bot15 province choose">
                                          <option value="">Chọn quận huyện</option>
  
                                      </select>
                                  </div>
                                  <div class="form-group mb-20">
                                      <label for="exampleInputPassword1">Chọn xã phường</label>
                                      <select name="wards" id="wards" class="form-control input-sm m-bot15 wards">
                                          <option value="">Chọn xã phường</option>
                                      </select>
                                  </div>

                            <div class="col-md-6">
                               <div class="select-elements select-style-2 mt-30">
                                  <label>Phương thức thanh toán</label>
                                  <div class="select-items select" >
                                     <select name="payment_select" class="form-control input-md m-bot15 payment_select" style="width: 100%">
                                       <option value="1">Thanh toán khi nhận hàng</option>
                                       <option value="2">Thanh toán qua ví điện tử</option>
                                       <option value="3">Thanh toán qua tài khoản ngân hàng</option>
                                     </select>
                                  </div>
                               </div>
                            </div>
                          
                            <div class="col-md-12">
                                <div class="single-form form-default">
                                   <label>Ghi chú gửi hàng</label>
                                   <div class="form-input form">
                                    <textarea name="shipping_notes" cols="90" rows="50" class="shipping_notes"></textarea>
                                   </div>
                                </div>
                             </div>
                             @if(Session::get('fee'))
                             <input type="hidden" name="order_fee" class="order_fee" value="{{Session::get('fee')}}">
                         @else 
                             <input type="hidden" name="order_fee" class="order_fee" value="50000">
                         @endif
              
                         @if(isset($_SESSION['coupon']))
                             
                                 <input type="hidden" name="order_coupon" class="order_coupon" value="{{$_SESSION['coupon']['coupon_code']}}">
                         @else 
                             <input type="hidden" name="order_coupon" class="order_coupon" value="no">
                         @endif
                         </div>
                            

                         <div > 
                           <input type="button" value="ĐẶT HÀNG" name="calculate_order" class="btn btn-primary calculate_delivery" href="{{URL::to('final-checkout')}}">
                          
                      </section>
                      
                      </form>
                   </li>
                  
                </ul>
             </div>
          </div>
          <div class="col-lg-4">
            
            <div class="checkout-sidebar-accordion mt-50">
             <div class="accordion" id="accordionExample">
                <div class="card">
                   <div class="card-header" id="headingOne">
                      <a href="javascript:void(0)" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"></a>
                   </div>
                   <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                      <div class="card-body">
                         <div class="checkout-table table-responsive">
                            <table class="table">
                               <tbody>
                                  <tr>
                                   {{-- @if ($_SESSION['carts'] != null) --}}
                                   @if (isset($_SESSION['carts']))
                                   @php
                                           $total = 0;
                                   @endphp
                                   @endif
                                   @foreach($_SESSION['carts'] as $cart)
                                       @php
                                           $subtotal = $cart['product_price']*$cart['product_qty'];
                                           $total+=$subtotal;
                                       @endphp
                                     <td class="checkout-product">
                                        <div class="product-cart d-flex">
                                           <div class="product-thumb">
                                             <img src="{{asset('upload/productImage/'.$cart['product_image'])}}" alt="">
                                           </div>
                                           <div class="product-content media-body">
                                              <h5 class="title"><a href="product-details-page.html">{{$cart['product_name']}}</a></h5>
                                              <ul>
                                                 <li><span>SL: {{$cart['product_qty']}}</span></li>
                                              </ul>
                                           </div>
                                        </div>
                                     </td>
                                     <td class="checkout-price">
                                        <p class="price">{{number_format($cart['product_price'],0,',','.')}} VND</p>
                                     </td>
                                  </tr>
                                  @endforeach
                               </tbody>
                            </table>
                         </div>
                         <div class="pricing-table">
                            <div class="sub-total-price">
                               <div class="total-price">
                                  <p class="value">Subtotal Price:</p>
                                
                                  <p class="price"> {{ number_format($total, 0, ',', '.') }} VNĐ</p>
                               </div>
                               <div class="total-price shipping">
                                  <p class="value">Phí vận chuyển:</p>
                                  @if (Session::get('fee')== null)
                                  <p class="price">  50.000đ</p>
                                    
                                    <p style="font-size: 10px">(Phí vận chuyển mặc định)</p>
                                  @else
                                 <p  class="price"> {{number_format(Session::get('fee'),0,',','.')}}</p>
                                  @endif
                               </div>
                               @if(isset($_SESSION['coupon']))
                               <div class="total-price discount">
                                  <p class="value">Mã giảm:</p>
                                  <p class="price"> {{$_SESSION['coupon']['coupon_number']}} %</p>
                                   <p>
                                       @php 
                                       $total_coupon = ($total*$_SESSION['coupon']['coupon_number'])/100;
                                   
                                       @endphp
                                   </p>
                                </div>
                                <div class="total-price discount">
                                  
                                   <p class="value">Tổng tiền phải trả:</p>
                                  
                                      @php 
                                          $total_after_coupon = $total-$total_coupon;
                                          $total_final = $total_after_coupon + Session::get('fee');
                                          echo'<p  class="price" style="color:black;">'.number_format( $total_final).'VND</p>'; 
                                      @endphp
                                </div>
                             
                                @endif
                            </div>
                            <div class="price-table-btn">
                               <a  name="send_order"  class="main-btn primary-btn-border  send_order">Xác nhận đơn hàng</a>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
               
             </div>
          </div>
         </div>
       </div>
    </div>
 </section>

@endsection