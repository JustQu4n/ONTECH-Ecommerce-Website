<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
       <!-- ========== All CSS files linkup ========= -->
       <link rel="stylesheet" href="{{asset('backend/assets/css/bootstrap.min.css')}}" />
       <link rel="stylesheet" href="{{asset('backend/assets/css/LineIcons.css')}}" />
       <link rel="stylesheet" href="{{asset('backend/assets/css/quill/bubble.css')}}" />
       <link rel="stylesheet" href="{{asset('backend/assets/css/quill/snow.css')}}" />
       <link rel="stylesheet" href="{{asset('backend/assets/css/fullcalendar.css')}}" />
       <link rel="stylesheet" href="{{asset('backend/assets/css/morris.css')}}" />
       <link rel="stylesheet" href="{{asset('backend/assets/css/datatable.css')}}" />
       <link rel="stylesheet" href="{{asset('backend/assets/css/main.css')}}" />
</head>
<body>
  
   <div class="alert alert-danger alert-dismissible fade show">
    <strong></strong>  <?php 
    $message = Session::get('message_login');
 if ($message){
      echo ' '. $message.'';
      $message = Session::put('message',null);
 }    
   ?>  
    
</div>
    <section class="signin-section">
        <div class="container-fluid">
           

            <div class="row g-0 auth-row">
                <div class="col-lg-6">
                    <div class="auth-cover-wrapper bg-primary-100">
                        <div class="auth-cover">
                            <div class="title text-center">
                                <h1 class="text-primary mb-10">ONTECH</h1>
                                <p class="text-medium">
                                    Sign in to your Existing account to continue
                                </p>
                            </div>
                            <div class="cover-image">
                                <img src="{{asset('backend/assets/images/auth/signin-image.svg')}}" alt="" />
                            </div>
                            <div class="shape-image">
                                <img src="{{asset('backend/assets/images/auth/shape.svg')}}" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-6">
                    <div class="signin-wrapper">
                        <div class="form-wrapper">
                            <h6 class="mb-15">ĐĂNG NHẬP</h6>
                            <p class="text-sm mb-25">
                                Start creating the best possible user experience for you
                                customers.
                            </p>
                            <form action="{{URL::to('/login')}}" method="post">
                                {{csrf_field()}}
                                <div class="row">
                                    <div class="col-12">
                                        <div class="input-style-1">
                                            <label>Email</label>
                                            <input type="email" name="admin_email" placeholder="Email" />
                                        </div>
                                    </div>
                                    @error('admin_email')
                                    <span style="color:red;">{{$message}}</span>
                                    @enderror
                                    <!-- end col -->
                                    <div class="col-12">
                                        <div class="input-style-1">
                                            <label>Mật khẩu</label>
                                            <input type="password" name="admin_password"  placeholder="Password" />
                                        </div>
                                    </div>
                                    @error('admin_password')
                                    <span style="color:red;">{{$message}}</span>
                                    @enderror
                                    <!-- end col -->
                                    <div class="col-xxl-6 col-lg-12 col-md-6">
                                        <div class="form-check checkbox-style mb-30">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="checkbox-remember" />
                                            <label class="form-check-label" for="checkbox-remember">
                                                Remember me next time</label>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-xxl-6 col-lg-12 col-md-6">
                                        <div
                                            class="
                        text-start text-md-end text-lg-start text-xxl-end
                        mb-30
                      ">
                                            <a href="#0" class="hover-underline">Forgot Password?</a>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-12">
                                        <div
                                            class="
                        button-group
                        d-flex
                        justify-content-center
                        flex-wrap
                      ">
                                            <button
                                            type="submit"
                                                class="
                          main-btn
                          primary-btn
                          btn-hover
                          w-100
                          text-center
                        ">
                                                Đăng nhập
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->
                            </form>
                            <div class="singin-option pt-40">
                                <p class="text-sm text-medium text-center text-gray">
                                    Easy Sign In With
                                </p>
                                <div
                                    class="
                    button-group
                    pt-40
                    pb-40
                    d-flex
                    justify-content-center
                    flex-wrap
                  ">
                                    <button class="main-btn primary-btn-outline m-2">
                                        <i class="lni lni-facebook-filled mr-10"></i>
                                        Facebook
                                    </button>
                                    <button class="main-btn danger-btn-outline m-2">
                                        <i class="lni lni-google mr-10"></i>
                                        Google
                                    </button>
                                </div>
                                <p class="text-sm text-medium text-dark text-center">
                                    Don’t have any account yet?
                                    <a href="{{URL::to('register-auth')}}">Create an account</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
    </section>

</body>
</html>