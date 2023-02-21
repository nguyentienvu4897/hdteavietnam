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
        @if(count($cartcontent)>0)
        <div class="clearfix cart_heading">
            <h4 class="cart_title">Giỏ hàng</h4>
            <div class="cart_btn-close" title="Đóng giỏ hàng">
               <svg class="Icon Icon--close" viewBox="0 0 16 14">
                  <path d="M15 0L1 14m14 0L1 0" stroke="currentColor" fill="none" fill-rule="evenodd"></path>
               </svg>
            </div>
         </div>
         @php
             $tong = 0;
         @endphp
         <div class="drawer__inner">
            <div id="CartContainer" class="CartSideContainer">
               <form  novalidate="" class="cart ajaxcart data-update-cart" data-url="{{route('updateCart')}}">
                  <div class="ajaxcart__inner ajaxcart__inner--has-fixed-footer cart_body items">
                    @foreach ($cartcontent as $item)
                        <div class="ajaxcart__row">
                        <div class="ajaxcart__product cart_product" data-line="1">
                            <a href="{{route('detailProduct',['cate'=>$item['cate_slug'],'slug'=>$item['slug']])}}" class="ajaxcart__product-image cart_image" title="{{languageName($item['name'])}}"><img width="80" height="80" src="{{$item['image']}}" alt="{{languageName($item['name'])}}"></a>
                            <div class="grid__item cart_info">
                                <div class="ajaxcart__product-name-wrapper cart_name">
                                    <a href="{{route('detailProduct',['cate'=>$item['cate_slug'],'slug'=>$item['slug']])}}" class="ajaxcart__product-name h4" title="{{languageName($item['name'])}}">{{languageName($item['name'])}}</a>
                                </div>
                                <div class="grid">
                                    <div class="grid__item one-half cart_select cart_item_name">
                                    <label class="cart_quantity">Số lượng</label>
                                    <div class="ajaxcart__qty input-group-btn">
                                        <button type="button" class="ajaxcart__qty-adjust ajaxcart__qty--minus items-count" data-line="1" aria-label="-" onclick="btnMinus({{$item['id']}})">
                                        -
                                        </button>
                                        <input type="text" name="updates" id="qty{{$item['id']}}" class="ajaxcart__qty-num number-sidebar" maxlength="3" value="{{$item['quantity']}}" min="0" data-line="1" aria-label="quantity" pattern="[0-9]*">
                                        <button type="button" class="ajaxcart__qty-adjust ajaxcart__qty--plus items-count" data-line="1" onclick="btnPlus({{$item['id']}})" aria-label="+">
                                        +							
                                        </button>
                                    </div>
                                    </div>
                                    @php
                                        $giagiam = $item['price']-$item['price']*$item['discount']/100;
                                        $tong += $giagiam *$item['quantity'];
                                    @endphp
                                    <div class="grid__item one-half text-right cart_prices">
                                    <span class="cart-price">{{number_format($giagiam)}}₫</span>
                                    <a class="cart__btn-remove remove-item-cart ajaxifyCart--remove" href="javascript:;" data-id="{{$item['id']}}" data-line="1" data-url="{{route('removeCart')}}">Xóa</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    @endforeach
                   
                  </div>
                  <div class="ajaxcart__footer ajaxcart__footer--fixed cart-footer">
                     <div class="ajaxcart__subtotal">
                        <div class="cart__subtotal">
                           <div class="cart__col-6">Tổng tiền:</div>
                           <div class="text-right cart__totle"><span class="total-price">{{number_format($tong)}}₫</span></div>
                        </div>
                     </div>
                     <div class="cart__btn-proceed-checkout-dt">
                        <button onclick="location.href='{{route('checkout')}}'" type="button" class="button btn btn-default cart__btn-proceed-checkout" id="btn-proceed-checkout" title="Thanh toán">Thanh toán</button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
         @else
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
              &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;Không có sản phẩm nào trong giỏ hàng !
            </div>
         </div>
         @endif
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
        <div class="quick-view-product">
        </div>
    </div>	
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
    @yield('js')
    {{-- <script src="{{'frontend/js/jscustom.js'}}"></script> --}}
    <script>
            $('.cart-drop .icon').click(function(){
            $('.cart-sidebar, .backdrop__body-backdrop___1rvky').addClass('active');
            });
            $(document).on('click','.backdrop__body-backdrop___1rvky, .cart_btn-close', function() {   
            $('.backdrop__body-backdrop___1rvky, .cart-sidebar, #popup-cart-desktop, .popup-cart-mobile').removeClass('active');
            return false;
            });
    </script>
    <script>
        function btnMinus(e) {
            var id = e;
            var result = document.getElementById('qty'+id); var qtypro = result.value; if( !isNaN( qtypro ) && qtypro > 1 ) result.value--;
            var quantity = result.value;
            var url = $('.data-update-cart').data('url');
            $.ajax({
                type:'get',
                url:url,
                data: {id:id, quantity:quantity},
                success: function(data) {
                    // $('#quick-view-product .quick-view-product').html(data.html);
                    $('#CartDrawer').html(data.html1);
                }
            })
        }
        function btnPlus(e) {
            var id = e;
            var result = document.getElementById('qty'+id); var qtypro = result.value; if( !isNaN( qtypro )) result.value++;
            var quantity = result.value;
            var url = $('.data-update-cart').data('url');
            $.ajax({
                type:'get',
                url:url,
                data: {id:id, quantity:quantity},
                success: function(data) {
                    // $('#quick-view-product .quick-view-product').html(data.html);
                    $('#CartDrawer').html(data.html1);
                }
            })
        }
    </script>
          <script>
            $('.add_to_cart ').click(function (e) { 
       e.preventDefault();
       url = $(this).data('url');
       id = $(this).data('id');
       console.log(url,id);
       $.ajax({
           type: "GET",
           url: url,
           success: function (data) {
               $('#CartDrawer').html(data.html1);
               $('#CartDrawer').addClass('active');
           }
       });
       
   });
         </script>
</body>
</html>