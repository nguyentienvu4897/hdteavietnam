@extends('layouts.main.master')
@section('title')
{{languageName($setting->company)}}
@endsection
@section('description')
{{languageName($setting->webname)}}
@endsection
@section('image')
{{url(''.$banner[0]->image)}}
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
<section class="section_slider">
    <div class="home-slider swiper-container">
    <div class="swiper-wrapper">
        @foreach ($banner as $item)
            <div class="swiper-slide">
                <a href="{{$item->link}}" class="clearfix" title="{{$item->title}}">
                    <picture>
                    <source 
                        media="(min-width: 1200px)"
                        srcset="{{url($item->image)}}">
                    <source 
                        media="(min-width: 992px)"
                        srcset="{{url($item->image)}}">
                    <source 
                        media="(min-width: 569px)"
                        srcset="{{url($item->image)}}">
                    <source 
                        media="(max-width: 567px)"
                        srcset="{{url($item->image)}}">
                    <img width="1920" height="810" src="{{url($item->image)}}" alt="Slider 1" class="img-responsive" />
                    </picture>
                </a>
            </div>
        @endforeach
    </div>
    </div>
</section>
<script>
    var swiper = new Swiper('.home-slider', {
        autoplay: false,
        pagination: {
            el: '.home-slider .swiper-pagination',
            clickable: true,
        },
    });
</script>
<section class="section_category">
    <div class="container">
    <div class="cate-list swiper-container">
        <div class="swiper-wrapper">
            @foreach ($categoryhome as $cate)
                <div class="swiper-slide">
                    <div class="cate-item">
                    <a class="image" href="{{route('allListProCate', ['cate'=>$cate->slug])}}" title="{{languageName($cate->name)}}">
                    <img class="image_cate_thumb lazyload" width="100" height="100" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="{{$cate->avatar}}" alt="{{languageName($cate->name)}}"/>
                    </a>
                    <div class="hiden">
                        <span class="count_sp">
                        {{count($cate->product)}}
                        </span>
                        <span>@lang('lang.products')</span>
                    </div>
                    </div>
                    <h4 class="title_cate_"><a href="{{route('allListProCate', ['cate'=>$cate->slug])}}" title="{{languageName($cate->name)}}">{{languageName($cate->name)}}</a></h4>
                </div>
            @endforeach
        </div>
    </div>
    </div>
</section>
<script>
    var swiperwish = new Swiper('.cate-list', {
        slidesPerView: "auto",
        loop: false,
        grabCursor: true,
        spaceBetween: 10,
        roundLengths: true,
        slideToClickedSlide: false,
        autoplay: false,
        breakpoints: {
            300: {
                slidesPerView: 1,
                spaceBetween: 0
            },
            500: {
                slidesPerView: 2,
                spaceBetween: 0
            },
            640: {
                slidesPerView: 3,
                spaceBetween: 0
            },
            768: {
                slidesPerView: 4,
                spaceBetween: 20
            },
            991: {
                slidesPerView: 5,
                spaceBetween: 20
            },
            1200: {
                slidesPerView: 6,
                spaceBetween: 20
            }
        }
    });
</script>
<section class="section_intro">
    <div class="container">
    <div class="row">
        <div class="col-xl-6 col-lg-6 col-12 col-intro-1">
            <div class="banner_intro">
                <a href="#" title="Banner @lang('lang.aboutus')">
                <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="{{$aboutUs->image}}" alt="Banner @lang('lang.aboutus')"/>
                </a>
            </div>
        </div>
        <div class="col-lg-6 col-12 col-intro-2">
            <div class="title_module_main no-bg clearfix">
                <h3>
                <span>@lang('lang.we-provide')</span>
                </h3>
            </div>
            <div class="contentpage clearfix">
                {!!languageName($aboutUs->description)!!}
            </div>
            <div class="img_intro_list">
                <div class="intro_img_swiper swiper-container">
                <div class="swiper-wrapper">
                    @foreach ($prizes as $item)
                        <div class="swiper-slide">
                            <a href="{{$item->link}}" title="{{$item->name}}">
                            <img width="186" height="173" src="{{$item->image}}" alt="{{$item->name}}" class="img-responsive" />
                            </a>
                        </div>
                    @endforeach
                </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<script>
    var swiperwish = new Swiper('.intro_img_swiper', {
        slidesPerView: 3,
        loop: false,
        grabCursor: true,
        spaceBetween: 20,
        roundLengths: true,
        slideToClickedSlide: false,
        autoplay: true,
        breakpoints: {
            300: {
                slidesPerView: 1,
                spaceBetween: 0
            },
            500: {
                slidesPerView: 1,
                spaceBetween: 0
            },
            640: {
                slidesPerView: 2,
                spaceBetween: 0
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 20
            },
            991: {
                slidesPerView: 3,
                spaceBetween: 20
            },
            1200: {
                slidesPerView: 3,
                spaceBetween: 20
            }
        }
    });
</script>
<section class="section_tab_product section_product_tab_1">
    <div class="bg_module">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-12">
                <div class="not-dqtab e-tabs ajax-tab-1 ajax" data-section="ajax-tab-1" data-view="grid_1">
                <div class="title_modules title_module_main clearfix">
                    <h2 class="title_tab">
                        <span><a href="{{route('allProduct')}}">@lang('lang.products')</a></span>
                    </h2>
                    <ul class="nav-tab">
                        <li class="tab-link tabs-title tabtitle1 ajax has-content current" data-tab="tab-0" data-url="san-pham-noi-bat">
                            <h4>@lang('lang.all-products')</h4>
                        </li>
                        @foreach ($categoryhome as $cate)
                            <li class="tab-link tabs-title tabtitle1 ajax " data-tab="tab-{{$cate->id}}" data-url="{{route('ajaxHomeProductCate', ['id'=>$cate->id])}}">
                                <h4>{{languageName($cate->name)}}</h4>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="tab-container">
                    <div class="tab-item tab-content tab-0 current">
                        <div class="contentfill">
                            <div class="swiper-container">
                            <div class="swipertab swiper-tab-top swiper-first">
                                <div class="swiper-wrapper">
                                    @foreach ($homeProducts as $product)
                                    
                                        <div class="swiper-slide">
                                            @include('layouts.product.item', ['product' => $product])
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    @foreach ($categoryhome as $cate)
                    <div class="tab-item tab-content tab-{{$cate->id}} ">
                        <div class="contentfill">
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
<section class="section_3banner">
    <div class="container">
    <div class="row">
        @foreach ($bannerqc as $key=>$item)
            @if ($key % 2 == 0)
                <div class="col col-xl-3 col-lg-3 col-md-3 col-12 hidden-xs">
                    <div class="banner_1">
                        <a class="banner_" href="{{$item->name}}">
                        <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{$item->image}}" alt="Banner 1"/>
                        </a>
                    </div>
                </div>
            @else
                <div class="col col-xl-6 col-lg-6 col-md-6 col-12">
                    <div class="banner_1">
                        <a class="banner_" href="{{$item->name}}">
                        <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{$item->image}}" alt="Banner 2"/>
                        </a>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
    </div>
</section>
{{-- <section class="section_tab_product section_product_tab_2">
    <div class="bg_module">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-12">
                <div class="not-dqtab e-tabs ajax-tab-2 ajax" data-section="ajax-tab-2" data-view="grid_2">
                <div class="title_modules title_module_main clearfix">
                    <h2 class="title_tab">
                        <span>Phụ kiện nông nghiệp</span>
                    </h2>
                    <ul class="nav-tab">
                        <li class="tab-link tabs-title tabtitle1 ajax has-content current" data-tab="tab-1" data-url="dung-cu-lam-vuon">
                            <h4>Tất cả</h4>
                        </li>
                        <li class="tab-link tabs-title tabtitle1 ajax " data-tab="tab-2" data-url="dung-cu-lam-vuon">
                            <h4>Dụng cụ làm vườn</h4>
                        </li>
                        <li class="tab-link tabs-title tabtitle1 ajax " data-tab="tab-3" data-url="hat-giong">
                            <h4>Hạt giống</h4>
                        </li>
                    </ul>
                </div>
                <div class="tab-container">
                    <div class="tab-item tab-content tab-1 current">
                        <div class="contentfill">
                            <div class="swiper-container">
                            <div class="swipertab swiper-tab-top swiper-first">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide ajax-carousel">
                                        <form action="/cart/add" method="post" class="wishItem variants product-box product-block-item" data-cart-form data-id="product-actions-24840652" enctype="multipart/form-data">
                                        <div class="product-thumbnail">
                                            <a class="image_thumb scale_hover product-transition" href="/dung-cu-lam-co-ke-gach" title="Dụng cụ làm cỏ kẻ gạch">
                                            <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="//bizweb.dktcdn.net/thumb/large/100/448/970/products/8-jpeg.jpg?v=1646034328000" alt="Dụng cụ làm cỏ kẻ gạch">
                                            </a>
                                            <span class="smart"><span>-
                                            27% 
                                            </span></span>
                                        </div>
                                        <div class="product-info">
                                            <div class="product-content">
                                                <h3 class="product-name"><a href="/dung-cu-lam-co-ke-gach" title="Dụng cụ làm cỏ kẻ gạch">Dụng cụ làm cỏ kẻ gạch</a></h3>
                                                <div class="blockprice">
                                                    <div class="price-box">
                                                    310.000₫&nbsp;
                                                    <span class="compare-price">426.000₫</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-action d-xl-flex d-none">
                                            <a title="Xem nhanh" href="/dung-cu-lam-co-ke-gach" data-handle="dung-cu-lam-co-ke-gach" class="xem_nhanh btn-circle btn_view btn right-to quick-view hidden-xs hidden-sm">
                                                <svg width="30" height="18" viewBox="0 0 30 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.9998 0C22.6775 0 28.6889 8.10561 28.9412 8.45074C29.1805 8.77783 29.1805 9.22225 28.9412 9.54962C28.6889 9.89442 22.6775 18.0001 14.9998 18.0001C7.32209 18.0001 1.31039 9.89448 1.05836 9.54935C0.819413 9.22192 0.819413 8.77783 1.05836 8.45041C1.31039 8.10561 7.32209 0 14.9998 0ZM2.99617 8.99941C4.44614 10.7582 9.34434 16.138 14.9998 16.138C20.6673 16.138 25.5553 10.7609 27.0034 9.00068C25.5528 7.24098 20.6549 1.86207 14.9998 1.86207C9.3322 1.86207 4.44426 7.23911 2.99617 8.99941ZM9.41351 9.00006C9.41351 5.91985 11.9196 3.4138 14.9998 3.4138C18.08 3.4138 20.586 5.91985 20.586 9.00006C20.586 12.0803 18.08 14.5863 14.9998 14.5863C11.9196 14.5863 9.41351 12.0803 9.41351 9.00006ZM11.2756 9.00006C11.2756 11.0536 12.9462 12.7242 14.9998 12.7242C17.0534 12.7242 18.7239 11.0536 18.7239 9.00006C18.7239 6.94653 17.0533 5.27592 14.9998 5.27592C12.9462 5.27592 11.2756 6.94653 11.2756 9.00006Z" fill="#A1CCA3"/>
                                                </svg>
                                            </a>
                                            <input type="hidden" name="variantId" value="60522356" />
                                            <button class="cart-button btn-buy firstb btn-cart button_35 left-to muangay btn-cart btn-views add_to_cart " title="Mua hàng">
                                                <svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M19.9381 25.6016C19.9381 27.4755 21.4626 29 23.3365 29C25.2104 29 26.735 27.4755 26.735 25.6016C26.735 23.7277 25.2104 22.2031 23.3365 22.2031C21.4626 22.2031 19.9381 23.7277 19.9381 25.6016ZM23.3365 24.4688C23.9612 24.4688 24.4693 24.9769 24.4693 25.6016C24.4693 26.2262 23.9612 26.7344 23.3365 26.7344C22.7119 26.7344 22.2037 26.2262 22.2037 25.6016C22.2037 24.9769 22.7119 24.4688 23.3365 24.4688ZM6.57091 25.6016C6.57091 27.4755 8.09545 29 9.96935 29C11.8432 29 13.3678 27.4755 13.3678 25.6016C13.3678 23.7277 11.8432 22.2031 9.96935 22.2031C8.09545 22.2031 6.57091 23.7277 6.57091 25.6016ZM9.96935 24.4688C10.594 24.4688 11.1022 24.9769 11.1022 25.6016C11.1022 26.2262 10.594 26.7344 9.96935 26.7344C9.34471 26.7344 8.83653 26.2262 8.83653 25.6016C8.83653 24.9769 9.34471 24.4688 9.96935 24.4688ZM13.3678 11.1016H11.1022V17.6719H13.3678V11.1016ZM6.57091 6.57031V3.39844C6.57091 1.52454 5.04637 0 3.17247 0H0.00195312V2.26562H3.17241C3.79705 2.26562 4.30522 2.7738 4.30522 3.39844V16.5391C4.30522 19.6622 6.84612 22.2031 9.96929 22.2031H23.3365C26.4596 22.2031 29.0005 19.6622 29.0005 16.5391V6.57031H6.57091ZM26.735 16.5391C26.735 18.413 25.2104 19.9375 23.3365 19.9375H9.96935C8.09545 19.9375 6.57091 18.413 6.57091 16.5391V8.83594H26.735V16.5391ZM17.899 11.1016H15.6334V17.6719H17.899V11.1016ZM22.4303 11.1016H20.1647V17.6719H22.4303V11.1016Z" fill="#A1CCA3"/>
                                                </svg>
                                            </button>
                                            <a href="javascript:void(0)" class="btn btn_view action btn-compare js-btn-wishlist setWishlist btn-views" data-wish="dung-cu-lam-co-ke-gach" tabindex="0" title="Thêm vào yêu thích">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M22.0373 2.9457C20.7959 1.6114 19.0565 0.852197 17.234 0.849383C15.4101 0.851494 13.6688 1.61029 12.4255 2.94485L12.0018 3.3926L11.578 2.94485C9.11101 0.289657 4.95858 0.137174 2.30343 2.6042C2.18578 2.71356 2.07215 2.82714 1.96278 2.94485C-0.654261 5.76765 -0.654261 10.1302 1.96278 12.953L11.3791 22.883C11.7048 23.227 12.2477 23.2417 12.5916 22.9159C12.6029 22.9052 12.6139 22.8943 12.6245 22.883L22.0374 12.953C24.6542 10.1305 24.6542 5.7682 22.0373 2.9457ZM20.7962 11.7718H20.7953L12.0018 21.0466L3.20738 11.7718C1.20811 9.61497 1.20811 6.28199 3.20738 4.12511C5.02296 2.1573 8.09006 2.03392 10.0579 3.8495C10.1534 3.93765 10.2453 4.02957 10.3335 4.12511L11.3791 5.22818C11.7236 5.57054 12.2799 5.57054 12.6245 5.22818L13.6701 4.12597C15.4857 2.15816 18.5528 2.03477 20.5206 3.85035C20.6161 3.9385 20.708 4.03043 20.7962 4.12597C22.8129 6.28627 22.8276 9.62532 20.7962 11.7718Z" fill="#A1CCA3"/>
                                                </svg>
                                            </a>
                                        </div>
                                        </form>
                                    </div>
                                    <div class="swiper-slide ajax-carousel">
                                        <form action="/cart/add" method="post" class="wishItem variants product-box product-block-item" data-cart-form data-id="product-actions-24840583" enctype="multipart/form-data">
                                        <div class="product-thumbnail">
                                            <a class="image_thumb scale_hover product-transition" href="/keo-cat-canh-cay" title="Kéo cắt cành cây">
                                            <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="//bizweb.dktcdn.net/thumb/large/100/448/970/products/7-jpeg.jpg?v=1646034048000" alt="Kéo cắt cành cây">
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <div class="product-content">
                                                <h3 class="product-name"><a href="/keo-cat-canh-cay" title="Kéo cắt cành cây">Kéo cắt cành cây</a></h3>
                                                <div class="blockprice">
                                                    <div class="price-box">
                                                    90.000₫				
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-action d-xl-flex d-none">
                                            <a title="Xem nhanh" href="/keo-cat-canh-cay" data-handle="keo-cat-canh-cay" class="xem_nhanh btn-circle btn_view btn right-to quick-view hidden-xs hidden-sm">
                                                <svg width="30" height="18" viewBox="0 0 30 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.9998 0C22.6775 0 28.6889 8.10561 28.9412 8.45074C29.1805 8.77783 29.1805 9.22225 28.9412 9.54962C28.6889 9.89442 22.6775 18.0001 14.9998 18.0001C7.32209 18.0001 1.31039 9.89448 1.05836 9.54935C0.819413 9.22192 0.819413 8.77783 1.05836 8.45041C1.31039 8.10561 7.32209 0 14.9998 0ZM2.99617 8.99941C4.44614 10.7582 9.34434 16.138 14.9998 16.138C20.6673 16.138 25.5553 10.7609 27.0034 9.00068C25.5528 7.24098 20.6549 1.86207 14.9998 1.86207C9.3322 1.86207 4.44426 7.23911 2.99617 8.99941ZM9.41351 9.00006C9.41351 5.91985 11.9196 3.4138 14.9998 3.4138C18.08 3.4138 20.586 5.91985 20.586 9.00006C20.586 12.0803 18.08 14.5863 14.9998 14.5863C11.9196 14.5863 9.41351 12.0803 9.41351 9.00006ZM11.2756 9.00006C11.2756 11.0536 12.9462 12.7242 14.9998 12.7242C17.0534 12.7242 18.7239 11.0536 18.7239 9.00006C18.7239 6.94653 17.0533 5.27592 14.9998 5.27592C12.9462 5.27592 11.2756 6.94653 11.2756 9.00006Z" fill="#A1CCA3"/>
                                                </svg>
                                            </a>
                                            <input type="hidden" name="variantId" value="60522298" />
                                            <button class="cart-button btn-buy firstb btn-cart button_35 left-to muangay btn-cart btn-views add_to_cart " title="Mua hàng">
                                                <svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M19.9381 25.6016C19.9381 27.4755 21.4626 29 23.3365 29C25.2104 29 26.735 27.4755 26.735 25.6016C26.735 23.7277 25.2104 22.2031 23.3365 22.2031C21.4626 22.2031 19.9381 23.7277 19.9381 25.6016ZM23.3365 24.4688C23.9612 24.4688 24.4693 24.9769 24.4693 25.6016C24.4693 26.2262 23.9612 26.7344 23.3365 26.7344C22.7119 26.7344 22.2037 26.2262 22.2037 25.6016C22.2037 24.9769 22.7119 24.4688 23.3365 24.4688ZM6.57091 25.6016C6.57091 27.4755 8.09545 29 9.96935 29C11.8432 29 13.3678 27.4755 13.3678 25.6016C13.3678 23.7277 11.8432 22.2031 9.96935 22.2031C8.09545 22.2031 6.57091 23.7277 6.57091 25.6016ZM9.96935 24.4688C10.594 24.4688 11.1022 24.9769 11.1022 25.6016C11.1022 26.2262 10.594 26.7344 9.96935 26.7344C9.34471 26.7344 8.83653 26.2262 8.83653 25.6016C8.83653 24.9769 9.34471 24.4688 9.96935 24.4688ZM13.3678 11.1016H11.1022V17.6719H13.3678V11.1016ZM6.57091 6.57031V3.39844C6.57091 1.52454 5.04637 0 3.17247 0H0.00195312V2.26562H3.17241C3.79705 2.26562 4.30522 2.7738 4.30522 3.39844V16.5391C4.30522 19.6622 6.84612 22.2031 9.96929 22.2031H23.3365C26.4596 22.2031 29.0005 19.6622 29.0005 16.5391V6.57031H6.57091ZM26.735 16.5391C26.735 18.413 25.2104 19.9375 23.3365 19.9375H9.96935C8.09545 19.9375 6.57091 18.413 6.57091 16.5391V8.83594H26.735V16.5391ZM17.899 11.1016H15.6334V17.6719H17.899V11.1016ZM22.4303 11.1016H20.1647V17.6719H22.4303V11.1016Z" fill="#A1CCA3"/>
                                                </svg>
                                            </button>
                                            <a href="javascript:void(0)" class="btn btn_view action btn-compare js-btn-wishlist setWishlist btn-views" data-wish="keo-cat-canh-cay" tabindex="0" title="Thêm vào yêu thích">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M22.0373 2.9457C20.7959 1.6114 19.0565 0.852197 17.234 0.849383C15.4101 0.851494 13.6688 1.61029 12.4255 2.94485L12.0018 3.3926L11.578 2.94485C9.11101 0.289657 4.95858 0.137174 2.30343 2.6042C2.18578 2.71356 2.07215 2.82714 1.96278 2.94485C-0.654261 5.76765 -0.654261 10.1302 1.96278 12.953L11.3791 22.883C11.7048 23.227 12.2477 23.2417 12.5916 22.9159C12.6029 22.9052 12.6139 22.8943 12.6245 22.883L22.0374 12.953C24.6542 10.1305 24.6542 5.7682 22.0373 2.9457ZM20.7962 11.7718H20.7953L12.0018 21.0466L3.20738 11.7718C1.20811 9.61497 1.20811 6.28199 3.20738 4.12511C5.02296 2.1573 8.09006 2.03392 10.0579 3.8495C10.1534 3.93765 10.2453 4.02957 10.3335 4.12511L11.3791 5.22818C11.7236 5.57054 12.2799 5.57054 12.6245 5.22818L13.6701 4.12597C15.4857 2.15816 18.5528 2.03477 20.5206 3.85035C20.6161 3.9385 20.708 4.03043 20.7962 4.12597C22.8129 6.28627 22.8276 9.62532 20.7962 11.7718Z" fill="#A1CCA3"/>
                                                </svg>
                                            </a>
                                        </div>
                                        </form>
                                    </div>
                                    <div class="swiper-slide ajax-carousel">
                                        <form action="/cart/add" method="post" class="wishItem variants product-box product-block-item" data-cart-form data-id="product-actions-24840443" enctype="multipart/form-data">
                                        <div class="product-thumbnail">
                                            <a class="image_thumb scale_hover product-transition" href="/binh-xit-tuoi-cay-2-lit" title="Bình xịt tưới cây 2 lít">
                                            <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="//bizweb.dktcdn.net/thumb/large/100/448/970/products/6-jpeg.jpg?v=1646033795000" alt="Bình xịt tưới cây 2 lít">
                                            </a>
                                            <span class="smart"><span>-
                                            17% 
                                            </span></span>
                                            <span class="new"><span>Mới</span></span>
                                        </div>
                                        <div class="product-info">
                                            <div class="product-content">
                                                <h3 class="product-name"><a href="/binh-xit-tuoi-cay-2-lit" title="Bình xịt tưới cây 2 lít">Bình xịt tưới cây 2 lít</a></h3>
                                                <div class="blockprice">
                                                    <div class="price-box">
                                                    50.000₫&nbsp;
                                                    <span class="compare-price">60.000₫</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-action d-xl-flex d-none">
                                            <a title="Xem nhanh" href="/binh-xit-tuoi-cay-2-lit" data-handle="binh-xit-tuoi-cay-2-lit" class="xem_nhanh btn-circle btn_view btn right-to quick-view hidden-xs hidden-sm">
                                                <svg width="30" height="18" viewBox="0 0 30 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.9998 0C22.6775 0 28.6889 8.10561 28.9412 8.45074C29.1805 8.77783 29.1805 9.22225 28.9412 9.54962C28.6889 9.89442 22.6775 18.0001 14.9998 18.0001C7.32209 18.0001 1.31039 9.89448 1.05836 9.54935C0.819413 9.22192 0.819413 8.77783 1.05836 8.45041C1.31039 8.10561 7.32209 0 14.9998 0ZM2.99617 8.99941C4.44614 10.7582 9.34434 16.138 14.9998 16.138C20.6673 16.138 25.5553 10.7609 27.0034 9.00068C25.5528 7.24098 20.6549 1.86207 14.9998 1.86207C9.3322 1.86207 4.44426 7.23911 2.99617 8.99941ZM9.41351 9.00006C9.41351 5.91985 11.9196 3.4138 14.9998 3.4138C18.08 3.4138 20.586 5.91985 20.586 9.00006C20.586 12.0803 18.08 14.5863 14.9998 14.5863C11.9196 14.5863 9.41351 12.0803 9.41351 9.00006ZM11.2756 9.00006C11.2756 11.0536 12.9462 12.7242 14.9998 12.7242C17.0534 12.7242 18.7239 11.0536 18.7239 9.00006C18.7239 6.94653 17.0533 5.27592 14.9998 5.27592C12.9462 5.27592 11.2756 6.94653 11.2756 9.00006Z" fill="#A1CCA3"/>
                                                </svg>
                                            </a>
                                            <input type="hidden" name="variantId" value="60522149" />
                                            <button class="cart-button btn-buy firstb btn-cart button_35 left-to muangay btn-cart btn-views add_to_cart " title="Mua hàng">
                                                <svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M19.9381 25.6016C19.9381 27.4755 21.4626 29 23.3365 29C25.2104 29 26.735 27.4755 26.735 25.6016C26.735 23.7277 25.2104 22.2031 23.3365 22.2031C21.4626 22.2031 19.9381 23.7277 19.9381 25.6016ZM23.3365 24.4688C23.9612 24.4688 24.4693 24.9769 24.4693 25.6016C24.4693 26.2262 23.9612 26.7344 23.3365 26.7344C22.7119 26.7344 22.2037 26.2262 22.2037 25.6016C22.2037 24.9769 22.7119 24.4688 23.3365 24.4688ZM6.57091 25.6016C6.57091 27.4755 8.09545 29 9.96935 29C11.8432 29 13.3678 27.4755 13.3678 25.6016C13.3678 23.7277 11.8432 22.2031 9.96935 22.2031C8.09545 22.2031 6.57091 23.7277 6.57091 25.6016ZM9.96935 24.4688C10.594 24.4688 11.1022 24.9769 11.1022 25.6016C11.1022 26.2262 10.594 26.7344 9.96935 26.7344C9.34471 26.7344 8.83653 26.2262 8.83653 25.6016C8.83653 24.9769 9.34471 24.4688 9.96935 24.4688ZM13.3678 11.1016H11.1022V17.6719H13.3678V11.1016ZM6.57091 6.57031V3.39844C6.57091 1.52454 5.04637 0 3.17247 0H0.00195312V2.26562H3.17241C3.79705 2.26562 4.30522 2.7738 4.30522 3.39844V16.5391C4.30522 19.6622 6.84612 22.2031 9.96929 22.2031H23.3365C26.4596 22.2031 29.0005 19.6622 29.0005 16.5391V6.57031H6.57091ZM26.735 16.5391C26.735 18.413 25.2104 19.9375 23.3365 19.9375H9.96935C8.09545 19.9375 6.57091 18.413 6.57091 16.5391V8.83594H26.735V16.5391ZM17.899 11.1016H15.6334V17.6719H17.899V11.1016ZM22.4303 11.1016H20.1647V17.6719H22.4303V11.1016Z" fill="#A1CCA3"/>
                                                </svg>
                                            </button>
                                            <a href="javascript:void(0)" class="btn btn_view action btn-compare js-btn-wishlist setWishlist btn-views" data-wish="binh-xit-tuoi-cay-2-lit" tabindex="0" title="Thêm vào yêu thích">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M22.0373 2.9457C20.7959 1.6114 19.0565 0.852197 17.234 0.849383C15.4101 0.851494 13.6688 1.61029 12.4255 2.94485L12.0018 3.3926L11.578 2.94485C9.11101 0.289657 4.95858 0.137174 2.30343 2.6042C2.18578 2.71356 2.07215 2.82714 1.96278 2.94485C-0.654261 5.76765 -0.654261 10.1302 1.96278 12.953L11.3791 22.883C11.7048 23.227 12.2477 23.2417 12.5916 22.9159C12.6029 22.9052 12.6139 22.8943 12.6245 22.883L22.0374 12.953C24.6542 10.1305 24.6542 5.7682 22.0373 2.9457ZM20.7962 11.7718H20.7953L12.0018 21.0466L3.20738 11.7718C1.20811 9.61497 1.20811 6.28199 3.20738 4.12511C5.02296 2.1573 8.09006 2.03392 10.0579 3.8495C10.1534 3.93765 10.2453 4.02957 10.3335 4.12511L11.3791 5.22818C11.7236 5.57054 12.2799 5.57054 12.6245 5.22818L13.6701 4.12597C15.4857 2.15816 18.5528 2.03477 20.5206 3.85035C20.6161 3.9385 20.708 4.03043 20.7962 4.12597C22.8129 6.28627 22.8276 9.62532 20.7962 11.7718Z" fill="#A1CCA3"/>
                                                </svg>
                                            </a>
                                        </div>
                                        </form>
                                    </div>
                                    <div class="swiper-slide ajax-carousel">
                                        <form action="/cart/add" method="post" class="wishItem variants product-box product-block-item" data-cart-form data-id="product-actions-24840417" enctype="multipart/form-data">
                                        <div class="product-thumbnail">
                                            <a class="image_thumb scale_hover product-transition" href="/gang-tay-lam-vuon" title="Găng tay làm vườn">
                                            <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="//bizweb.dktcdn.net/thumb/large/100/448/970/products/5-jpeg.jpg?v=1646033661000" alt="Găng tay làm vườn">
                                            </a>
                                            <span class="smart"><span>-
                                            50% 
                                            </span></span>
                                            <span class="new"><span>Mới</span></span>
                                        </div>
                                        <div class="product-info">
                                            <div class="product-content">
                                                <h3 class="product-name"><a href="/gang-tay-lam-vuon" title="Găng tay làm vườn">Găng tay làm vườn</a></h3>
                                                <div class="blockprice">
                                                    <div class="price-box">
                                                    100.000₫&nbsp;
                                                    <span class="compare-price">200.000₫</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-action d-xl-flex d-none">
                                            <a title="Xem nhanh" href="/gang-tay-lam-vuon" data-handle="gang-tay-lam-vuon" class="xem_nhanh btn-circle btn_view btn right-to quick-view hidden-xs hidden-sm">
                                                <svg width="30" height="18" viewBox="0 0 30 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.9998 0C22.6775 0 28.6889 8.10561 28.9412 8.45074C29.1805 8.77783 29.1805 9.22225 28.9412 9.54962C28.6889 9.89442 22.6775 18.0001 14.9998 18.0001C7.32209 18.0001 1.31039 9.89448 1.05836 9.54935C0.819413 9.22192 0.819413 8.77783 1.05836 8.45041C1.31039 8.10561 7.32209 0 14.9998 0ZM2.99617 8.99941C4.44614 10.7582 9.34434 16.138 14.9998 16.138C20.6673 16.138 25.5553 10.7609 27.0034 9.00068C25.5528 7.24098 20.6549 1.86207 14.9998 1.86207C9.3322 1.86207 4.44426 7.23911 2.99617 8.99941ZM9.41351 9.00006C9.41351 5.91985 11.9196 3.4138 14.9998 3.4138C18.08 3.4138 20.586 5.91985 20.586 9.00006C20.586 12.0803 18.08 14.5863 14.9998 14.5863C11.9196 14.5863 9.41351 12.0803 9.41351 9.00006ZM11.2756 9.00006C11.2756 11.0536 12.9462 12.7242 14.9998 12.7242C17.0534 12.7242 18.7239 11.0536 18.7239 9.00006C18.7239 6.94653 17.0533 5.27592 14.9998 5.27592C12.9462 5.27592 11.2756 6.94653 11.2756 9.00006Z" fill="#A1CCA3"/>
                                                </svg>
                                            </a>
                                            <input type="hidden" name="variantId" value="60522110" />
                                            <button class="cart-button btn-buy firstb btn-cart button_35 left-to muangay btn-cart btn-views add_to_cart " title="Mua hàng">
                                                <svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M19.9381 25.6016C19.9381 27.4755 21.4626 29 23.3365 29C25.2104 29 26.735 27.4755 26.735 25.6016C26.735 23.7277 25.2104 22.2031 23.3365 22.2031C21.4626 22.2031 19.9381 23.7277 19.9381 25.6016ZM23.3365 24.4688C23.9612 24.4688 24.4693 24.9769 24.4693 25.6016C24.4693 26.2262 23.9612 26.7344 23.3365 26.7344C22.7119 26.7344 22.2037 26.2262 22.2037 25.6016C22.2037 24.9769 22.7119 24.4688 23.3365 24.4688ZM6.57091 25.6016C6.57091 27.4755 8.09545 29 9.96935 29C11.8432 29 13.3678 27.4755 13.3678 25.6016C13.3678 23.7277 11.8432 22.2031 9.96935 22.2031C8.09545 22.2031 6.57091 23.7277 6.57091 25.6016ZM9.96935 24.4688C10.594 24.4688 11.1022 24.9769 11.1022 25.6016C11.1022 26.2262 10.594 26.7344 9.96935 26.7344C9.34471 26.7344 8.83653 26.2262 8.83653 25.6016C8.83653 24.9769 9.34471 24.4688 9.96935 24.4688ZM13.3678 11.1016H11.1022V17.6719H13.3678V11.1016ZM6.57091 6.57031V3.39844C6.57091 1.52454 5.04637 0 3.17247 0H0.00195312V2.26562H3.17241C3.79705 2.26562 4.30522 2.7738 4.30522 3.39844V16.5391C4.30522 19.6622 6.84612 22.2031 9.96929 22.2031H23.3365C26.4596 22.2031 29.0005 19.6622 29.0005 16.5391V6.57031H6.57091ZM26.735 16.5391C26.735 18.413 25.2104 19.9375 23.3365 19.9375H9.96935C8.09545 19.9375 6.57091 18.413 6.57091 16.5391V8.83594H26.735V16.5391ZM17.899 11.1016H15.6334V17.6719H17.899V11.1016ZM22.4303 11.1016H20.1647V17.6719H22.4303V11.1016Z" fill="#A1CCA3"/>
                                                </svg>
                                            </button>
                                            <a href="javascript:void(0)" class="btn btn_view action btn-compare js-btn-wishlist setWishlist btn-views" data-wish="gang-tay-lam-vuon" tabindex="0" title="Thêm vào yêu thích">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M22.0373 2.9457C20.7959 1.6114 19.0565 0.852197 17.234 0.849383C15.4101 0.851494 13.6688 1.61029 12.4255 2.94485L12.0018 3.3926L11.578 2.94485C9.11101 0.289657 4.95858 0.137174 2.30343 2.6042C2.18578 2.71356 2.07215 2.82714 1.96278 2.94485C-0.654261 5.76765 -0.654261 10.1302 1.96278 12.953L11.3791 22.883C11.7048 23.227 12.2477 23.2417 12.5916 22.9159C12.6029 22.9052 12.6139 22.8943 12.6245 22.883L22.0374 12.953C24.6542 10.1305 24.6542 5.7682 22.0373 2.9457ZM20.7962 11.7718H20.7953L12.0018 21.0466L3.20738 11.7718C1.20811 9.61497 1.20811 6.28199 3.20738 4.12511C5.02296 2.1573 8.09006 2.03392 10.0579 3.8495C10.1534 3.93765 10.2453 4.02957 10.3335 4.12511L11.3791 5.22818C11.7236 5.57054 12.2799 5.57054 12.6245 5.22818L13.6701 4.12597C15.4857 2.15816 18.5528 2.03477 20.5206 3.85035C20.6161 3.9385 20.708 4.03043 20.7962 4.12597C22.8129 6.28627 22.8276 9.62532 20.7962 11.7718Z" fill="#A1CCA3"/>
                                                </svg>
                                            </a>
                                        </div>
                                        </form>
                                    </div>
                                    <div class="swiper-slide ajax-carousel">
                                        <form action="/cart/add" method="post" class="wishItem variants product-box product-block-item" data-cart-form data-id="product-actions-24840391" enctype="multipart/form-data">
                                        <div class="product-thumbnail">
                                            <a class="image_thumb scale_hover product-transition" href="/soi-se-nong-nghiep" title="Sợi se nông nghiệp">
                                            <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="//bizweb.dktcdn.net/thumb/large/100/448/970/products/4-jpeg.jpg?v=1646033425000" alt="Sợi se nông nghiệp">
                                            </a>
                                            <span class="smart"><span>-
                                            31% 
                                            </span></span>
                                        </div>
                                        <div class="product-info">
                                            <div class="product-content">
                                                <h3 class="product-name"><a href="/soi-se-nong-nghiep" title="Sợi se nông nghiệp">Sợi se nông nghiệp</a></h3>
                                                <div class="blockprice">
                                                    <div class="price-box">
                                                    138.000₫&nbsp;
                                                    <span class="compare-price">200.000₫</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-action d-xl-flex d-none">
                                            <a title="Xem nhanh" href="/soi-se-nong-nghiep" data-handle="soi-se-nong-nghiep" class="xem_nhanh btn-circle btn_view btn right-to quick-view hidden-xs hidden-sm">
                                                <svg width="30" height="18" viewBox="0 0 30 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.9998 0C22.6775 0 28.6889 8.10561 28.9412 8.45074C29.1805 8.77783 29.1805 9.22225 28.9412 9.54962C28.6889 9.89442 22.6775 18.0001 14.9998 18.0001C7.32209 18.0001 1.31039 9.89448 1.05836 9.54935C0.819413 9.22192 0.819413 8.77783 1.05836 8.45041C1.31039 8.10561 7.32209 0 14.9998 0ZM2.99617 8.99941C4.44614 10.7582 9.34434 16.138 14.9998 16.138C20.6673 16.138 25.5553 10.7609 27.0034 9.00068C25.5528 7.24098 20.6549 1.86207 14.9998 1.86207C9.3322 1.86207 4.44426 7.23911 2.99617 8.99941ZM9.41351 9.00006C9.41351 5.91985 11.9196 3.4138 14.9998 3.4138C18.08 3.4138 20.586 5.91985 20.586 9.00006C20.586 12.0803 18.08 14.5863 14.9998 14.5863C11.9196 14.5863 9.41351 12.0803 9.41351 9.00006ZM11.2756 9.00006C11.2756 11.0536 12.9462 12.7242 14.9998 12.7242C17.0534 12.7242 18.7239 11.0536 18.7239 9.00006C18.7239 6.94653 17.0533 5.27592 14.9998 5.27592C12.9462 5.27592 11.2756 6.94653 11.2756 9.00006Z" fill="#A1CCA3"/>
                                                </svg>
                                            </a>
                                            <input type="hidden" name="variantId" value="60522041" />
                                            <button class="cart-button btn-buy firstb btn-cart button_35 left-to muangay btn-cart btn-views add_to_cart " title="Mua hàng">
                                                <svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M19.9381 25.6016C19.9381 27.4755 21.4626 29 23.3365 29C25.2104 29 26.735 27.4755 26.735 25.6016C26.735 23.7277 25.2104 22.2031 23.3365 22.2031C21.4626 22.2031 19.9381 23.7277 19.9381 25.6016ZM23.3365 24.4688C23.9612 24.4688 24.4693 24.9769 24.4693 25.6016C24.4693 26.2262 23.9612 26.7344 23.3365 26.7344C22.7119 26.7344 22.2037 26.2262 22.2037 25.6016C22.2037 24.9769 22.7119 24.4688 23.3365 24.4688ZM6.57091 25.6016C6.57091 27.4755 8.09545 29 9.96935 29C11.8432 29 13.3678 27.4755 13.3678 25.6016C13.3678 23.7277 11.8432 22.2031 9.96935 22.2031C8.09545 22.2031 6.57091 23.7277 6.57091 25.6016ZM9.96935 24.4688C10.594 24.4688 11.1022 24.9769 11.1022 25.6016C11.1022 26.2262 10.594 26.7344 9.96935 26.7344C9.34471 26.7344 8.83653 26.2262 8.83653 25.6016C8.83653 24.9769 9.34471 24.4688 9.96935 24.4688ZM13.3678 11.1016H11.1022V17.6719H13.3678V11.1016ZM6.57091 6.57031V3.39844C6.57091 1.52454 5.04637 0 3.17247 0H0.00195312V2.26562H3.17241C3.79705 2.26562 4.30522 2.7738 4.30522 3.39844V16.5391C4.30522 19.6622 6.84612 22.2031 9.96929 22.2031H23.3365C26.4596 22.2031 29.0005 19.6622 29.0005 16.5391V6.57031H6.57091ZM26.735 16.5391C26.735 18.413 25.2104 19.9375 23.3365 19.9375H9.96935C8.09545 19.9375 6.57091 18.413 6.57091 16.5391V8.83594H26.735V16.5391ZM17.899 11.1016H15.6334V17.6719H17.899V11.1016ZM22.4303 11.1016H20.1647V17.6719H22.4303V11.1016Z" fill="#A1CCA3"/>
                                                </svg>
                                            </button>
                                            <a href="javascript:void(0)" class="btn btn_view action btn-compare js-btn-wishlist setWishlist btn-views" data-wish="soi-se-nong-nghiep" tabindex="0" title="Thêm vào yêu thích">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M22.0373 2.9457C20.7959 1.6114 19.0565 0.852197 17.234 0.849383C15.4101 0.851494 13.6688 1.61029 12.4255 2.94485L12.0018 3.3926L11.578 2.94485C9.11101 0.289657 4.95858 0.137174 2.30343 2.6042C2.18578 2.71356 2.07215 2.82714 1.96278 2.94485C-0.654261 5.76765 -0.654261 10.1302 1.96278 12.953L11.3791 22.883C11.7048 23.227 12.2477 23.2417 12.5916 22.9159C12.6029 22.9052 12.6139 22.8943 12.6245 22.883L22.0374 12.953C24.6542 10.1305 24.6542 5.7682 22.0373 2.9457ZM20.7962 11.7718H20.7953L12.0018 21.0466L3.20738 11.7718C1.20811 9.61497 1.20811 6.28199 3.20738 4.12511C5.02296 2.1573 8.09006 2.03392 10.0579 3.8495C10.1534 3.93765 10.2453 4.02957 10.3335 4.12511L11.3791 5.22818C11.7236 5.57054 12.2799 5.57054 12.6245 5.22818L13.6701 4.12597C15.4857 2.15816 18.5528 2.03477 20.5206 3.85035C20.6161 3.9385 20.708 4.03043 20.7962 4.12597C22.8129 6.28627 22.8276 9.62532 20.7962 11.7718Z" fill="#A1CCA3"/>
                                                </svg>
                                            </a>
                                        </div>
                                        </form>
                                    </div>
                                    <div class="swiper-slide ajax-carousel">
                                        <form action="/cart/add" method="post" class="wishItem variants product-box product-block-item" data-cart-form data-id="product-actions-24840335" enctype="multipart/form-data">
                                        <div class="product-thumbnail">
                                            <a class="image_thumb scale_hover product-transition" href="/xeng-lam-vuon" title="Xẻng làm vườn">
                                            <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="//bizweb.dktcdn.net/thumb/large/100/448/970/products/3.png?v=1646033013000" alt="Xẻng làm vườn">
                                            </a>
                                            <span class="smart"><span>-
                                            24% 
                                            </span></span>
                                            <span class="new"><span>Mới</span></span>
                                        </div>
                                        <div class="product-info">
                                            <div class="product-content">
                                                <h3 class="product-name"><a href="/xeng-lam-vuon" title="Xẻng làm vườn">Xẻng làm vườn</a></h3>
                                                <div class="blockprice">
                                                    <div class="price-box">
                                                    68.000₫&nbsp;
                                                    <span class="compare-price">90.000₫</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-action d-xl-flex d-none">
                                            <a title="Xem nhanh" href="/xeng-lam-vuon" data-handle="xeng-lam-vuon" class="xem_nhanh btn-circle btn_view btn right-to quick-view hidden-xs hidden-sm">
                                                <svg width="30" height="18" viewBox="0 0 30 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.9998 0C22.6775 0 28.6889 8.10561 28.9412 8.45074C29.1805 8.77783 29.1805 9.22225 28.9412 9.54962C28.6889 9.89442 22.6775 18.0001 14.9998 18.0001C7.32209 18.0001 1.31039 9.89448 1.05836 9.54935C0.819413 9.22192 0.819413 8.77783 1.05836 8.45041C1.31039 8.10561 7.32209 0 14.9998 0ZM2.99617 8.99941C4.44614 10.7582 9.34434 16.138 14.9998 16.138C20.6673 16.138 25.5553 10.7609 27.0034 9.00068C25.5528 7.24098 20.6549 1.86207 14.9998 1.86207C9.3322 1.86207 4.44426 7.23911 2.99617 8.99941ZM9.41351 9.00006C9.41351 5.91985 11.9196 3.4138 14.9998 3.4138C18.08 3.4138 20.586 5.91985 20.586 9.00006C20.586 12.0803 18.08 14.5863 14.9998 14.5863C11.9196 14.5863 9.41351 12.0803 9.41351 9.00006ZM11.2756 9.00006C11.2756 11.0536 12.9462 12.7242 14.9998 12.7242C17.0534 12.7242 18.7239 11.0536 18.7239 9.00006C18.7239 6.94653 17.0533 5.27592 14.9998 5.27592C12.9462 5.27592 11.2756 6.94653 11.2756 9.00006Z" fill="#A1CCA3"/>
                                                </svg>
                                            </a>
                                            <input type="hidden" name="variantId" value="60521887" />
                                            <button class="cart-button btn-buy firstb btn-cart button_35 left-to muangay btn-cart btn-views add_to_cart " title="Mua hàng">
                                                <svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M19.9381 25.6016C19.9381 27.4755 21.4626 29 23.3365 29C25.2104 29 26.735 27.4755 26.735 25.6016C26.735 23.7277 25.2104 22.2031 23.3365 22.2031C21.4626 22.2031 19.9381 23.7277 19.9381 25.6016ZM23.3365 24.4688C23.9612 24.4688 24.4693 24.9769 24.4693 25.6016C24.4693 26.2262 23.9612 26.7344 23.3365 26.7344C22.7119 26.7344 22.2037 26.2262 22.2037 25.6016C22.2037 24.9769 22.7119 24.4688 23.3365 24.4688ZM6.57091 25.6016C6.57091 27.4755 8.09545 29 9.96935 29C11.8432 29 13.3678 27.4755 13.3678 25.6016C13.3678 23.7277 11.8432 22.2031 9.96935 22.2031C8.09545 22.2031 6.57091 23.7277 6.57091 25.6016ZM9.96935 24.4688C10.594 24.4688 11.1022 24.9769 11.1022 25.6016C11.1022 26.2262 10.594 26.7344 9.96935 26.7344C9.34471 26.7344 8.83653 26.2262 8.83653 25.6016C8.83653 24.9769 9.34471 24.4688 9.96935 24.4688ZM13.3678 11.1016H11.1022V17.6719H13.3678V11.1016ZM6.57091 6.57031V3.39844C6.57091 1.52454 5.04637 0 3.17247 0H0.00195312V2.26562H3.17241C3.79705 2.26562 4.30522 2.7738 4.30522 3.39844V16.5391C4.30522 19.6622 6.84612 22.2031 9.96929 22.2031H23.3365C26.4596 22.2031 29.0005 19.6622 29.0005 16.5391V6.57031H6.57091ZM26.735 16.5391C26.735 18.413 25.2104 19.9375 23.3365 19.9375H9.96935C8.09545 19.9375 6.57091 18.413 6.57091 16.5391V8.83594H26.735V16.5391ZM17.899 11.1016H15.6334V17.6719H17.899V11.1016ZM22.4303 11.1016H20.1647V17.6719H22.4303V11.1016Z" fill="#A1CCA3"/>
                                                </svg>
                                            </button>
                                            <a href="javascript:void(0)" class="btn btn_view action btn-compare js-btn-wishlist setWishlist btn-views" data-wish="xeng-lam-vuon" tabindex="0" title="Thêm vào yêu thích">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M22.0373 2.9457C20.7959 1.6114 19.0565 0.852197 17.234 0.849383C15.4101 0.851494 13.6688 1.61029 12.4255 2.94485L12.0018 3.3926L11.578 2.94485C9.11101 0.289657 4.95858 0.137174 2.30343 2.6042C2.18578 2.71356 2.07215 2.82714 1.96278 2.94485C-0.654261 5.76765 -0.654261 10.1302 1.96278 12.953L11.3791 22.883C11.7048 23.227 12.2477 23.2417 12.5916 22.9159C12.6029 22.9052 12.6139 22.8943 12.6245 22.883L22.0374 12.953C24.6542 10.1305 24.6542 5.7682 22.0373 2.9457ZM20.7962 11.7718H20.7953L12.0018 21.0466L3.20738 11.7718C1.20811 9.61497 1.20811 6.28199 3.20738 4.12511C5.02296 2.1573 8.09006 2.03392 10.0579 3.8495C10.1534 3.93765 10.2453 4.02957 10.3335 4.12511L11.3791 5.22818C11.7236 5.57054 12.2799 5.57054 12.6245 5.22818L13.6701 4.12597C15.4857 2.15816 18.5528 2.03477 20.5206 3.85035C20.6161 3.9385 20.708 4.03043 20.7962 4.12597C22.8129 6.28627 22.8276 9.62532 20.7962 11.7718Z" fill="#A1CCA3"/>
                                                </svg>
                                            </a>
                                        </div>
                                        </form>
                                    </div>
                                    <div class="swiper-slide ajax-carousel">
                                        <form action="/cart/add" method="post" class="wishItem variants product-box product-block-item" data-cart-form data-id="product-actions-24840214" enctype="multipart/form-data">
                                        <div class="product-thumbnail">
                                            <a class="image_thumb scale_hover product-transition" href="/may-do-ph" title="Máy đo PH">
                                            <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="//bizweb.dktcdn.net/thumb/large/100/448/970/products/2-jpeg.jpg?v=1646032246000" alt="Máy đo PH">
                                            </a>
                                            <span class="smart"><span>-
                                            14% 
                                            </span></span>
                                            <span class="new"><span>Mới</span></span>
                                        </div>
                                        <div class="product-info">
                                            <div class="product-content">
                                                <h3 class="product-name"><a href="/may-do-ph" title="Máy đo PH">Máy đo PH</a></h3>
                                                <div class="blockprice">
                                                    <div class="price-box">
                                                    300.000₫&nbsp;
                                                    <span class="compare-price">350.000₫</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-action d-xl-flex d-none">
                                            <a title="Xem nhanh" href="/may-do-ph" data-handle="may-do-ph" class="xem_nhanh btn-circle btn_view btn right-to quick-view hidden-xs hidden-sm">
                                                <svg width="30" height="18" viewBox="0 0 30 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.9998 0C22.6775 0 28.6889 8.10561 28.9412 8.45074C29.1805 8.77783 29.1805 9.22225 28.9412 9.54962C28.6889 9.89442 22.6775 18.0001 14.9998 18.0001C7.32209 18.0001 1.31039 9.89448 1.05836 9.54935C0.819413 9.22192 0.819413 8.77783 1.05836 8.45041C1.31039 8.10561 7.32209 0 14.9998 0ZM2.99617 8.99941C4.44614 10.7582 9.34434 16.138 14.9998 16.138C20.6673 16.138 25.5553 10.7609 27.0034 9.00068C25.5528 7.24098 20.6549 1.86207 14.9998 1.86207C9.3322 1.86207 4.44426 7.23911 2.99617 8.99941ZM9.41351 9.00006C9.41351 5.91985 11.9196 3.4138 14.9998 3.4138C18.08 3.4138 20.586 5.91985 20.586 9.00006C20.586 12.0803 18.08 14.5863 14.9998 14.5863C11.9196 14.5863 9.41351 12.0803 9.41351 9.00006ZM11.2756 9.00006C11.2756 11.0536 12.9462 12.7242 14.9998 12.7242C17.0534 12.7242 18.7239 11.0536 18.7239 9.00006C18.7239 6.94653 17.0533 5.27592 14.9998 5.27592C12.9462 5.27592 11.2756 6.94653 11.2756 9.00006Z" fill="#A1CCA3"/>
                                                </svg>
                                            </a>
                                            <input type="hidden" name="variantId" value="60521645" />
                                            <button class="cart-button btn-buy firstb btn-cart button_35 left-to muangay btn-cart btn-views add_to_cart " title="Mua hàng">
                                                <svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M19.9381 25.6016C19.9381 27.4755 21.4626 29 23.3365 29C25.2104 29 26.735 27.4755 26.735 25.6016C26.735 23.7277 25.2104 22.2031 23.3365 22.2031C21.4626 22.2031 19.9381 23.7277 19.9381 25.6016ZM23.3365 24.4688C23.9612 24.4688 24.4693 24.9769 24.4693 25.6016C24.4693 26.2262 23.9612 26.7344 23.3365 26.7344C22.7119 26.7344 22.2037 26.2262 22.2037 25.6016C22.2037 24.9769 22.7119 24.4688 23.3365 24.4688ZM6.57091 25.6016C6.57091 27.4755 8.09545 29 9.96935 29C11.8432 29 13.3678 27.4755 13.3678 25.6016C13.3678 23.7277 11.8432 22.2031 9.96935 22.2031C8.09545 22.2031 6.57091 23.7277 6.57091 25.6016ZM9.96935 24.4688C10.594 24.4688 11.1022 24.9769 11.1022 25.6016C11.1022 26.2262 10.594 26.7344 9.96935 26.7344C9.34471 26.7344 8.83653 26.2262 8.83653 25.6016C8.83653 24.9769 9.34471 24.4688 9.96935 24.4688ZM13.3678 11.1016H11.1022V17.6719H13.3678V11.1016ZM6.57091 6.57031V3.39844C6.57091 1.52454 5.04637 0 3.17247 0H0.00195312V2.26562H3.17241C3.79705 2.26562 4.30522 2.7738 4.30522 3.39844V16.5391C4.30522 19.6622 6.84612 22.2031 9.96929 22.2031H23.3365C26.4596 22.2031 29.0005 19.6622 29.0005 16.5391V6.57031H6.57091ZM26.735 16.5391C26.735 18.413 25.2104 19.9375 23.3365 19.9375H9.96935C8.09545 19.9375 6.57091 18.413 6.57091 16.5391V8.83594H26.735V16.5391ZM17.899 11.1016H15.6334V17.6719H17.899V11.1016ZM22.4303 11.1016H20.1647V17.6719H22.4303V11.1016Z" fill="#A1CCA3"/>
                                                </svg>
                                            </button>
                                            <a href="javascript:void(0)" class="btn btn_view action btn-compare js-btn-wishlist setWishlist btn-views" data-wish="may-do-ph" tabindex="0" title="Thêm vào yêu thích">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M22.0373 2.9457C20.7959 1.6114 19.0565 0.852197 17.234 0.849383C15.4101 0.851494 13.6688 1.61029 12.4255 2.94485L12.0018 3.3926L11.578 2.94485C9.11101 0.289657 4.95858 0.137174 2.30343 2.6042C2.18578 2.71356 2.07215 2.82714 1.96278 2.94485C-0.654261 5.76765 -0.654261 10.1302 1.96278 12.953L11.3791 22.883C11.7048 23.227 12.2477 23.2417 12.5916 22.9159C12.6029 22.9052 12.6139 22.8943 12.6245 22.883L22.0374 12.953C24.6542 10.1305 24.6542 5.7682 22.0373 2.9457ZM20.7962 11.7718H20.7953L12.0018 21.0466L3.20738 11.7718C1.20811 9.61497 1.20811 6.28199 3.20738 4.12511C5.02296 2.1573 8.09006 2.03392 10.0579 3.8495C10.1534 3.93765 10.2453 4.02957 10.3335 4.12511L11.3791 5.22818C11.7236 5.57054 12.2799 5.57054 12.6245 5.22818L13.6701 4.12597C15.4857 2.15816 18.5528 2.03477 20.5206 3.85035C20.6161 3.9385 20.708 4.03043 20.7962 4.12597C22.8129 6.28627 22.8276 9.62532 20.7962 11.7718Z" fill="#A1CCA3"/>
                                                </svg>
                                            </a>
                                        </div>
                                        </form>
                                    </div>
                                    <div class="swiper-slide ajax-carousel">
                                        <form action="/cart/add" method="post" class="wishItem variants product-box product-block-item" data-cart-form data-id="product-actions-24839815" enctype="multipart/form-data">
                                        <div class="product-thumbnail">
                                            <a class="image_thumb scale_hover product-transition" href="/dung-cu-cam-tay-da-nang" title="Dụng cụ cầm tay đa năng">
                                            <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="//bizweb.dktcdn.net/thumb/large/100/448/970/products/1-jpeg.jpg?v=1646029018000" alt="Dụng cụ cầm tay đa năng">
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <div class="product-content">
                                                <h3 class="product-name"><a href="/dung-cu-cam-tay-da-nang" title="Dụng cụ cầm tay đa năng">Dụng cụ cầm tay đa năng</a></h3>
                                                <div class="blockprice">
                                                    <div class="price-box">
                                                    98.000₫				
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-action d-xl-flex d-none">
                                            <a title="Xem nhanh" href="/dung-cu-cam-tay-da-nang" data-handle="dung-cu-cam-tay-da-nang" class="xem_nhanh btn-circle btn_view btn right-to quick-view hidden-xs hidden-sm">
                                                <svg width="30" height="18" viewBox="0 0 30 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.9998 0C22.6775 0 28.6889 8.10561 28.9412 8.45074C29.1805 8.77783 29.1805 9.22225 28.9412 9.54962C28.6889 9.89442 22.6775 18.0001 14.9998 18.0001C7.32209 18.0001 1.31039 9.89448 1.05836 9.54935C0.819413 9.22192 0.819413 8.77783 1.05836 8.45041C1.31039 8.10561 7.32209 0 14.9998 0ZM2.99617 8.99941C4.44614 10.7582 9.34434 16.138 14.9998 16.138C20.6673 16.138 25.5553 10.7609 27.0034 9.00068C25.5528 7.24098 20.6549 1.86207 14.9998 1.86207C9.3322 1.86207 4.44426 7.23911 2.99617 8.99941ZM9.41351 9.00006C9.41351 5.91985 11.9196 3.4138 14.9998 3.4138C18.08 3.4138 20.586 5.91985 20.586 9.00006C20.586 12.0803 18.08 14.5863 14.9998 14.5863C11.9196 14.5863 9.41351 12.0803 9.41351 9.00006ZM11.2756 9.00006C11.2756 11.0536 12.9462 12.7242 14.9998 12.7242C17.0534 12.7242 18.7239 11.0536 18.7239 9.00006C18.7239 6.94653 17.0533 5.27592 14.9998 5.27592C12.9462 5.27592 11.2756 6.94653 11.2756 9.00006Z" fill="#A1CCA3"/>
                                                </svg>
                                            </a>
                                            <input type="hidden" name="variantId" value="60520968" />
                                            <button class="cart-button btn-buy firstb btn-cart button_35 left-to muangay btn-cart btn-views add_to_cart " title="Mua hàng">
                                                <svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M19.9381 25.6016C19.9381 27.4755 21.4626 29 23.3365 29C25.2104 29 26.735 27.4755 26.735 25.6016C26.735 23.7277 25.2104 22.2031 23.3365 22.2031C21.4626 22.2031 19.9381 23.7277 19.9381 25.6016ZM23.3365 24.4688C23.9612 24.4688 24.4693 24.9769 24.4693 25.6016C24.4693 26.2262 23.9612 26.7344 23.3365 26.7344C22.7119 26.7344 22.2037 26.2262 22.2037 25.6016C22.2037 24.9769 22.7119 24.4688 23.3365 24.4688ZM6.57091 25.6016C6.57091 27.4755 8.09545 29 9.96935 29C11.8432 29 13.3678 27.4755 13.3678 25.6016C13.3678 23.7277 11.8432 22.2031 9.96935 22.2031C8.09545 22.2031 6.57091 23.7277 6.57091 25.6016ZM9.96935 24.4688C10.594 24.4688 11.1022 24.9769 11.1022 25.6016C11.1022 26.2262 10.594 26.7344 9.96935 26.7344C9.34471 26.7344 8.83653 26.2262 8.83653 25.6016C8.83653 24.9769 9.34471 24.4688 9.96935 24.4688ZM13.3678 11.1016H11.1022V17.6719H13.3678V11.1016ZM6.57091 6.57031V3.39844C6.57091 1.52454 5.04637 0 3.17247 0H0.00195312V2.26562H3.17241C3.79705 2.26562 4.30522 2.7738 4.30522 3.39844V16.5391C4.30522 19.6622 6.84612 22.2031 9.96929 22.2031H23.3365C26.4596 22.2031 29.0005 19.6622 29.0005 16.5391V6.57031H6.57091ZM26.735 16.5391C26.735 18.413 25.2104 19.9375 23.3365 19.9375H9.96935C8.09545 19.9375 6.57091 18.413 6.57091 16.5391V8.83594H26.735V16.5391ZM17.899 11.1016H15.6334V17.6719H17.899V11.1016ZM22.4303 11.1016H20.1647V17.6719H22.4303V11.1016Z" fill="#A1CCA3"/>
                                                </svg>
                                            </button>
                                            <a href="javascript:void(0)" class="btn btn_view action btn-compare js-btn-wishlist setWishlist btn-views" data-wish="dung-cu-cam-tay-da-nang" tabindex="0" title="Thêm vào yêu thích">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M22.0373 2.9457C20.7959 1.6114 19.0565 0.852197 17.234 0.849383C15.4101 0.851494 13.6688 1.61029 12.4255 2.94485L12.0018 3.3926L11.578 2.94485C9.11101 0.289657 4.95858 0.137174 2.30343 2.6042C2.18578 2.71356 2.07215 2.82714 1.96278 2.94485C-0.654261 5.76765 -0.654261 10.1302 1.96278 12.953L11.3791 22.883C11.7048 23.227 12.2477 23.2417 12.5916 22.9159C12.6029 22.9052 12.6139 22.8943 12.6245 22.883L22.0374 12.953C24.6542 10.1305 24.6542 5.7682 22.0373 2.9457ZM20.7962 11.7718H20.7953L12.0018 21.0466L3.20738 11.7718C1.20811 9.61497 1.20811 6.28199 3.20738 4.12511C5.02296 2.1573 8.09006 2.03392 10.0579 3.8495C10.1534 3.93765 10.2453 4.02957 10.3335 4.12511L11.3791 5.22818C11.7236 5.57054 12.2799 5.57054 12.6245 5.22818L13.6701 4.12597C15.4857 2.15816 18.5528 2.03477 20.5206 3.85035C20.6161 3.9385 20.708 4.03043 20.7962 4.12597C22.8129 6.28627 22.8276 9.62532 20.7962 11.7718Z" fill="#A1CCA3"/>
                                                </svg>
                                            </a>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-item tab-content tab-2 ">
                        <div class="contentfill">
                        </div>
                    </div>
                    <div class="tab-item tab-content tab-3 ">
                        <div class="contentfill">
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section> --}}
<section class="section_feedback lazyload" data-src="//bizweb.dktcdn.net/100/448/970/themes/894899/assets/bg_feedback.jpg?1676280280637">
    <div class="container">
    <div class="swiper mySwiper-d2">
        <div class="swiper-wrapper">
            @foreach ($reviewCus as $item)
                <div class="swiper-slide">
                    <span class="dauphay">
                    <svg width="44" height="31" viewBox="0 0 44 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.1143 29.916C8.56478 30.1478 6.36296 29.5104 4.50879 28.0039C2.77051 26.3815 1.61165 24.2956 1.03223 21.7461C0.568685 19.5443 0.452799 17.2845 0.68457 14.9668C1.03223 12.5332 1.78548 10.3314 2.94434 8.36133C4.21908 6.27539 5.95736 4.47917 8.15918 2.97266C10.361 1.46615 13.1423 0.539062 16.5029 0.191406L17.7197 4.53711C15.9814 5.00065 14.1273 5.81185 12.1572 6.9707C10.1872 8.12956 8.91243 10.0996 8.33301 12.8809L10.9404 12.3594C13.6058 12.2435 15.8656 12.9967 17.7197 14.6191C19.6898 16.2415 20.6748 18.2695 20.6748 20.7031C20.6748 23.1367 19.7477 25.2806 17.8936 27.1348C16.0394 28.873 13.7796 29.8001 11.1143 29.916ZM34.0596 29.916C31.3942 30.1478 29.1924 29.5104 27.4541 28.0039C25.7158 26.3815 24.557 24.2956 23.9775 21.7461C23.3981 19.5443 23.2822 17.2845 23.6299 14.9668C23.9775 12.5332 24.7308 10.3314 25.8896 8.36133C27.1644 6.27539 28.9027 4.47917 31.1045 2.97266C33.3063 1.46615 36.0296 0.539062 39.2744 0.191406L40.665 4.53711C38.9268 5.00065 37.0146 5.81185 34.9287 6.9707C32.9587 8.12956 31.6839 10.0996 31.1045 12.8809C31.568 12.765 31.9736 12.707 32.3213 12.707C32.7848 12.5911 33.3063 12.4753 33.8857 12.3594C36.5511 12.2435 38.8109 12.9967 40.665 14.6191C42.5192 16.2415 43.4463 18.2695 43.4463 20.7031C43.4463 23.1367 42.5192 25.2806 40.665 27.1348C38.9268 28.873 36.7249 29.8001 34.0596 29.916Z" fill="#A1CCA3"/>
                    </svg>
                    </span>
                    <div class="des">
                    {!!languageName($item->content)!!}
                    </div>
                    <div class="name">
                    {{languageName($item->name)}}
                    </div>
                    <p>
                    {{languageName($item->position)}}
                    </p>
                </div>
            @endforeach
        </div>
    </div>
    <div class="mySwiper">
        <div class="swiper mySwiper-d1">
            <div class="swiper-wrapper">
                @foreach ($reviewCus as $item)
                    <div class="swiper-slide">
                    <div class="inner">
                        <img  src="{{$item->avatar}}" alt="{{languageName($item->name)}}"/>
                    </div>
                    </div>
                @endforeach
            </div>
            <div class="swiper-button-prev">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                <path d="M224 480c-8.188 0-16.38-3.125-22.62-9.375l-192-192c-12.5-12.5-12.5-32.75 0-45.25l192-192c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25L77.25 256l169.4 169.4c12.5 12.5 12.5 32.75 0 45.25C240.4 476.9 232.2 480 224 480z"/>
                </svg>
            </div>
            <div class="swiper-button-next">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                <path d="M96 480c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L242.8 256L73.38 86.63c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l192 192c12.5 12.5 12.5 32.75 0 45.25l-192 192C112.4 476.9 104.2 480 96 480z"/>
                </svg>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- Swiper JS -->
<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiper-d1", {
        loop: true,
        spaceBetween: 15,
        slidesPerView: 3,
        centeredSlides: true,
        roundLengths: true,
        freeMode: true,
        watchSlidesProgress: true,
        allowTouchMove: false,
        breakpoints: {
            300: {
                slidesPerView: 1,
                spaceBetween: 0,
                loop: false,
                centeredSlides: false,
            },
            500: {
                slidesPerView: 1,
                spaceBetween: 0,
                loop: false,
                centeredSlides: false,
            },
            640: {
                slidesPerView: 1,
                spaceBetween: 0,
                loop: false,
                centeredSlides: false,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 0,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 0,
            },
            1200: {
                slidesPerView: 3,
                spaceBetween: 0,
            }
        }
    });
    var swiper2 = new Swiper(".mySwiper-d2", {
        loop: true,
        spaceBetween: 10,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        thumbs: {
            swiper: swiper,
        },
    });
</script>
<section class="section_blog">
    <div class="container">
    <div class="block-title title_module_main clearfix">
        <h2>
            <a href="{{route('allListBlog')}}" title="@lang('lang.agriculture')">@lang('lang.agriculture')</a>
        </h2>
    </div>
    <div class="block-blog">
        <div class="blog-swiper swiper-container">
            <div class="swiper-wrapper">
                @foreach ($hotnews as $blog)
                    <div class="swiper-slide">
                        <div class="item_blog_base">
                            <a class="thumb" href="{{route('detailBlog', ['slug'=>$blog->slug])}}" title="{{languageName($blog->title)}}">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{$blog->image}}" alt="{{languageName($blog->title)}}" class="lazyload img-responsive" />
                            </a>
                            <div class="content_blog clearfix">
                                <h3><a href="{{route('detailBlog', ['slug'=>$blog->slug])}}" title="{{languageName($blog->title)}}" class="a-title">{{languageName($blog->title)}}</a></h3>
                                <div class="time-post">
                                    <span class="author">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path d="M272 304h-96C78.8 304 0 382.8 0 480c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32C448 382.8 369.2 304 272 304zM48.99 464C56.89 400.9 110.8 352 176 352h96c65.16 0 119.1 48.95 127 112H48.99zM224 256c70.69 0 128-57.31 128-128c0-70.69-57.31-128-128-128S96 57.31 96 128C96 198.7 153.3 256 224 256zM224 48c44.11 0 80 35.89 80 80c0 44.11-35.89 80-80 80S144 172.1 144 128C144 83.89 179.9 48 224 48z"/>
                                    </svg>
                                    HD Tea
                                    </span>
                                    <span class="xo">|</span>
                                    <span class="icon posted">
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0 7C0 3.13996 3.13996 0 7 0C10.86 0 14 3.13996 14 7C14 10.86 10.86 14 7 14C3.13996 14 0 10.86 0 7ZM1.08443 7C1.08443 10.2614 3.73857 12.9156 7 12.9156C10.2614 12.9156 12.9156 10.2614 12.9156 7C12.9156 3.73857 10.262 1.08443 7 1.08443C3.73857 1.08443 1.08443 3.73857 1.08443 7ZM7.5422 6.77225L9.49419 8.23624C9.73386 8.41572 9.78267 8.75569 9.60261 8.99483C9.49632 9.13798 9.33366 9.21227 9.16828 9.21227C9.05497 9.21227 8.94108 9.17703 8.84349 9.10383L6.67464 7.47717C6.538 7.37524 6.45775 7.21418 6.45775 7.04339V3.79009C6.45775 3.49024 6.70012 3.24786 6.99997 3.24786C7.29983 3.24786 7.5422 3.49024 7.5422 3.79009V6.77225Z" fill="#7F7F7F"/>
                                    </svg>
                                    @lang('lang.date') 
                                    {{date('d/m/Y', strtotime($blog->created_at))}}
                                    </span>
                                </div>
                                <p>
                                    {{languageName($blog->description)}}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>
</section>
<script>
    var swiperwish = new Swiper('.blog-swiper', {
        slidesPerView: 3,
        loop: false,
        grabCursor: true,
        spaceBetween: 30,
        roundLengths: true,
        slideToClickedSlide: false,
        autoplay: false,
        breakpoints: {
            300: {
                slidesPerView: 1.3,
                spaceBetween: 30
            },
            500: {
                slidesPerView: 1.3,
                spaceBetween: 30
            },
            640: {
                slidesPerView: 1.3,
                spaceBetween: 30
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 30
            },
            991: {
                slidesPerView: 3,
                spaceBetween: 30
            },
            1200: {
                slidesPerView: 3,
                spaceBetween: 30
            }
        }
    });
</script>
@endsection