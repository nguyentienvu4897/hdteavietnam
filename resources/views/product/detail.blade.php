@extends('layouts.main.master')
@section('title')
{{languageName($product->name)}}
@endsection
@section('description')
{{languageName($product->description)}}
@endsection
@section('image')
@php
$imgs = json_decode($product->images);
@endphp
{{url(''.$imgs[0])}}
@endsection
@section('css')
<link href="{{asset('frontend/css/product_style.scss.css')}}"  rel="stylesheet" type="text/css">
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
                        <a  href="/" ><span >Trang chủ</span></a>						
                        <span class="mr_lr">&nbsp;/&nbsp;</span>
                     </li>
                     <li>
                        <a class="changeurl"  href="{{ route('allListProCate', ['danhmuc'=>$product->cate_slug]) }}"><span >{{languageName($product->cate->name)}}</span></a>						
                        <span class="mr_lr">&nbsp;/&nbsp;</span>
                     </li>
                     <li><strong><span>{{languageName($product->name)}}</span></strong>
                     <li>
                  </ul>
               </div>
            </div>
         </div>
      </section>
   </div>
   <section class="product details-main" itemscope itemtype="https://schema.org/Product">
      <form enctype="multipart/form-data" id="add-to-cart-form" action="/cart/add" method="post" class="form_background form-inline margin-bottom-0">
         <div class="container">
            <div class="section wrap-padding-15 wp_product_main">
               <div class="details-product section">
                  <div class="row ">
                     <div class="product-detail-left product-images left-content col-xs-12 col-sm-12 col-md-12 col-lg-7 col-xl-6">
                        <div class="col_large_default large-image">
                           <div class="swiper-container swiper_big_image clearfix margin-bottom-20">
                              <div class="swiper-wrapper">
                                 @foreach ($imgs as $img)
                                    <div class="item swiper-slide">
                                       <a class="img_big img-product" href="{{ $img }}" title="Click để xem">
                                       <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{ $img }}" alt="{{ languageName($product->name) }}" data-image="{{ $img }}" class="lazyload img-responsive mx-auto d-block" loading="lazy">
                                       </a>
                                    </div>
                                 @endforeach
                              </div>
                           </div>
                        </div>
                        <div class="thumb_product_details">
                           <div class="swiper-container swiper_thumb_image clearfix">
                              <div class="swiper-wrapper">
                                 @foreach ($imgs as $img)
                                    <div class="item swiper-slide">
                                       <a class="a_img">
                                       <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{ $img }}" alt="{{ languageName($product->name) }}" data-image="{{$img}}" loading="lazy" />
                                       </a>
                                    </div>
                                 @endforeach
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5 col-xl-6 details-pro">
                        <h1 class="title-product">Thức ăn hạt cho mèo Whiskat</h1>
                        <div class="group-status">
                           <span class="first_status status_2">
                           Tình trạng: 
                           @if ($product->status == 1)
                              <span class="status_name availabel">
                              Còn hàng
                              </span>
                           @else
                              <span class="status_name availabel">
                                 Hết hàng
                                 </span>
                           @endif
                           </span>
                        </div>
                        <div class="price-box">
                           @if (isset($product->discount))
                              <span class="special-price"><span class="price product-price">{{ number_format(($product->price)-($product->price)*(($product->discount)/100)) }}<sup>vnđ</sup></span> 
                              </span> <!-- Giá Khuyến mại -->
                           @endif
                           @if (isset($product->price))
                              <span class="old-price">
                              <del class="price product-price-old sale">{{ number_format($product->price) }}<sup>vnđ</sup></del> 
                              </span> <!-- Giá gốc -->
                           @endif
                        </div>
                        <div class="form-product col-sm-12">
                           <div class="box-variant clearfix ">
                              <input type="hidden" name="variantId" value="48910650" />
                           </div>
                           <div class="form-group form_button_details">
                              <div class="form_product_content type1 ">
                                 <div class="soluong soluong_type_1 show">
                                    <label class="sl section">Số lượng:</label>
                                    <div class="custom input_number_product custom-btn-number form-control">
                                       <button class="btn_num num_1 button button_qty" onClick="var result = document.getElementById('qtym'); var qtypro = result.value; if( !isNaN( qtypro ) &amp;&amp; qtypro &gt; 1 ) result.value--;return false;" type="button">
                                          <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-caret-down fa-w-10">
                                             <path fill="currentColor" d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z" class=""></path>
                                          </svg>
                                       </button>
                                       <input type="text" id="qtym" name="quantity" value="1" maxlength="3" class="form-control prd_quantity " onkeypress="if ( isNaN(this.value + String.fromCharCode(event.keyCode) )) return false;" onchange="if(this.value == 0)this.value=1;">
                                       <button class="btn_num num_2 button button_qty" onClick="var result = document.getElementById('qtym'); var qtypro = result.value; if( !isNaN( qtypro )) result.value++;return false;" type="button">
                                          <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-up" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-caret-up fa-w-10">
                                             <path fill="currentColor" d="M288.662 352H31.338c-17.818 0-26.741-21.543-14.142-34.142l128.662-128.662c7.81-7.81 20.474-7.81 28.284 0l128.662 128.662c12.6 12.599 3.676 34.142-14.142 34.142z" class=""></path>
                                          </svg>
                                       </button>
                                    </div>
                                 </div>
                                 <div class="button_actions clearfix">
                                    <button type="submit" class="btn_buynow btn_base buy-now" data-url="{{ route('addToCart', ['id'=>$product->id])}}">
                                    <span class="txt-main text_1">Mua ngay</span>
                                    </button>	
                                    <button type="submit" class="btn btn_base btn_add_cart btn-cart add_to_cart" data-url="{{ route('addToCart', ['id'=>$product->id])}}">
                                    <span class="text_1">Thêm vào giỏ hàng</span>
                                    </button>								
                                 </div>
                              </div>
                           </div>
                           <div class="service_item clearfix">
                              <div class="service_image">
                                 <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/100/432/370/themes/854781/assets/service_product_1.png?1648193796685" alt="Vận chuyển toàn quốc: " class="lazyload">
                              </div>
                              <div class="content_service">
                                 <span class="service-title">
                                 Vận chuyển toàn quốc
                                 </span>
                                 <span class="des_service">

                                 </span>
                              </div>
                           </div>
                           <div class="service_item clearfix">
                              <div class="service_image">
                                 <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/100/432/370/themes/854781/assets/service_product_2.png?1648193796685" alt="Hỗ trợ đổi trả: " class="lazyload">
                              </div>
                              <div class="content_service">
                                 <span class="service-title">
                                 Hỗ trợ đổi trả: 
                                 </span>
                                 <span class="des_service">
                                 Trong vòng 15 ngày kể từ khi mua hàng
                                 </span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </form>
      <section class="section sec_tab ">
         <div class="container">
            <div class="row">
               <div class="tab_h col-xs-12 col-lg-12 col-sm-12 col-md-12">
                  <div class="section bg_white">
                     <!-- Nav tabs -->
                     <div class="product-tab e-tabs not-dqtab">
                        <ul class="tabs tabs-title clearfix">
                           <li class="tab-link" data-tab="tab-1">
                              <h3><span>Mô tả sản phẩm</span></h3>
                           </li>
                        </ul>
                        <div class="tab-float">
                           <div id="tab-1" class="tab-content content_extab">
                              <div class="rte product_getcontent">
                                 {!! languageName($product->content) !!}
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="section_prd_feature" id="sidebarproduct">
                     <div class="title_module section">
                        <h2 class="bf_flower">
                           <a href="{{ route('allListProCate', ['danhmuc'=>$product->cate_slug])}}" title="Sản phẩm liên quan">Sản phẩm liên quan</a>
                        </h2>
                     </div>
                     <div class="swiper-container swiper_related">
                        <div class=" section products product_related swiper-wrapper">
                           @foreach ($productlq as $product)
                           <?php $imgs = json_decode($product->images);?>
                              <div class="item swiper-slide">
                                 <div class="item_product_main">
                                    <form action="/cart/add" method="post" class="variants wishItem" data-id="product-actions-22464488" enctype="multipart/form-data">
                                       <div class="product-thumbnail">
                                          <a class="product_overlay" href="{{ route('detailProduct', ['cate'=>$product->cate_slug, 'slug'=>$product->slug])}}" title="{{ languageName($product->name) }}"></a>
                                          <a class="image_thumb" href="{{ route('detailProduct', ['cate'=>$product->cate_slug, 'slug'=>$product->slug])}}" title="{{ languageName($product->name) }}">
                                          <img class="lazyload" width="10" height="10" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="{{ $imgs[0] }}" alt="{{ languageName($product->name) }}" loading="lazy">
                                          </a>
                                          <div class="product-action">
                                             <div class="group_action">
                                                <input type="hidden" name="variantId" value="49036231" />
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
                                    </form>
                                 </div>
                              </div>
                           @endforeach
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </section>
   <script>
      function scrollToxx() {
         $('html, body').animate({ scrollTop: $('.product-tab.e-tabs').offset().top }, 'slow');
         $('.product-tab .tab-link').removeClass('current');
         $('#tab-review').addClass('current');
         $('.tab-content').removeClass('current');
         $('.tab-review-c').addClass('current');
         return false;
      }
      
      
      $(document).ready(function (e) {
         var gallerythumb = new Swiper('.swiper_thumb_image', {
            spaceBetween: 10,
            slidesPerView: 4,
            direction: 'vertical',
            freeMode: true,
            lazy: true,
            watchSlidesVisibility: true,
            watchSlidesProgress: true,
            hashNavigation: true,
            breakpoints: {
               300: {
                  slidesPerView: 3,
                  spaceBetween: 10,
               },
               500: {
                  slidesPerView: 3,
                  spaceBetween: 10,
               },
               767: {
                  slidesPerView: 3,
                  spaceBetween: 10,
               },
               768: {
                  slidesPerView: 4,
                  spaceBetween: 10,
               },
               992: {
                  slidesPerView: 4,
                  spaceBetween: 10,
               },
               1200: {
                  slidesPerView: 4,
                  spaceBetween: 10,
               },
            }
         });
      
         var gallerybig = new Swiper('.swiper_big_image', {
            spaceBetween: 0,
            slidesPerView: 1,
            lazy: true,
            thumbs: {
               swiper: gallerythumb
            },
            breakpoints: {
               300: {
                  slidesPerView: 1,
                  spaceBetween: 0,
               },
               425: {
                  slidesPerView: 1,
                  spaceBetween: 0,
               },
               767: {
                  slidesPerView: 1,
                  spaceBetween: 0,
               },
               768: {
                  slidesPerView: 1,
                  spaceBetween: 0,
               },
               1024: {
                  slidesPerView: 1,
                  spaceBetween: 0,
               },
            }
         });
      	
         var galleryThumbs = new Swiper('.swiper_related', {
            spaceBetween: 30,
            slidesPerView: 5,
            watchSlidesVisibility: true,
            watchSlidesProgress: true,
            hashNavigation: true,
            breakpoints: {
               300: {
                  slidesPerView: 2,
                  spaceBetween: 15,
               },
               500: {
                  slidesPerView: 2,
                  spaceBetween: 15,
               },
               767: {
                  slidesPerView: 2,
                  spaceBetween: 15,
               },
               768: {
                  slidesPerView: 3,
                  spaceBetween: 30,
               },
               992: {
                  slidesPerView: 4,
                  spaceBetween: 30,
               },
               1200: {
                  slidesPerView: 5,
                  spaceBetween: 30,
               },
            }
         });
      
         $(".tab-content .rte").each( function(e){
            if($('.tab-content .rte #content').height()>=400){
               $('.tab-content').find('.read-more').removeClass('hidden').addClass('more');
            }
            else{
               $('.tab-content').find('.read-more').addClass('hidden');
            }
         });
      
         jQuery('.read-more').on('click', function(event) { 
            if ($('.read-more').hasClass('more')) {
               $(this).removeClass('more').addClass('less');
               $(this).html('<span>Thu gọn <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="angle-up" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-angle-up fa-w-10"><path fill="currentColor" d="M168.5 164.2l148 146.8c4.7 4.7 4.7 12.3 0 17l-19.8 19.8c-4.7 4.7-12.3 4.7-17 0L160 229.3 40.3 347.8c-4.7 4.7-12.3 4.7-17 0L3.5 328c-4.7-4.7-4.7-12.3 0-17l148-146.8c4.7-4.7 12.3-4.7 17 0z" class=""></path></svg></span>');
            }else {
               $(this).removeClass('less').addClass('more');
               $(this).html('<span>Xem thêm <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="angle-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-angle-down fa-w-10"><path fill="currentColor" d="M151.5 347.8L3.5 201c-4.7-4.7-4.7-12.3 0-17l19.8-19.8c4.7-4.7 12.3-4.7 17 0L160 282.7l119.7-118.5c4.7-4.7 12.3-4.7 17 0l19.8 19.8c4.7 4.7 4.7 12.3 0 17l-148 146.8c-4.7 4.7-12.3 4.7-17 0z" class=""></path></svg></span>');
               $('html, body').animate({
                  scrollTop: $('#content').offset().top
               }, 200);
            }
      
            jQuery(".tab-content .rte").toggleClass("expand");
         });
      
         $('#gallery_02 img, .swatch-element label').click(function(e){
            e.preventDefault();
            var ths = $(this).attr('data-image');
            $('.large-image .checkurl').attr('src', ths);
      
            $('.large-image .checkurl img').attr('src', ths);
      
            /*** xử lý active thumb -- ko variant ***/
            var thumbLargeimg = $('.details-product .large-image a').attr('href');
            var thumMedium = $('#gallery_02 .owl-item .item a').find('img').attr('src');
            var url = [];
      
            $('#gallery_02 .owl-item .item').each(function(){
               var srcImg = '';
               $(this).find('a img').each(function(){
                  var current = $(this);
                  if(current.children().size() > 0) {return true;}
                  srcImg += $(this).attr('src');
               });
               url.push(srcImg);
               var srcimage = $(this).find('a img').attr('src');
               if (srcimage == thumbLargeimg) {
                  $(this).find('a').addClass('active');
               } else {
                  $(this).find('a').removeClass('active');
               }
            });
         })
      
      });
      
      
   </script>
</div>
@endsection