@extends('layout.adminlayout')
@section('content')
<section class="tab-components">
    <div class="container-fluid">
      <!-- ========== title-wrapper start ========== -->
      <div class="title-wrapper pt-30">
        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="title mb-30">
              <h2>THÊM SLIDER BANNER</h2>
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
            <form action="{{URL::to('insert-slider')}}" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="card-style mb-30">
              <h6 class="mb-25">Input Fields</h6>
              <div class="input-style-1">
                <label>Tên hình ảnh</label>
                <input type="text" name="slider_name" placeholder="Thương hiệu" />
              </div>
              
              <div class="input-style-1">
                <label>Ảnh </label>
                <input type="file" name="slider_image" placeholder="Full Name" />
              </div>
              <div class="select-style-2">
                <div class="select-position">
                    <label>Trạng thái </label>
                  <select  name="slider_status">
                    <option value="1">Hiện</option>
                    <option value="0">Ẩn</option>
                  </select>
                </div>
              </div>
            
              <button type="submit"name="add_slider" class="main-btn success-btn rounded-md btn-hover" >Thêm</button > 
            </div>
            </form>
           
          </div>
          <!-- end col -->
        </div>
        <!-- end row -->
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
                            <th><h6>Tên thương hiệu</h6></th>
                            <th><h6>Hình ảnh</h6></th>
                            <th><h6>Trạng thái</h6></th>
                            <th><h6>Chỉnh sửa/Xoá</h6></th>
                        </tr>
                        <!-- end table row-->
                      </thead>
                      <tbody>
                        @foreach ($all_slide as $key => $slider)
                        <tr>
                          <td class="min-width">
                            <p>{{$slider->slider_id}}</p>
                            </div>
                            <td class="min-width">
                            <p>{{$slider->slider_name}}</p>
                        </div>
                          </td>
                          <td class="min-width">
                            <img
                                  src="{{asset('upload/sliderImage/'.$slider->slider_image)}}"alt="" width="80px" height="80px" />
                          </td>
                          <td class="min-width">
                            <?php 
                            if ($slider->slider_status == 0)
                            {
                            ?>
                                <a href="{{URL::to('/unactive-slide/'.$slider->slider_id)}}" ><span class="fas fa-eye-slash" style=" color:rgb(230, 57, 57);"></span>
                                <?php
                            }  else{
                            ?>
                            <a href="{{URL::to('/active-slide/'.$slider->slider_id)}}"><span class="fas fa-eye" style=" color:rgb(83, 224, 83);"></span>
                                <?php
                            }
                            ?>
                          </td>
                          <td>
                            <div class="action">
                                <a href="{{URL::to('edit-slide/'.$slider->slider_id)}}" class="mr-10" >Sửa</a>
                                 <a  onclick="return confirm('Are you sure to delete?')" href="{{URL::to('delete-slider/'.$slider->slider_id)}}" style="color:red" ><i class="fas fa-times"></i></a>
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
      </div>
      <!-- ========== form-elements-wrapper end ========== -->
    </div>
    <!-- end container -->
  </section>
  @endsection