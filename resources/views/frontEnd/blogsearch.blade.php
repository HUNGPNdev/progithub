@extends('frontEnd.master')
@section('title','Blog')
@section('main')
  
  <section id="blog-banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="common-banner-text wow zoomIn" data-wow-duration="2s">
            <div class="common-heading">
              <h1>Blog</h1>
            </div>
            <div class="commom-sub-heading">
              <h6>
                <a href="{{asset('home')}}">Home</a>
                <span>/</span>
                <a href="{{asset('user/blog')}}">Blog</a>
              </h6>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="blog-content">
    <div class="container">
        <form action="{{route('searchblog')}}" role="search" method="get">
          <div class="alo-search">
            <div class="form-group d-flex">
              <input type="text" placeholder="Search" name="search" class="form-control">
              <button type="submit" class="btn search-icon-blog" style="right: 180px; "><i class="fas fa-search"></i></button>
            </div>
          </div>
        </form>
    <h2>Result search for: <span style="color: orange;">{{$key}}</span></h2>
      <div class="row">
        @foreach($search as $blog)
        <div class="col-lg-4 col-md-6 col-sm-12 col-12 wow fadeIn" data-wow-duration="1s">
          <div class="blog-items clas-mar">
            <div class="blog-item-img">
              <a href="{{asset('user/blog_single/'.$blog->id_blog)}}"><img  style="width: 350px; height: 300px;" src="{{asset('storage/app/blog_img/'.$blog->bn_image)}}" alt="img" /></a>
            </div>
            <div class="dtes-not">
              <div class="blog-item-det">
                <h6>
                  <a href="{{asset('user/blog_single/'.$blog->id_blog)}}">{{$blog->title}}</a>
                </h6>
              </div>
              <div class="blog-author">
                <div class="blog-flex-same">
                  <div class="blog-athou-img">
                    <a href="{{asset('user/blog_single/'.$blog->id_blog)}}"><img src="{{asset('storage/app/admin/'.$blog->image)}}" alt="img" /></a>
                    <p>By:<a href="{{asset('user/blog_single/'.$blog->id_blog)}}">{{$blog->name}}</a></p>
                  </div>
                  <div class="blog-times">
                    <i class="far fa-clock"></i>
                    @php
                      $newtime = strtotime($blog->created_at);
                      $blog->time = date('D m, Y',$newtime);
                    @endphp
                    <p><a href="{{asset('user/blog_single/'.$blog->id_blog)}}">{{$blog->time}}</a></p>
                  </div>
                </div>
                <div class="icon-blog-item">
                  <a href="{{asset('user/blog_single/'.$blog->id_blog)}}"><i class="fas fa-comments"></i></a>
                  <a href="{{asset('user/blog_single/'.$blog->id_blog)}}"><i class="fas fa-share-alt"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      <!-- pagination start -->
      <div class="blog-pagination d-flex justify-content-center text-center">
        <div class="wrapper blog-wrapper">
          <p id="pagination-here"></p>
        </div>
      </div>
      <!-- pagination end -->
    </div>
  </section>


@stop