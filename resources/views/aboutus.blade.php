@extends('layouts.main.master')
@section('title')
@lang('lang.aboutus')
@endsection
@section('description')
{{ strip_tags(languageName($pageContent->description)) }}
@endsection
@section('css')
<link href="{{asset('frontend/css/breadcrumb_style.scss.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{asset('frontend/css/style_page.scss.css')}}" rel="stylesheet" type="text/css" media="all" />
@endsection
@section('js')
@endsection
@section('content')
<div class="bodywrap">
   <div class="breadcrumb_background">
      <div class="title_full">
         <div class="container a-center">
            <h1 class="title_page">@lang('lang.about-us')</h1>
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
                     <li><strong ><span>@lang('lang.aboutus')</span></strong></li>
                  </ul>
               </div>
            </div>
         </div>
      </section>
   </div>
   <section class="page">
      <div class="container">
         <div class="pg_page padding-top-15">
            <div class="row">
               <div class="col-12">
                  <div class="page-title category-title">
                     <h1 class="title-head hidden"><a href="#">@lang('lang.aboutus')</a></h1>
                  </div>
                  <div class="content-page rte">
                     {!!languageName($pageContent->content)!!}
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
@endsection