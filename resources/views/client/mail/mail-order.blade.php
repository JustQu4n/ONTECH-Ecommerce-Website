<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <style>@import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');
        body {
     
        font-family: 'Montserrat', sans-serif
        }
        .card {
        border: none
        }
        .logo {
        background-color: #eeeeeea8
        }
        .totals tr td {
        font-size: 13px
        }
        .footer {
        background-color: #eeeeeea8
        }
        .footer span {
        font-size: 12px
        }
        .product-qty span {
        font-size: 12px;
        color: #dedbdb
        }</style>
</head>
<body>
    <div class="container mt-5 mb-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="text-left logo p-2 px-5"> 
                        <h1>ONTECH-Laptop,PC...</h1> </div>
                    <div class="invoice p-5">
                        <h5>ĐƠN HÀNG CỦA BẠN ĐÃ XÁC NHẬN VÀ ĐANG ĐƯỢC GIAO HÀNG!</h5> <span class="font-weight-bold d-block mt-4">Hello,{{$shipping_array['shipping_name']}}</span>
                        <span>Đơn hàng của bạn đã được xác nhận trên hệ thống!</span>
                        <div class="payment border-top mt-3 mb-3 border-bottom table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <td>
                                            {{-- {{$shipping_array['time']}} --}}
                                            <div class="py-2"> <span class="d-block text-muted">Đặt hàng ngày</span>{{date("Y/m/d")}} </span> </div><br>
                                        </td>
                                        <td>
                                            <div class="py-2"> <span class="d-block text-muted">Mã đặt hàng</span>
                                                <span>{{$code['order_code']}}</span> </div><br>
                                        </td>
                                        <td>
                                            <div class="py-2"> <span class="d-block text-muted">Thanh toán</span> <span><img
                                                        src="https://img.icons8.com/color/48/000000/mastercard.png"
                                                        width="20" /></span> </div><br>
                                        </td>
                                        <td>
                                            <div class="py-2"> <span class="d-block text-muted">Địa chỉ giao hàng</span>
                                                <span>@if ($shipping_array['shipping_address']=="")
                                                    Không xác định địa chỉ
                                                @else
                                                {{$shipping_array['shipping_address']}}
                                                @endif</span> </div><br>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="product border-bottom table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        
                                        <td>Tên sản phẩm</td>
                                        <td>SL</td>
                                        <td>Giá</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $subtotal=0;
                                        $total=0;
                                    @endphp
                                    @foreach ($cart_array as $cart)
                                    @php
                                        $subtotal = $cart['product_price'] * $cart['product_qty'];
                                        $total += $subtotal;
                                    @endphp
                                    <tr>
                                       
                                        <td width="60%"> 
                                            <span class="font-weight-bold">{{$cart['product_name']}}</span>
                                          
                                               
                                        </td>
                                        <td width="20%">
                                          <p> {{$cart['product_qty']}}</p>
                                        </td>
                                        <td width="20%">
                                            <div class="text-right"> <span class="font-weight-bold">{{number_format($cart['product_price'])}}</span> </div>
                                        </td>
                                    </tr>
                                   @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="row d-flex justify-content-end">
                            <div class="col-md-5">
                                <table class="table table-borderless">
                                    <tbody class="totals">
                                        
                                        <tr>
                                            <td>
                                                <div class="text-left"> <span class="text-muted">Phí vận chuyển</span> </div>
                                            </td>
                                            <td>
                                                <div class="text-right"> <span>@if ($shipping_array['fee']=="")
                                                    25.000 VND
                                                    @else  
                                                    {{number_format($shipping_array['fee'])}}
                                                @endif</span> </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="text-left"> <span class="text-muted">Mã giảm giá</span> </div>
                                            </td>
                                            <td>
                                                <div class="text-right"> <span>{{$code['coupon_code']}}</span> </div>
                                            </td>
                                        </tr>
                                       
                                        <tr class="border-top border-bottom">
                                            <td>
                                                <div class="text-left"> <span class="font-weight-bold">TỔNG TIỀN PHẢI TRẢ :</span>
                                                </div>
                                            </td>
                                            <td>
                                                @if(isset($_SESSION['coupon']))
                                                @php
                                                $feeship = number_format($shipping_array['fee']);
                                            
                                                $total_coupon = ($total*$_SESSION['coupon']['coupon_number'])/100;
                                                $total_after_coupon = $total-$total_coupon;
                                                $total_final = $total_after_coupon + Session::get('fee');
                                                
                                                @endphp
                                                <div class="text-right"> <span class="font-weight-bold"><b>{{ number_format( $total_final); }}</b></span>
                                                </div>
                                              @else
                                              @php
                                              $feeship = number_format($shipping_array['fee']);
                                          
                                              $total_final =  $total +  Session::get('fee');;
                                              
                                              @endphp
                                              @endif
                                              <div class="text-right"> <span class="font-weight-bold"><b>{{ number_format( $total_final); }}</b></span>
                                              </div>

                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                      
                        <p class="font-weight-bold mb-0">Thanks for shopping with us!</p> <span></span>
                    </div>
                    <div class="d-flex justify-content-between footer p-3"> <span>Need Help? visit our <a href="#"> help
                                center</a></span> <span>12 June, 2020</span> </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>