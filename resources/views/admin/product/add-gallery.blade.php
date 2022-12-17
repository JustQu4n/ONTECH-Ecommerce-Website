@extends('layout.adminlayout')
@section('content')
<section class="table-components">
    <div class="container-fluid">
      <!-- ========== title-wrapper start ========== -->
      <div class="title-wrapper pt-30">
        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="title mb-30">
              <h2>THÊM THƯ VIỆN HÌNH ẢNH</h2>
            </div>
          </div>
          <!-- end col -->
          {{-- <div class="col-md-6">
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
          </div> --}}
          <!-- end col -->
        </div>
        <!-- end row -->
      </div>
      <!-- ========== title-wrapper end ========== -->

      <!-- ========== tables-wrapper start ========== -->
      <input type="hidden" name="pro_id" class="pro_id" value="{{$pro_id}}">
      @if (isset($_SESSION['message']))
          {{ Session::get('message') }}
      @endif
      <div class="tables-wrapper">
        <form action="{{URL::to('/insert-gallery/'.$pro_id)}}"  method="POST" enctype="multipart/form-data">
          @csrf
        <div class="row">
            <div class="col-md-3">

            </div>
            <div class="col-md-6">
                <input type="file" class="form-control" id="file" name="file[]" accept="image/*" multiple>
                <span id="error_gallery"></span>
            </div>
            <div class="col-md-3">
                <input type="submit" name="upload" name="taianh" value="Tải ảnh " class="btn btn-success">
            </div>
        </div>
        </form>
        <div class="row">
          <div class="col-lg-12">
            <div class="card-style">
             <form>
              @csrf
             <div id="gallery_load">
               
             <div>
            </form>
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