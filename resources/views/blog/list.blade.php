@extends('layouts.main.master')
@section('title')
{{$title_page}} 
@endsection
@section('description')
Tin tức nổi bật và mới nhất
@endsection
@section('image')
{{url(''.$banner[0]->image)}}
@endsection
@section('css')
<link href="{{asset('frontend/css/blog_article_style.scss.css')}}"  rel="stylesheet" type="text/css">
<link href="{{asset('frontend/css/sidebar_style.scss.css')}}"  rel="stylesheet" type="text/css">
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
                     <li><strong ><span>Tin tức</span></strong></li>
                  </ul>
               </div>
            </div>
         </div>
      </section>
   </div>
   <section class="blogpage clearfix">
      <div class="containers" itemscope itemtype="https://schema.org/Blog">
         <div class="wrap_background_aside padding-bottom-40 clearfix">
            <div class="section full_background_blog clearfix">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-8 col-md-12 col-12">
                        <h1 class="title_page">Tin tức</h1>
                        <section class="list-blogs blog-main listmain_blog clearfix">
                           <div class="row row_blog_responsive clearfix">
                              @foreach ($blogs as $blog)
                                 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 itembb">
                                    <div class="blog_item clearfix">
                                       <div class="blogwp">
                                          <div class="blog-thumbnail">
                                             <a class="thumb" href="{{ route('detailBlog', ['slug'=>$blog->slug]) }}">
                                             <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{ $blog->image }}" alt="{{ languagename($blog->title) }}" class="lazyload img-responsive" />
                                             </a>
                                             <div class="content_blog clearfix">
                                                <h3><a href="{{ route('detailBlog', ['slug'=>$blog->slug]) }}" title="{{ languagename($blog->title) }}" class="a-title">{{ languagename($blog->title) }}</a></h3>
                                                <div class="summary_blog">
                                                   {!! languageName($blog->description) !!}
                                                </div>
                                                <div class="blog_bottom">
                                                   <span class="post-time">
                                                      <svg aria-hidden="true" width="16" height="16" focusable="false" data-prefix="fas" data-icon="clock" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-clock fa-w-16">
                                                         <path fill="currentColor" d="M256,8C119,8,8,119,8,256S119,504,256,504,504,393,504,256,393,8,256,8Zm92.49,313h0l-20,25a16,16,0,0,1-22.49,2.5h0l-67-49.72a40,40,0,0,1-15-31.23V112a16,16,0,0,1,16-16h32a16,16,0,0,1,16,16V256l58,42.5A16,16,0,0,1,348.49,321Z" class=""></path>
                                                      </svg>
                                                      {{ date_format($blog->created_at, 'd/m/Y') }}
                                                   </span>
                                                   <a class="readmore" href="{{ route('detailBlog', ['slug'=>$blog->slug]) }}" title="Xem tiếp">
                                                   Xem tiếp
                                                   </a>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              @endforeach
                           </div>
                        </section>
                        <div class="text-xs-right pageinate-page-blog section clearfix">
                           {{ $blogs->links() }}
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-12 col-sm-12 col-12 order-last">
                        @include('blog.rightnav-blog')
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <div class="ab-module-article-mostview"></div>
</div>
@endsection