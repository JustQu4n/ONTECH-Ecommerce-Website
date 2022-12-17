@extends('layout.homelayout')
@section('content')
    <section class="hero-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12 custom-padding-right">
                    <div class="slider-head">
                        <div class="hero-slider">
                            @foreach ($slider as $sliderimage)
                                <div class="single-slider">
                                    <img src="{{ asset('upload/sliderImage/' . $sliderimage->slider_image) }}" alt=""
                                        width="100%" height="100%">
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                {{-- <div class="col-lg-4 col-12">
            <div class="row">
               <div class="col-lg-12 col-md-6 col-12 md-custom-padding">
                  <div class="hero-small-banner">
                    <img src="frontend\assets\images\banner\Asus-promo.jpg" alt="" >
                  </div>
               </div>
               <div class="col-lg-12 col-md-6 col-12">
                  <div class="hero-small-banner">
                     <img src="frontend/assets/anhEshoper/sliderImage/bn2.jpg" alt="">
                  </div>
               </div>
            </div>
         </div> --}}
            </div>
        </div>
    </section>
    <div class="brands">
        <div class="container">
            <div class="brands-logo-wrapper">
                <div class="brands-logo-carousel d-flex align-items-center justify-content-between"
                    style="background-color: white;">
                    @foreach ($brands as $logobrand)
                        <div class="brand-logo" style="background-color: white;">
                            <img src="{{ asset('upload/brandImage/' . $logobrand->brand_image) }}" alt="#">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <section class="special-offer section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title" style="  background-image: url(upload/productImage/line.jpg);">
                        <h2>SẢN PHẨM NỔI BẬT</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        @foreach ($noibat as $key => $sp_noibat)
                            <div class="col-6  col-sm-3 col-md-15 col-md-3 col-lg-3 col-md-15 ">
                                <div class="single-product">
                                    <div class="product-image">
                                        <a href="{{ URL::to('chi-tiet-san-pham/' . $sp_noibat->product_id) }}"><img
                                                src="{{ asset('upload/productImage/' . $sp_noibat->product_image) }}"
                                                alt="#"></a>
                                                <form action="">
                                                    @csrf
                                                    <input type="hidden" value="1"  class="form-control qty cart_product_qty_{{$sp_noibat->product_id}}" name="qty">
                                                    <input type="hidden" value="{{$sp_noibat->product_id}}" class="cart_product_id_{{$sp_noibat->product_id}}">
                                                    <input type="hidden" id="wishlist_productname{{$sp_noibat->product_id}}" value="{{$sp_noibat->product_name}}" class="cart_product_name_{{$sp_noibat->product_id}}">
                                                    <input type="hidden" id="wishlist_productimage{{$sp_noibat->product_id}}" value="{{$sp_noibat->product_image}}" class="cart_product_image_{{$sp_noibat->product_id}}">
                                                    <input type="hidden" id="wishlist_productprice{{$sp_noibat->product_id}}" value="{{number_format($sp_noibat->product_price)}}" >
                                                    <input type="hidden" value="{{$sp_noibat->product_price}}" class="cart_product_price_{{$sp_noibat->product_id}}">
                                                    <div class="button">
                                                        {{-- <a href="{{ URL::to('chi-tiet-san-pham/' . $sp_noibat->product_id) }}"
                                                            class="btn"><i class="lni lni-cart"></i>Mua ngay</a> --}}
                                                            <input type="button" value="Thêm vào giỏ hàng" class="btn btn-primary add-to-cart" data-id_product="{{$sp_noibat->product_id}}" name="add-to-cart"/>
                                                    </div>
                                                </form>
                                       
                                        {{-- <div class="button">
                                            <a href="{{ URL::to('chi-tiet-san-pham/' . $sp_noibat->product_id) }}"
                                                class="btn"><i class="lni lni-cart"></i>Mua ngay</a>
                                        </div> --}}
                                    </div>
                                    <div class="product-info">
                                        <span class="category">Còn hàng</span>
                                        <h4 class="title" style="height:50px">
                                            <a
                                                href="{{ URL::to('chi-tiet-san-pham/' . $sp_noibat->product_id) }}">{{ $sp_noibat->product_name }}</a>
                                        </h4>
                                        <ul class="review">
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><span>{{ $sp_noibat->product_view }} luợt xem</span></li>
                                        </ul>
                                        <div class="price">
                                            <span>{{ number_format($sp_noibat->product_price) }}₫</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
               
            </div>
        </div>
    </section>

    <section class="trending-product section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title" style="  background-image: url(upload/productImage/line.jpg);">
                        <h2>SẢN PHẨM MỚI NHẤT</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($all_products as $key => $value_product)
                    <div class="col-6  col-sm-3 col-md-15 col-md-3 col-lg-3 col-md-15  ">

                        <div class="single-product">
                            <div class="product-image">
                                <a href="{{ URL::to('chi-tiet-san-pham/' . $value_product->product_id) }}"> <img
                                        src="{{ asset('upload/productImage/' . $value_product->product_image) }}"
                                        alt="#"></a>
                                        <form action="">
                                            @csrf
                                            <input type="hidden" value="1"  class="form-control qty cart_product_qty_{{$value_product->product_id}}" name="qty">
                                            <input type="hidden" value="{{$value_product->product_id}}" class="cart_product_id_{{$value_product->product_id}}">
                                            <input type="hidden" id="wishlist_productname{{$value_product->product_id}}" value="{{$value_product->product_name}}" class="cart_product_name_{{$value_product->product_id}}">
                                            <input type="hidden" id="wishlist_productimage{{$value_product->product_id}}" value="{{$value_product->product_image}}" class="cart_product_image_{{$value_product->product_id}}">
                                            <input type="hidden" id="wishlist_productprice{{$value_product->product_id}}" value="{{number_format($value_product->product_price)}}" >
                                            <input type="hidden" value="{{$value_product->product_price}}" class="cart_product_price_{{$value_product->product_id}}">
                                            <div class="button">
                                                {{-- <a href="{{ URL::to('chi-tiet-san-pham/' . $sp_noibat->product_id) }}"
                                                    class="btn"><i class="lni lni-cart"></i>Mua ngay</a> --}}
                                                    <input type="button" value="Thêm vào giỏ" class="btn btn-primary add-to-cart" data-id_product="{{$value_product->product_id}}" name="add-to-cart"/>
                                            </div>
                                        </form>
                            </div>
                            <div class="product-info">
                                @if ($value_product->product_soluong > 0)
                                    <span class="category">Còn hàng</span>
                                @else
                                    <span class="category">Hết hàng</span>
                                @endif

                                <h4 class="title" style="height:50px">
                                    <a
                                        href="{{ URL::to('chi-tiet-san-pham/' . $value_product->product_id) }}">{{ $value_product->product_name }}</a>
                                </h4>
                                <ul class="review">
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star"></i></li>
                                    <li><span>{{ $value_product->product_view }} luợt xem</span></li>
                                </ul>
                                <div class="price">
                                    <span>{{ number_format($value_product->product_price) }}₫</span>
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-12 col-12 d-flex justify-content-center mt-20">
                    <div class="button">
                        <a href="{{ URL::to('shop') }}" class="btn">Xem thêm</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="banner section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">

                    <div class="single-banner">
                        <img src="upload\sliderImage\gioi-thieu-ban-phim-logitech-pro-kda-usb-rgb-den-trang-gx-brown-sw.jpg"
                            alt="">
                    </div>

                </div>

            </div>
        </div>
    </section>



    <section class="trending-product section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title" style="  background-image: url(upload/productImage/line.jpg);">
                        <h2>LAPTOP GAMING - VĂN PHÒNG</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($laptop as $key => $show_laptop)
                    <div class="col-6  col-sm-3 col-md-15 col-md-3 col-lg-3 col-md-15  ">
                        <div class="single-product">
                            <div class="product-image">
                                <a href="{{ URL::to('chi-tiet-san-pham/' . $show_laptop->product_id) }}"><img
                                        src="{{ asset('upload/productImage/' . $show_laptop->product_image) }}"
                                        alt="#"></a>
                                        <form action="">
                                            @csrf
                                            <input type="hidden" value="1"  class="form-control qty cart_product_qty_{{$show_laptop->product_id}}" name="qty">
                                            <input type="hidden" value="{{$show_laptop->product_id}}" class="cart_product_id_{{$show_laptop->product_id}}">
                                            <input type="hidden" id="wishlist_productname{{$show_laptop->product_id}}" value="{{$show_laptop->product_name}}" class="cart_product_name_{{$show_laptop->product_id}}">
                                            <input type="hidden" id="wishlist_productimage{{$show_laptop->product_id}}" value="{{$show_laptop->product_image}}" class="cart_product_image_{{$show_laptop->product_id}}">
                                            <input type="hidden" id="wishlist_productprice{{$show_laptop->product_id}}" value="{{number_format($show_laptop->product_price)}}" >
                                            <input type="hidden" value="{{$show_laptop->product_price}}" class="cart_product_price_{{$show_laptop->product_id}}">
                                            <div class="button">
                                                {{-- <a href="{{ URL::to('chi-tiet-san-pham/' . $sp_noibat->product_id) }}"
                                                    class="btn"><i class="lni lni-cart"></i>Mua ngay</a> --}}
                                                    <input type="button" value="Thêm vào giỏ" class="btn btn-primary add-to-cart" data-id_product="{{$show_laptop->product_id}}" name="add-to-cart"/>
                                            </div>
                                        </form>
                            </div>
                            <div class="product-info">
                                @if ($value_product->product_soluong > 0)
                                    <span class="category">Còn hàng</span>
                                @else
                                    <span class="category">Hết hàng</span>
                                @endif

                                <h4 class="title" style="height:50px">
                                    <a
                                        href="{{ URL::to('chi-tiet-san-pham/' . $show_laptop->product_id) }}">{{ $show_laptop->product_name }}</a>
                                </h4>
                                <ul class="review">
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star"></i></li>
                                    <li><span>{{ $value_product->product_view }} luợt xem</span></li>
                                </ul>
                                <div class="price">
                                    <span>{{ number_format($show_laptop->product_price) }}₫</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-12 col-12 d-flex justify-content-center mt-20">
                    <div class="button">
                        <a href="{{ URL::to('shop') }}" class="btn">Xem thêm</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="trending-product section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title" style="  background-image: url(upload/productImage/line.jpg);">
                        <h2>BÀN PHÍM CƠ - GAMING</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($keyboard as $key => $show_keyboard)
                    <div class="col-6  col-sm-3 col-md-15 col-md-3 col-lg-3 col-md-15  ">
                        <div class="single-product">
                            <div class="product-image">
                                <a href="{{ URL::to('chi-tiet-san-pham/' . $show_keyboard->product_id) }}"><img
                                        src="{{ asset('upload/productImage/' . $show_keyboard->product_image) }}"
                                        alt="#"></a>
                                        <form action="">
                                            @csrf
                                            <input type="hidden" value="1"  class="form-control qty cart_product_qty_{{$show_keyboard->product_id}}" name="qty">
                                            <input type="hidden" value="{{$show_keyboard->product_id}}" class="cart_product_id_{{$show_keyboard->product_id}}">
                                            <input type="hidden" id="wishlist_productname{{$show_keyboard->product_id}}" value="{{$show_keyboard->product_name}}" class="cart_product_name_{{$show_keyboard->product_id}}">
                                            <input type="hidden" id="wishlist_productimage{{$show_keyboard->product_id}}" value="{{$show_keyboard->product_image}}" class="cart_product_image_{{$show_keyboard->product_id}}">
                                            <input type="hidden" id="wishlist_productprice{{$show_keyboard->product_id}}" value="{{number_format($show_keyboard->product_price)}}" >
                                            <input type="hidden" value="{{$show_keyboard->product_price}}" class="cart_product_price_{{$show_keyboard->product_id}}">
                                            <div class="button">
                                                {{-- <a href="{{ URL::to('chi-tiet-san-pham/' . $sp_noibat->product_id) }}"
                                                    class="btn"><i class="lni lni-cart"></i>Mua ngay</a> --}}
                                                    <input type="button" value="Thêm vào giỏ" class="btn btn-primary add-to-cart" data-id_product="{{$show_keyboard->product_id}}" name="add-to-cart"/>
                                            </div>
                                        </form>
                            </div>
                            <div class="product-info">
                                @if ($value_product->product_soluong > 0)
                                    <span class="category">Còn hàng</span>
                                @else
                                    <span class="category">Hết hàng</span>
                                @endif

                                <h4 class="title" style="height:50px">
                                    <a
                                        href="{{ URL::to('chi-tiet-san-pham/' . $show_keyboard->product_id) }}">{{ $show_keyboard->product_name }}</a>
                                </h4>
                                <ul class="review">
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star"></i></li>
                                    <li><span>{{ $value_product->product_view }} luợt xem</span></li>
                                </ul>
                                <div class="price">
                                    <span>{{ number_format($show_keyboard->product_price) }}₫</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-12 col-12 d-flex justify-content-center mt-20">
                    <div class="button">
                        <a href="{{ URL::to('shop') }}" class="btn">Xem thêm</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="trending-product section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title" style="  background-image: url(upload/productImage/line.jpg);">
                        <h2>MÀN HÌNH MÁY TÍNH</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($all_monitor as $key => $monitor)
                    <div class="col-6  col-sm-3 col-md-15 col-md-3 col-lg-3 col-md-15  ">
                        <div class="single-product">
                            <div class="product-image">
                                <a href="{{ URL::to('chi-tiet-san-pham/' . $monitor->product_id) }}"><img
                                        src="{{ asset('upload/productImage/' . $monitor->product_image) }}"
                                        alt="#"></a>
                                <div class="button">
                                    <a href="{{ URL::to('chi-tiet-san-pham/' . $monitor->product_id) }}" class="btn"><i
                                            class="lni lni-cart"></i>Mua ngay</a>
                                </div>
                            </div>
                            <div class="product-info">
                                @if ($monitor->product_soluong > 0)
                                    <span class="category">Còn hàng</span>
                                @else
                                    <span class="category">Hết hàng</span>
                                @endif

                                <h4 class="title" style="height:50px">
                                    <a
                                        href="{{ URL::to('chi-tiet-san-pham/' . $monitor->product_id) }}">{{ $monitor->product_name }}</a>
                                </h4>
                                <ul class="review">
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star"></i></li>
                                    <li><span>{{ $monitor->product_view }} luợt xem</span></li>
                                </ul>
                                <div class="price">
                                    <span>{{ number_format($monitor->product_price) }}₫</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-12 col-12 d-flex justify-content-center mt-20">
                    <div class="button">
                        <a href="{{ URL::to('shop') }}" class="btn">Xem thêm</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="blog-section section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title" style="  background-image: url(upload/productImage/line.jpg);">
                        <h2>Thông tin công nghệ</h2>

                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($all_blog as $blog)
                    <div class="col-6  col-sm-3 col-md-15 col-md-3 col-lg-3 col-md-15  ">
                        <div class="single-blog">
                            <div class="blog-img">
                                <a href="{{ URL::to('blog-detail/' . $blog->blog_id) }}">
                                    <img src="{{ asset('upload/blogImage/' . $blog->blog_image) }}" alt="#">
                                </a>
                            </div>
                            <div class="blog-content">
                                <a class="category" href="javascript:void(0)">eCommerce</a>
                                <h4>
                                    <a href="{{ URL::to('blog-detail/' . $blog->blog_id) }}">{{ $blog->blog_title }}</a>
                                </h4>
                                <div class="button">
                                    <a href="{{ URL::to('blog-detail/' . $blog->blog_id) }}" class="btn">Xem chi
                                        tiết</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
