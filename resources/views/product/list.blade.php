@extends('layouts.main.master')
@section('title')
{{$title}}
@endsection
@section('description')
Danh sách {{$title}}
@endsection
@section('image')
{{url(''.$setting->logo)}}
@endsection
@section('js')
@endsection
@section('css')
<link rel="stylesheet" href="{{asset('frontend/css/collection_style.scss.css')}}">
<link rel="stylesheet" href="{{asset('frontend/css/sidebar_style.scss.css')}}">
@endsection
@section('content')
<div class="bodywrap">
   <div class="breadcrumb_background">
      <div class="title_full">
         <div class="container a-center">
            <h1 class="title_page">{{$title}}</h1>
         </div>
      </div>
      <section class="bread-crumb">
         <span class="crumb-border"></span>
         <div class="container">
            <div class="row">
               <div class="col-lg-12 col-12 a-left">
                  <ul class="breadcrumb" >
                     <li class="home">
                        <a  href="{{route('home')}}" ><span >@lang('lang.home')</span></a>						
                        <span class="mr_lr">
                           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                              <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                              <path d="M96 480c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L242.8 256L73.38 86.63c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l192 192c12.5 12.5 12.5 32.75 0 45.25l-192 192C112.4 476.9 104.2 480 96 480z"/>
                           </svg>
                        </span>
                     </li>
                     <li><strong ><span> {{$title}}</span></strong></li>
                  </ul>
               </div>
            </div>
         </div>
      </section>
   </div>
   <div class="layout-collection bg_before">
      <div class="container">
         <div class="row">
            <aside class="dqdt-sidebar sidebar col-xl-3 col-lg-12 col-12">
               <div class="aside-content aside-item">
                  <div class="aside-title">
                     <h2 class="title-head"><span>@lang('lang.catepro')</span></h2>
                  </div>
                  <nav class="nav-category aside-content">
                     <ul class="nav navbar-pills">
                        <li class="nav-item  relative">
                           <a title="Trang chủ" class="nav-link" href="{{route('home')}}">@lang('lang.home')</a>
                        </li>
                        <li class="nav-item  relative">
                           <a title="Giới thiệu" class="nav-link" href="{{route('aboutUs')}}">@lang('lang.aboutus')</a>
                        </li>
                        <li class="nav-item active relative">
                           <a title="Sản phẩm" href="{{route('allProduct')}}" class="nav-link pr-5">@lang('lang.products')</a>
                           <i class="open_mnu down_icon">
                              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-chevron-right fa-w-10">
                                 <path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z" class=""></path>
                              </svg>
                           </i>
                           <ul class="menu_down" style="display:none;">
                              @foreach ($categoryhome as $cate)
                              <li class="dropdown-submenu nav-item  relative">
                                 <a title="Củ quả các loại" class="nav-link pr-5" href="{{route('allListProCate',['cate'=>$cate->slug])}}">{{languageName($cate->name)}}</a>
                                 <i class="open_mnu down_icon">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-chevron-right fa-w-10">
                                       <path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z" class=""></path>
                                    </svg>
                                 </i>
                                 <ul class="menu_down" style="display:none;">
                                    @foreach ($cate->typeCate as $type)
                                       <li class="nav-item">
                                          <a title="{{languageName($type->name)}}" class="nav-link pl-4" href="{{route('allListProType',['cate'=>$cate->slug,'type'=>$type->slug])}}">{{languageName($type->name)}} </a>
                                       </li>
                                    @endforeach
                                 </ul>
                              </li>
                           
                              @endforeach
                           </ul>
                        </li>
                    
                        <li class="nav-item  relative">
                           <a title="Tin tức" class="nav-link" href="{{route('allListBlog')}}">@lang('lang.blog')</a>
                        </li>
                        <li class="nav-item  relative">
                           <a title="Liên hệ" class="nav-link" href="{{route('lienHe')}}">@lang('lang.contact')</a>
                        </li>
                     </ul>
                  </nav>
               </div>
               <script>
                  $(".open_mnu").click(function(){
                     $(this).toggleClass('cls_mn').next().slideToggle();
                  });
               </script>
               <div class="filter-content aside-filter">
                  <div class="filter-container">
                     <div class="filter-container__selected-filter clearfix" style="display: none;">
                        <div class="filter-container__selected-filter-header clearfix">
                           <span class="filter-container__selected-filter-header-title"><i class="fa fa-arrow-left hidden-sm-up"></i> Bạn chọn</span>
                           <a href="javascript:void(0)" onclick="clearAllFiltered()" class="filter-container__clear-all">Bỏ hết <i class="fa fa-angle-right"></i></a>
                        </div>
                        <div class="filter-container__selected-filter-list">
                           <ul></ul>
                        </div>
                     </div>
                     {{-- <aside class="aside-item filter-price">
                        <div class="aside-title">
                           <h2>
                              <span>Lọc giá sản phẩm</span>
                           </h2>
                        </div>
                        <link href="//bizweb.dktcdn.net/100/448/970/themes/894899/assets/jquery-ui-min.css?1676280280637" rel="stylesheet" type="text/css" media="all" />
                        <script src="//bizweb.dktcdn.net/100/448/970/themes/894899/assets/jquery-ui-min.js?1676280280637" type="text/javascript"></script>	
                        <div class="aside-content filter-groupi filter-ui-slider">
                           <div id='start'><input value="0"></div>
                           <div id='stop'><input value="100.000.000₫"></div>
                           <div id='slider'></div>
                           <span class="price_val"></span>
                           <a id="old-value" href="javascript:;"></a>
                           <a id="filter-value" class="btn btn-primary" href="javascript:;" onclick="_toggleFilterdqdt(this);"  data-value="(>-1 AND <100000001)" >Lọc giá</a>
                        </div>
                     </aside> --}}
                  </div>
               </div>
               {{-- <div class="aside_banner clearfix margin-bottom-30 d-sm-none d-md-none d-block d-lg-block d-xl-block">
                  <a class="scale_hover" href="#" title="Banner sidebar">
                  <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="//bizweb.dktcdn.net/100/448/970/themes/894899/assets/banner_sidebar.jpg?1676280280637" alt="Banner sidebar"/>
                  </a>
               </div> --}}
             
            </aside>
            <div class="block-collection col-xl-9 col-lg-12 col-12">
               <h1 class="title-page d-none">{{$title}}</h1>
               <div class="category-products">
                  <div class="col_sortby clearfix">
                     <div class="title_sortby f-left">
                        <h2 class="collection-title">
                          {{$title}}
                        </h2>
                     </div>
                     <div class="arrange_sortby">
                        <div id="sort-by">
                           <ul class="ul_col">
                              <li>
                                 <span class="ico">Sắp xếp theo:</span>
                                 <ul class="content_ul">
                                    <li><a href="javascript:;" onclick="sortby('default')">Mặc định</a></li>
                                    <li><a href="javascript:;" onclick="sortby('alpha-asc')">A &rarr; Z</a></li>
                                    <li><a href="javascript:;" onclick="sortby('alpha-desc')">Z &rarr; A</a></li>
                                    <li><a href="javascript:;" onclick="sortby('price-asc')">Giá tăng dần</a></li>
                                    <li><a href="javascript:;" onclick="sortby('price-desc')">Giá giảm dần</a></li>
                                    <li><a href="javascript:;" onclick="sortby('created-desc')">Hàng mới nhất</a></li>
                                    <li><a href="javascript:;" onclick="sortby('created-asc')">Hàng cũ nhất</a></li>
                                 </ul>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="products-view products-view-grid list_hover_pro">
                     <div class="row">
                        @foreach ($list as $item)
                        @php
                             $img = json_decode($item['images']);
                        @endphp
                           <div class="col-6 col-md-4 col-lg-4 col-xl-4">
                              <div class="item_product_main">
                                @include('layouts.product.item',['product'=>$item])
                              </div>
                           </div>
                        @endforeach
                     </div>
                  </div>
                  {{-- <div class="pagenav">
                     <nav class="clearfix relative nav_pagi w_100">
                        <ul class="pagination clearfix">
                           <li class="page-item disabled">
                              <a class="page-link" href="#">
                                 <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-double-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-chevron-double-left fa-w-16">
                                    <path fill="currentColor" d="M34.5 239L228.9 44.7c9.4-9.4 24.6-9.4 33.9 0l22.7 22.7c9.4 9.4 9.4 24.5 0 33.9L131.5 256l154 154.7c9.3 9.4 9.3 24.5 0 33.9l-22.7 22.7c-9.4 9.4-24.6 9.4-33.9 0L34.5 273c-9.3-9.4-9.3-24.6 0-34zm192 34l194.3 194.3c9.4 9.4 24.6 9.4 33.9 0l22.7-22.7c9.4-9.4 9.4-24.5 0-33.9L323.5 256l154-154.7c9.3-9.4 9.3-24.5 0-33.9l-22.7-22.7c-9.4-9.4-24.6-9.4-33.9 0L226.5 239c-9.3 9.4-9.3 24.6 0 34z" class=""></path>
                                 </svg>
                              </a>
                           </li>
                           <li class="active page-item disabled"><a class="page-link" href="javascript:;">1</a></li>
                           <li class="page-item"><a class="page-link" onclick="doSearch(2)" href="javascript:;">2</a></li>
                           <li class="page-item"><a class="page-link" onclick="doSearch(3)" href="javascript:;">3</a></li>
                           <li class="page-item"><a class="page-link" onclick="doSearch(4)" href="javascript:;">4</a></li>
                           <li class="page-item"><a class="page-link" onclick="doSearch(5)" href="javascript:;">5</a></li>
                           <li class="page-item"><a class="page-link" onclick="doSearch(6)" href="javascript:;">6</a></li>
                           <li class="page-item"><a class="page-link" onclick="doSearch(7)" href="javascript:;">7</a></li>
                           <li class="page-item hidden-xs">
                              <a class="page-link" onclick="doSearch(2)" href="javascript:;">
                                 <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-double-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-chevron-double-right fa-w-16">
                                    <path fill="currentColor" d="M477.5 273L283.1 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.7-22.7c-9.4-9.4-9.4-24.5 0-33.9l154-154.7-154-154.7c-9.3-9.4-9.3-24.5 0-33.9l22.7-22.7c9.4-9.4 24.6-9.4 33.9 0L477.5 239c9.3 9.4 9.3 24.6 0 34zm-192-34L91.1 44.7c-9.4-9.4-24.6-9.4-33.9 0L34.5 67.4c-9.4 9.4-9.4 24.5 0 33.9l154 154.7-154 154.7c-9.3 9.4-9.3 24.5 0 33.9l22.7 22.7c9.4 9.4 24.6 9.4 33.9 0L285.5 273c9.3-9.4 9.3-24.6 0-34z" class=""></path>
                                 </svg>
                              </a>
                           </li>
                        </ul>
                     </nav>
                     <script>
                        var cuPage = 1
                           
                     </script>
                  </div> --}}
               </div>
            </div>
         </div>
         <div id="open-filters" class="open-filters d-xl-none">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="filter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="i-bar-white svg-inline--fa fa-filter fa-w-16">
               <path fill="currentColor" d="M487.976 0H24.028C2.71 0-8.047 25.866 7.058 40.971L192 225.941V432c0 7.831 3.821 15.17 10.237 19.662l80 55.98C298.02 518.69 320 507.493 320 487.98V225.941l184.947-184.97C520.021 25.896 509.338 0 487.976 0z" class=""></path>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="12" height="12" x="0" y="0" viewBox="0 0 492 492" style="enable-background:new 0 0 14 14" xml:space="preserve" class="i-close-white">
               <g xmlns="http://www.w3.org/2000/svg">
                  <path d="M300.188,246L484.14,62.04c5.06-5.064,7.852-11.82,7.86-19.024c0-7.208-2.792-13.972-7.86-19.028L468.02,7.872    c-5.068-5.076-11.824-7.856-19.036-7.856c-7.2,0-13.956,2.78-19.024,7.856L246.008,191.82L62.048,7.872    c-5.06-5.076-11.82-7.856-19.028-7.856c-7.2,0-13.96,2.78-19.02,7.856L7.872,23.988c-10.496,10.496-10.496,27.568,0,38.052    L191.828,246L7.872,429.952c-5.064,5.072-7.852,11.828-7.852,19.032c0,7.204,2.788,13.96,7.852,19.028l16.124,16.116    c5.06,5.072,11.824,7.856,19.02,7.856c7.208,0,13.968-2.784,19.028-7.856l183.96-183.952l183.952,183.952    c5.068,5.072,11.824,7.856,19.024,7.856h0.008c7.204,0,13.96-2.784,19.028-7.856l16.12-16.116    c5.06-5.064,7.852-11.824,7.852-19.028c0-7.204-2.792-13.96-7.852-19.028L300.188,246z" fill="#ffffff" data-original="#000000" style="" class=""></path>
               </g>
            </svg>
            <span>Lọc</span>
         </div>
      </div>
   </div>
   <div class="opacity_sidebar"></div>
   <script>
      var colName = "@lang('lang.all-products')";
      
      var colId = 0;
      
      var selectedViewData = "data";
   </script>
   <script>
      (function($){"use strict";$.ajaxChimp={responses:{"We have sent you a confirmation email":0,"Please enter a valueggg":1,"An email address must contain a single @":2,"The domain portion of the email address is invalid (the portion after the @: )":3,"The username portion of the email address is invalid (the portion before the @: )":4,"This email address looks fake or invalid. Please enter a real email address":5},translations:{en:null},init:function(selector,options){$(selector).ajaxChimp(options)}};$.fn.ajaxChimp=function(options){$(this).each(function(i,elem){var form=$(elem);var email=form.find("input[type=email]");var label=form.find("label[for="+email.attr("id")+"]");var settings=$.extend({url:form.attr("action"),language:"en"},options);var url=settings.url.replace("/post?","/post-json?").concat("&c=?");form.attr("novalidate","true");email.attr("name","EMAIL");form.submit(function(){var msg;function successCallback(resp){if(resp.result==="success"){msg="We have sent you a confirmation email";label.removeClass("error").addClass("valid");email.removeClass("error").addClass("valid")}else{email.removeClass("valid").addClass("error");label.removeClass("valid").addClass("error");var index=-1;try{var parts=resp.msg.split(" - ",2);if(parts[1]===undefined){msg=resp.msg}else{var i=parseInt(parts[0],10);if(i.toString()===parts[0]){index=parts[0];msg=parts[1]}else{index=-1;msg=resp.msg}}}catch(e){index=-1;msg=resp.msg}}if(settings.language!=="en"&&$.ajaxChimp.responses[msg]!==undefined&&$.ajaxChimp.translations&&$.ajaxChimp.translations[settings.language]&&$.ajaxChimp.translations[settings.language][$.ajaxChimp.responses[msg]]){msg=$.ajaxChimp.translations[settings.language][$.ajaxChimp.responses[msg]]}label.html(msg);label.show(2e3);if(settings.callback){settings.callback(resp)}}var data={};var dataArray=form.serializeArray();$.each(dataArray,function(index,item){data[item.name]=item.value});$.ajax({url:url,data:data,success:successCallback,dataType:"jsonp",error:function(resp,text){console.log("mailchimp ajax submit error: "+text)}});var submitMsg="Submitting...";if(settings.language!=="en"&&$.ajaxChimp.translations&&$.ajaxChimp.translations[settings.language]&&$.ajaxChimp.translations[settings.language]["submit"]){submitMsg=$.ajaxChimp.translations[settings.language]["submit"]}label.html(submitMsg).show(2e3);return false})});return this}})(jQuery);
   </script>
@endsection