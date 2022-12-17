@extends('layout.homelayout')
@section('content')
    <main id="main" class="main mt-20">
        {{-- <div class="alert alert-success alert-dismissible fade show">
            <strong>Success!</strong> {{ Session::get('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div> --}}
        <section class="checkout-wrapper pt-50">
            <div class="container">
                <div class="row mb-50">
                    <div class="col-lg-12">
                        <h3>CHI TIẾT ĐƠN HÀNG</h3>
                        <div class="checkout-style-1 ">
                            <div class="checkout-table table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th >Ảnh</th>
                                            <th >Tên sản phẩm</th>
                                            <th >Số lượng</th>
                                            <th>Giá</th>
                                            <th>Tình trạng đơn hàng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (isset($order_details))
                                       
                                        @php 
                                        $total = 0;
                                        @endphp
                                        @foreach ($order_details as $order)
                                        @php 
                                        $subtotal = $order->product_price*$order->product_sales_quantity;
                                        $total+=$subtotal;
                                        @endphp
                                      <tr>
                                        <td><img src="{{asset('upload/productImage/'.$image)}}" alt="" width="100" height="100"></td>
                                        <td>{{$order->product_name}}</td>
                                        <td>{{$order->product_soluong}}</td>
                                        <td>{{number_format($order->product_price)}}</td>
                                        <td> @if($order->order_status == 1)
                                            Đơn đang chờ xử lý
                                        @else 
                                            Đã xử lý-Đang giao hàng
                                        @endif
                                     </td>
                                     
                                      </tr>
                                      @endforeach
                                           
                                      @else
                                           <tr colspan="6">Không có đơn hàng!</tr> 
                                      @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection
