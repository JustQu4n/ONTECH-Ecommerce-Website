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
              <h6 class="mb-10">DANH SÁCH USER ACCOUNT</h6>
              <p class="text-sm mb-20">
                
              </p>
              <div class="table-wrapper table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                        <th><h6></th>
                        <th><h6>Tên User</h6></th>
                        <th><h6>Email</h6></th>
                        <th><h6>Phone</h6></th>
                        <th><h6>Admin</h6></th>
                        <th><h6>Author</h6></th>
                        <th><h6>Staff</h6></th>
                    </tr>
                    <!-- end table row-->
                  </thead>
                  <tbody>
                    @foreach ($admin as $key => $user)
                    <form action="{{url('/assign-role')}}" method="POST">
                        @csrf
                        <tr>
                         
                          <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                          <td>{{ $user->admin_name }}</td>
                          <td>{{ $user->admin_email }} <input type="hidden" name="admin_email" value="{{ $user->admin_email }}"></td>
                          <td>{{ $user->admin_phone }}</td>
                          {{-- <td>{{ $user->admin_password }}</td> --}}
                          <td><input type="checkbox" name="admin_role"  {{$user->hasRole('admin') ? 'checked' : ''}}></td>
                          <td><input type="checkbox" name="author_role" {{$user->hasRole('author') ? 'checked' : ''}}></td>
                          <td><input type="checkbox" name="staff_role"  {{$user->hasRole('staff') ? 'checked' : ''}}></td>
          
                        <td>
                            
                              
                           <input type="submit" value="Assign roles" class="btn btn-sm btn-primary">
                          
                        </td> 
          
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