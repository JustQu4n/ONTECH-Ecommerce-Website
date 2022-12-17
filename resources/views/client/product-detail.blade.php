@extends('layout.homelayout')
@section('content')
<form  action="{{URL::to('checkout')}}" method="POST">
<div class="breadcrumbs">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-lg-6 col-md-6 col-12 d-flex justify-content-start">
            <ul class="breadcrumb-nav">
               <li><a href="index.html"><i class="lni lni-home"></i> Home</a></li>
               <li><a href="index.html">Shop</a></li>
               <li>Single Product</li>
            </ul>
         </div>
      </div>
   </div>   
</div>
@foreach($detail_product as $detail)
    <input type="hidden" id="product_view_id" value="{{$detail->product_id}}">
@endforeach
<!-- End Breadcrumbs -->
<div class="content mt-50">
   <div class="container">
      <div class="row gt-10">
         <div class="col-lg-6 col-sm-12 ml-50">
            <div class="lightslider">
               <div class="lightslider-item">
                  <div class="clearfix" style="max-width:1500px;">
                     <ul id="image-gallery" >
                        @foreach ($detail_product as $detail)
                        <li data-thumb="{{asset('upload/productImage/'.$detail->product_image)}}">
                           <img src="{{asset('upload/productImage/'.$detail->product_image)}}" id="wishlist_productimage{{$detail->product_id}}"  />
                        </li>
                        @endforeach
                           @foreach ($gallery as $gallery_image)
                           <li data-thumb="{{asset('upload/gallery/'.$gallery_image->gallery_image)}}">
                              <img src="{{asset('upload/gallery/'.$gallery_image->gallery_image)}}" />
                           </li>
                           @endforeach
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         @foreach ($detail_product as $detail)
         <input type="hidden" name="product_id" value="{{$detail->product_id}}">
            <div class="col-lg-6">
               
               <div class="title-product">
                  <h4><a  id="wishlist_producturl{{$detail->product_id}}" style="color: black">{{$detail->product_name}}</h4>
               </div>
               <div class="row ">
                  <div class="col-lg-12">
                     <div class="product-id mt-2 mb-10">
                        <p>Mã sản phẩm: </p>
                        <a href=""> {{$detail->product_id}}</a>
                     </div>
                  </div>
               </div>
               <div class="info-body ">
                  <h6>Thông tin sản phẩm</h6>
                  <ul class="normal-list mt-10">
                     {{-- <li><span>Weight:</span> 35.5oz (1006g)</li>
                     <li><span>Maximum Speed:</span> 35 mph (15 m/s)</li>
                     <li><span>Maximum Distance:</span> Up to 9,840ft (3,000m)</li>
                     <li><span>Operating Frequency:</span> 2.4GHz</li>
                     <li><span>Manufacturer:</span> GoPro, USA</li> --}}
                     {!!$detail->product_desc !!}
                  </ul>
               </div>
               <div class="price mt-20">
                  <h5>Giá khuyến mãi:</h5>
                  <div class="price-sale">
                     <div class="km">
                        <h4>{{number_format($detail->product_price-1000000)}}</h4>
                     </div>
                     <div class="goc">
                        <h5>{{number_format($detail->product_price)}}</h5>
                     </div>
                  </div>
               </div>
               <form >
                  @csrf
               <div class="quantity mt-20">
                  <div class="row">
                     <div class="col-lg-5">
                        <div class="soluong">
                           <p>Số lượng:</p>
                           <input type="number" value="1"  class="form-control qty cart_product_qty_{{$detail->product_id}}" name="qty">
                           <input type="hidden" value="{{$detail->product_id}}" class="cart_product_id_{{$detail->product_id}}">
                           <input type="hidden" id="wishlist_productname{{$detail->product_id}}" value="{{$detail->product_name}}" class="cart_product_name_{{$detail->product_id}}">
                           <input type="hidden" id="wishlist_productimage{{$detail->product_id}}" value="{{$detail->product_image}}" class="cart_product_image_{{$detail->product_id}}">
                           <input type="hidden" id="wishlist_productprice{{$detail->product_id}}" value="{{number_format($detail->product_price)}}" >
                           <input type="hidden" value="{{$detail->product_price}}" class="cart_product_price_{{$detail->product_id}}">
                           {{-- <input type="hidden" value="1" class=""> --}}

                           
                        </div>
                     </div>
                  </div>
               </div>
               <div class="bottom-content mt-40">
                  
                  <div class="row align-items-start">
                     <input type="button" value="Thêm vào giỏ hàng" class="btn btn-primary add-to-cart" data-id_product="{{$detail->product_id}}" name="add-to-cart"/>
                     <div class="col-lg-3 col-md-3 col-12">
                        <div class="wish-button">
                           <button class="btn"><i class="lni lni-reload"></i> So sánh</button>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-4 col-12">
                        <div class="wish-button">
                           {{-- <button class="btn button_wishlist"><i class="lni lni-heart"></i> </button> --}}
                           
                           <a class="btn button_wishlist" id="{{$detail->product_id}}" onclick="add_wishlist(this.id);"><i class="lni lni-heart"></i>Yêu thích</a>
                        </div>
                     </div>
                  </div>
               </div>
               
               <div class="info-body ">
                  <ul class="normal-list mt-10">
                     <div class="fb-like" data-href="{{$url_canonical}}" data-width="" data-layout="button_count" data-action="like" data-size="small" data-share="true"></div>
                    
                     <li><span>Số lượng:</span> {{$detail->product_soluong}}</li>
                     <li><span> Sản phẩm chính hãng 100%</span></li>
                     <li><span>Trả góp lãi suất 0% toàn bộ giỏ hàng</span> </li>
                     <li><span>  Bảo hành tận nơi cho doanh nghiệp</span></li>
                    
                  </ul>
               </div>
            </form> 
            </div>
        
         @endforeach
      </div>
   </div>
</div>
<div class="row gx-5 mt-20">
   <div class="col-lg-12 ">
      <section class="reviews-wrapper ">
         <div class="container border-content">
            <div class="reviews-style">
               <div class="reviews-menu">
                  <ul class="breadcrumb-list-grid nav nav-tabs border-0" id="myTab" role="tablist">
                   
                    <li class="nav-item" role="presentation">
                        <a class="active" id="deatail" data-toggle="tab" href="#profile" role="tab"
                           aria-controls="profile" aria-selected="false">
                          Chi tiết sản phẩm
                        </a>
                     </li>
                     <li class="nav-item" role="presentation">
                        <a id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                           aria-selected="true">
                           Bình luận   
                        </a>
                     </li>
                  </ul>
               </div>
               <div class="tab-content" id="deatail">
                  <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
                     <div class="details-wrapper">
                        <div class="fb-comments" data-href="{{$url_canonical}}" data-width="" data-numposts="10"></div>
                     </div>
                  </div>
                  <div class="tab-pane fade show active" id="profile" role="tabpanel"
                     aria-labelledby="profile-tab">
                     <div class="review-wrapper">
                       
                        <div class="row">
                           <div class="col-lg-12">
                            @foreach ($detail_product as $detail)
                              <div class="reviews-title">
                                 <h4 class="title">Đánh giá sản phẩm {{$detail->product_name}}</h4>
                              </div>
                              <p>{!!$detail->product_content!!}</p>
                              @endforeach
                           </div>
                        </div>
                     </div>	
                  </div>
               </div>
            </div>
         </div>
      </section>
   </div>
</div>
{{-- <div class="item">
   <ul id="content-slider" class="content-slider">
     @foreach ($related_product as $related)
     <li >
        <div class="single-product relate">
           <div class="product-image" >
              <img src="{{asset('upload/productImage/'.$related->product_image)}}" alt="#" >
              <div class="button">
                 <a href="product-details.html" class="btn"><i class="lni lni-cart"></i> Add to Cart</a>
              </div>
           </div>
           <div class="product-info">
              <span class="category">Watches</span>
              <h4 class="title">
                 <a href="product-grids.html">{{$related->product_name}}</a>
              </h4>
              <ul class="review">
                 <li><i class="lni lni-star-filled"></i></li>
                 <li><i class="lni lni-star-filled"></i></li>
                 <li><i class="lni lni-star-filled"></i></li>
                 <li><i class="lni lni-star-filled"></i></li>
                 <li><i class="lni lni-star"></i></li>
                 <li><span>4.0 Review(s)</span></li>
              </ul>
              <div class="price">
                 <span>{{number_format($related->product_price)}}</span>
              </div>
           </div>
        </div>
     </li>
    
     @endforeach
   
   </ul>
</div> --}}

</form>

@endsection