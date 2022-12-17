@extends('layout.homelayout')
@section('content')
    <section class="checkout-wrapper pt-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="checkout-style-1 ">
                        <div class="checkout-table table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="product">Tên sản phẩm</th>
                                        <th class="quantity">Số lượng</th>
                                        <th class="price" style="white-space:nowrap">Giá <i>(VNĐ)</i></th>
                                        <th class="price" style="white-space:nowrap">Tổng giá <i>(VNĐ)</i></th>
                                        <th class="action">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($_SESSION['carts'] != null)
                                        @php
                                            $total = 0;
                                        @endphp
                                        @foreach ($_SESSION['carts'] as $key)
                                            @php
                                                $subtotal = $key['product_price'] * $key['product_qty'];
                                                $total += $subtotal;
                                            @endphp
                                            <tr>
                                                <td>
                                                    <div class="product-cart d-flex">
                                                        <div class="product-thumb">
                                                            <img src="{{ asset('upload/productImage/' . $key['product_image']) }}"
                                                                alt="Product" width="100px" height="100px">
                                                        </div>
                                                        <div class="product-content media-body">
                                                            <h5 class="title"><a
                                                                    href="">{{ $key['product_name'] }}</a></h5>
                                                            <span>UG 0123</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td style="width:200px">
                                                    <form action="{{ URL::to('/update-cart') }}" method="POST">
                                                        @csrf
                                                        <div class="product-quantity d-inline-flex">
                                                            {{-- <button type="button" id="sub" class="sub"><i class="mdi mdi-minus"></i></button> --}}
                                                            <input class="cart_quantity" type="number" min="1"
                                                                name="" value="{{ $key['product_qty'] }}">
                                                            {{-- <button type="button" id="add" class="add"><i class="mdi mdi-plus"></i></button> --}}
                                                            <input type="submit" value="Cập nhật" name="update_qty" style="width:100%"
                                                                class="check_out btn btn-info btn-sm">
                                                        </div>
                                                    </form>
                                                </td>
                                                <td>
                                                    <p class="price">{{ number_format($key['product_price'], 0, ',', '.') }}
                                                    </p>
                                                </td>
                                                <td>
                                                    <p class="price"> {{ number_format($subtotal, 0, ',', '.') }}</p>
                                                </td>
                                                <td>
                                                    <ul class="action">
                                                        <li><a href="{{URL::to('/del-product/'.$key['product_id']) }}"
                                                                title="cancel" class="icon"><i
                                                                    class="fa-solid fa-trash-can"></i></a></li>

                                                    </ul>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="7" style="text-align: center; font-size:16px">

                                                @php
                                                    echo 'Làm ơn thêm sản phẩm vào giỏ hàng';
                                                @endphp

                                            </td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        @if (isset($_SESSION['carts']))
                            <div class="checkout-coupon-total checkout-coupon-total-2 d-flex flex-wrap">
                                <div class="checkout-coupon">
                                    <span>Áp dụng mã giảm giá</span>
                                    <form action="{{ URL::to('/check-coupon') }}" method="POST">
                                        @csrf
                                        <div class="single-form form-default d-flex">
                                            <div class="form-input form">
                                                <input type="text" name="coupon" value="{{ isset($_SESSION['coupon']) ? $_SESSION['coupon']['coupon_code'] :   "" }}" placeholder="Mã giảm giá">
                                            </div>
                                            @if (isset($_SESSION['coupon']))
                                                <a href="{{ url('/unset-coupon') }}"> <button  class="btn btn-danger btn-sm " >Xóa</button>  </a>
                                            @endif
                                            <input type="submit" class="btn btn-success check_coupon "
                                                name="check_coupon" value="Áp dụng">
                                        </div>
                                    </form>
                                </div>
                        @endif
                        @if (isset($_SESSION['carts']))
                            @php
                                $total = 0;
                            @endphp
                            <div class="checkout-total">
                                <div class="single-total">
                                    <p class="value">Tổng tiền:</p>
                                    <p class="price">
                                        @foreach ($_SESSION['carts'] as $cart)
                                            @php
                                                $subtotal = $cart['product_price'] * $cart['product_qty'];
                                                $total += $subtotal;
                                            @endphp
                                           
                                        @endforeach
                                        {{ number_format($total, 0, ',', '.') }} vnđ
                                    </p>
                                </div>


                                {{-- <div class="single-total">
                                    <p class="value">Phí vận chuyển (+):</p>
                                    <p class="price">$10.50</p>
                                </div> --}}

                                @if (isset($_SESSION['coupon']))
                                    <div class="single-total">
                                        <p class="value">Mã giảm giá(-):</p>
                                        <p class="price"> {{ $_SESSION['coupon']['coupon_number'] }} %</p>
                                    </div>
                                    <div class="single-total total-payable" >
                                        <h6 >Tổng tiền phải trả:</h6>
                                        @php
                                            $total_coupon = ($total * $_SESSION['coupon']['coupon_number']) / 100;
                                        @endphp

                                        <h6 >{{ number_format($total - $total_coupon, 0, ',', '.') }}VND</h6>
                                    </div>
                                    
                                @endif

                            </div>
                        @endif
                    </div>

                    <div class="checkout-btn d-sm-flex justify-content-between">
                        <div class="single-btn">
                            <a href="{{ URL::to('/') }}" class="main-btn primary-btn-border">Tiếp tục mua sắm</a>
                        </div>
                        @if (Session::get('customer_id') != null)
                            <div class="single-btn">
                                <a href="{{ URL::to('/checkout') }}" class="main-btn primary-btn">Thanh toán</a>
                            </div>
                        @else
                            <a href="{{ URL::to('/login-client') }}" class="main-btn primary-btn">Thanh toán</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        </div>

    </section>
@endsection
