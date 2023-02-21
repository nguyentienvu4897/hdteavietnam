@php
    $imgs= json_decode($product->images);
    $giagiam = $product['price']-$product['price']*$product['discount']/100;

@endphp

  <div class="block-quickview primary_block details-product">
    <div class="row">
        <div class="product-left-column product-images col-xs-12 col-sm-4 col-md-4 col-lg-5 col-xl-6">
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
          <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper quick-view-slide-2">
            <div class="swiper-wrapper">
              @foreach ($imgs as $img)
                <div class="swiper-slide">
                  <img src="{{$img}}" />
                </div>
              @endforeach
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>
          <div thumbsSlider="" class="swiper quick-view-slide">
            <div class="swiper-wrapper">
              @foreach ($imgs as $img)
                <div class="swiper-slide">
                  <img src="{{$img}}" />
                </div>
              @endforeach
            </div>
          </div>
        </div>
        <div class="product-center-column product-info product-item col-xs-12 col-sm-6 col-md-8 col-lg-7 col-xl-6 details-pro style_product style_border" id="product-24840825">
          <div class="head-qv group-status">
              <h3 class="qwp-name title-product"><a class="text2line" href="{{route('detailProduct',['cate'=>$product->cate_slug,'slug'=>$product->slug])}}" title="{{languageName($product->name)}}">{{languageName($product->name)}}</a></h3>
          </div>
          <div class="quickview-info">
              @if($product['price']>0 && $product['discount']>0 && $product['discount'] <100)
              <span class="prices price-box">
                <span class="price product-price sale-price on-sale">{{number_format($giagiam)}}₫</span>
                <del class="old-price" style="display: inline-block;">{{number_format($product->price)}}₫</del>
              </span>
          @elseif($product['price']>0 && $product['discount'] == 0)
              <span class="prices price-box">
                <span class="price product-price sale-price on-sale">{{number_format($product->price)}}₫</span>
              </span>
          @else
              
                  <span class="prices price-box">
                    <span class="price product-price sale-price on-sale"> <a href="tel:+{{$setting->phone1}}">@lang('lang.contact')</a></span>
                  </span>
                  
          @endif


          </div>
          <form class="quick_option variants form-ajaxtocart form-product" id="product-actions-24840825">
              <div class="product-description product-summary">
                <div class="rte">
                    <ul>
                      {!!languageName($product->description)!!}
                    </ul>
                </div>
              </div>
              <div class="form_product_content">
                <div class="count_btn_style quantity_wanted_p">
                    <div class=" soluong1 clearfix">
                      <label class="sl section">Số lượng:</label>
                      <div class="sssssscustom input_number_product">
                          <a class="btn_num num_1 button button_qty" onclick="var result = document.getElementById('quantity-detail'); var qtyqv = result.value; if( !isNaN( qtyqv ) &amp;&amp; qtyqv > 1 ) result.value--;return false;">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                <path d="M400 288h-352c-17.69 0-32-14.32-32-32.01s14.31-31.99 32-31.99h352c17.69 0 32 14.3 32 31.99S417.7 288 400 288z"></path>
                            </svg>
                          </a>
                          <input type="text" id="quantity-detail" name="quantity" value="1" maxlength="2" class="form-control prd_quantity" onkeypress="if ( isNaN(this.value + String.fromCharCode(event.keyCode) )) return false;" onchange="if(this.value == 0)this.value=1;">
                          <a class="btn_num num_2 button button_qty" onclick="var result = document.getElementById('quantity-detail'); var qtyqv = result.value; if( !isNaN( qtyqv )) result.value++;return false;">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                <path d="M432 256c0 17.69-14.33 32.01-32 32.01H256v144c0 17.69-14.33 31.99-32 31.99s-32-14.3-32-31.99v-144H48c-17.67 0-32-14.32-32-32.01s14.33-31.99 32-31.99H192v-144c0-17.69 14.33-32.01 32-32.01s32 14.32 32 32.01v144h144C417.7 224 432 238.3 432 256z"></path>
                            </svg>
                          </a>
                      </div>
                    </div>
                    <div class="button_actions clearfix">
                      <button type="submit" class="qv_add_to_cart btn_cool btn btn_base fix_add_to_cart ajax_addtocart btn_add_cart btn-cart add_to_cart add_to_cart_detail" data-id="{{$product->id}}" data-url="{{route('addToCart',['id'=>$product->id])}}"><span class="btn-content text_1">@lang('lang.addtocart')</span><span class="regular">@lang('lang.giaohang')</span></button>
                    </div>
                </div>
              </div>
              <input type="hidden" name="id" value="24840825">
          </form>
        </div>
    </div>
  </div>
  <a title="Close" class="quickview-close close-window" href="javascript:;">
    <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="times" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-times fa-w-10">
        <path fill="currentColor" d="M207.6 256l107.72-107.72c6.23-6.23 6.23-16.34 0-22.58l-25.03-25.03c-6.23-6.23-16.34-6.23-22.58 0L160 208.4 52.28 100.68c-6.23-6.23-16.34-6.23-22.58 0L4.68 125.7c-6.23 6.23-6.23 16.34 0 22.58L112.4 256 4.68 363.72c-6.23 6.23-6.23 16.34 0 22.58l25.03 25.03c6.23 6.23 16.34 6.23 22.58 0L160 303.6l107.72 107.72c6.23 6.23 16.34 6.23 22.58 0l25.03-25.03c6.23-6.23 6.23-16.34 0-22.58L207.6 256z" class=""></path>
    </svg>
  </a>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <script>
    var swiper = new Swiper(".quick-view-slide", {
      spaceBetween: 10,
      slidesPerView: 4,
      freeMode: true,
      watchSlidesProgress: true,
    });
    var swiper2 = new Swiper(".quick-view-slide-2", {
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
