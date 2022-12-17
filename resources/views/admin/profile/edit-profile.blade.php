@extends('layout.adminlayout')
@section('content')
    <section class="section">
      
     <div class="container-fluid">
            <!-- ========== title-wrapper start ========== -->
            <div class="title-wrapper pt-30">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="titlemb-30">
                            <h2>Settings</h2>
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
                                    <li class="breadcrumb-item"><a href="#0">Pages</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Settings
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
               <form action="{{URL::to('save-profile-ad/'.Auth::user()->admin_id)}}" method="POST" enctype="multipart/form-data"> 
                
                @csrf
            <div class="row">
                <div class="col-lg-6">
                    <div class="card-style settings-card-1 mb-30">
                        <div
                            class="
                title
                mb-30
                d-flex
                justify-content-between
                align-items-center
              ">
                            <h6>My Profile</h6>
                            <button class="border-0 bg-transparent">
                                <i class="lni lni-pencil-alt"></i>
                            </button>
                        </div>
                        <div class="profile-info">
                            <div class="d-flex align-items-center mb-30">
                                <div class="profile-image">
                                    <img  src="{{asset('upload/userImage/'. Auth::user()->admin_image)}}" alt="" />
                                    <div class="update-image">
                                        <input type="file" />
                                        <label for=""><i class="lni lni-cloud-upload"></i></label>
                                    </div>
                                </div>
                                <div class="profile-meta">
                                    <h5 class="text-bold text-dark mb-10"><?php $admin_name = Auth::user()->admin_name; if($admin_name){ echo'<p>'.$admin_name.'</p>'; }?></h5>
                                    <p class="text-sm text-gray">Admin</p>
                                </div>
                            </div>
                            <div class="input-style-1">
                                <label>Email</label>
                                <input type="email" placeholder="admin@example.com" value="{{ $email= Auth::user()->admin_email}}" name="admin_email" />
                            </div>
                            <div class="input-style-1">
                                <label>Password</label>
                                <input type="password"  name="admin_password" />
                            </div>
                     
            </div>
          </div>
          <!-- end card -->
        </div>
        <!-- end col -->
        <div class="col-lg-6">
          <div class="card-style settings-card-2 mb-30">
            <div class="title mb-30">
              <h6>My Profile</h6>
            </div>
            <form action="#">
              <div class="row">
                <div class="col-12">
                  <div class="input-style-1">
                    <label>Tên user</label>
                    <input type="text" placeholder="Full Name" value="{{Auth::user()->admin_name}}" name="admin_name" />
                  </div>
                </div>
                <div class="col-12">
                  <div class="input-style-1">
                    <label>Email</label>
                    <input type="email" placeholder="Email" value="{{Auth::user()->admin_email}}"  name="admin_email"/>
                  </div>
                </div>
                <div class="col-12">
                    <div class="input-style-1">
                      <label>SĐT</label>
                      <input type="text" placeholder="" value="{{Auth::user()->admin_phone}}"  name="admin_phone"/>
                    </div>
                  </div>
                <img src="{{asset('upload/userImage/'.Auth::user()->admin_image)}}" alt="">
                <div class="col-12">
                    <div class="input-style-1">
                      <label>Ảnh</label>
                      <input type="file" placeholder="Email"  name="admin_image" />
                    </div>
                  </div>
            </div>
            <button type="submit" class="btn btn-success">Cập nhật</button>
            <!-- end col -->
        </div>
        <!-- end row -->
        </div>
        <!-- end container -->
    </form>
    </section>
@endsection
