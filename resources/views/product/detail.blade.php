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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
@section('js')
@endsection
@section('content')
<div class="bodywrap">
<div class="breadcrumb_background">
   <div class="title_full">
      <div class="container a-center">
         <p class="title_page">{{languageName($product->name)}}</p>
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
                  <li>
                     <a class="changeurl"  href=""><span >{{languageName($product->cate->name)}}</span></a>						
                     <span class="mr_lr">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                           <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                           <path d="M96 480c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L242.8 256L73.38 86.63c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l192 192c12.5 12.5 12.5 32.75 0 45.25l-192 192C112.4 476.9 104.2 480 96 480z"/>
                        </svg>
                     </span>
                  </li>
                  <li><strong><span>{{languageName($product->name)}}</span></strong>
                  <li>
               </ul>
            </div>
         </div>
      </div>
   </section>
</div>
<section class="product layout-product" itemscope itemtype="https://schema.org/Product">
   <div class="d-none hidden" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
      <div class="inventory_quantity hidden" itemscope itemtype="http://schema.org/ItemAvailability">
         <span class="a-stock" itemprop="supersededBy">
         Còn hàng
         </span>
      </div>
      <link itemprop="availability" href="http://schema.org/InStock">
   </div>
   <div class="d-none hidden" id="https://template-big-green.mysapo.net" itemprop="seller" itemtype="http://schema.org/Organization" itemscope>
   </div>
   <div class="product-page">
      <div class="product_top details-product">
         <div class="container">
            <div class="row">
               <div class="product-detail-left product-images col-12 col-md-6 col-lg-6 col-xl-6">
                  <div class="product-image-block relative clearfix">
                     <div class="swiper-container gallery-top col_large_default large-image">
                        <div class="swiper-wrapper" id="lightgallery">
                           @php
                           $imgs = json_decode($product->images);
                           @endphp
                           @foreach ($imgs as $img)
                           <a class="swiper-slide" data-hash="0" href="{{$img}}" title="Click để xem">
                           <img height="540" width="540" src="{{$img}}" alt="Bơ Trung Đ&#244;ng" data-image="{{$img}}" class="img-product img-responsive mx-auto d-block swiper-lazy" />
                           </a>
                           @endforeach
                        </div>
                     </div>
                     <div class="swiper_thumbs">
                        <div class="swiper-container gallery-thumbs">
                           <div class="swiper-wrapper">
                              @foreach ($imgs as $img)
                              <div class="swiper-slide" data-hash="0">
                                 <div class="p-100">
                                    <img height="80" width="80" src="{{$img}}" alt="Bơ Trung Đ&#244;ng" data-image="{{$img}}" class="swiper-lazy" />
                                 </div>
                              </div>
                              @endforeach
                           </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                     </div>
                  </div>
               </div>
               <div class="details-pro col-12 col-md-6 col-lg-6 col-xl-6">
                  <h1 class="title-product">{{languageName($product->name)}}</h1>
                  <div class="inventory_quantity">
                     <span class="mb-break">
                     <span class="stock-brand-title"><i>@lang('lang.madein')</i></span>
                     </span>
                  </div>
                  <form  id="add-to-cart-form" class="form-inline">
                     @php
                     $giagiam =$product->price -$product->price*$product->discount/100;
                     @endphp
                     @if($product['price']>0 && $product['discount']>=0 && $product['discount'] <100)
                     <div class="price-box clearfix">
                        <span class="special-price">
                        <span class="price product-price" style="color: red">{{number_format($giagiam)}}₫</span>
                        </span>
                        <!-- Giá Khuyến mại -->
                        <span class="old-price" itemprop="priceSpecification" itemscope="" itemtype="http://schema.org/priceSpecification">
                        <del class="price product-price-old">
                        {{number_format($product->price)}}₫
                        </del>
                        </span>
                        <!-- Giás gốc -->
                        <span class="save-price">
                        -{{$product->discount}}% 
                        </span>
                     </div>
                     @elseif($product['price']>0 && $product['discount'] >= 0)
                     <div class="price-box clearfix">
                        <span class="special-price">
                        <span class="price product-price" style="color:red">{{number_format($product->price)}}₫</span>
                        </span>
                        <!-- Giá Khuyến mại -->
                     </div>
                     @else
                     <div class="price-box">
                        <a href="tel:+{{$setting->phone1}}" style="color: red">@lang('lang.contact')</a>
                     </div>
                     @endif
                     @if ($product['price']>0 && $product['discount']>=0 && $product['discount'] <100)
                     <div class="form-product">
                        <div class="box-variant clearfix ">
                        </div>
                        <div class="clearfix form-group ">
                           <div class="custom custom-btn-number show">
                              <div class="custom custom-btn-numbers form-control">		
                                 <button 
                                 onclick="var result = document.getElementById('qty'); 
                                 var qty = result.value;
                                 if( !isNaN(qty) & qty > 1 ) result.value--;return false;" 
                                 class="btn-minus btn-cts" 
                                 type="button">–</button>
                                 <input type="text" class="qty input-text" id="qty" name="quantity" size="4" value="1" maxlength="3" disabled/>
                                 <button onclick="var result = document.getElementById('qty'); var qty = result.value; 
                                 if( !isNaN(qty)) result.value++;return false;" 
                                 class="btn-plus btn-cts" 
                                 type="button">+</button>
                                 </div>
                           </div>
                        </div>
                        <div class="product-summary">
                           <div class="rte">
                              <em><i class="fa-solid fa-tags"></i>&nbsp;<a href="{{route('allListProCate',['cate'=>$product->cate->slug])}}">{{languageName($product->cate->name)}}</a></em>
                           </div>
                        </div>
                        <div class="clearfix form-group ">
                           <div class="flex-quantity">
                              <div class="btn-mua button_actions clearfix">
                                 <button type="button" class="btn fast btn_base btn-buy-now btn-cart add_to_cart" data-id="{{$product->id}}" data-url="{{route('addToCart',['id'=>$product->id])}}">
                                 <span class="txt-main text_1">@lang('lang.addtocart')</span>
                                 <span class="regular">@lang('lang.giaohang')</span>
                                 </button>
                              </div>
                           </div>
                        </div>
                     </div>
                     @else
                     <div class="form-product">
                        <div class="product-summary">
                           <div class="rte">
                              <em><i class="fa-solid fa-tags"></i>&nbsp;<a href="{{route('allListProCate',['cate'=>$product->cate->slug])}}">{{languageName($product->cate->name)}}</a></em>
                           </div>
                        </div>
                        <div class="clearfix form-group ">
                           <div class="flex-quantity">
                              <div class="btn-mua button_actions clearfix">
                                 <a href="tel:+{{$setting->phone1}}">
                                 <button type="button" class="btn fast btn_base btn-buy-now btn-cart">
                                 @lang('lang.contact')
                                 </button>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                     @endif
                  </form>
               </div>
            </div>
         </div>
      </div>
      <div class="product_bottom">
         <div class="container">
            <div class="row">
               <div class="col-xl-12 col-lg-12 col-12">
                  <div class="product-tab e-tabs not-dqtab">
                     <ul class="tabs tabs-title clearfix">
                        <li class="tab-link active" data-tab="#tab-1">
                           <h3><span>@lang('lang.noidung')</span></h3>
                        </li>
                        <li class="tab-link" data-tab="#tab-2">
                           <h3><span>@lang('lang.detailpro')</span></h3>
                        </li>
                     </ul>
                     <div class="tab-float">
                        <div id="tab-1" class="tab-content active content_extab">
                           <div class="rte product_getcontent">
                              <div id="content">
                                 {!!languageName($product->content)!!}
                              </div>
                              <div class="read-more">
                                 <span>
                                    @lang('lang.more') 
                                    <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="chevron-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-chevron-down fa-w-14">
                                       <path fill="currentColor" d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z" class=""></path>
                                    </svg>
                                 </span>
                              </div>
                           </div>
                        </div>
                        <div id="tab-2" class="tab-content content_extab">
                           <div class="rte">
                              {!!languageName($product->description)!!}
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="product_related">
         <div class="container">
            <div class="row">
               <div class="col-xl-12 col-lg-12 col-12">
                  <div class="productRelate">
                     <div class="block-title">
                        <h2>
                           <a href="/cu-qua-cac-loai" title="@lang('lang.prolq')">@lang('lang.prolq')</a>
                        </h2>
                     </div>
                     <div class="swiper_relate">
                        <div class="product-relate-swiper swiper-container">
                           <div class="swiper-wrapper">
                              @foreach ($productlq as $pro)
                              <div class="swiper-slide">
                                 @include('layouts.product.item', ['product' => $pro])
                              </div>
                              @endforeach
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<script> 
   var variantsize = false;
   var ww = $(window).width();
   function validate(evt) {
   	var theEvent = evt || window.event;
   	var key = theEvent.keyCode || theEvent.which;
   	key = String.fromCharCode( key );
   	var regex = /[0-9]|\./;
   	if( !regex.test(key) ) {
   		theEvent.returnValue = false;
   		if(theEvent.preventDefault) theEvent.preventDefault();
   	}
   }
   var selectCallback = function(variant, selector) {
   	if (variant) {
   		var form = jQuery('#' + selector.domIdPrefix).closest('form');
   		for (var i=0,length=variant.options.length; i<length; i++) {
   			var radioButton = form.find('.swatch[data-option-index="' + i + '"] :radio[value="' + variant.options[i] +'"]');
   			if (radioButton.size()) {
   				radioButton.get(0).checked = true;
   			}
   		}
   	}
   
   
   
   }
   /*begin variant image*/
   if (variant && variant.image) {  
   	var originalImage = jQuery(".gallery-thumbs img");
   	var stickoriginalImage = jQuery(".nd-product-news img");
   	var newImage = variant.image;
   	var element = originalImage[0];
   	Bizweb.Image.switchImage(newImage, element, function (newImageSizedSrc, newImage, element) {
   		$('.gallery-thumbs .swiper-slide').each(function(){
   			var $this = $(this);
   			var imgThis = $this.find('img').attr('data-image');
   			if(newImageSizedSrc.split("?")[0] == imgThis.split("?")[0]){
   				var pst = $this.attr('data-hash');
   				galleryTop.slideTo(pst, 1000,false);
   			}
   			jQuery(stickoriginalImage).attr('src', newImageSizedSrc);
   		});
   	});
   }
   /*end of variant image*/
   
   jQuery(function($) {
   	
   	// Add label if only one product option and it isn't 'Title'. Could be 'Size'.
   	
   										 // Hide selectors if we only have 1 variant and its title contains 'Default'.
   										 
   										 $('.selector-wrapper').hide();
   	 
   	$('.selector-wrapper').css({
   		'text-align':'left',
   		'margin-bottom':'15px'
   	});
   });
   
   jQuery('.swatch :radio').change(function() {
   	var optionIndex = jQuery(this).closest('.swatch').attr('data-option-index');
   	var optionValue = jQuery(this).val();
   	jQuery(this)
   		.closest('form')
   		.find('.single-option-selector')
   		.eq(optionIndex)
   		.val(optionValue)
   		.trigger('change');
   });
   
   $(document).on('click', '.btn-buy-now', function(){
   	var _variantID = $('#product-selectors').val();
   	var _Qty = parseInt($('.input_number_product #qty').val());
   	if(_variantID == null){
   		_variantID = $('#one_variant').val();
   	}
   	jQuery.ajax({
   		type: "POST",
   		url: "/cart/add.js",
   		data: "quantity=" + _Qty + "&VariantId=" + _variantID,
   		dataType: "json",
   		success: function(e) {
   			window.location = '/checkout';
   		},
   		error: function(e, t) {
   			Bizweb.onError(e, t);
   		}
   	});
   });
   
   $('.slider-big-video .slider-for a').each(function() {
   	$(this).attr('rel','lightbox-demo'); 
   });
   
</script>
<script>
   var getLimit = 6;
   var alias = 'bo-trung-dong';
   
   function activeTab(obj){
   	$('.product-tab ul li').removeClass('active');
   	$(obj).addClass('active');
   	var id = $(obj).attr('data-tab');
   	$('.tab-content').removeClass('active');
   	$(id).addClass('active');
   }
   $(".tab-content .rte").each( function(e){
   	if($('.tab-content .rte #content').height()>=300){
   		$('.tab-content').find('.read-more').removeClass('d-none').addClass('more');
   	}
   	else{
   		$('.tab-content').find('.read-more').addClass('d-none');
   	}
   });
   
   jQuery('.read-more').on('click', function(event) { 
   	if ($('.read-more').hasClass('more')) {
   		$(this).removeClass('more').addClass('less');
   		$(this).html('<span>Thu gọn <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="chevron-up" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-chevron-up fa-w-14"><path fill="currentColor" d="M6.101 359.293L25.9 379.092c4.686 4.686 12.284 4.686 16.971 0L224 198.393l181.13 180.698c4.686 4.686 12.284 4.686 16.971 0l19.799-19.799c4.686-4.686 4.686-12.284 0-16.971L232.485 132.908c-4.686-4.686-12.284-4.686-16.971 0L6.101 342.322c-4.687 4.687-4.687 12.285 0 16.971z" class=""></path></svg></span>');
   	}else {
   		$(this).removeClass('less').addClass('more');
   		$(this).html('<span>Xem thêm <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="chevron-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-chevron-down fa-w-14"><path fill="currentColor" d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z" class=""></path></svg></span>');
   		$('html, body').animate({
   			scrollTop: $('#content').offset().top
   		}, 200);
   	}
   
   	jQuery(".tab-content .rte").toggleClass("expand");
   });
   $('.product-tab ul li').click(function(){
   	activeTab(this);
   	return false;
   });
   
   var galleryThumbs = new Swiper('.gallery-thumbs', {
   	spaceBetween: 4,
   	slidesPerView: 0,
   	direction: 'vertical',
   	freeMode: true,
   	lazy: true,
   	watchSlidesVisibility: true,
   	watchSlidesProgress: true,
   	hashNavigation: true,
   	slideToClickedSlide: true,
   	breakpoints: {
   		300: {
   			slidesPerView: 3,
   			spaceBetween: 10,
   		},
   		500: {
   			slidesPerView: 3,
   			spaceBetween: 10,
   		},
   		640: {
   			slidesPerView: 3,
   			spaceBetween: 10,
   		},
   		768: {
   			slidesPerView: 3,
   			spaceBetween: 10,
   		},
   		1024: {
   			slidesPerView: 3,
   			spaceBetween: 10,
   		},
   		1199: {
   			slidesPerView: 4,
   			spaceBetween: 0,
   		},
   	},
   	navigation: {
   		nextEl: '.swiper_thumbs .swiper-button-next',
   		prevEl: '.swiper_thumbs .swiper-button-prev',
   	},
   });
   var galleryTop = new Swiper('.gallery-top', {
   	spaceBetween: 0,
   	lazy: true,
   	hashNavigation: true,
   	thumbs: {
   		swiper: galleryThumbs
   	}
   });
   
   var swiper = new Swiper('.product-relate-swiper', {
   	slidesPerView: 4,
   	loop: false,
   	grabCursor: true,
   	spaceBetween: 30,
   	roundLengths: true,
   	slideToClickedSlide: false,
   	navigation: {
   		nextEl: '.swiper_relate .swiper-button-next',
   		prevEl: '.swiper_relate .swiper-button-prev',
   	},
   	autoplay: false,
   	breakpoints: {
   		300: {
   			slidesPerView: 2,
   			spaceBetween: 15
   		},
   		500: {
   			slidesPerView: 2,
   			spaceBetween: 15
   		},
   		640: {
   			slidesPerView: 3,
   			spaceBetween: 15
   		},
   		768: {
   			slidesPerView: 3,
   			spaceBetween: 30
   		},
   		991: {
   			slidesPerView: 4,
   			spaceBetween: 30
   		},
   		1200: {
   			slidesPerView: 4,
   			spaceBetween: 30
   		}
   	}
   });
   
   $(document).ready(function() {
   	$("#lightgallery").lightGallery({
   		thumbnail: false
   	}); 
   });
</script>
<style>
   .custom-btn-numbers {
   float: left;
   box-shadow: none;
   padding: 0;
   border-radius: 7px;
   border: 1px solid #6c6c79;
   min-height: unset;
   width: auto;
   background-color: transparent;
   height: auto;
   transform: translateY(-18px);
}

.custom-btn-numbers .btn-cts {
   font-size: 20px;
   line-height: 0px;
   border: none;
   display: inline-block;
   width: 35px;
   height: 35px;
   background: #fff;
   float:left;
   color: rgb(27, 7, 7);
   text-align: center;
   padding: 0px;
   border-radius: 0;
   cursor: pointer;
}

.custom-btn-numbers .btn-cts.btn-minus {
   border-top-left-radius: 7px;
   border-bottom-left-radius: 7px
}

.custom-btn-numbers .btn-cts.btn-plus {
   border-top-right-radius: 7px;
   border-bottom-right-radius: 7px
}
.custom-btn-numbers .btn-cts.btn-plus:active{
   background-color: orangered;
   color: bisque;
}
.custom-btn-numbers .btn-cts.btn-minus:active{
   background-color: orangered;
   color: bisque;
}

.custom-btn-numbers #qty {
   height: 35px;
   font-size: 1em;
   margin: 0;
   width: 35px;
   padding: 0 2px;
   text-align: center;
   background: #fff;
   min-height: unset;
   display: block;
   float: left;
   box-shadow: none;
   border-radius: 0px;
   border: none;
   user-select:none !important;
}
</style>
@endsection