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
                    @if (isset($cate_title))
                        <li class="home">
                        <a  href="{{ route('listServiceCate', ['cate'=>$cate->slug]) }}" ><span >{{ $cate_title }}</span></a>						
                        <span class="mr_lr">&nbsp;/&nbsp;</span>
                        </li>
                    @endif
                    <li><strong ><span>{{$title}}</span></strong></li>
                </ul>
            </div>
        </div>
        </div>
    </section>
</div>
<div class="section wrap_background padding-bottom-40">
<div class="container ">
<div class="bg_collection section">
<div class="row">
@include('layouts.main.sidebar')
<div class="main_container collection right-content col-xl-9 col-lg-9 col-md-12 col-sm-12">
<h1 class="collectiontitle">{{ $title }}</h1>
<div class="category-products products">
<section class="products-view products-view-grid collection_reponsive list_hover_pro">
    <div class="section_service">
        <div class="row">
            @foreach ($list as $key=>$service)
                <div class="col-lg-4 col-md-4 col-12 col_service">
                    <div class="box_service box_{{$key}} lazyload"
                        data-src="{{ asset('frontend/images/bg_itemsv_1.png')}}">
                        <a href="{{ route('serviceDetail', ['cate'=>$service->category_slug, 'type'=>$service->type_slug, 'slug'=>$service->slug ])}}">
                            <h3 class="title_service">
                                {{ $service->name }}
                            </h3>
                        </a>
                        <div class="content_service">
                            {!! languageName($service->description) !!}
                        </div>
                        <div class="btn-more">
                            <span class="more">Xem chi tiết</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="section pagenav">
        {{ $list->links() }}
    </div>
</section>
</div>
<div id="open-filters" class="open-filters d-lg-none d-xl-none">
    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="filter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-filter fa-w-16">
        <path fill="currentColor" d="M487.976 0H24.028C2.71 0-8.047 25.866 7.058 40.971L192 225.941V432c0 7.831 3.821 15.17 10.237 19.662l80 55.98C298.02 518.69 320 507.493 320 487.98V225.941l184.947-184.97C520.021 25.896 509.338 0 487.976 0z"></path>
    </svg>
    <span>Lọc</span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection