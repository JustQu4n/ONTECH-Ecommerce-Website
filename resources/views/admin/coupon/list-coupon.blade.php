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
              <h6 class="mb-10">DANH SÁCH MÃ GIẢM GIÁ</h6>
              <p class="text-sm mb-20">
                <a href="{{URL('/send-coupon')}}" class="btn btn-primary">Gửi mã giảm giá</a>
              </p>
              <div class="table-wrapper table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                        <th><h6>Tên mã giảm giá</th>
                        <th><h6>Mã giảm giá</h6></th>
                        <th><h6>Số lượng giảm giá</h6></th>
                        <th><h6>Điều kiện giảm giá</h6></th>
                        <th><h6>Số giảm</h6></th>
                        <th><h6>Xoá</h6></th>
                    </tr>
                    <!-- end table row-->
                  </thead>
                  <tbody>
                    @foreach ($coupon as $key => $cou)
                                            
                                     
                    <tr>
                        <td>{{ $cou->coupon_name }}</td>
                        <td>{{ $cou->coupon_code }}</td>
                        <td>{{ $cou->coupon_time }}</td>
                        <td>
                            <?php
                            if($cou->coupon_condition==1){
                             ?>
                             Giảm theo %
                             <?php
                              }else{
                             ?>  
                             Giảm theo tiền
                             <?php
                            }
                           ?>
                        </td>
                        <td>
                            <?php
                        if($cou->coupon_condition==1){
                            ?>
                            Giảm {{$cou->coupon_number}} %
                            <?php
                            }else{
                            ?>  
                            Giảm {{$cou->coupon_number}} k
                            <?php
                        }
                        ?>
                        </td>
                        <td>
                          <a  onclick="return confirm('Are you sure to delete?')" href="{{URL::to('/delete-coupon/'.$cou->coupon_id)}}" class="btn btn-danger btn-sm"><i class="fas fa-times"></i></a>
                        </td>
                    </tr>

                    @endforeach
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
      <!-- ========== tables-wrapper end ========== -->
    </div>
    <!-- end container -->
  </section>
@endsection