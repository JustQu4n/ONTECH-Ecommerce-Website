<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon" />

    <!-- ========== All CSS files linkup ========= -->
    <link rel="stylesheet" href="{{ asset('backend/assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/assets/css/LineIcons.css') }}" />
    {{-- <link rel="stylesheet" href="{{asset('backend/assets/css/quill/bubble.css')}}" />
    <link rel="stylesheet" href="{{asset('backend/assets/css/quill/snow.css')}}" />
    <link rel="stylesheet" href="{{asset('backend/assets/css/fullcalendar.css')}}" />
    <link rel="stylesheet" href="{{asset('backend/assets/css/morris.css')}}" />
    <link rel="stylesheet" href="{{asset('backend/assets/css/datatable.css')}}" /> --}}
    <link rel="stylesheet" href="{{ asset('backend/assets/css/main.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="csrf-token" content="{{ csrf_field() }}">
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
</head>

<body>
    <!-- ======== sidebar-nav start =========== -->
    <aside class="sidebar-nav-wrapper">
        <div class="navbar-logo">
            <a href="{{ URL::to('/dashboard') }}">
                <img src="{{ asset('backend/assets/default-monochrome.svg') }}" alt="logo" width="100"
                    height="100" />
            </a>
        </div>
        <nav class="sidebar-nav">
            <ul>

                <li class="nav-item nav-item-has-children">
                    <a href="#0" data-bs-toggle="collapse" data-bs-target="#category" aria-controls="category"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon">
                            <svg width="22" height="22" viewBox="0 0 22 22">
                                <path
                                    d="M17.4167 4.58333V6.41667H13.75V4.58333H17.4167ZM8.25 4.58333V10.0833H4.58333V4.58333H8.25ZM17.4167 11.9167V17.4167H13.75V11.9167H17.4167ZM8.25 15.5833V17.4167H4.58333V15.5833H8.25ZM19.25 2.75H11.9167V8.25H19.25V2.75ZM10.0833 2.75H2.75V11.9167H10.0833V2.75ZM19.25 10.0833H11.9167V19.25H19.25V10.0833ZM10.0833 13.75H2.75V19.25H10.0833V13.75Z" />
                            </svg>
                        </span>
                        <span class="text">Danh mục</span>
                    </a>
                    <ul id="category" class="collapse  dropdown-nav">
                        <li>
                            <a href="{{ URL::to('add-category') }}">
                                <span class="text">
                                    Thêm mới danh mục <span class="pro-badge">Pro </span>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ URL::to('all-category') }}">
                                <span class="text">
                                    Hiển thị tất cả <span class="pro-badge">Pro </span>
                                </span>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item nav-item-has-children">
                    <a href="#0" data-bs-toggle="collapse" data-bs-target="#brand" aria-controls="brand"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon">
                            <svg width="22" height="22" viewBox="0 0 22 22">
                                <path
                                    d="M17.4167 4.58333V6.41667H13.75V4.58333H17.4167ZM8.25 4.58333V10.0833H4.58333V4.58333H8.25ZM17.4167 11.9167V17.4167H13.75V11.9167H17.4167ZM8.25 15.5833V17.4167H4.58333V15.5833H8.25ZM19.25 2.75H11.9167V8.25H19.25V2.75ZM10.0833 2.75H2.75V11.9167H10.0833V2.75ZM19.25 10.0833H11.9167V19.25H19.25V10.0833ZM10.0833 13.75H2.75V19.25H10.0833V13.75Z" />
                            </svg>
                        </span>
                        <span class="text">Thương hiệu</span>
                    </a>
                    <ul id="brand" class="collapse  dropdown-nav">
                        <li>
                            <a href="{{ URL::to('add-brand') }}">
                                <span class="text">
                                    Thêm mới thương hiệu <span class="pro-badge">Pro </span>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ URL::to('all-brand') }}">
                                <span class="text">
                                    Hiển thị tất cả <span class="pro-badge">Pro </span>
                                </span>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item nav-item-has-children">
                    <a href="#0" data-bs-toggle="collapse" data-bs-target="#product" aria-controls="product"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon">
                            <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M4,6H20V16H4M20,18A2,2 0 0,0 22,16V6C22,4.89 21.1,4 20,4H4C2.89,4 2,4.89 2,6V16A2,2 0 0,0 4,18H0V20H24V18H20Z" />
                            </svg>
                        </span>
                        <span class="text">Sản phẩm</span>
                    </a>
                    <ul id="product" class="collapse  dropdown-nav">
                        <li>
                            <a href="{{ URL::to('add-product') }}">
                                <span class="text">
                                    Thêm mới sản phẩm <span class="pro-badge">Pro </span>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ URL::to('all-product') }}">
                                <span class="text">
                                    Hiển thị tất cả <span class="pro-badge">Pro </span>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ URL::to('all-product-price') }}">
                                <span class="text">
                                    Hiển thị giá sản phẩm <span class="pro-badge">Pro </span>
                                </span>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item nav-item-has-children">
                    <a href="#0" data-bs-toggle="collapse" data-bs-target="#order" aria-controls="order"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon">
                            <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M19 3H14.82C14.4 1.84 13.3 1 12 1S9.6 1.84 9.18 3H5C3.9 3 3 3.9 3 5V19C3 20.1 3.9 21 5 21H19C20.1 21 21 20.1 21 19V5C21 3.9 20.1 3 19 3M12 3C12.55 3 13 3.45 13 4S12.55 5 12 5 11 4.55 11 4 11.45 3 12 3M7 7H17V5H19V19H5V5H7V7M12 17V15H17V17H12M12 11V9H17V11H12M8 12V9H7V8H9V12H8M9.25 14C9.66 14 10 14.34 10 14.75C10 14.95 9.92 15.14 9.79 15.27L8.12 17H10V18H7V17.08L9 15H7V14H9.25" />
                            </svg>
                        </span>
                        <span class="text">Quản lý đơn đặt hàng</span>
                    </a>
                    <ul id="order" class="collapse  dropdown-nav">
                        <li>
                            <a href="{{ URL::to('manage-order') }}">
                                <span class="text">
                                    Hiện thị đơn đặt hàng
                                </span>
                            </a>
                        </li>


                    </ul>
                </li>
                @hasRole(['admin'])
                <li class="nav-item nav-item-has-children">
                    <a href="#0" data-bs-toggle="collapse" data-bs-target="#coupon" aria-controls="coupon"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon">
                            <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M4,4A2,2 0 0,0 2,6V10C3.11,10 4,10.9 4,12A2,2 0 0,1 2,14V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V14A2,2 0 0,1 20,12C20,10.89 20.9,10 22,10V6C22,4.89 21.1,4 20,4H4M15.5,7L17,8.5L8.5,17L7,15.5L15.5,7M8.81,7.04C9.79,7.04 10.58,7.83 10.58,8.81A1.77,1.77 0 0,1 8.81,10.58C7.83,10.58 7.04,9.79 7.04,8.81A1.77,1.77 0 0,1 8.81,7.04M15.19,13.42C16.17,13.42 16.96,14.21 16.96,15.19A1.77,1.77 0 0,1 15.19,16.96C14.21,16.96 13.42,16.17 13.42,15.19A1.77,1.77 0 0,1 15.19,13.42Z" />
                            </svg>
                        </span>
                        <span class="text">Quản lý mã giảm giá</span>
                    </a>
                    <ul id="coupon" class="collapse  dropdown-nav">
                        <li>
                            <a href="{{ URL::to('insert-coupon') }}">
                                <span class="text">
                                    Thêm mã giảm giá
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ URL::to('list-coupon') }}">
                                <span class="text">
                                    Hiển thị mã giảm giá
                                </span>
                            </a>
                        </li>


                    </ul>
                </li>
                @endhasRole
                @hasRole(['admin'])
                <li class="nav-item nav-item-has-children">
                    <a href="#0" data-bs-toggle="collapse" data-bs-target="#deliver" aria-controls="deliver"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon">
                            <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M18.5,16.8C17.8,16.8 17.3,16.2 17.3,15.6C17.3,14.9 17.9,14.4 18.5,14.4C19.1,14.4 19.7,15 19.7,15.6C19.8,16.2 19.2,16.8 18.5,16.8M18.5,12C16.6,12 15,13.6 15,15.5C15,18.1 18.5,22 18.5,22C18.5,22 22,18.1 22,15.5C22,13.6 20.4,12 18.5,12M14.9,11.3C14.6,10 13.4,9 12,9C10.3,9 9,10.3 9,12C9,13.7 10.3,15 12,15C12.4,15 12.7,14.9 13,14.8C13.2,13.4 13.9,12.2 14.9,11.3M13,16H7A2,2 0 0,0 5,14V10A2,2 0 0,0 7,8H17A2,2 0 0,0 19,10C19,10 20,10 21,10.6V6H3V18H13.5C13.3,17.3 13.1,16.7 13,16Z" />
                            </svg>
                        </span>
                        <span class="text">Quản lý vận chuyển</span>
                    </a>
                    <ul id="deliver" class="collapse  dropdown-nav">
                        <li>
                            <a href="{{ URL::to('delivery') }}">
                                <span class="text">
                                    Quản lý vận chuyển
                                </span>
                            </a>
                        </li>



                    </ul>
                </li>
                @endhasRole
                <li class="nav-item nav-item-has-children">
                    <a href="#0" data-bs-toggle="collapse" data-bs-target="#slider" aria-controls="slider"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon">
                            <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M19,19H5V5H19M19,3H5A2,2 0 0,0 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3M10,8V16L15,12L10,8Z" />
                            </svg>
                        </span>
                        <span class="text">Quản lý slider</span>
                    </a>
                    <ul id="slider" class="collapse  dropdown-nav">
                        <li>
                            <a href="{{ URL::to('manage-slider') }}">
                                <span class="text">
                                    Quản lý banner,slider
                                </span>
                            </a>
                        </li>



                    </ul>
                </li>
                <li class="nav-item nav-item-has-children">
                    <a href="#0" data-bs-toggle="collapse" data-bs-target="#blog" aria-controls="blog"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon">
                            <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M21 10V9L15 3H5C3.89 3 3 3.89 3 5V19C3 20.11 3.9 21 5 21H11V19.13L19.39 10.74C19.83 10.3 20.39 10.06 21 10M14 4.5L19.5 10H14V4.5M22.85 14.19L21.87 15.17L19.83 13.13L20.81 12.15C21 11.95 21.33 11.95 21.53 12.15L22.85 13.47C23.05 13.67 23.05 14 22.85 14.19M19.13 13.83L21.17 15.87L15.04 22H13V19.96L19.13 13.83Z" />
                            </svg>
                        </span>
                        <span class="text">Quản lý Blog</span>
                    </a>
                    <ul id="blog" class="collapse  dropdown-nav">
                        <li>
                            <a href="{{ URL::to('all-blog') }}">
                                <span class="text">
                                    Hiển thị bài viết
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ URL::to('add-blog') }}">
                                <span class="text">
                                    Thêm bài viết
                                </span>
                            </a>
                        </li>

                    </ul>
                </li>
                @hasRole(['admin'])
                    <li class="nav-item nav-item-has-children">
                        <a href="#0" data-bs-toggle="collapse" data-bs-target="#client" aria-controls="client"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon">
                                <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M12,2C6.47,2 2,6.5 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M15.6,8.34C16.67,8.34 17.53,9.2 17.53,10.27C17.53,11.34 16.67,12.2 15.6,12.2A1.93,1.93 0 0,1 13.67,10.27C13.66,9.2 14.53,8.34 15.6,8.34M9.6,6.76C10.9,6.76 11.96,7.82 11.96,9.12C11.96,10.42 10.9,11.5 9.6,11.5C8.3,11.5 7.24,10.42 7.24,9.12C7.24,7.81 8.29,6.76 9.6,6.76M9.6,15.89V19.64C7.2,18.89 5.3,17.04 4.46,14.68C5.5,13.56 8.13,13 9.6,13C10.13,13 10.8,13.07 11.5,13.21C9.86,14.08 9.6,15.23 9.6,15.89M12,20C11.72,20 11.46,20 11.2,19.96V15.89C11.2,14.47 14.14,13.76 15.6,13.76C16.67,13.76 18.5,14.15 19.44,14.91C18.27,17.88 15.38,20 12,20Z" />
                                </svg>
                            </span>
                            <span class="text">Quản lý Khách Hàng</span>
                        </a>
                        <ul id="client" class="collapse  dropdown-nav">
                            <li>
                                <a href="{{ URL::to('/manage-customer') }}">
                                    <span class="text">
                                        Liệt kê Khách Hàng
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ URL::to('add-user') }}">
                                    <span class="text">
                                        Thêm User
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endhasRole
                @hasRole(['admin'])
                    <li class="nav-item nav-item-has-children">
                        <a href="#0" data-bs-toggle="collapse" data-bs-target="#Admin" aria-controls="Admin"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon">
                                <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M6,17C6,15 10,13.9 12,13.9C14,13.9 18,15 18,17V18H6M15,9A3,3 0 0,1 12,12A3,3 0 0,1 9,9A3,3 0 0,1 12,6A3,3 0 0,1 15,9M3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5A2,2 0 0,0 19,3H5C3.89,3 3,3.9 3,5Z" />
                                </svg>
                            </span>
                            <span class="text">Account Admin</span>
                        </a>
                        <ul id="Admin" class="collapse  dropdown-nav">
                            <li>
                                <a href="{{ URL::to('/user') }}">
                                    <span class="text">
                                        Liệt kê Account
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ URL::to('add-user') }}">
                                    <span class="text">
                                        Thêm User
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endhasRole
                @hasRole(['admin'])
                <li class="nav-item nav-item-has-children">
                    <a href="#0" data-bs-toggle="collapse" data-bs-target="#layout" aria-controls="layout"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon">
                            <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M6,17C6,15 10,13.9 12,13.9C14,13.9 18,15 18,17V18H6M15,9A3,3 0 0,1 12,12A3,3 0 0,1 9,9A3,3 0 0,1 12,6A3,3 0 0,1 15,9M3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5A2,2 0 0,0 19,3H5C3.89,3 3,3.9 3,5Z" />
                            </svg>
                        </span>
                        <span class="text">Seting Layout</span>
                    </a>
                    <ul id="layout" class="collapse  dropdown-nav">
                        <li>
                            <a href="{{ URL::to('/setting-home') }}">
                                <span class="text">
                                    Trang Home
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ URL::to('add-user') }}">
                                <span class="text">
                                    Thêm User
                                </span>
                            </a>
                        </li>
                    </ul>
                </li>
                @endhasRole
            </ul>
        </nav>

    </aside>
    <div class="overlay"></div>
    <!-- ======== sidebar-nav end =========== -->

    <!-- ======== main-wrapper start =========== -->
    <main class="main-wrapper">
        <!-- ========== header start ========== -->
        <header class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-6">
                        <div class="header-left d-flex align-items-center">
                            <div class="menu-toggle-btn mr-20">
                                <button id="menu-toggle" class="main-btn primary-btn btn-hover">
                                    <i class="lni lni-chevron-left me-2"></i> Menu
                                </button>
                            </div>
                            <div class="header-search d-none d-md-flex">
                                <form action="#">
                                    <input type="text" placeholder="Search..." />
                                    <button><i class="lni lni-search-alt"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-6">
                        <div class="header-right">
                            <!-- notification start -->
                            <div class="notification-box ml-15 d-none d-md-flex">
                                <button class="dropdown-toggle" type="button" id="notification"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="lni lni-alarm"></i>
                                    <span>2</span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="notification">
                                    <li>
                                        <a href="#0">
                                            <div class="image">
                                                <img src="assets/images/lead/lead-6.png" alt="" />
                                            </div>
                                            <div class="content">
                                                <h6>
                                                    John Doe
                                                    <span class="text-regular">
                                                        comment on a product.
                                                    </span>
                                                </h6>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consect etur adipiscing
                                                    elit Vivamus tortor.
                                                </p>
                                                <span>10 mins ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#0">
                                            <div class="image">
                                                <img src="assets/images/lead/lead-1.png" alt="" />
                                            </div>
                                            <div class="content">
                                                <h6>
                                                    Jonathon
                                                    <span class="text-regular">
                                                        like on a product.
                                                    </span>
                                                </h6>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consect etur adipiscing
                                                    elit Vivamus tortor.
                                                </p>
                                                <span>10 mins ago</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- notification end -->
                            <!-- message start -->
                            <div class="header-message-box ml-15 d-none d-md-flex">
                                <button class="dropdown-toggle" type="button" id="message"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="lni lni-envelope"></i>
                                    <span>3</span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="message">
                                    <li>
                                        <a href="#0">
                                            <div class="image">
                                                <img src="assets/images/lead/lead-5.png" alt="" />
                                            </div>
                                            <div class="content">
                                                <h6>Jacob Jones</h6>
                                                <p>Hey!I can across your profile and ...</p>
                                                <span>10 mins ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#0">
                                            <div class="image">
                                                <img src="assets/images/lead/lead-3.png" alt="" />
                                            </div>
                                            <div class="content">
                                                <h6>John Doe</h6>
                                                <p>Would you mind please checking out</p>
                                                <span>12 mins ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#0">
                                            <div class="image">
                                                <img src="assets/images/lead/lead-2.png" alt="" />
                                            </div>
                                            <div class="content">
                                                <h6>Anee Lee</h6>
                                                <p>Hey! are you available for freelance?</p>
                                                <span>1h ago</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- message end -->
                            <!-- filter start -->
                            <div class="filter-box ml-15 d-none d-md-flex">
                                <button class="" type="button" id="filter">
                                    <i class="lni lni-funnel"></i>
                                </button>
                            </div>
                            <!-- filter end -->
                            <!-- profile start -->
                            <div class="profile-box ml-15">
                                <button class="dropdown-toggle bg-transparent border-0" type="button" id="profile"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="profile-info">
                                        <div class="info">
                                            <h6><?php $admin_name = Auth::user()->admin_name;
                                            if ($admin_name) {
                                                echo '<p>' . $admin_name . '</p>';
                                            } ?></h6>
                                            <div class="image">
                                                <img src="{{ asset('upload/userImage/' . Auth::user()->admin_image) }}"
                                                    alt="" height="40" ; />
                                                <span class="status"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <i class="lni lni-chevron-down"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profile">
                                    <?php $admin_name = Auth::user()->admin_name;
                                    
                                    $admin_id = Auth::user()->admin_id; ?>
                                    <li>
                                        <a href="{{ URL::to('/view-profile-ad/' . $admin_id) }}">
                                            <i class="lni lni-user"></i> Xem thông tin cá nhân
                                        </a>
                                    </li>

                                    <a href="{{ URL::to('edit-profile/' . $admin_id) }}"> <i class="lni lni-cog"></i>
                                        Settings </a>
                                    </li>
                                    <li>
                                        <a href="{{ URL::to('/logout-auth') }}"> <i class="lni lni-exit"></i> Đăng
                                            xuất </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- profile end -->
                        </div>
                    </div>
                </div>
            </div>
        </header>

        @yield('content')

    </main>

    <!-- ============ Theme Option End ============= -->

    <!-- ========= All Javascript files linkup ======== -->
    <script src="{{ asset('backend/assets/js/bootstrap.bundle.min.js') }}"></script>
    {{-- <script src="{{asset('backend/assets/js/Chart.min.js')}}"></script>
    <script src="{{asset('backend/assets/js/apexcharts.min.js')}}"></script>
    <script src="{{asset('backend/assets/js/dynamic-pie-chart.js')}}"></script>
    <script src="{{asset('backend/assets/js/moment.min.js')}}"></script>
    <script src="{{asset('backend/assets/js/fullcalendar.js')}}"></script>
    <script src="{{asset('backend/assets/js/jvectormap.min.js')}}"></script>
    <script src="{{asset('backend/assets/js/world-merc.js')}}"></script>
    <script src="{{asset('backend/assets/js/polyfill.js')}}"></script>
    <script src="{{asset('backend/assets/js/quill.min.js')}}"></script>
    <script src="{{asset('backend/assets/js/datatable.js')}}"></script>
    <script src="{{asset('backend/assets/js/Sortable.min.js')}}"></script> --}}
    <script src="{{ asset('backend/assets/js/main.js') }}"></script>
    <script src="{{ asset('backend/assets/js/jquery1.9.1.min.js') }}"></script>
    <script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('product_content');
        CKEDITOR.replace('product_desc');
        CKEDITOR.replace('blog_content');
        CKEDITOR.replace('content_short');
    </script>


    <script>
        // ======== jvectormap activation
        var markers = [{
                name: "Egypt",
                coords: [26.8206, 30.8025]
            },
            {
                name: "Russia",
                coords: [61.524, 105.3188]
            },
            {
                name: "Canada",
                coords: [56.1304, -106.3468]
            },
            {
                name: "Greenland",
                coords: [71.7069, -42.6043]
            },
            {
                name: "Brazil",
                coords: [-14.235, -51.9253]
            },
        ];

        var jvm = new jsVectorMap({
            map: "world_merc",
            selector: "#map",
            zoomButtons: true,

            regionStyle: {
                initial: {
                    fill: "#d1d5db",
                },
            },

            labels: {
                markers: {
                    render: (marker) => marker.name,
                },
            },

            markersSelectable: true,
            selectedMarkers: markers.map((marker, index) => {
                var name = marker.name;

                if (name === "Russia" || name === "Brazil") {
                    return index;
                }
            }),
            markers: markers,
            markerStyle: {
                initial: {
                    fill: "#4A6CF7"
                },
                selected: {
                    fill: "#ff5050"
                },
            },
            markerLabelStyle: {
                initial: {
                    fontWeight: 400,
                    fontSize: 14,
                },
            },
        });
        // ====== calendar activation
        document.addEventListener("DOMContentLoaded", function() {
            var calendarMiniEl = document.getElementById("calendar-mini");
            var calendarMini = new FullCalendar.Calendar(calendarMiniEl, {
                initialView: "dayGridMonth",
                headerToolbar: {
                    end: "today prev,next",
                },
            });
            calendarMini.render();
        });

        // =========== chart one start
        const ctx1 = document.getElementById("Chart1").getContext("2d");
        const chart1 = new Chart(ctx1, {
            // The type of chart we want to create
            type: "line", // also try bar or other graph types

            // The data for our dataset
            data: {
                labels: [
                    "Jan",
                    "Fab",
                    "Mar",
                    "Apr",
                    "May",
                    "Jun",
                    "Jul",
                    "Aug",
                    "Sep",
                    "Oct",
                    "Nov",
                    "Dec",
                ],
                // Information about the dataset
                datasets: [{
                    label: "",
                    backgroundColor: "transparent",
                    borderColor: "#4A6CF7",
                    data: [
                        600, 800, 750, 880, 940, 880, 900, 770, 920, 890, 976, 1100,
                    ],
                    pointBackgroundColor: "transparent",
                    pointHoverBackgroundColor: "#4A6CF7",
                    pointBorderColor: "transparent",
                    pointHoverBorderColor: "#fff",
                    pointHoverBorderWidth: 5,
                    pointBorderWidth: 5,
                    pointRadius: 8,
                    pointHoverRadius: 8,
                }, ],
            },

            // Configuration options
            defaultFontFamily: "Inter",
            options: {
                tooltips: {
                    callbacks: {
                        labelColor: function(tooltipItem, chart) {
                            return {
                                backgroundColor: "#ffffff",
                            };
                        },
                    },
                    intersect: false,
                    backgroundColor: "#f9f9f9",
                    titleFontFamily: "Inter",
                    titleFontColor: "#8F92A1",
                    titleFontColor: "#8F92A1",
                    titleFontSize: 12,
                    bodyFontFamily: "Inter",
                    bodyFontColor: "#171717",
                    bodyFontStyle: "bold",
                    bodyFontSize: 16,
                    multiKeyBackground: "transparent",
                    displayColors: false,
                    xPadding: 30,
                    yPadding: 10,
                    bodyAlign: "center",
                    titleAlign: "center",
                },

                title: {
                    display: false,
                },
                legend: {
                    display: false,
                },

                scales: {
                    yAxes: [{
                        gridLines: {
                            display: false,
                            drawTicks: false,
                            drawBorder: false,
                        },
                        ticks: {
                            padding: 35,
                            max: 1200,
                            min: 500,
                        },
                    }, ],
                    xAxes: [{
                        gridLines: {
                            drawBorder: false,
                            color: "rgba(143, 146, 161, .1)",
                            zeroLineColor: "rgba(143, 146, 161, .1)",
                        },
                        ticks: {
                            padding: 20,
                        },
                    }, ],
                },
            },
        });

        // =========== chart one end

        // =========== chart two start
        const ctx2 = document.getElementById("Chart2").getContext("2d");
        const chart2 = new Chart(ctx2, {
            // The type of chart we want to create
            type: "bar", // also try bar or other graph types
            // The data for our dataset
            data: {
                labels: [
                    "Jan",
                    "Fab",
                    "Mar",
                    "Apr",
                    "May",
                    "Jun",
                    "Jul",
                    "Aug",
                    "Sep",
                    "Oct",
                    "Nov",
                    "Dec",
                ],
                // Information about the dataset
                datasets: [{
                    label: "",
                    backgroundColor: "#4A6CF7",
                    barThickness: 6,
                    maxBarThickness: 8,
                    data: [
                        600, 700, 1000, 700, 650, 800, 690, 740, 720, 1120, 876, 900,
                    ],
                }, ],
            },
            // Configuration options
            options: {
                borderColor: "#F3F6F8",
                borderWidth: 15,
                backgroundColor: "#F3F6F8",
                tooltips: {
                    callbacks: {
                        labelColor: function(tooltipItem, chart) {
                            return {
                                backgroundColor: "rgba(104, 110, 255, .0)",
                            };
                        },
                    },
                    backgroundColor: "#F3F6F8",
                    titleFontColor: "#8F92A1",
                    titleFontSize: 12,
                    bodyFontColor: "#171717",
                    bodyFontStyle: "bold",
                    bodyFontSize: 16,
                    multiKeyBackground: "transparent",
                    displayColors: false,
                    xPadding: 30,
                    yPadding: 10,
                    bodyAlign: "center",
                    titleAlign: "center",
                },

                title: {
                    display: false,
                },
                legend: {
                    display: false,
                },

                scales: {
                    yAxes: [{
                        gridLines: {
                            display: false,
                            drawTicks: false,
                            drawBorder: false,
                        },
                        ticks: {
                            padding: 35,
                            max: 1200,
                            min: 0,
                        },
                    }, ],
                    xAxes: [{
                        gridLines: {
                            display: false,
                            drawBorder: false,
                            color: "rgba(143, 146, 161, .1)",
                            zeroLineColor: "rgba(143, 146, 161, .1)",
                        },
                        ticks: {
                            padding: 20,
                        },
                    }, ],
                },
            },
        });
        // =========== chart two end

        // =========== chart three start
        const ctx3 = document.getElementById("Chart3").getContext("2d");
        const chart3 = new Chart(ctx3, {
            // The type of chart we want to create
            type: "line", // also try bar or other graph types

            // The data for our dataset
            data: {
                labels: [
                    "Jan",
                    "Fab",
                    "Mar",
                    "Apr",
                    "May",
                    "Jun",
                    "Jul",
                    "Aug",
                    "Sep",
                    "Oct",
                    "Nov",
                    "Dec",
                ],
                // Information about the dataset
                datasets: [{
                        label: "Revenue",
                        backgroundColor: "transparent",
                        borderColor: "#4a6cf7",
                        data: [80, 120, 110, 100, 130, 150, 115, 145, 140, 130, 160, 210],
                        pointBackgroundColor: "transparent",
                        pointHoverBackgroundColor: "#4a6cf7",
                        pointBorderColor: "transparent",
                        pointHoverBorderColor: "#fff",
                        pointHoverBorderWidth: 3,
                        pointBorderWidth: 5,
                        pointRadius: 5,
                        pointHoverRadius: 8,
                    },
                    {
                        label: "Profit",
                        backgroundColor: "transparent",
                        borderColor: "#9b51e0",
                        data: [
                            120, 160, 150, 140, 165, 210, 135, 155, 170, 140, 130, 200,
                        ],
                        pointBackgroundColor: "transparent",
                        pointHoverBackgroundColor: "#9b51e0",
                        pointBorderColor: "transparent",
                        pointHoverBorderColor: "#fff",
                        pointHoverBorderWidth: 3,
                        pointBorderWidth: 5,
                        pointRadius: 5,
                        pointHoverRadius: 8,
                    },
                    {
                        label: "Order",
                        backgroundColor: "transparent",
                        borderColor: "#f2994a",
                        data: [180, 110, 140, 135, 100, 90, 145, 115, 100, 110, 115, 150],
                        pointBackgroundColor: "transparent",
                        pointHoverBackgroundColor: "#f2994a",
                        pointBorderColor: "transparent",
                        pointHoverBorderColor: "#fff",
                        pointHoverBorderWidth: 3,
                        pointBorderWidth: 5,
                        pointRadius: 5,
                        pointHoverRadius: 8,
                    },
                ],
            },

            // Configuration options
            options: {
                tooltips: {
                    intersect: false,
                    backgroundColor: "#fbfbfb",
                    titleFontColor: "#8F92A1",
                    titleFontSize: 16,
                    titleFontFamily: "Inter",
                    titleFontStyle: "400",
                    bodyFontFamily: "Inter",
                    bodyFontColor: "#171717",
                    bodyFontSize: 16,
                    multiKeyBackground: "transparent",
                    displayColors: false,
                    xPadding: 30,
                    yPadding: 15,
                    borderColor: "rgba(143, 146, 161, .1)",
                    borderWidth: 1,
                    title: false,
                },

                title: {
                    display: false,
                },

                layout: {
                    padding: {
                        top: 0,
                    },
                },

                legend: false,

                scales: {
                    yAxes: [{
                        gridLines: {
                            display: false,
                            drawTicks: false,
                            drawBorder: false,
                        },
                        ticks: {
                            padding: 35,
                            max: 300,
                            min: 50,
                        },
                    }, ],
                    xAxes: [{
                        gridLines: {
                            drawBorder: false,
                            color: "rgba(143, 146, 161, .1)",
                            zeroLineColor: "rgba(143, 146, 161, .1)",
                        },
                        ticks: {
                            padding: 20,
                        },
                    }, ],
                },
            },
        });
        // =========== chart three end

        // ================== chart four start
        const ctx4 = document.getElementById("Chart4").getContext("2d");
        const chart4 = new Chart(ctx4, {
            // The type of chart we want to create
            type: "bar", // also try bar or other graph types
            // The data for our dataset
            data: {
                labels: ["Jan", "Fab", "Mar", "Apr", "May", "Jun"],
                // Information about the dataset
                datasets: [{
                        label: "",
                        backgroundColor: "#4A6CF7",
                        barThickness: "flex",
                        maxBarThickness: 8,
                        data: [600, 700, 1000, 700, 650, 800],
                    },
                    {
                        label: "",
                        backgroundColor: "#d50100",
                        barThickness: "flex",
                        maxBarThickness: 8,
                        data: [690, 740, 720, 1120, 876, 900],
                    },
                ],
            },
            // Configuration options
            options: {
                borderColor: "#F3F6F8",
                borderWidth: 15,
                backgroundColor: "#F3F6F8",
                tooltips: {
                    callbacks: {
                        labelColor: function(tooltipItem, chart) {
                            return {
                                backgroundColor: "rgba(104, 110, 255, .0)",
                            };
                        },
                    },
                    backgroundColor: "#F3F6F8",
                    titleFontColor: "#8F92A1",
                    titleFontSize: 12,
                    bodyFontColor: "#171717",
                    bodyFontStyle: "bold",
                    bodyFontSize: 16,
                    multiKeyBackground: "transparent",
                    displayColors: false,
                    xPadding: 30,
                    yPadding: 10,
                    bodyAlign: "center",
                    titleAlign: "center",
                },

                title: {
                    display: false,
                },
                legend: {
                    display: false,
                },

                scales: {
                    yAxes: [{
                        gridLines: {
                            display: false,
                            drawTicks: false,
                            drawBorder: false,
                        },
                        ticks: {
                            padding: 35,
                            max: 1200,
                            min: 0,
                        },
                    }, ],
                    xAxes: [{
                        gridLines: {
                            display: false,
                            drawBorder: false,
                            color: "rgba(143, 146, 161, .1)",
                            zeroLineColor: "rgba(143, 146, 161, .1)",
                        },
                        ticks: {
                            padding: 20,
                        },
                    }, ],
                },
            },
        });
        // =========== chart four end
    </script>
    <script type="text/javascript">
        $('.update_quantity_order').click(function() {
            var order_product_id = $(this).data('product_id');
            var order_qty = $('.order_qty_' + order_product_id).val();
            var order_code = $('.order_code').val();
            var _token = $('input[name="_token"]').val();
            // alert(order_product_id);
            // alert(order_qty);
            // alert(order_code);
            $.ajax({
                url: '{{ url('/update-qty') }}',

                method: 'POST',

                data: {
                    _token: _token,
                    order_product_id: order_product_id,
                    order_qty: order_qty,
                    order_code: order_code
                },
                // dataType:"JSON",
                success: function(data) {

                    alert('Cập nhật số lượng thành công');

                    location.reload();




                }
            });

        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {

            fetch_delivery();

            function fetch_delivery() {
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url: '{{ url('/select-feeship') }}',
                    method: 'POST',
                    data: {
                        _token: _token
                    },
                    success: function(data) {
                        $('#load_delivery').html(data);
                    }
                });
            }
            $(document).on('blur', '.fee_feeship_edit', function() {

                var feeship_id = $(this).data('feeship_id');
                var fee_value = $(this).text();
                var _token = $('input[name="_token"]').val();
                // alert(feeship_id);
                // alert(fee_value);
                $.ajax({
                    url: '{{ url('/update-delivery') }}',
                    method: 'POST',
                    data: {
                        feeship_id: feeship_id,
                        fee_value: fee_value,
                        _token: _token
                    },
                    success: function(data) {
                        fetch_delivery();
                    }
                });

            });
            $('.add_delivery').click(function() {

                var city = $('.city').val();
                var province = $('.province').val();
                var wards = $('.wards').val();
                var fee_ship = $('.fee_ship').val();
                var _token = $('input[name="_token"]').val();
                // alert(city);
                // alert(province);
                // alert(wards);
                // alert(fee_ship);
                $.ajax({
                    url: '{{ url('/insert-delivery') }}',
                    method: 'POST',
                    data: {
                        city: city,
                        province: province,
                        _token: _token,
                        wards: wards,
                        fee_ship: fee_ship
                    },
                    success: function(data) {
                        fetch_delivery();
                    }
                });


            });
            $('.choose').on('change', function() {
                var action = $(this).attr('id');
                var ma_id = $(this).val();
                var _token = $('input[name="_token"]').val();
                var result = '';


                if (action == 'city') {
                    result = 'province';
                } else {
                    result = 'wards';
                }
                $.ajax({
                    url: '{{ url('/select-delivery') }}',
                    method: 'POST',
                    data: {
                        action: action,
                        ma_id: ma_id,
                        _token: _token
                    },
                    success: function(data) {
                        $('#' + result).html(data);
                    }
                });
            });
        })
    </script>
    <script type="text/javascript">
        const x = $('.confirm_change')
        console.log(x);
        $('.confirm_change').change(function() {
            console.log('jhj');
            var order_status = $(this).val();
            var order_id = $(this).children(":selected").attr("id");
            var _token = $('input[name="_token"]').val();


            //lay ra so luong
            quantity = [];
            $("input[name='product_sales_quantity']").each(function() {
                quantity.push($(this).val());
            });
            //lay ra product id
            order_product_id = [];
            $("input[name='order_product_id']").each(function() {
                order_product_id.push($(this).val());
            });
            j = 0;
            for (i = 0; i < order_product_id.length; i++) {
                //so luong khach dat
                var order_qty = $('.order_qty_' + order_product_id[i]).val();
                //so luong ton kho
                var order_qty_storage = $('.order_qty_storage_' + order_product_id[i]).val();

                if (parseInt(order_qty) > parseInt(order_qty_storage)) {
                    j = j + 1;
                    if (j == 1) {
                        alert('Số lượng bán trong kho không đủ');
                    }
                    $('.color_qty_' + order_product_id[i]).css('background', '#000');
                }
            }
            if (j == 0) {

                $.ajax({
                    url: '{{ url('/update-order-qty') }}',
                    method: 'POST',
                    data: {
                        _token: _token,
                        order_status: order_status,
                        order_id: order_id,
                        quantity: quantity,
                        order_product_id: order_product_id
                    },
                    success: function(data) {
                        alert('Thay đổi tình trạng đơn hàng thành công');
                        location.reload();
                    }
                });

            }

        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            load_gallery();

            function load_gallery() {
                var pro_id = $('.pro_id').val();
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url: '{{ url('/select-gallery') }}',
                    method: "POST",
                    data: {
                        pro_id: pro_id,
                        _token: _token
                    },
                    success: function(data) {
                        $('#gallery_load').html(data);
                    }

                });
            }
            $('#file').change(function() {
                var error = '';
                var files = $('#file')[0].files;
                if (files.length > 5) {
                    error += '<p>Bạn chỉ chọn tối đa 5 ảnh</p>';
                } else if (files.length == '') {
                    error += '<p>Bạn không được để rỗng</p>';
                } else if (files.size > 2000000) {
                    error += '<p>File ảnh không được lớn hơn 2MB</p>';
                }
                if (error == '') {

                } else {
                    $('#file').val('');
                    $('#error_gallery').html('<span class="text-danger">' + error + '</span>');
                    return false;

                }
            });
            $(document).on('blur', '.edit_gal_name', function() {
                var gal_id = $(this).data('gal_id');
                var gal_text = $(this).text();
                var _token = $('input[name="_token"]').val();
                // alert(gal_id);
                // alert(gal_text);
                $.ajax({
                    url: '{{ url('/update-gallery-name') }}',
                    method: "POST",
                    data: {
                        gal_id: gal_id,
                        gal_text: gal_text,
                        _token: _token
                    },
                    success: function(data) {
                        $('#gallery_load').html(data);
                    }

                });
            });
            $(document).on('click', '.delete-gallery', function() {
                var gal_id = $(this).data('gal_id');
                var _token = $('input[name="_token"]').val();
                if (confirm('Bạn chắc chắn muốn xoá ảnh này không?')) {
                    $.ajax({
                        url: '{{ url('/del-gallery') }}',
                        method: "POST",
                        data: {
                            gal_id: gal_id,
                            _token: _token
                        },
                        success: function(data) {
                            $('#gallery_load').html(data);
                        }

                    });
                }
            });
            $(document).on('change', '.file_image', function() {
                var gal_id = $(this).data('gal_id');
                var image = document.getElementById('file-' + gal_id).files[0];

                var form_data = new FormData();
                form_data.append("file", document.getElementById('file-' + gal_id).files[0]);
                form_data.append("gal_id", gal_id);

                $.ajax({
                    url: '{{ url('/update-gallery-img') }}',
                    method: "POST",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        form_data
                    },
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(data) {
                        load_gallery();
                        alert('cap nhat thanhc cong')
                    }

                });

            });


        });
    </script>
   <script>
   $(document).ready( function () {
    $('#table').DataTable();
} );</script>
</body>

</html>
