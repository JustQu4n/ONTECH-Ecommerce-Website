@extends('layout.adminlayout')
@section('content')
    <section class="tab-components">
        <div class="container-fluid">
            <!-- ========== title-wrapper start ========== -->
            <div class="title-wrapper pt-30">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="title mb-30">
                            <h2>Form Elements</h2>
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
                                    <li class="breadcrumb-item"><a href="#0">Forms</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        THÔNG TIN VẬN CHUYỂN
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

            <!-- ========== form-elements-wrapper start ========== -->
            <div class="form-elements-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- input style start -->
                        <form>
                            @csrf

                            <div class="card-style mb-30">
                                <h6 class="mb-25">Input Fields</h6>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Chọn thành phố</label>
                                    <select name="city" id="city" class="form-control input-sm m-bot15 choose city">

                                        <option value="">Chọn tỉnh thành phố</option>
                                        @foreach ($city as $key => $ci)
                                            <option value="{{ $ci->matp }}">{{ $ci->name_city }}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Chọn quận huyện</label>
                                    <select name="province" id="province"
                                        class="form-control input-sm m-bot15 province choose">
                                        <option value="">Chọn quận huyện</option>

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Chọn xã phường</label>
                                    <select name="wards" id="wards" class="form-control input-sm m-bot15 wards">
                                        <option value="">Chọn xã phường</option>
                                    </select>
                                </div>
                                <div class="input-style-1">
                                    <label>Phí vận chuyển</label>
                                    <input type="text" name="fee_ship" class=" fee_ship" />
                                </div>
                                <button type="submit" name="add_delivery"
                                    class="main-btn success-btn rounded-md btn-hover">Thêm</button>
                            </div>

                        </form>
                    </div>
                    <!-- end col -->
                </div>
                <div id="load_delivery">

                </div>
                <!-- end row -->
            </div>
            <!-- ========== form-elements-wrapper end ========== -->
        </div>
        <!-- end container -->
    </section>
@endsection
