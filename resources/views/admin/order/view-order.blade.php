@extends('layout.adminlayout')
@section('content')
<section class="table-components">
    <div class="container-fluid">
      <!-- ========== title-wrapper start ========== -->
      <div class="title-wrapper pt-30">
        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="title mb-30">
              <h2>Tables</h2>
            </div>
          </div>
          <!-- end col -->
          <div class="col-md-6">
            <div class="breadcrumb-wrapper mb-30">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="#0">Dashboard</a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">
                    Tables
                  </li>
                </ol>
              </nav>
            </div>
          </div>
          <!-- end col -->
        </div>
        <!-- end row -->
      </div>
      <!-- ========== title-wrapper end ========== -->

      <!-- ========== tables-wrapper start ========== -->
      <div class="tables-wrapper">
        <div class="row">
          <div class="col-lg-12">
            <div class="card-style mb-30">
              <h6 class="mb-10">THÔNG TIN KHÁCH HÀNG</h6>
              <p class="text-sm mb-20">
                
              </p>
              <div class="table-wrapper table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                        <th><h6>Tên khách hàng</th>
                        <th><h6>Số điện thoại</h6></th>
                        <th><h6>Email</h6></th>
                        <th><h6>Tình trạng đơn hàng</h6></th>
                    </tr>
                    <!-- end table row-->
                  </thead>
                  <tbody>
                   
                    <tr>
                      <td class="min-width">
                        <p>{{$customer->customer_name}}</p>
                      </td>
                        <td class="min-width">
                           <p>{{$customer->customer_phone}}</p>
                        </td>
                  
                      <td class="min-width">
                       <p>{{$customer->customer_email}}</p>
                       </td>
                     
                      
                    </tr>
                  
                    <!-- end table row -->
                  </tbody>
                </table>
                <!-- end table -->
              </div>
            </div>
            <!-- end card -->
          </div>
          <!-- end col -->
        </div>
        <!-- end row -->
      </div>
          <!-- ========== tables-wrapper start ========== -->
          <div class="tables-wrapper">
            <div class="row">
              <div class="col-lg-12">
                <div class="card-style mb-30">
                  <h6 class="mb-10">THÔNG TIN VẬN CHUYỂN HÀNG</h6>
                  <p class="text-sm mb-20">
                    
                  </p>
                  <div class="table-wrapper table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                            <th><h6>Tên người vận chuyển</th>
                            <th><h6>Địa chỉ</h6></th>
                            <th><h6>Số điện thoại</h6></th>
                            <th><h6>Email</h6></th>
                            <th><h6>Ghi chú</h6></th>
                            <th><h6>Hình thức thanh toán</h6></th>
                        </tr>
                        <!-- end table row-->
                      </thead>
                      <tbody>
                       
                        <tr>
                          <td class="min-width">
                            <p>{{$shipping->shipping_name}}</p>
                          </td>
                            <td class="min-width">
                               <p>{{$shipping->shipping_phone}}</p>
                            </td>
                      
                          <td class="min-width">
                           <p>{{$shipping->customer_email}}</p>
                           </td>
                           <td class="min-width">
                            <p>{{$shipping->shipping_email}}</p>
                            </td>
                         
                            <td class="min-width">
                                <p>{{$shipping->shipping_notes}}</p>
                                </td>
                                <td class="min-width">
                                    <p>@if($shipping->shipping_method==0) Thanh toán khi nhận hàng @else Thanh toán qua ví điện tử @endif</p>
                                    </td>
                                         
                        </tr>
                      
                        <!-- end table row -->
                      </tbody>
                    </table>
                    <!-- end table -->
                  </div>
                </div>
                <!-- end card -->
              </div>
              <!-- end col -->
            </div>
            <!-- end row -->
          </div>
       <!-- ========== tables-wrapper start ========== -->
       <div class="tables-wrapper">
        <div class="row">
          <div class="col-lg-12">
            <div class="card-style mb-30">
              <h6 class="mb-10">LIỆT KÊ CHI TIẾT ĐƠN HÀNG</h6>
              <p class="text-sm mb-20">
                
              </p>
              <div class="table-wrapper table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                        <th><h6>ID</th>
                        <th><h6>Tên sản phẩm</h6></th>
                        <th><h6>Sl kho còn</h6></th>
                        <th><h6>Mã giảm giá</h6></th>
                        <th><h6>Phí ship hàng</h6></th>
                        <th><h6>Số lượng</h6></th>
                        <th><h6>Giá sản phẩm</h6></th>
                        <th><h6>Tổng tiền</h6></th>
                    </tr>
                    <!-- end table row-->
                  </thead>
                 
                  <tbody>
                    @php 
                    $i = 0;
                    $total = 0;
                    @endphp
                  @foreach($order_details as $key => $details)
          
                    @php 
                    $i++;
                    $subtotal = $details->product_price*$details->product_sales_quantity;
                    $total+=$subtotal;
                    @endphp
                    <tr class="color_qty_{{$details->product_id}}">
                     
                      <td ><i>{{$i}}</i></td>
                      <td>{{$details->product_name}}</td>
                      <td>{{$details->product->product_soluong}}</td>
                      <td>@if($details->product_coupon!='no')
                            {{$details->product_coupon}}
                          @else 
                            Không mã giảm giá
                          @endif
                      </td>
                      <td>{{number_format($details->product_feeship ,0,',','.')}}đ</td>
                      <td>
          
                        <input type="number" min="1" {{$order_status==2 ? 'disabled' : ''}} class="order_qty_{{$details->product_id}}" value="{{$details->product_sales_quantity}}" name="product_sales_quantity" style="width:50px">
          
                        <input type="hidden" name="order_qty_storage" class="order_qty_storage_{{$details->product_id}}" value="{{$details->product->product_quantity}}">
          
                        <input type="hidden" name="order_code" class="order_code" value="{{$details->order_code}}">
          
                        <input type="hidden" name="order_product_id" class="order_product_id" value="{{$details->product_id}}">
          
                       @if($order_status!=2) 
          
                        <button class=" update_quantity_order " data-product_id="{{$details->product_id}}" name="update_quantity_order">update</button>
          
                      @endif
          
                      </td>
                      <td>{{number_format($details->product_price ,0,',','.')}}đ</td>
                      <td>{{number_format($subtotal ,0,',','.')}}đ</td>
                    </tr>
                  @endforeach
                    <tr>
                      <td colspan="8" style="background-color: rgb(61, 199, 187);border-radius:10px 10px 10px 10px; text-align:justify">  
                      @php 
                          $total_coupon = 0;
                        @endphp
                        @if($coupon_condition==1)
                            @php
                            $total_after_coupon = ($total*$coupon_number)/100;
                            echo 'Tổng đã giảm :'.number_format($total_after_coupon,0,',','.').'</br>';
                            $total_coupon = $total + $details->product_feeship - $total_after_coupon ;
                            @endphp
                        @else 
                            @php
                            echo 'Tổng đã giảm :'.number_format($coupon_number,0,',','.').'k'.'</br>';
                            $total_coupon = $total + $details->product_feeship - $coupon_number ;
          
                            @endphp
                        @endif
          
                       Phí ship : {{number_format($details->product_feeship,0,',','.')}}VNĐ</br> 
                       <b>Tổng tiền khách hàng phải thanh toán: {{number_format($total_coupon,0,',','.')}}VNĐ</b>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="6">
                        @foreach($order as $key => $or)
                      
                          @if($or->order_status==1)
                          <form>
                             @csrf
                            <select class="form-control confirm_change" >
                              <option >----Chọn hình thức đơn hàng-----</option>
                              <option id="{{$or->order_id}}" selected value="1">Chưa xử lý</option>
                              <option id="{{$or->order_id}}" value="2">Đã xử lý-Đã giao hàng</option>
                              <option id="{{$or->order_id}}" value="3">Hủy đơn hàng-tạm giữ</option>
                            </select>
                          </form>
                     
                          @elseif($or->order_status==2)
                          <form>
                            @csrf
                            <select class="form-control confirm_change">
                              <option value="">----Chọn hình thức đơn hàng-----</option>
                              <option id="{{$or->order_id}}" value="1">Chưa xử lý</option>
                              <option id="{{$or->order_id}}" selected value="2">Đã xử lý-Đã giao hàng</option>
                              <option id="{{$or->order_id}}" value="3">Hủy đơn hàng-tạm giữ</option>
                            </select>
                          </form>
          
                          @else
                          <form>
                             @csrf
                            <select class="form-control confirm_change">
                              <option value="">----Chọn hình thức đơn hàng-----</option>
                              <option id="{{$or->order_id}}" value="1">Chưa xử lý</option>
                              <option id="{{$or->order_id}}"  value="2">Đã xử lý-Đã giao hàng</option>
                              <option id="{{$or->order_id}}" selected value="3">Hủy đơn hàng-tạm giữ</option>
                            </select>
                          </form>
          
                          @endif
                          @endforeach
          
                         
                      </td>
               
                    
                    </tr>
                  </tbody>
                
                </table>
               
                <!-- end table -->
              </div>
            </div>
            <!-- end card -->
          </div>
          <!-- end col -->
        </div>
        <!-- end row -->
      </div>
    </div>
    <!-- end container -->
  </section>
 
@endsection