@extends('layout.homelayout')
@section('content')
<div class="account-login section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12">
          <div class="register-form">
            <div class="title">
              <h3>Đăng ký tài khoản</h3>
              <p>Registration takes less than a minute but gives you full control over your orders.</p>
            </div>
            <form class="row" method="POST" action="{{URL::to('/add-customer')}}">
                @csrf
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="reg-fn">Tên người dùng</label>
                  <input class="form-control" name="c_name"  type="text" id="reg-fn" required>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="reg-email">Địa chỉ E-mail </label>
                  <input class="form-control"   name="c_email" type="email" id="reg-email" required>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="reg-phone">Số điện thoại</label>
                  <input class="form-control" name="c_sdt" type="text" id="reg-phone" required>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="reg-pass">Mật khẩu</label>
                  <input class="form-control" name="c_password" type="password" id="reg-pass" required>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="reg-pass-confirm">Xác nhận mật khẩu</label>
                  <input class="form-control" type="password" id="reg-pass-confirm" required>
                </div>
              </div>
              <div class="button">
                <button class="btn" type="submit">Đăng ký</button>
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