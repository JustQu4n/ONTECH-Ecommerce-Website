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
                    CHỈNH SỬA DANH MỤC SẢN PHẨM
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
        @foreach ($edit_category_product as $key => $value_edit)
        <form action="{{URL::to('update-category/'.$value_edit->category_id)}}" method="POST" enctype="multipart/form-data">
            @csrf
        <div class="row">
          <div class="col-lg-12">
            <!-- input style start -->
            <div class="card-style mb-30">
              <h6 class="mb-25">Input Fields</h6>
              <div class="input-style-1">
                <label>Tên danh mục</label>
                <input type="text" name="category_product_name"  value="{{$value_edit->category_name}}" />
                @error('category_product_name')
                <span style="color:red;">{{$message}}</span>
                @enderror
              </div>
              
              <div class="input-style-1">
                <label>Ảnh </label>
                <input type="file" name="category_product_image"  value="{{$value_edit->category_image}}" />
                @error('category_product_image')
                <span style="color:red;">{{$message}}</span>
                @enderror
              </div>
              <div class="select-style-2">
                <div class="select-position">
                    <label>Trạng thái </label>
                  <select  name="category_product_status">
                    <option value="1">Hiện</option>
                    <option value="0">Ẩn</option>
                  </select>
                </div>
              </div>
              <button type="submit" name="add_category_product" class="main-btn success-btn rounded-md btn-hover" >Thêm</button > 
            </div>
           
           
          </div>
          <!-- end col -->
        </div>
        <!-- end row -->
        </form>
        @endforeach

      </div>
      <!-- ========== form-elements-wrapper end ========== -->
    </div>
    <!-- end container -->
  </section>
  @endsection