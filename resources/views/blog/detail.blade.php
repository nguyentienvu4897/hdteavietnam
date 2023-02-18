@extends('layouts.main.master')
@section('title')
{{languageName($blog_detail->title)}}
@endsection
@section('description')
{{languageName($blog_detail->description)}}
@endsection
@section('image')
{{url(''.$blog_detail->image)}}
@endsection
@section('css')
<link href="{{asset('frontend/css/blog_article_style.scss.css')}}"  rel="stylesheet" type="text/css">
<link href="{{asset('frontend/css/sidebar_style.scss.css')}}"  rel="stylesheet" type="text/css">
@endsection
@section('js')
@endsection
@section('content')
<div class="page_background">
   <div class="breadcrumb_background">
      <section class="bread-crumb">
         <span class="crumb-border"></span>
         <div class="container">
            <div class="rows">
               <div class="col-xs-12 a-left">
                  <ul class="breadcrumb" >
                     <li class="home">
                        <a  href="{{ route('home') }}" ><span >Trang chủ</span></a>						
                        <span class="mr_lr">&nbsp;/&nbsp;</span>
                     </li>
                     <li >
                        <a  href="{{ route('allListBlog') }}"><span >Tin tức</span></a>	
                        <span class="mr_lr">&nbsp;/&nbsp;</span>
                     </li>
                     <li><strong><span >{{languageName($blog_detail->title)}}</span></strong></li>
                  </ul>
               </div>
            </div>
         </div>
      </section>
   </div>
   <section class="blogpage clearfix">
      <div class="container article-wraper" itemscope itemtype="https://schema.org/Article">
         <div class="wrap_background_aside padding-top-0 padding-bottom-40 clearfix">
            <div class="row">
               <section class="right-content col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <article class="article-main clearfix">
                     <div class="row">
                        <div class="col-lg-9 col-md-12 col-sm-12 col-12 order-lg-last order-xl-last">
                           <div class="article-details clearfix">
                              <h1 class="article-title clearfix">{{languageName($blog_detail->title)}}</h1>
                              <div class="blog_bottom">
                                 <span class="post-time">
                                    <svg aria-hidden="true" width="16" height="16" focusable="false" data-prefix="fas" data-icon="clock" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-clock fa-w-16">
                                       <path fill="currentColor" d="M256,8C119,8,8,119,8,256S119,504,256,504,504,393,504,256,393,8,256,8Zm92.49,313h0l-20,25a16,16,0,0,1-22.49,2.5h0l-67-49.72a40,40,0,0,1-15-31.23V112a16,16,0,0,1,16-16h32a16,16,0,0,1,16,16V256l58,42.5A16,16,0,0,1,348.49,321Z" class=""></path>
                                    </svg>
                                    {{ date_format($blog_detail->created_at, 'd/m/Y') }}
                                 </span>
                              </div>
                              <div class="article-content clearfix">
                                 <div class="rte">
                                    {!! languageName($blog_detail->content) !!}
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12 col-12 order-last">
                           @include('blog.rightnav-blog')
                        </div>
                     </div>
                  </article>
               </section>
            </div>
            <div class="blog_recent clearfix">
               <div class="title_module">
                  <h2>
                     <a href="{{ route('allListBlog') }}" title="Bài viết liên quan">Bài viết liên quan</a>
                  </h2>
               </div>
               <div class="row">
                  @foreach ($news as $new)
                     <div class="col-lg-4 col-md-4 col-12">
                        <div class="blogwp">
                           <div class="blog-thumbnail">
                              <a class="thumb" href="{{ route('detailBlog', ['slug'=>$new->slug]) }}" title="{{ languagename($new->title) }}">
                              <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{ $new->image }}" alt="{{ languagename($new->title) }}" class="lazyload img-responsive" />
                              </a>
                              <div class="content_blog clearfix">
                                 <h3><a href="{{ route('detailBlog', ['slug'=>$new->slug]) }}" title="{{ languagename($new->title) }}" class="a-title">{{ languagename($new->title) }}</a></h3>
                                 <div class="summary_blog">
                                    {!! languageName($new->description) !!}
                                </div>
                                 <div class="blog_bottom">
                                    <span class="post-time">
                                       <svg aria-hidden="true" width="16" height="16" focusable="false" data-prefix="fas" data-icon="clock" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-clock fa-w-16">
                                          <path fill="currentColor" d="M256,8C119,8,8,119,8,256S119,504,256,504,504,393,504,256,393,8,256,8Zm92.49,313h0l-20,25a16,16,0,0,1-22.49,2.5h0l-67-49.72a40,40,0,0,1-15-31.23V112a16,16,0,0,1,16-16h32a16,16,0,0,1,16,16V256l58,42.5A16,16,0,0,1,348.49,321Z" class=""></path>
                                       </svg>
                                       {{ date_format($new->created_at, 'd/m/Y') }}
                                    </span>
                                    <a class="readmore" href="{{ route('detailBlog', ['slug'=>$new->slug]) }}" title="Xem thêm">
                                    Xem thêm
                                    </a>
                                 </div>
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
</div>
@endsection