@extends('layout.homelayout')
@section('content')
<section class="section blog-section blog-list">
    <div class="container ">
      <div class="row  mt-20">
        <div class="col-lg-8 col-md-12 col-12">
          <div class="row">
            @foreach ($all_blog as $blog_item)
                
            <div class="col-lg-6 col-md-6 col-12">

              <div class="single-blog">
                <div class="blog-img">
                  <a href="{{URL::to('blog-detail/'.$blog_item->blog_id)}}">
                    <img src="{{asset('upload/blogImage/'.$blog_item->blog_image)}}" alt="#">
                  </a>
                </div>
                <div class="blog-content">
                  <a class="category" href="">Thông tin công nghệ</a>
                  <h4>
                    <a href="{{URL::to('blog-detail/'.$blog_item->blog_id)}}">{{$blog_item->blog_title}}</a>
                  </h4>
                  <p>{!!$blog_item->content_short!!}</p>
                  <div class="button">
                    <a href="{{URL::to('blog-detail/'.$blog_item->blog_id)}}" class="btn">Xem chi tiết</a>
                  </div>
                </div>
              </div>

            </div>
            @endforeach
          </div>

          <div class="pagination left blog-grid-page">
            <ul class="pagination-list">
              {{-- <li><a href="javascript:void(0)">Prev</a></li>
              <li class="active"><a href="javascript:void(0)">2</a></li>
              <li><a href="javascript:void(0)">3</a></li>
              <li><a href="javascript:void(0)">4</a></li>
              <li><a href="javascript:void(0)">Next</a></li> --}}
              {!!$all_blog->render()!!}
            </ul>
          </div>

        </div>
        <aside class="col-lg-4 col-md-12 col-12">
          <div class="sidebar blog-grid-page">

            <div class="widget search-widget">
              <h5 class="widget-title">Search This Site</h5>
              <form action="#">
                <input type="text" placeholder="Search Here...">
                <button type="submit"><i class="lni lni-search-alt"></i></button>
              </form>
            </div>


            <div class="widget popular-feeds">
              <h5 class="widget-title">Bài viết xem nhiều nhất</h5>
              <div class="popular-feed-loop">
                @foreach ($blog_view as $view)
                <div class="single-popular-feed">
                  <div class="feed-desc">
                    <a class="feed-img" href="{{URL::to('blog-detail/'.$view->blog_id)}}" >
                        <img src="{{asset('upload/blogImage/'.$view->blog_image)}}" alt="#" >
                    </a>
                    <h6 class="post-title"><a href="blog-single-sidebar.html">{{$view->blog_title}}</a></h6>
                    <span class="time"><i class="lni lni-calendar"></i> {{$view->created_at}}</span>
                  </div>
                </div>
                @endforeach
              </div>
            </div>



         

          </div>
        </aside>
      </div>
    </div>
  </section>
@endsection