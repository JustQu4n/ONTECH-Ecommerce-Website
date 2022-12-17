@extends('layout.adminlayout')
@section('content')
<section class="tab-components">
    <div class="container-fluid">
      <!-- ========== title-wrapper start ========== -->
      <div class="title-wrapper pt-30">
        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="title mb-30">
              <h2>SỬABÀI VIẾT</h2>
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
            @foreach ($edit_by_id as $edit)
            <form action="{{URL::to('update-blog/'.$edit->blog_id)}}" method="POST" enctype="multipart/form-data">
            @csrf
              <div class="card-style mb-30">
              <div class="input-style-1">
                <label>Tên tiêu đề</label>
                <input type="text" name="blog_title" placeholder="Tiêu đề" value="{{$edit->blog_title}}" />
              </div>
              
              <div class="input-style-1">
                <label>Ảnh </label>
                <input type="file" name="blog_image" value="{{$edit->blog_image}}"  />
              </div>
              <img src="{{asset('upload/blogImage/'.$edit->blog_image)}}" alt="#" width="50" height="50"> 
              <div class="input-style-1">
                <label>Nội dung</label>
               <textarea name="blog_content" id="" cols="30" rows="10">{{$edit->blog_content}}</textarea>
              </div>
              <div class="input-style-1">
                <label>Nội dung ngắn</label>
              <textarea name="content_short" id="" cols="30" rows="10">{{$edit->content_short}}</textarea>
              </div>
              <div class="select-style-2">
                <div class="select-position">
                    <label>Trạng thái </label>
                  <select name="blog_status">
                    <option value="1">Hiện</option>
                    <option value="0">Ẩn</option>
                  </select>
                </div>
              </div>
            
              <button type="submit" name="update-blog"class="main-btn success-btn rounded-md btn-hover" >Thêm</button > 
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