@extends('layout.adminlayout')
@section('content')
    <section class="section">
        <div class="container-fluid">
            <!-- ========== title-wrapper start ========== -->
            <div class="title-wrapper pt-30">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="title mb-30">
                            <h2>ONTECH Dashboard</h2>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-md-6">
                        <div class="breadcrumb-wrapper mb-30">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#0">Trang quản trị</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        eCommerce
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
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="icon-card mb-30">
                        <div class="icon purple">
                            <i class="lni lni-cart-full"></i>
                        </div>
                        <div class="content">
                            <h6 class="mb-10">Đơn đặt hàng</h6>
                            <h3 class="text-bold mb-10">{{ $order_count }}</h3>
                            <p class="text-sm text-success">
                                <i class="lni lni-arrow-up"></i> +2.00%

                            </p>
                        </div>
                    </div>
                    <!-- End Icon Cart -->
                </div>
                <!-- End Col -->
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="icon-card mb-30">
                        <div class="icon success">
                            <i class="lni lni-dollar"></i>
                        </div>
                        <div class="content">
                            <h6 class="mb-10">Total Income</h6>
                            <h3 class="text-bold mb-10">$74,567</h3>
                            <p class="text-sm text-success">
                                <i class="lni lni-arrow-up"></i> +5.45%

                            </p>
                        </div>
                    </div>
                    <!-- End Icon Cart -->
                </div>
                <!-- End Col -->
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="icon-card mb-30">
                        <div class="icon primary">
                            <i class="lni lni-credit-cards"></i>
                        </div>
                        <div class="content">
                            <h6 class="mb-10">Total Expense</h6>
                            <h3 class="text-bold mb-10">$24,567</h3>
                            <p class="text-sm text-danger">
                                <i class="lni lni-arrow-down"></i> -2.00%

                            </p>
                        </div>
                    </div>
                    <!-- End Icon Cart -->
                </div>
                <!-- End Col -->
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="icon-card mb-30">
                        <div class="icon orange">
                            <i class="lni lni-user"></i>
                        </div>
                        <div class="content">
                            <h6 class="mb-10">Khách hàng</h6>
                            <h3 class="text-bold mb-10">{{ $customer_count }}</h3>
                            <p class="text-sm text-danger">
                                <i class="lni lni-arrow-down"></i> -25.00%

                            </p>
                        </div>
                    </div>
                    <!-- End Icon Cart -->
                </div>
                <!-- End Col -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-style mb-30">
                        <div class="title d-flex flex-wrap align-items-center justify-content-between">
                            <div class="left">
                                <h2 class="title mb-30">Thống kê truy cập</h2>
                            </div>
                            <div class="right">
                                <div class="select-style-1">
                                    <div class="select-position select-sm">
                                        <select class="light-bg">
                                            <option value="">Today</option>
                                            <option value="">Yesterday</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- end select -->
                            </div>
                        </div>
                        <!-- End Title -->
                        <div class="table-responsive">
                            <table class="table top-selling-table">
                                <thead>
                                    <tr>
                                        <th>
                                            <h6 class="text-sm text-medium">Đang online</h6>
                                        </th>
                                        <th class="min-width">
                                            <h6 class="text-sm text-medium">
                                                Tổng tháng trước
                                            </h6>
                                        </th>
                                        <th class="min-width">
                                            <h6 class="text-sm text-medium">
                                                Tổng tháng nay
                                            </h6>
                                        </th>
                                        <th class="min-width">
                                            <h6 class="text-sm text-medium">
                                                Tổng một năm
                                            </h6>
                                        </th>
                                        <th>
                                            <h4 class="text-sm text-medium ">
                                                Tổng truy cập
                                            </h4>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                          <div
                                          style="background-color: rgb(255, 208, 80); border-radius:50px 50px 50px 50px; text-align:center;">
                                          <p class="text-sm " style="color: white;font-size:16px;">
                                            {{ $visitor_count }}</p>
                                      </div>
                                           
                                        </td>
                                        <td>
                                            <p class="text-sm">{{ $visitor_of_last_month_count }}</p>
                                        </td>
                                        <td>
                                            <p class="text-sm">{{ $visitor_of_this_month_count }}</p>
                                        </td>
                                        <td>
                                            <p class="text-sm">{{ $visitor_of_year_count }}</p>
                                        </td>
                                        <td>
                                            <p class="text-sm">{{ $visitor_total }}</p>
                                        </td>

                                    </tr>

                                </tbody>
                            </table>
                            <!-- End Table -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="card-style mb-30">
                        <div class="title d-flex flex-wrap justify-content-between align-items-center">
                            <div class="left">
                                <h2 class="title mb-30">Sản phẩm xem nhiều</h2>
                            </div>

                        </div>
                        <!-- End Title -->
                        <div class="table-responsive">
                            <table class="table top-selling-table">
                                <thead>

                                    <tr>

                                        <th>
                                            <h6 class="text-sm text-medium">STT</h6>
                                        </th>
                                        <th class="min-width">
                                            <h6 class="text-sm text-medium">Hình ảnh</h6>
                                        </th>
                                        <th class="min-width">
                                            <h6 class="text-sm text-medium">Tên sản phẩm</h6>
                                        </th>
                                        <th class="min-width">
                                            <h6 class="text-sm text-medium">Lượt xem</h6>
                                        </th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        @php
                                            $i = 0;
                                        @endphp
                                        @foreach ($product_view as $view)
                                            <td>

                                                <p class="text-sm">{{ ++$i }}</p>
                                            </td>
                                            <td>
                                                <div class="image">
                                                    <img src="{{ asset('upload/productImage/' . $view->product_image) }}"
                                                        alt="" width="50" height="50" />
                                                </div>
                                            </td>

                                            <td>
                                                <p class="text-sm"><a
                                                        href="{{ URL::to('chi-tiet-san-pham/' . $view->product_id) }}">{{ $view->product_name }}</a>
                                                </p>
                                            </td>
                                            <td>
                                                <div
                                                    style="background-color: coral; border-radius:50px 50px 50px 50px; text-align:center;">
                                                    <p class="text-sm " style="color: white;font-size:16px;">
                                                        {{ $view->product_view }}</p>
                                                </div>
                                            </td>

                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- End Table -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                  <div class="card-style mb-30">
                      <div class="title d-flex flex-wrap justify-content-between align-items-center">
                          <div class="left">
                              <h4 class="text-medium mb-30">Bài viết xem nhiều</h4>
                          </div>

                      </div>
                      <!-- End Title -->
                      <div class="table-responsive">
                          <table class="table top-selling-table">
                              <thead>

                                  <tr>

                                      <th>
                                          <h6 class="text-sm text-medium">STT</h6>
                                      </th>
                                      <th class="min-width">
                                          <h6 class="text-sm text-medium">Hình ảnh</h6>
                                      </th>
                                      <th class="min-width">
                                          <h6 class="text-sm text-medium">Tên sản phẩm</h6>
                                      </th>
                                      <th class="min-width">
                                          <h6 class="text-sm text-medium">Lượt xem</h6>
                                      </th>

                                      <th></th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      @php
                                          $i = 0;
                                      @endphp
                                      @foreach ($blog_view as $view_b)
                                          <td>

                                              <p class="text-sm">{{ ++$i }}</p>
                                          </td>
                                          <td>
                                              <div class="image">
                                                  <img src="{{ asset('upload/blogImage/' . $view_b->blog_image) }}"
                                                      alt="" width="50" height="50" />
                                              </div>
                                          </td>

                                          <td>
                                              <p class="text-sm"><a
                                                      href="{{ URL::to('chi-tiet-san-pham/' . $view_b->blog_id) }}">{{ $view_b->blog_title }}</a>
                                              </p>
                                          </td>
                                          <td>
                                              <div
                                                  style="background-color: coral; border-radius:50px 50px 50px 50px; text-align:center;">
                                                  <p class="text-sm " style="color: white;font-size:16px;">
                                                      {{ $view_b->blog_view }}</p>
                                              </div>
                                          </td>

                                  </tr>
                                  @endforeach
                              </tbody>
                          </table>
                          <!-- End Table -->
                      </div>
                  </div>
              </div>
            </div>
           
        </div>

        <!-- End Row -->
        <div class="row">
            <div class="col-lg-7">
                <div class="card-style mb-30">
                    <div class="title d-flex flex-wrap justify-content-between">
                        <div class="left">
                            <h6 class="text-medium mb-10">Yearly Stats</h6>
                            <h3 class="text-bold">$245,479</h3>
                        </div>
                        <div class="right">
                            <div class="select-style-1">
                                <div class="select-position select-sm">
                                    <select class="light-bg">
                                        <option value="">Yearly</option>
                                        <option value="">Monthly</option>
                                        <option value="">Weekly</option>
                                    </select>
                                </div>
                            </div>
                            <!-- end select -->
                        </div>
                    </div>
                    <!-- End Title -->
                    <div class="chart">
                        <canvas id="Chart1" style="width: 100%; height: 400px"></canvas>
                    </div>
                    <!-- End Chart -->
                </div>
            </div>
            <!-- End Col -->
            <div class="col-lg-5">
                <div class="card-style mb-30">
                    <div class="title d-flex flex-wrap align-items-center justify-content-between">
                        <div class="left">
                            <h6 class="text-medium mb-30">Sales/Revenue</h6>
                        </div>
                        <div class="right">
                            <div class="select-style-1">
                                <div class="select-position select-sm">
                                    <select class="light-bg">
                                        <option value="">Yearly</option>
                                        <option value="">Monthly</option>
                                        <option value="">Weekly</option>
                                    </select>
                                </div>
                            </div>
                            <!-- end select -->
                        </div>
                    </div>
                    <!-- End Title -->
                    <div class="chart">
                        <canvas id="Chart2" style="width: 100%; height: 400px"></canvas>
                    </div>
                    <!-- End Chart -->
                </div>
            </div>
            <!-- End Col -->
        </div>
        <!-- End Row -->
        <div class="row">
            <div class="col-lg-5">
                <div class="card-style mb-30">
                    <div class="title d-flex justify-content-between align-items-center">
                        <div class="left">
                            <h6 class="text-medium mb-30">Sells by State</h6>
                        </div>
                    </div>
                    <!-- End Title -->
                    <div id="map" style="width: 100%; height: 400px"></div>
                    <p>Last updated: 7 days ago</p>
                </div>
            </div>
            <!-- End Col -->
            <div class="col-lg-7">
                <div class="card-style mb-30">
                    <div class="title d-flex flex-wrap justify-content-between align-items-center">
                        <div class="left">
                            <h6 class="text-medium mb-30">Top Selling Products</h6>
                        </div>
                        <div class="right">
                            <div class="select-style-1">
                                <div class="select-position select-sm">
                                    <select class="light-bg">
                                        <option value="">Yearly</option>
                                        <option value="">Monthly</option>
                                        <option value="">Weekly</option>
                                    </select>
                                </div>
                            </div>
                            <!-- end select -->
                        </div>
                    </div>
                    <!-- End Title -->
                    <div class="table-responsive">
                        <table class="table top-selling-table">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>
                                        <h6 class="text-sm text-medium">Products</h6>
                                    </th>
                                    <th class="min-width">
                                        <h6 class="text-sm text-medium">Category</h6>
                                    </th>
                                    <th class="min-width">
                                        <h6 class="text-sm text-medium">Price</h6>
                                    </th>
                                    <th class="min-width">
                                        <h6 class="text-sm text-medium">Sold</h6>
                                    </th>
                                    <th class="min-width">
                                        <h6 class="text-sm text-medium">Profit</h6>
                                    </th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="check-input-primary">
                                            <input class="form-check-input" type="checkbox" id="checkbox-1" />
                                        </div>
                                    </td>
                                    <td>
                                        <div class="product">
                                            <div class="image">
                                                <img src="assets/images/products/product-mini-1.jpg" alt="" />
                                            </div>
                                            <p class="text-sm">Arm Chair</p>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-sm">Interior</p>
                                    </td>
                                    <td>
                                        <p class="text-sm">$345</p>
                                    </td>
                                    <td>
                                        <p class="text-sm">43</p>
                                    </td>
                                    <td>
                                        <p class="text-sm">$45</p>
                                    </td>
                                    <td>
                                        <div class="action justify-content-end">
                                            <button class="more-btn ml-10 dropdown-toggle" id="moreAction1"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="lni lni-more-alt"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="moreAction1">
                                                <li class="dropdown-item">
                                                    <a href="#0" class="text-gray">Remove</a>
                                                </li>
                                                <li class="dropdown-item">
                                                    <a href="#0" class="text-gray">Edit</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="check-input-primary">
                                            <input class="form-check-input" type="checkbox" id="checkbox-1" />
                                        </div>
                                    </td>
                                    <td>
                                        <div class="product">
                                            <div class="image">
                                                <img src="assets/images/products/product-mini-2.jpg" alt="" />
                                            </div>
                                            <p class="text-sm">SOfa</p>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-sm">Interior</p>
                                    </td>
                                    <td>
                                        <p class="text-sm">$145</p>
                                    </td>
                                    <td>
                                        <p class="text-sm">13</p>
                                    </td>
                                    <td>
                                        <p class="text-sm">$15</p>
                                    </td>
                                    <td>
                                        <div class="action justify-content-end">
                                            <button class="more-btn ml-10 dropdown-toggle" id="moreAction1"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="lni lni-more-alt"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="moreAction1">
                                                <li class="dropdown-item">
                                                    <a href="#0" class="text-gray">Remove</a>
                                                </li>
                                                <li class="dropdown-item">
                                                    <a href="#0" class="text-gray">Edit</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="check-input-primary">
                                            <input class="form-check-input" type="checkbox" id="checkbox-1" />
                                        </div>
                                    </td>
                                    <td>
                                        <div class="product">
                                            <div class="image">
                                                <img src="assets/images/products/product-mini-3.jpg" alt="" />
                                            </div>
                                            <p class="text-sm">Dining Table</p>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-sm">Interior</p>
                                    </td>
                                    <td>
                                        <p class="text-sm">$95</p>
                                    </td>
                                    <td>
                                        <p class="text-sm">32</p>
                                    </td>
                                    <td>
                                        <p class="text-sm">$215</p>
                                    </td>
                                    <td>
                                        <div class="action justify-content-end">
                                            <button class="more-btn ml-10 dropdown-toggle" id="moreAction1"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="lni lni-more-alt"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="moreAction1">
                                                <li class="dropdown-item">
                                                    <a href="#0" class="text-gray">Remove</a>
                                                </li>
                                                <li class="dropdown-item">
                                                    <a href="#0" class="text-gray">Edit</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="check-input-primary">
                                            <input class="form-check-input" type="checkbox" id="checkbox-1" />
                                        </div>
                                    </td>
                                    <td>
                                        <div class="product">
                                            <div class="image">
                                                <img src="assets/images/products/product-mini-4.jpg" alt="" />
                                            </div>
                                            <p class="text-sm">Office Chair</p>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-sm">Interior</p>
                                    </td>
                                    <td>
                                        <p class="text-sm">$105</p>
                                    </td>
                                    <td>
                                        <p class="text-sm">23</p>
                                    </td>
                                    <td>
                                        <p class="text-sm">$345</p>
                                    </td>
                                    <td>
                                        <div class="action justify-content-end">
                                            <button class="more-btn ml-10 dropdown-toggle" id="moreAction1"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="lni lni-more-alt"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="moreAction1">
                                                <li class="dropdown-item">
                                                    <a href="#0" class="text-gray">Remove</a>
                                                </li>
                                                <li class="dropdown-item">
                                                    <a href="#0" class="text-gray">Edit</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- End Table -->
                    </div>
                </div>
            </div>
            <!-- End Col -->
        </div>
        <!-- End Row -->
        <div class="row">
            <div class="col-lg-7">
                <div class="card-style mb-30">
                    <div class="title d-flex flex-wrap align-items-center justify-content-between">
                        <div class="left">
                            <h6 class="text-medium mb-2">Sales Forecast</h6>
                        </div>
                        <div class="right">
                            <div class="select-style-1 mb-2">
                                <div class="select-position select-sm">
                                    <select class="light-bg">
                                        <option value="">Last Month</option>
                                        <option value="">Last 3 Months</option>
                                        <option value="">Last Year</option>
                                    </select>
                                </div>
                            </div>
                            <!-- end select -->
                        </div>
                    </div>
                    <!-- End Title -->
                    <div class="chart">
                        <div id="legend3">
                            <ul class="legend3 d-flex flex-wrap align-items-center mb-30">
                                <li>
                                    <div class="d-flex">
                                        <span class="bg-color primary-bg"> </span>
                                        <div class="text">
                                            <p class="text-sm text-success">
                                                <span class="text-dark">Revenue</span> +25.55%
                                                <i class="lni lni-arrow-up"></i>
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex">
                                        <span class="bg-color purple-bg"></span>
                                        <div class="text">
                                            <p class="text-sm text-success">
                                                <span class="text-dark">Net Profit</span> +45.55%
                                                <i class="lni lni-arrow-up"></i>
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex">
                                        <span class="bg-color orange-bg"></span>
                                        <div class="text">
                                            <p class="text-sm text-danger">
                                                <span class="text-dark">Order</span> -4.2%
                                                <i class="lni lni-arrow-down"></i>
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <canvas id="Chart3" style="width: 100%; height: 450px"></canvas>
                    </div>
                </div>
            </div>
            <!-- End Col -->
            <div class="col-lg-5">
                <div class="card-style mb-30">
                    <div class="title d-flex flex-wrap align-items-center justify-content-between">
                        <div class="left">
                            <h6 class="text-medium mb-2">Traffic</h6>
                        </div>
                        <div class="right">
                            <div class="select-style-1 mb-2">
                                <div class="select-position select-sm">
                                    <select class="bg-ligh">
                                        <option value="">Last 6 Months</option>
                                        <option value="">Last 3 Months</option>
                                        <option value="">Last Year</option>
                                    </select>
                                </div>
                            </div>
                            <!-- end select -->
                        </div>
                    </div>
                    <!-- End Title -->
                    <div class="chart">
                        <div id="legend4">
                            <ul class="legend3 d-flex flex-wrap align-items-center mb-30">
                                <li>
                                    <div class="d-flex">
                                        <span class="bg-color primary-bg"> </span>
                                        <div class="text">
                                            <p class="text-sm text-success">
                                                <span class="text-dark">Store Visits</span>
                                                +25.55%
                                                <i class="lni lni-arrow-up"></i>
                                            </p>
                                            <h2>3456</h2>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex">
                                        <span class="bg-color danger-bg"></span>
                                        <div class="text">
                                            <p class="text-sm text-danger">
                                                <span class="text-dark">Visitors</span> -2.05%
                                                <i class="lni lni-arrow-down"></i>
                                            </p>
                                            <h2>3456</h2>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <canvas id="Chart4" style="width: 100%; height: 420px"></canvas>
                    </div>
                    <!-- End Chart -->
                </div>
            </div>
            <!-- End Col -->
        </div>
        <!-- End Row -->
        <div class="row">
            {{-- <div class="col-lg-5">
          <div class="card-style calendar-card mb-30">
            <div id="calendar-mini"></div>
          </div>
        </div> --}}
            <!-- End Col -->
            <div class="col-lg-12">
                <div class="card-style mb-30">
                    <div class="title d-flex flex-wrap align-items-center justify-content-between">
                        <div class="left">
                            <h6 class="text-medium mb-30">Thống kê truy cập</h6>
                        </div>
                        <div class="right">
                            <div class="select-style-1">
                                <div class="select-position select-sm">
                                    <select class="light-bg">
                                        <option value="">Today</option>
                                        <option value="">Yesterday</option>
                                    </select>
                                </div>
                            </div>
                            <!-- end select -->
                        </div>
                    </div>
                    <!-- End Title -->
                    <div class="table-responsive">
                        <table class="table top-selling-table">
                            <thead>
                                <tr>
                                    <th>
                                        <h6 class="text-sm text-medium">Đang online</h6>
                                    </th>
                                    <th class="min-width">
                                        <h6 class="text-sm text-medium">
                                            Tổng tháng trước
                                        </h6>
                                    </th>
                                    <th class="min-width">
                                        <h6 class="text-sm text-medium">
                                            Tổng tháng nay
                                        </h6>
                                    </th>
                                    <th class="min-width">
                                        <h6 class="text-sm text-medium">
                                            Tổng một năm
                                        </h6>
                                    </th>
                                    <th>
                                        <h6 class="text-sm text-medium ">
                                            Tổng truy cập
                                        </h6>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <p class="text-sm">{{ $visitor_count }}</p>
                                    </td>
                                    <td>
                                        <p class="text-sm">{{ $visitor_of_last_month_count }}</p>
                                    </td>
                                    <td>
                                        <p class="text-sm">{{ $visitor_of_this_month_count }}</p>
                                    </td>
                                    <td>
                                        <p class="text-sm">{{ $visitor_of_year_count }}</p>
                                    </td>
                                    <td>
                                        <p class="text-sm">{{ $visitor_total }}</p>
                                    </td>

                                </tr>

                            </tbody>
                        </table>
                        <!-- End Table -->
                    </div>
                </div>
            </div>
            <!-- End Col -->
        </div>
        <!-- End Row -->
        </div>
        <!-- end container -->
    </section>
@endsection
