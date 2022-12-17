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
              <h6 class="mb-10">DANH SÁCH THƯƠNG HIỆU SẢN PHẨM</h6>
              <p class="text-sm mb-20">
                
              </p>
              <div class="table-wrapper table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                        <th><h6>id</th>
                        <th><h6>Tên danh mục</h6></th>
                        <th><h6>Hình ảnh</h6></th>
                        <th><h6>Trạng thái</h6></th>
                        <th><h6>Chỉnh sửa/Xoá</h6></th>
                    </tr>
                    <!-- end table row-->
                  </thead>
                  <tbody>
                    @foreach ($show_all_products as $key => $value_show)
                    <tr>
                      <td class="min-width">
                        <p>{{$value_show->category_id}}</p>
                        </div>
                        <td class="min-width">
                        <p>{{$value_show->category_name}}</p>
                    </div>
                      </td>
                      <td class="min-width">
                        <img
                              src="{{asset('upload/categoryImage/'.$value_show->category_image)}}"alt="" width="80px" height="80px" />
                      </td>
                      <td class="min-width">
                        <?php 
                        if ($value_show->category_status == 0)
                        {
                        ?>
                            <a href="{{URL::to('/unactive-category-product/'.$value_show->category_id)}}" ><span class="fas fa-eye-slash" style=" color:rgb(230, 57, 57);"></span>
                            <?php
                        }  else{
                        ?>
                        <a href="{{URL::to('/active-category-product/'.$value_show->category_id)}}"><span class="fas fa-eye" style=" color:rgb(83, 224, 83);"></span>
                            <?php
                        }
                        ?>
                      </td>
                      <td>
                        <div class="action">
                            <a href="{{URL::to('edit-category/'.$value_show->category_id)}}" class="mr-10" >Sửa</a>
                             <a  onclick="return confirm('Are you sure to delete?')" href="{{URL::to('delete-category/'.$value_show->category_id)}}" style="color:red" ><i class="fas fa-times"></i></a>
                        </div>
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