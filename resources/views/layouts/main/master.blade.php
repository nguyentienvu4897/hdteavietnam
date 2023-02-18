<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="keywords" content="@yield('title')"/>
    <meta name="robots" content="noodp,index,follow" />
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="description" content="@yield('description')" />
    <link rel="canonical" href="{{url()->current()}}" />
    <meta property="og:locale" content="vi_VN" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="@yield('title')" />
    <meta property="og:description" content="@yield('description')" />
    <meta property="og:url" content="{{url()->current()}}" />
    <meta property="og:site_name" content="ahometh.vn" />
    <meta property="og:updated_time" content="2021-08-28T22:06:30+07:00" />
    <meta property="og:image" content="@yield('image')" />
    <meta property="og:image:secure_url" content="@yield('image')" />
    <meta property="og:image:width" content="598" />
    <meta property="og:image:height" content="333" />
    <meta property="og:image:alt" content="ahome-noi-that" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="@yield('title')" />
    <meta name="twitter:description" content="@yield('description')" />
    <meta name="twitter:image" content="@yield('image')" />
    <!-- Fav Icon -->
    <link rel="icon" href="{{url(''.$setting->favicon)}}" type="image/x-icon">
    <link rel="preload" as="script" href="{{asset('frontend/js/jquery.js')}}" />
    <script src="{{asset('frontend/js/jquery.js')}}" type="text/javascript"></script>
    <link rel="preload" as="script" href="{{asset('frontend/js/swiper.js')}}" />
    <script src="{{asset('frontend/js/swiper.js')}}" type="text/javascript"></script>
    <link rel="preload" as="script" href="{{asset('frontend/js/lazy.js')}}" />
    <script src="{{asset('frontend/js/lazy.js')}}" type="text/javascript"></script>
    <link rel="preload" as='style' type="text/css" href="{{asset('frontend/css/main.scss.css')}}">
    <link rel="preload" as='style'  type="text/css" href="{{asset('frontend/css/index.scss.css')}}">
    <link rel="preload" as='style'  type="text/css" href="{{asset('frontend/css/404page.scss.css')}}">
    <link rel="preload" as='style'  type="text/css" href="{{asset('frontend/css/bootstrap-4-3-min.css')}}">
    <link rel="preload" as='style'  type="text/css" href="{{asset('frontend/css/quickviews_popup_cart.scss.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/breadcrumb_style.scss.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/main.css')}}">
    {{-- <link rel="preload" as='style'  type="text/css" href="{{asset('frontend/css/page-wishlist.scss.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap-4-3-min.css')}}">
    <link href="{{asset('frontend/css/main.scss.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="preload" as='style'  type="text/css" href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;900&display=swap">
    <link href="{{asset('frontend/css/index.scss.css')}}" rel="stylesheet" type="text/css" media="all" />
    {{-- <link href="{{asset('frontend/css/page-wishlist.scss.css')}}" rel="stylesheet" type="text/css" media="all" /> --}}
    <link href="{{asset('frontend/css/quickviews_popup_cart.scss.css')}}" rel="stylesheet" type="text/css" media="all" />
    @yield('css')
    <script>
        $(document).ready(function ($) {
            awe_lazyloadImage();
        });
        function awe_lazyloadImage() {
            var ll = new LazyLoad({
                elements_selector: ".lazyload",
                load_delay: 100,
                threshold: 0
            });
        } window.awe_lazyloadImage=awe_lazyloadImage;
    </script>
</head>
<body>
    <div class="opacity_menu"></div>
    @include('layouts.header.index')
    <div class="bodywrap">
        @yield('content')
        @include('layouts.footer.index')
        <div class="backdrop__body-backdrop___1rvky"></div>
    </div>
    <link rel="preload" as="style" href="{{asset('frontend/css/ajaxcart.scss.css')}}"  type="text/css">
    <link href="{{asset('frontend/css/ajaxcart.scss.css')}}" rel="stylesheet" type="text/css" media="all" />
    <div id="CartDrawer" class="cart-sidebar">
        <div class="clearfix cart_heading">
            <h4 class="cart_title">Giỏ hàng</h4>
            <div class="cart_btn-close" title="Đóng giỏ hàng">
            <svg class="Icon Icon--close" viewBox="0 0 16 14">
                <path d="M15 0L1 14m14 0L1 0" stroke="currentColor" fill="none" fill-rule="evenodd"></path>
            </svg>
            </div>
        </div>
        <div class="drawer__inner">
            <div id="CartContainer" class="CartSideContainer">
            </div>
        </div>
    </div>
    <div id="popup-cart-mobile" class="popup-cart-mobile">
        <div class="header-popcart">
            <div class="top-cart-header">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" height="682.66669pt" viewBox="-21 -21 682.66669 682.66669" width="682.66669pt">
                    <path d="m322.820312 387.933594 279.949219-307.273438 36.957031 33.671875-314.339843 345.023438-171.363281-162.902344 34.453124-36.238281zm297.492188-178.867188-38.988281 42.929688c5.660156 21.734375 8.675781 44.523437 8.675781 68.003906 0 148.875-121.125 270-270 270s-270-121.125-270-270 121.125-270 270-270c68.96875 0 131.96875 26.007812 179.746094 68.710938l33.707031-37.113282c-58.761719-52.738281-133.886719-81.597656-213.453125-81.597656-85.472656 0-165.835938 33.285156-226.273438 93.726562-60.441406 60.4375-93.726562 140.800782-93.726562 226.273438s33.285156 165.835938 93.726562 226.273438c60.4375 60.441406 140.800782 93.726562 226.273438 93.726562s165.835938-33.285156 226.273438-93.726562c60.441406-60.4375 93.726562-140.800782 93.726562-226.273438 0-38.46875-6.761719-75.890625-19.6875-110.933594zm0 0"/>
                </svg>
                Mua hàng thành công
            </span>
            </div>
            <div class="media-content bodycart-mobile">
            </div>
            <a class="noti-cart-count" href="/cart" title="Giỏ hàng"> Giỏ hàng của bạn hiện có <span class="count_item_pr"></span> sản phẩm </a>
            <a title="Đóng" class="cart_btn-close iconclose">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512.001 512.001" style="enable-background:new 0 0 512.001 512.001;" xml:space="preserve">
                <g>
                    <g>
                        <path d="M284.286,256.002L506.143,34.144c7.811-7.811,7.811-20.475,0-28.285c-7.811-7.81-20.475-7.811-28.285,0L256,227.717    L34.143,5.859c-7.811-7.811-20.475-7.811-28.285,0c-7.81,7.811-7.811,20.475,0,28.285l221.857,221.857L5.858,477.859    c-7.811,7.811-7.811,20.475,0,28.285c3.905,3.905,9.024,5.857,14.143,5.857c5.119,0,10.237-1.952,14.143-5.857L256,284.287    l221.857,221.857c3.905,3.905,9.024,5.857,14.143,5.857s10.237-1.952,14.143-5.857c7.811-7.811,7.811-20.475,0-28.285    L284.286,256.002z"/>
                    </g>
                </g>
            </svg>
            </a>
            <div class="bottom-action">
            <div class="cart_btn-close tocontinued">
                Tiếp tục mua hàng
            </div>
            <a href="/checkout" class="checkout">
            Thanh toán ngay
            </a>
            </div>
        </div>
    </div>
    <!-- Quick view -->
    <div id="quick-view-product" class="quickview-product" style="display:none;">
        <div class="quickview-overlay fancybox-overlay fancybox-overlay-fixed"></div>
        <div class="quick-view-product"></div>
        <div id="quickview-modal" style="display:none;">
            <div class="block-quickview primary_block details-product">
            <div class="row">
                <div class="product-left-column product-images col-xs-12 col-sm-4 col-md-4 col-lg-5 col-xl-6">
                    <div class="image-block large-image col_large_default">
                        <span class="view_full_size">
                        <a class="img-product" title="" href="javascript:;">
                        <img src="//bizweb.dktcdn.net/100/448/970/themes/894899/assets/logo.png?1676280280637" id="product-featured-image-quickview" class="img-responsive product-featured-image-quickview" alt="quickview"  />
                        </a>
                        </span>
                        <div class="loading-imgquickview" style="display:none;"></div>
                    </div>
                    <div class="more-view-wrapper clearfix">
                        <div class="thumbs_quickview owl_nav_custome1 swiper-container" id="thumbs_list_quickview">
                        <ul class="product-photo-thumbs quickview-more-views-owlslider not-thuongdq swiper-wrapper" id="thumblist_quickview"></ul>
                        <div class="swiper-button-prev">
                        </div>
                        <div class="swiper-button-next">
                        </div>
                        </div>
                    </div>
                </div>
                <div class="product-center-column product-info product-item col-xs-12 col-sm-6 col-md-8 col-lg-7 col-xl-6 details-pro style_product style_border">
                    <div class="head-qv group-status">
                        <h3 class="qwp-name title-product">abc</h3>
                    </div>
                    <div class="quickview-info">
                        <span class="prices price-box">
                        <span class="price product-price"></span>
                        <del class="old-price"></del>
                        </span>
                    </div>
                    <form action="/cart/add" method="post" enctype="multipart/form-data" class="quick_option variants form-ajaxtocart form-product">
                        <span class="price-product-detail d-none" style="opacity: 0;">
                        <span class=""></span>
                        </span>
                        <select name='variantId' class="d-none" style="display:none"></select>
                        <div class="product-description product-summary">
                        <div class="rte">
                        </div>
                        </div>
                        <div class="form_product_content">
                        <div class="count_btn_style quantity_wanted_p">
                            <div class=" soluong1 clearfix">
                                <label class="sl section">Số lượng:</label>
                                <div class="sssssscustom input_number_product">
                                    <a class="btn_num num_1 button button_qty" onClick="var result = document.getElementById('quantity-detail'); var qtyqv = result.value; if( !isNaN( qtyqv ) &amp;&amp; qtyqv &gt; 1 ) result.value--;return false;">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path d="M400 288h-352c-17.69 0-32-14.32-32-32.01s14.31-31.99 32-31.99h352c17.69 0 32 14.3 32 31.99S417.7 288 400 288z"/>
                                    </svg>
                                    </a>
                                    <input type="text" id="quantity-detail" name="quantity" value="1" maxlength="2" class="form-control prd_quantity" onkeypress="if ( isNaN(this.value + String.fromCharCode(event.keyCode) )) return false;" onchange="if(this.value == 0)this.value=1;">
                                    <a class="btn_num num_2 button button_qty" onClick="var result = document.getElementById('quantity-detail'); var qtyqv = result.value; if( !isNaN( qtyqv )) result.value++;return false;">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path d="M432 256c0 17.69-14.33 32.01-32 32.01H256v144c0 17.69-14.33 31.99-32 31.99s-32-14.3-32-31.99v-144H48c-17.67 0-32-14.32-32-32.01s14.33-31.99 32-31.99H192v-144c0-17.69 14.33-32.01 32-32.01s32 14.32 32 32.01v144h144C417.7 224 432 238.3 432 256z"/>
                                    </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="button_actions clearfix">
                                <button type="submit" class="qv_add_to_cart btn_cool btn btn_base fix_add_to_cart ajax_addtocart btn_add_cart btn-cart add_to_cart add_to_cart_detail">
                                <span class="btn-content text_1">Cho vào giỏ</span>
                                <span class="regular">Thêm vào giỏ để chọn tiếp</span>
                                </button>
                            </div>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
            </div>
            <a title="Close" class="quickview-close close-window" href="javascript:;">
            <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="times" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-times fa-w-10">
                <path fill="currentColor" d="M207.6 256l107.72-107.72c6.23-6.23 6.23-16.34 0-22.58l-25.03-25.03c-6.23-6.23-16.34-6.23-22.58 0L160 208.4 52.28 100.68c-6.23-6.23-16.34-6.23-22.58 0L4.68 125.7c-6.23 6.23-6.23 16.34 0 22.58L112.4 256 4.68 363.72c-6.23 6.23-6.23 16.34 0 22.58l25.03 25.03c6.23 6.23 16.34 6.23 22.58 0L160 303.6l107.72 107.72c6.23 6.23 16.34 6.23 22.58 0l25.03-25.03c6.23-6.23 6.23-16.34 0-22.58L207.6 256z" class=""></path>
            </svg>
            </a>
        </div>
    </div>
    <script>
        var modal = $('.quickview-product');
        var btn = $('.quick-view');
        var span = $('.quickview-close');
        btn.click(function () {
            modal.show();
        });

        span.click(function () {
            modal.hide();
        });

        $(window).on('click', function (e) {
            if ($(e.target).is('.modal')) {
                modal.hide();
                
            }
        });

        $('.cart-drop .icon').click(function(){
        $('.cart-sidebar, .backdrop__body-backdrop___1rvky').addClass('active');
        });
        
        $(document).on('click','.backdrop__body-backdrop___1rvky, .cart_btn-close', function() {   
        $('.backdrop__body-backdrop___1rvky, .cart-sidebar, #popup-cart-desktop, .popup-cart-mobile').removeClass('active');
        return false;
        })
    </script>		
    <link rel="preload" as="script" href="{{asset('frontend/js/index.js')}}" />
    <script src="{{asset('frontend/js/index.js')}}" type="text/javascript"></script>
    <link rel="preload" as="script" href="{{asset('frontend/js/main.js')}}" />
    <script src="{{asset('frontend/js/main.js')}}" type="text/javascript"></script>
    <link rel="preload" as='style' type="text/css" href="{{asset('frontend/css/animate.scss.css')}}">
    <link href="{{asset('frontend/css/animate.scss.css')}}" rel="stylesheet" type="text/css" media="all" />
    <div id="sidebar-all" class="d-none">
        <div class="sidebar-all-wrap-right container" data-type="wishlist">
            <div class="sidebar-all-wrap-right-main">
            <div class="sidebar-all-wrap-right-main-list row">
            </div>
            </div>
        </div>
    </div>
    <link rel="preload" href="{{asset('frontend/js/wishlist.js')}}" as="script">
    <script src="{{asset('frontend/js/wishlist.js')}}" type="text/javascript"></script>
    <div id="popupCartModal" class="modal fade" role="dialog">
    </div>
</body>
</html>