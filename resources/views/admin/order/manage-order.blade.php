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
              <h6 class="mb-10">QUẢN LÝ ĐƠN ĐẶT HÀNG</h6>
              <p class="text-sm mb-20">
                
              </p>
              <div class="table-wrapper table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                        <th><h6>Thứ tự</th>
                        <th><h6>Mã đơn</h6></th>
                        <th><h6>Ngày đặt hàng</h6></th>
                        <th><h6>Tình trạng đơn hàng</h6></th>
                    </tr>
                    <!-- end table row-->
                  </thead>
                  <tbody>
                    @php 
                    $i = 0;
                    @endphp
                    @foreach($order as $key => $ord)
                      @php 
                      $i++;
                      @endphp
                    <tr>
                      <td class="min-width">
                        <p>{{$i}}</p>
                      </td>
                        <td class="min-width">
                            <p>{{ $ord->order_code }}</p>
                        </td>
                        <td class="min-width">
                          <p>{{ $ord->created_at }}</p>
                      </td>
                
                      <td class="min-width">
                        @if($ord->order_status==1)
                            Đơn hàng mới
                        @else 
                            Đã xử lý
                        @endif
                       </td>
                     
                      <td>
                        <div class="action">
                            <a href="{{URL::to('/view-order/'.$ord->order_code)}}" class="btn btn-success  btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                
                            <a  onclick="return confirm('Are you sure to delete?')"  href="{{URL::to('/delete-order/'.$ord->order_code)}}" class="btn btn-danger btn-sm"><i class="fas fa-times"></i></a>
                        </div>
                      </td>
                    </tr>
                   @endforeach
                    <!-- end table row -->
                  </tbody>
                </table>
              </div>
            </div>
            <!-- end card -->
          </div>
          <!-- end col -->
        </div>
        <!-- end row -->
      </div>
      <!-- ========== tables-wrapper end ========== -->
    </div>
    <!-- end container -->
  </section>
@endsection
