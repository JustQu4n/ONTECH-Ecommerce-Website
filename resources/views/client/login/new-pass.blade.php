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
            @php
            $token = $_GET['token'];
            $email = $_GET['email'];
        @endphp
            <form class="row" method="POST" action="{{URL::to('/reset-new-pass')}}">
                @csrf
             
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="reg-fn">Mật khẩu mới</label>
                  <input type="hidden" name="email" value="{{ $email}}">
                  <input type="hidden" name="token" value="{{ $token }}">
                  <input class="form-control" name="password_account"  type="text" id="reg-fn" required>
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