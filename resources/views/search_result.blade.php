@extends('layouts.main.master')
@section('title')
Kết quả tìm kiếm
@endsection
@section('description')
Đã tìm thấy {{$countproduct}} kết quả phù hợp cho từ khóa "{{$keyword}}"
@endsection
@section('image')
{{url(''.$setting->logo)}}
@endsection
@section('css')
<link rel="stylesheet" href="{{asset('frontend/css/search_style.scss.css')}}">
@endsection
@section('content')
<div class="bodywrap">
	<div class="breadcrumb_background">
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
					  <li><strong><span>@lang('lang.search')</span></strong></li>
				   </ul>
				</div>
			 </div>
		  </div>
	   </section>
	   <div class="title_full">
		  <div class="container a-center">
			 <h1 class="title_page">{{$keyword}} - @lang('lang.search')</h1>
		  </div>
	   </div>
	</div>
	<section class="signup search-main wrap_background background_white clearfix">
	   <div class="container">
		  <div class="margin-bottom-15 no-padding">
			 <h1 class="title-head title_search">@lang('lang.searched') {{$countproduct}} @lang('lang.products') </h1>
		  </div>
		  <div class="category-products">
			 <div class="products-view-grid">
				<div class="row">
					@foreach ($resultPro as $item)
						<div class="col-6 col-md-4 col-lg-3">
						<div class="item_product_main">
								@include('layouts.product.item',['product'=>$item])
						</div>
						</div>
					@endforeach
				</div>
			 </div>
		  </div>
		
	   </div>
	</section>
	
@endsection