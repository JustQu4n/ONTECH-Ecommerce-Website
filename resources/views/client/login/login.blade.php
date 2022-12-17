@extends('layout.homelayout')
@section('content')
<div class="account-login section">
    <div class="container ">
      <div class="row mt-30">
        
        <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12">
          <form class="card login-form" method="POST" action="{{URL::to('/login-customer')}}">
            @csrf
            <div class="card-body">
              <div class="title">
                <h3>ĐĂNG NHẬP NGAY</h3>
                <p>Bạn có thể đăng nhập bằng tài khoản mạng xã hội.</p>
              </div>
              <div class="social-login">
                <div class="row">
                  <div class="col-lg-4 col-md-4 col-12"><a class="btn facebook-btn" href="javascript:void(0)"><i
                        class="lni lni-facebook-filled"></i> Facebook
                      login</a></div>
                  <div class="col-lg-4 col-md-4 col-12"><a class="btn twitter-btn" href="javascript:void(0)"><i
                        class="lni lni-twitter-original"></i> Twitter
                      login</a></div>
                  <div class="col-lg-4 col-md-4 col-12"><a class="btn google-btn" href="javascript:void(0)"><i
                        class="lni lni-google"></i> Google login</a>
                  </div>
                </div>
              </div>
              <div class="alt-option">
                <span>Or</span>
              </div>
              <div class="form-group input-group">
                <label for="reg-fn">Email</label>
                <input class="form-control" name="email_acc" type="email" id="reg-email" required>
              </div>
              <div class="form-group input-group">
                <label for="reg-fn">Mật khẩu</label>
                <input class="form-control" name="pass_acc" type="password" id="reg-pass" required>
              </div>
              <div class="d-flex flex-wrap justify-content-between bottom-content">
                <div class="form-check">
                  <input type="checkbox" class="form-check-input width-auto" id="exampleCheck1">
                  <label class="form-check-label">Remember me</label>
                </div>
                <a class="" href="{{url::to('/forget-pass')}}"><p style="font-size:16px">Quên mật khẩu</p></a>
              </div>
              <div class="button">
                <button class="btn" type="submit">Đăng nhập</button>
              </div>
              <p class="outer-link">Don't have an account? <a href="{{url::to('/register-client')}}">Đăng ký  </a>
              </p>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

@endsection