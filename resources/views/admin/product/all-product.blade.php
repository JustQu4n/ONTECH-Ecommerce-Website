@extends('layout.adminlayout')
@section('content')
<section class="table-components">
    <div class="container-fluid">
      <!-- ========== title-wrapper start ========== -->
      <div class="title-wrapper pt-30">
        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="title mb-30">
              <h2>LIỆT KÊ SẢN PHẨM </h2>
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
              <h6 class="mb-10"></h6>
             
              <div class="table-wrapper table-responsive">
                <table class="table" id="table">
                  <thead>
                    <tr>
                      <th><h6>ID</h6></th>
                      <th><h6>Tên</h6></th>
                      <th><h6>Hình ảnh</h6></th>
                      <th><h6>Thư viện ảnh</h6></th>
                      <th><h6>Số lượng</h6></th>
                      {{-- <th><h6>Giá gốc</h6></th>
                      <th><h6>Giá bán</h6></th>
                      <th><h6>Giá sale</h6></th> --}}
                      <th><h6>Trạng thái</h6></th>
                      <th><h6>Danh mục</h6></th>
                      <th><h6>Thương hiệu</h6></th>
                      <th><h6>Action</h6></th>
                    </tr>
                    <!-- end table row-->
                  </thead>
                  <tbody>
                    @foreach ($all_product as $key => $item_show)
                    <tr>
                      <td class="min-width">
                      <p>{{$item_show->product_id}}</p>
                      </td>
                      <td class="min-width" style="width:300px">
                        <p>{{$item_show->product_name}}</p>
                      </td>
                      <td class="min-width">
                       <img src="{{asset('upload/productImage/'.$item_show->product_image )}}" alt="" height="90" width="90">
                      </td>
                      <td class="min-width">
                       <a href="{{URL::to('add-gallery/'.$item_show->product_id)}}"><p style="font-size: 10px">Thêm ảnh</p></a>
                       </td>
                      <td class="min-width">
                       <p>{{$item_show->product_soluong}}</p>
                       </td>
                    
                        <td class="min-width"  style="width:70px">
                        <?php 
                        if ($item_show->product_status == 0)
                        {
                        ?>
                            <a href="{{URL::to('/unactive-product/'.$item_show->product_id)}}" ><span class="fas fa-eye-slash" style=" color:rgb(230, 57, 57);"></span>
                            <?php
                        }  else{
                        ?>
                        <a href="{{URL::to('/active-product/'.$item_show->product_id)}}"><span class="fas fa-eye" style=" color:rgb(83, 224, 83);"></span>
                            <?php
                        }
                        ?>
                         </td>
                         <td class="min-width">
                          <p>{{$item_show->category_name}}</p>
                         </td>
                         <td class="min-width">
                          <p>{{$item_show->brand_name}}</p>
                         </td>
                      </td>
                      <td>
                        <div class="action">
                          <a href="{{URL::to('edit-product/'.$item_show->product_id)}}" class="mr-10" >Sửa</a>
                          <a  onclick="return confirm('Are you sure to delete?')" href="{{URL::to('delete-product/'.$item_show->product_id)}}" style="color:red" ><i class="fas fa-times"></i></a>
                        </div>
                      </td>
                    </tr>
                 @endforeach
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