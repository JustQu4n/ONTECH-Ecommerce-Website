@extends('layout.adminlayout')
@section('content')
<section class="tab-components">
    <div class="container-fluid">
      <!-- ========== title-wrapper start ========== -->
      <div class="title-wrapper pt-30">
        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="title mb-30">
              <h2>Form Elements</h2>
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
                  <li class="breadcrumb-item"><a href="#0">Forms</a></li>
                  <li class="breadcrumb-item active" aria-current="page">
                    Form Elements
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

      <!-- ========== form-elements-wrapper start ========== -->
      <div class="form-elements-wrapper">
        <div class="row">
          <div class="col-lg-12">
            <!-- input style start -->
            <form action="{{URL::to('/insert-coupon-code')}}" method="POST" enctype="multipart/form-data">
           
            @csrf
              <div class="card-style mb-30">
              <h6 class="mb-25">Input Fields</h6>
              <div class="input-style-1">
                <label>Tên mã giảm giá</label>
                <input type="text" name="coupon_name" placeholder="Thương hiệu" />
              </div>
              <div class="input-style-1">
                <label>Mã giảm giá</label>
                <input type="text" name="coupon_code" placeholder="Thương hiệu" />
              </div>
              <div class="input-style-1">
                <label>Số lượng mã</label>
                <input type="text" name="coupon_time" placeholder="Thương hiệu" />
              </div>
              <div class="form-group form-group-default">
                <label for="exampleInputPassword1">Tính năng mã</label>
                 <select name="coupon_condition" class="form-control input-sm m-bot15">
                         <option value="0">----Chọn-----</option>
                        <option value="1">Giảm theo phần trăm</option>
                        <option value="2">Giảm theo tiền</option>
                        
                </select>
            </div>
            <div class="input-style-1">
                <label>Nhập số % hoặc tiền giảm</label>
                <input type="text" name="coupon_number" placeholder="Thương hiệu" />
              </div>
      
              <button type="submit" name="add_brand_product"class="main-btn success-btn rounded-md btn-hover" >Thêm</button > 
            </div>
            </form>
           
          </div>
          <!-- end col -->
        </div>
        <!-- end row -->
      </div>
      <!-- ========== form-elements-wrapper end ========== -->
    </div>
    <!-- end container -->
  </section>
  @endsection