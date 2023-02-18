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
<link href="{{asset('frontend/css/blog_article_style.scss.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{asset('frontend/css/sidebar_style.scss.css')}}" rel="stylesheet" type="text/css" media="all" />	
@endsection
@section('content')
<div class="bodywrap">
   <div class="breadcrumb_background">
      <div class="title_full">
         <div class="container a-center">
            <h1 class="title_page">@lang('lang.blog')</h1>
         </div>
      </div>
      <section class="bread-crumb">
         <span class="crumb-border"></span>
         <div class="container">
            <div class="row">
               <div class="col-lg-12 col-12 a-left">
                  <ul class="breadcrumb" >
                     <li class="home">
                        <a  href="{{route('home')}}" ><span >Trang chủ</span></a>						
                        <span class="mr_lr">
                           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                              <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                              <path d="M96 480c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L242.8 256L73.38 86.63c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l192 192c12.5 12.5 12.5 32.75 0 45.25l-192 192C112.4 476.9 104.2 480 96 480z"/>
                           </svg>
                        </span>
                     </li>
                     <li><strong ><span>@lang('lang.blog')</span></strong></li>
                  </ul>
               </div>
            </div>
         </div>
      </section>
   </div>
   <div class="blog_wrapper layout-blog" itemscope itemtype="https://schema.org/Blog">
      <meta itemprop="name" content="Tin tức">
      <meta itemprop="description" content="">
      <div class="container">
         <div class="row">
            <div class="right-content col-lg-8 col-12 order-lg-1">
               <h1 class="title-page">@lang('lang.blog')</h1>
               <div class="list-blogs">
                  <div class="row clearfix">
                     @foreach ($blogs as $blog)
                        <div class="col-xl-6 col-md-6 col-12">
                           <div class="item_blog_base custom-h">
                              <a class="thumb" href="{{route('detailBlog',['slug'=>$blog->slug])}}" title="{{languageName($blog->title)}}">
                              <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="{{$blog->image}}" alt="{{languageName($blog->title)}}" class="lazyload img-responsive" />
                              </a>
                              <div class="content_blog clearfix">
                                 <h3><a href="{{route('detailBlog',['slug'=>$blog->slug])}}" title="{{languageName($blog->title)}}" class="a-title">{{languageName($blog->title)}}</a></h3>
                                 <div class="time-post">
                                    <span class="author">
                                       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                          <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                          <path d="M272 304h-96C78.8 304 0 382.8 0 480c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32C448 382.8 369.2 304 272 304zM48.99 464C56.89 400.9 110.8 352 176 352h96c65.16 0 119.1 48.95 127 112H48.99zM224 256c70.69 0 128-57.31 128-128c0-70.69-57.31-128-128-128S96 57.31 96 128C96 198.7 153.3 256 224 256zM224 48c44.11 0 80 35.89 80 80c0 44.11-35.89 80-80 80S144 172.1 144 128C144 83.89 179.9 48 224 48z"/>
                                       </svg>
                                      HD TEA
                                    </span>
                                    <span class="xo">|</span>
                                    <span class="icon posted">
                                       <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M0 7C0 3.13996 3.13996 0 7 0C10.86 0 14 3.13996 14 7C14 10.86 10.86 14 7 14C3.13996 14 0 10.86 0 7ZM1.08443 7C1.08443 10.2614 3.73857 12.9156 7 12.9156C10.2614 12.9156 12.9156 10.2614 12.9156 7C12.9156 3.73857 10.262 1.08443 7 1.08443C3.73857 1.08443 1.08443 3.73857 1.08443 7ZM7.5422 6.77225L9.49419 8.23624C9.73386 8.41572 9.78267 8.75569 9.60261 8.99483C9.49632 9.13798 9.33366 9.21227 9.16828 9.21227C9.05497 9.21227 8.94108 9.17703 8.84349 9.10383L6.67464 7.47717C6.538 7.37524 6.45775 7.21418 6.45775 7.04339V3.79009C6.45775 3.49024 6.70012 3.24786 6.99997 3.24786C7.29983 3.24786 7.5422 3.49024 7.5422 3.79009V6.77225Z" fill="#7F7F7F"/>
                                       </svg>
                                       @lang('lang.date')
                                       {{$blog->created_at->format('d/m/Y')}}
                                    </span>
                                 </div>
                                 <p>
                                   {!!languageName($blog->description)!!}
                                 </p>
                              </div>
                           </div>
                        </div>
                     @endforeach
                  </div>
                  <div class="text-center">
                  </div>
               </div>
            </div>
            <div class="blog_left_base col-lg-4 col-12 order-lg-2">
              @include('blog.rightnav-blog')
            </div>
         </div>
      </div>
   </div>
   <div class="ab-module-article-mostview"></div>
   <script>
      (function($){"use strict";$.ajaxChimp={responses:{"We have sent you a confirmation email":0,"Please enter a valueggg":1,"An email address must contain a single @":2,"The domain portion of the email address is invalid (the portion after the @: )":3,"The username portion of the email address is invalid (the portion before the @: )":4,"This email address looks fake or invalid. Please enter a real email address":5},translations:{en:null},init:function(selector,options){$(selector).ajaxChimp(options)}};$.fn.ajaxChimp=function(options){$(this).each(function(i,elem){var form=$(elem);var email=form.find("input[type=email]");var label=form.find("label[for="+email.attr("id")+"]");var settings=$.extend({url:form.attr("action"),language:"en"},options);var url=settings.url.replace("/post?","/post-json?").concat("&c=?");form.attr("novalidate","true");email.attr("name","EMAIL");form.submit(function(){var msg;function successCallback(resp){if(resp.result==="success"){msg="We have sent you a confirmation email";label.removeClass("error").addClass("valid");email.removeClass("error").addClass("valid")}else{email.removeClass("valid").addClass("error");label.removeClass("valid").addClass("error");var index=-1;try{var parts=resp.msg.split(" - ",2);if(parts[1]===undefined){msg=resp.msg}else{var i=parseInt(parts[0],10);if(i.toString()===parts[0]){index=parts[0];msg=parts[1]}else{index=-1;msg=resp.msg}}}catch(e){index=-1;msg=resp.msg}}if(settings.language!=="en"&&$.ajaxChimp.responses[msg]!==undefined&&$.ajaxChimp.translations&&$.ajaxChimp.translations[settings.language]&&$.ajaxChimp.translations[settings.language][$.ajaxChimp.responses[msg]]){msg=$.ajaxChimp.translations[settings.language][$.ajaxChimp.responses[msg]]}label.html(msg);label.show(2e3);if(settings.callback){settings.callback(resp)}}var data={};var dataArray=form.serializeArray();$.each(dataArray,function(index,item){data[item.name]=item.value});$.ajax({url:url,data:data,success:successCallback,dataType:"jsonp",error:function(resp,text){console.log("mailchimp ajax submit error: "+text)}});var submitMsg="Submitting...";if(settings.language!=="en"&&$.ajaxChimp.translations&&$.ajaxChimp.translations[settings.language]&&$.ajaxChimp.translations[settings.language]["submit"]){submitMsg=$.ajaxChimp.translations[settings.language]["submit"]}label.html(submitMsg).show(2e3);return false})});return this}})(jQuery);
   </script>
@endsection