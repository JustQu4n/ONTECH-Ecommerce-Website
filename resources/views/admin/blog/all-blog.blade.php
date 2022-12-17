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
                        <th><h6>ID</th>
                        <th><h6>Tên bài viết</h6></th>
                        <th><h6>Ảnh</h6></th>
                        <th><h6>Chỉnh sửa/Xoá</h6></th>
                    </tr>
                    <!-- end table row-->
                  </thead>
                  <tbody>
                    @foreach ($all as $key => $all_blog)
                    <tr>
                      <td class="min-width">
                        <p>{{$all_blog->blog_id}}</p>
                        </div>
                        <td class="min-width">
                        <p>{{$all_blog->blog_title}}</p>
                    </div>
                      </td>
                     <td>
                      <img src="{{asset('upload/blogImage/'.$all_blog->blog_image)}}" alt="#" width="100" height="100"> 
                     </td>
                      
                      <td>
                        <div class="action">
                            <a href="{{URL::to('edit-blog/'.$all_blog->blog_id)}}" class="mr-10" >Sửa</a>
                             <a  onclick="return confirm('Are you sure to delete?')" href="{{URL::to('delete-blog/'.$all_blog->blog_id)}}" style="color:red" ><i class="fas fa-times"></i></a>
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