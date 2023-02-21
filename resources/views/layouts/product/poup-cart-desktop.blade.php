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
                  <a href="/bo-trung-dong" class="ajaxcart__product-image cart_image" title="{{languageName($item['name'])}}"><img width="80" height="80" src="{{$item['image']}}" alt="{{languageName($item['name'])}}"></a>
                  <div class="grid__item cart_info">
                        <div class="ajaxcart__product-name-wrapper cart_name">
                           <a href="/bo-trung-dong" class="ajaxcart__product-name h4" title="{{languageName($item['name'])}}">{{languageName($item['name'])}}</a>
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
                           <a class="cart__btn-remove remove-item-cart ajaxifyCart--remove" href="javascript:;" onclick="removeItemCart('{{$item['id']}}', '{{route('removeCart')}}')" data-line="1">Xóa</a>
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