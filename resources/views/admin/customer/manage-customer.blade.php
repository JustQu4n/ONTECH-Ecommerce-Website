@extends('layout.adminlayout')
@section('content')
<section class="table-components">
    <div class="container-fluid">
      <!-- ========== title-wrapper start ========== -->
      <div class="title-wrapper pt-30">
        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="title mb-30">
              <h2>DANH SÁCH KHÁCH HÀNG</h2>
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
              <h6 class="mb-10">DANH SÁCH KHÁCH HÀNG</h6>
              <p class="text-sm mb-20">
                
              </p>
              <div class="table-wrapper table-responsive">
                <table class="table" id="myTable">
                  <thead>
                    <tr>
                        <th><h6>ID</h6></th>
                        <th><h6>Ảnh</h6></th>
                        <th><h6>Tên khách hàng</h6></th>
                        <th><h6>Email</h6></th>
                        <th><h6>Phone</h6></th>
                        <th><h6>Địa chỉ</h6></th>
                        <th><h6>Fb</h6></th>
                        <th><h6>VIP</h6></th>
                        {{-- <th><h6>Author</h6></th>
                        <th><h6>Staff</h6></th> --}}
                    </tr>
                    <!-- end table row-->
                  </thead>
                  <tbody>
                    @foreach ($all_customer as  $customer)
                    <form action="{{url('/assign-role')}}" method="POST">
                        @csrf
                        <tr>
                          <td>{{ $customer->customer_id }}</td>
                          <td><img src="{{asset('upload/clientImage/'.$customer->customer_image)}}" alt="" width="78" height="80" style="border-radius: 50px"></td>
                          <td>{{ $customer->customer_name }}</td>
                          <td>{{ $customer->customer_email }}</td>
                          <td>{{ $customer->customer_phone }}</td>
                          <td>{{ $customer->customer_address}}</td>
                          <td>{{ $customer->customer_fb}}</td>
                        </tr>
                      </form>
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