@extends('layout.homelayout')
@section('content')
<div class="account-login section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12">
          <div class="register-form">
            <div class="title">
              <h3>Quên mật khẩu</h3>
              
            </div>
            <form class="row" method="POST" action="{{URL::to('/send-mail-pass')}}">
                @csrf
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="reg-fn">Email người dùng</label>
                  <input class="form-control" name="email_account"  type="text" id="reg-fn" required>
                </div>
              </div>
              <div class="button">
                <button class="btn" type="submit">Gửi</button>
              </div>
              <p class="outer-link">Already have an account? <a href="login.html">Đăng nhập ngay</a>
              </p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

    
@endsection