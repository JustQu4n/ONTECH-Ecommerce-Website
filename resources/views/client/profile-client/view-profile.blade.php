@extends('layout.homelayout')
@section('content')
    <main id="main" class="main mt-20">
        <div class="alert alert-success alert-dismissible fade show">
            <strong>Success!</strong> {{Session::get('message')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
        <section class="section profile">
            <div class="row">
                <div class="col-xl-4">
                    <form action="{{URL::to('/update-avatar-profile-client/'.Session::get('customer_id'))}}" method="POST" enctype="multipart/form-data" >
                        @csrf
                    <div class="card">
                        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                            <img src="{{ asset('upload/clientImage/' . Session::get('customer_image')) }}" alt="Profile"
                                 height="200px" width="200px" style="border-radius: 100px">
                                <input type="file" name="client_avatar">
                                <button type="submit" class="btn btn-success">Lưu</button>
                            <h2>{{ Session::get('customer_name') }}</h2>
                            <h3>Khách hàng</h3>
                            <div class="social-links mt-2">
                                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>

                <div class="col-xl-8">

                    <div class="card">
                        <div class="card-body pt-3">
                            <!-- Bordered Tabs -->
                            <ul class="nav nav-tabs nav-tabs-bordered">

                                <li class="nav-item">
                                    <button class="nav-link active" data-bs-toggle="tab"
                                        data-bs-target="#profile-overview">Overview</button>
                                </li>

                            </ul>
                            <div class="tab-content pt-2">

                                <div class="tab-pane fade show active profile-overview" id="profile-overview">

                                    <h5 class="card-title">Thông tin cá nhân</h5>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label ">Họ và tên</div>
                                        <div class="col-lg-9 col-md-8">{{ Session::get('customer_name') }}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Email</div>
                                        <div class="col-lg-9 col-md-8">{{ Session::get('customer_email') }}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Số điện thoại</div>
                                        <div class="col-lg-9 col-md-8">{{ Session::get('customer_phone') }}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Địa chỉ</div>
                                        <div class="col-lg-9 col-md-8">{{ Session::get('customer_address') }}</div>
                                    </div>


                                </div>


                            </div><!-- End Bordered Tabs -->

                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body pt-3">
                            <!-- Bordered Tabs -->
                            <ul class="nav nav-tabs nav-tabs-bordered">

                                <li class="nav-item">
                                    <button class="nav-link active" data-bs-toggle="tab"
                                        data-bs-target="#profile-overview">Chỉnh sửa thông tin cá nhân</button>
                                </li>


                            </ul>
                            <div class="tab-content pt-2">

                                <div class="tab-pane fade show active profile-overview" id="profile-overview">

                                    <!-- Profile Edit Form -->
                                    <form action="{{URL::to('/update-infor-profile-client/'.Session::get('customer_id'))}}" method="POST" enctype="multipart/form-data" >
                                       @csrf
                                        <div class="row mb-3">
                                            <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">
                                               Ảnh</label>
                                            <div class="col-md-8 col-lg-9">
                                              
                                            </div>
                                           
                                        </div>

                                        <div class="row mb-3">
                                            <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Họ Và Tên</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input  type="text" class="form-control" id="fullName"
                                                  value="{{ Session::get('customer_name') }}"  name="customer_name" >
                                            </div>
                                        </div>


                                        <div class="row mb-3">
                                            <label for="Job" class="col-md-4 col-lg-3 col-form-label">Email</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="customer_email" type="text" class="form-control" value="{{ Session::get('customer_email') }}" >
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Country" class="col-md-4 col-lg-3 col-form-label">SĐT</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="customer_phone" type="text" class="form-control" value="{{ Session::get('customer_phone') }}"
                                                    >
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Address" class="col-md-4 col-lg-3 col-form-label">Địa chỉ giao hàng</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="customer_address" type="text" class="form-control" value="{{ Session::get('customer_address') }}"
                                                    >
                                            </div>
                                        </div>



                                        <div class="row mb-3">
                                            <label for="Facebook" class="col-md-4 col-lg-3 col-form-label">Tài khoản Facebook</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="customer_facebook" type="text" class="form-control"
                                                    id="Facebook" value="https://www.facebook.com/iamq.falconm/" >
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Instagram" class="col-md-4 col-lg-3 col-form-label"> Tài khoản Instagram
                                               </label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="instagram" type="text" class="form-control" value="https://www.facebook.com/iamq.falconm/"/>
                                            </div>
                                        </div>


                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
                                        </div>
                                    </form><!-- End Profile Edit Form -->

                                </div>


                               

                            </div><!-- End Bordered Tabs -->

                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body pt-3">
                            <!-- Bordered Tabs -->
                            <ul class="nav nav-tabs nav-tabs-bordered">

                                <li class="nav-item">
                                    <button class="nav-link active" data-bs-toggle="tab"
                                        data-bs-target="#profile-overview">Đổi mật khẩu</button>
                                </li>


                            </ul>
                            <div class="tab-content pt-2">

                                <div class="tab-pane fade show active profile-overview" id="profile-overview">

                                    <!-- Change Password Form -->
                                    <form action="{{URL::to('/update-password-profile-client/'.Session::get('customer_id'))}}" method="POST">
                                        @csrf
                                        <div class="row mb-3">
                                            <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">Mật khẩu mới</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="customer_password" type="password" class="form-control"
                                                    id="newPassword">
                                            </div>
                                        </div>

                                        

                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">Lưu mật khẩu</button>
                                        </div>
                                    </form><!-- End Change Password Form -->

                                </div>



                            </div><!-- End Bordered Tabs -->

                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection
