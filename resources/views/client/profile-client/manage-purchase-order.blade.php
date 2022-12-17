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
                        <h3>LỊCH SỬ MUA HÀNG</h3>
                        <div class="checkout-style-1 ">
                            <div class="checkout-table table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th >STT</th>
                                            <th >Mã đơn hàng</th>
                                            <th >Ngày đặt hàng</th>
                                            <th>Tình trạng đơn hàng</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (isset($history_order))
                                       
                                        @php 
                                        $total = 0;
                                        $i=1;
                                        @endphp
                                        @foreach ($history_order as $order)
                                        @php 
                                        $subtotal = $order->product_price*$order->product_sales_quantity;
                                        $total+=$subtotal;
                                        @endphp
                                      <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$order->order_code}}</td>
                                        <td>{{$order->created_at}}</td>
                                        
                                     <td><a href="{{URL::to('view-detail-history/'.$order->order_code)}}">Xem chi tiết</a></td>
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
