@extends('layouts.main.master')
@section('title')
{{($detail_service->name)}}
@endsection
@section('description')
{{languageName($detail_service->description)}}
@endsection
@section('image')
{{url(''.$detail_service->image)}}
@endsection
@section('css')
<link href="{{asset('frontend/css/contact_style.scss.css')}}"  rel="stylesheet" type="text/css">
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
					<li class="home">
						<a  href="{{ route('listServiceCate', ['cate'=>$cate->slug]) }}" ><span >{{ $cate_title }}</span></a>						
						<span class="mr_lr">&nbsp;/&nbsp;</span>
					</li>
					<li class="home">
						<a  href="{{ route('listServiceType', ['cate'=>$cate->slug, 'type'=>$type->slug]) }}" ><span >{{ $type_title }}</span></a>						
						<span class="mr_lr">&nbsp;/&nbsp;</span>
					</li>
					<li><strong ><span>{{$detail_service->name}}</span></strong></li>
				</ul>
			</div>
			</div>
		</div>
	</section>
</div>
<section class="page page_price_list">
	<div class="container">
		<div class="wrap_background_aside padding-top-15">
			<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<h1 class="title_page a-center"><span>{{ $type_title }}</span></h1>
				<div class="box_price">
					<h2 style="text-align: center;">{{$detail_service->name}}</h2>
					<table border="1" cellpadding="1" cellspacing="1" style="width:100%;">
						<tbody>
							{!!languageName($detail_service->content)!!}
						</tbody>
					</table>
				</div>
				<div class="banner_price">
					<img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="{{ asset('frontend/images/banner_price.png') }}" alt="banner_booking"/>   
				</div>
			</div>
			</div>
		</div>
	</div>
</section>
</div>
@endsection