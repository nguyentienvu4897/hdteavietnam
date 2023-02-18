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
      <div class="row">
         @foreach ($list as $product)
         <?php $imgs = json_decode($product->images);?>
            <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-3 product-col">
               <div class="item_product_main margin-bottom-40">
                  <div class="product-thumbnail">
                     <a class="product_overlay" href="{{ route('detailProduct', ['cate'=>$product->cate_slug, 'slug'=>$product->slug]) }}" title="{{ languageName($product->name) }}"></a>
                     <a class="image_thumb" href="{{ route('detailProduct', ['cate'=>$product->cate_slug, 'slug'=>$product->slug]) }}" title="{{ languageName($product->name) }}">
                     <img class="lazyload" width="10" height="10" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="{{$imgs[0]}}" alt="{{ languageName($product->name) }}" loading="lazy">
                     </a>
                     <div class="product-action">
                        <div class="group_action">
                           <input type="hidden" name="variantId" value="48910650" />
                           <button class="btn-buy btn-cart btn-left btn btn-views left-to add_to_cart active "
                           data-url="{{ route('addToCart', ['id'=>$product->id])}}"
                           title="Thêm vào giỏ">
                              <svg xmlns="http://www.w3.org/2000/svg" version="1.1" x="0" y="0" viewBox="0 0 490.666 490.666" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                 <g>
                                    <path d="M394.667,373.333c-29.397,0-53.333,23.936-53.333,53.333S365.269,480,394.667,480S448,456.064,448,426.666    S424.064,373.333,394.667,373.333z M394.667,458.666c-17.643,0-32-14.357-32-32c0-17.643,14.357-32,32-32    c17.643,0,32,14.357,32,32C426.667,444.309,412.309,458.666,394.667,458.666z" fill="#ffffff" data-original="#000000" style="" class=""></path>
                                    <path d="M181.333,373.333c-29.397,0-53.333,23.936-53.333,53.333S151.936,480,181.333,480s53.333-23.936,53.333-53.333    S210.731,373.333,181.333,373.333z M181.333,458.666c-17.643,0-32-14.357-32-32c0-17.643,14.357-32,32-32s32,14.357,32,32    C213.333,444.309,198.976,458.666,181.333,458.666z" fill="#ffffff" data-original="#000000" style="" class=""></path>
                                    <path d="M437.333,330.666H191.125c-25.323,0-47.317-18.027-52.288-42.88L85.12,19.242c-1.003-4.992-5.376-8.576-10.453-8.576h-64    C4.779,10.666,0,15.445,0,21.333S4.779,32,10.667,32H65.92l51.989,259.989c6.955,34.773,37.76,60.011,73.216,60.011h246.208    c5.888,0,10.667-4.779,10.667-10.667C448,335.445,443.221,330.666,437.333,330.666z" fill="#ffffff" data-original="#000000" style="" class=""></path>
                                    <path d="M488,78.272c-2.027-2.283-4.928-3.605-8-3.605H96c-5.888,0-10.667,4.779-10.667,10.667S90.112,96,96,96h371.925    l-15.168,121.301c-2.005,15.979-15.659,28.032-31.765,28.032H128c-5.888,0-10.667,4.779-10.667,10.667    c0,5.888,4.779,10.667,10.667,10.667h292.992c26.837,0,49.6-20.075,52.928-46.72l16.661-133.291    C490.965,83.626,490.027,80.554,488,78.272z" fill="#ffffff" data-original="#000000" style="" class=""></path>
                                 </g>
                              </svg>
                              <span class="text">Mua ngay</span>
                           </button>
                        </div>
                     </div>
                  </div>
                  <div class="product-info">
                     <h3 class="product-name"><a href="{{ route('detailProduct', ['cate'=>$product->cate_slug, 'slug'=>$product->slug]) }}" title="{{ languageName($product->name) }}">{{ languageName($product->name) }}</a></h3>
                     <div class="price-box">
                        @if (isset($product->discount))
                           <span class="price">{{ number_format(($product->price)-($product->price)*(($product->discount)/100)) }}<sup>vnđ</sup></span>
                        @endif
                        @if (isset($product->price))
                           <span class="compare-price">{{number_format($product->price)}}<sup>vnđ</sup></span>
                        @endif
                     </div>
                  </div>
               </div>
            </div>
         @endforeach
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