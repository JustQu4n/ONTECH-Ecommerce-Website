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
                    CHỈNH SỬA SẢN PHẨM
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
            @foreach ($edit_product as $key => $item)
            <form role="form" method="post" action="{{URL::to('/update-product/'.$item->product_id)}}" enctype="multipart/form-data">
                @csrf
            <div class="card-style mb-30">
              <h6 class="mb-25">Input Fields</h6>
              <div class="input-style-1">
                <label>Tên sản phẩm</label>
                <input type="text" name="product_name" value="{{$item->product_name}}" />
              </div>
              <div class="input-style-1">
                <label>Giá gốc</label>
                <input type="text"  name="product_price" value="{{$item->product_price}}"  />
              </div>
              <div class="input-style-1">
                <label>Giá bán</label>
                <input type="text"  name="product_price_sell"  value="{{$item->product_price_sell}}"  />
              </div>
              <div class="input-style-1">
                <label>Giá khuyến mãi</label>
                <input type="text"  name="product_price_sale" value="{{$item->product_price_sale}}"  />
              </div>
              <div class="input-style-1">
                <label>Ảnh :{{$item->product_image}}</label>
                <input type="file" name="product_image" />
              </div>
              <div class="input-style-1">
                <label>Số lượng</label>
                <input type="number" name="product_soluong"  value="{{$item->product_soluong}}" />
              </div>
              <img src="{{asset('upload/productImage/'.$item->product_image )}}" alt="" width="100" height="100">
              <div class="input-style-1">
                <label>Nội dung</label>
                <textarea name="product_content" rows="5" value="">{{$item->product_content}}</textarea>
              </div>
              <div class="input-style-1">
                <label>Mô tả</label>
                <textarea  name="product_desc" rows="5" value="">{{$item->product_desc}}</textarea>
              </div>
              <div class="select-style-2">
                <div class="select-position">
                    <label>Danh mục </label>
                  <select name="product_cate" >
                    @foreach ($cate_product as $item => $category)
                    <option value="{{$category->category_id}}">{{$category->category_name}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="select-style-2">
                <div class="select-position">
                    <label>Thương hiệu</label>
                  <select name="product_brand">
                    @foreach ($brand_product as $item => $brand)
                    <option value="{{$brand->brand_id}}">{{$brand->brand_name}}</option>
                    @endforeach
                  </select>
                </div>
              </div>

              <div class="select-style-2">
                <div class="select-position">
                    <label>Trạng thái </label>
                  <select name="product_status">
                    <option value="1">Hiện</option>
                    <option value="0">Ẩn</option>
                  </select>
                </div>
              </div>
              
              <button type="submit" name="add_product" class="btn btn-success">Submit</button>
            </div>
            </form>
            @endforeach
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