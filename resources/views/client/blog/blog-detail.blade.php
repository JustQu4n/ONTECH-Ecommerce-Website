@extends('layout.homelayout')
@section('content')
<div class="breadcrumbs">
    <div class="container">
       <div class="row align-items-center">
          <div class="col-lg-6 col-md-6 col-12">
           
          </div>
          <div class="col-lg-6 col-md-6 col-12">
             <ul class="breadcrumb-nav">
                <li><a href="index.html"><i class="lni lni-home"></i> Home</a></li>
                <li><a href="index.html">Blog</a></li>
                <li>Blog Single</li>
             </ul>
          </div>
       </div>
    </div>
 </div>
 <section class="section blog-single">
    <div class="container">
       <div class="row mt-30">
          <div class="col-lg-10 offset-lg-1 col-md-12 col-12">
             <div class="single-inner">
                @foreach ($detail_blog as $detail)
                    
                <div class="post-details">
                   <div class="main-content-head">
                      <div class="post-thumbnils">
                        <img src="{{asset('upload/blogImage/'.$detail->blog_image)}}" alt="#">
                      </div>
                      <div class="meta-information">
                         <h2>
                            <a href="blog-single.html">{{$detail->blog_title}}</a>
                         </h2>
                         <ul class="meta-info">
                            <li>
                               <a href="javascript:void(0)"> <i class="lni lni-user"></i>
                               Anh Quan</a>
                            </li>
                            <li>
                               <a href="javascript:void(0)"><i class="lni lni-calendar"></i> {{$detail->created_at}}
                               </a>
                            </li>
                            
                         </ul>
                      </div>
                      <div class="detail-inner">
                            <p>{!!$detail->blog_content!!}</p>
                         <div class="post-bottom-area">
                            <div class="post-tag">
                               <ul>
                                  <li><a href="javascript:void(0)">#electronics,</a></li>
                                  <li><a href="javascript:void(0)">#gadgets</a></li>
                               </ul>
                            </div>
                            <div class="post-social-media">
                               <h5 class="share-title">Share post :</h5>
                               <ul>
                                  <li>
                                     <a href="javascript:void(0)">
                                     <i class="lni lni-facebook-filled"></i>
                                     <span>facebook</span>
                                     </a>
                                  </li>
                                  <li>
                                     <a href="javascript:void(0)">
                                     <i class="lni lni-twitter-original"></i>
                                     <span>twitter</span>
                                     </a>
                                  </li>
                                  <li>
                                     <a href="javascript:void(0)">
                                     <i class="lni lni-google"></i>
                                     <span>google+</span>
                                     </a>
                                  </li>
                                  <li>
                                     <a href="javascript:void(0)">
                                     <i class="lni lni-linkedin-original"></i>
                                     <span>linkedin</span>
                                     </a>
                                  </li>
                                  <li>
                                     <a href="javascript:void(0)">
                                     <i class="lni lni-pinterest"></i>
                                     <span>pinterest</span>
                                     </a>
                                  </li>
                               </ul>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="post-comments">
                    <div class="fb-comments" data-href="{{$url_canonical}}" data-width="" data-numposts="10"></div>
                   </div>
                   {{-- <div class="comment-form">
                      <h3 class="comment-reply-title">Leave a comment</h3>
                      <form action="#" method="POST">
                         <div class="row">
                            <div class="col-lg-6 col-12">
                               <div class="form-box form-group">
                                  <input type="text" name="name" class="form-control form-control-custom" placeholder="Website URL" />
                               </div>
                            </div>
                            <div class="col-lg-6 col-12">
                               <div class="form-box form-group">
                                  <input type="text" name="email" class="form-control form-control-custom" placeholder="Your Name" />
                               </div>
                            </div>
                            <div class="col-lg-6 col-12">
                               <div class="form-box form-group">
                                  <input type="email" name="email" class="form-control form-control-custom" placeholder="Your Email" />
                               </div>
                            </div>
                            <div class="col-lg-6 col-12">
                               <div class="form-box form-group">
                                  <input type="text" name="name" class="form-control form-control-custom" placeholder="Phone Number" />
                               </div>
                            </div>
                            <div class="col-12">
                               <div class="form-box form-group">
                                  <textarea name="#" class="form-control form-control-custom" placeholder="Your Comments"></textarea>
                               </div>
                            </div>
                            <div class="col-12">
                               <div class="button">
                                  <button type="submit" class="btn">Post Comment</button>
                               </div>
                            </div>
                         </div>
                      </form>
                   </div> --}}
                </div>
                @endforeach
             </div>
          </div>
       </div>
    </div>
 </section>
@endsection