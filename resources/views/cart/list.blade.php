@extends('layouts.main.master')
@section('title')
Giỏ hàng của bạn
@endsection
@section('description')
@endsection
@section('image')
{{url(''.$banner[0]->image)}}
@endsection
@section('css')
<link href="{{asset('frontend/css/cartpage.scss.css')}}"  rel="stylesheet" type="text/css">
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
						<li><strong ><span>Giỏ hàng</span></strong></li>
					</ul>
				</div>
			</div>
			</div>
		</section>
	</div>
	@if ($cart)
		<section class="main-cart-page main-container col1-layout" data-url="{{ route('removeCart')}}">
			<div class="main container cartpcstyle">
				<div class="wrap_background_aside padding-bottom-40">
				<div class="header-cart">
					<h1 class="title_cart">
						<span>Giỏ hàng của bạn</span>
					</h1>
					<div class="header-cart title_cart_pc hidden-sm hidden-xs">
					</div>
				</div>
				<div class="col-main cart_desktop_page cart-page" data-url="{{route('updateCart')}}">
					<div class="header-cart-content">
						<div class="cart page_cart hidden-xs hidden-sm row">
							<div class="bg-scroll">
								<div class="cart-thead">
									<div style="width: 18%" class="a-center">Ảnh sản phẩm</div>
									<div style="width: 32%" class="a-center">Tên sản phẩm</div>
									<div style="width: 17%" class="a-center">Đơn giá</div>
									<div style="width: 14%" class="a-center">Số lượng</div>
									<div style="width: 14%" class="a-center">Thành tiền</div>
									<div style="width: 5%" class="a-center">Xóa</div>
								</div>
								<div class="cart-tbody">
									@php
										$totalPrice = 0;
									@endphp
									@foreach ($cart as $item)
										@php
											$pricePro = $item['price'] - $item['price'] * ($item['discount']/100);
										@endphp
										<div class="item-cart productid-{{$item['id']}}">
											<div style="width: 18%" class="image">
												<a class="product-image a-left" title="{{languageName($item['name'])}}" href="{{ route('detailProduct' , ['cate'=>$item['cate_slug'], 'slug'=>$item['slug']]) }}">
													<img width="75" height="auto" alt="{{languageName($item['name'])}}" src="{{$item['image']}}">
												</a>
											</div>
											<div style="width: 32%" class="a-center">
												<h3 class="product-name"> <a class="text2line" href="{{ route('detailProduct' , ['cate'=>$item['cate_slug'], 'slug'=>$item['slug']]) }}" title="{{languageName($item['name'])}}">{{languageName($item['name'])}}</a> </h3>
											</div>
											<div style="width: 17%" class="a-center">
												<span class="cart-prices">
													<span class="prices">{{ number_format($pricePro) }}<sup>vnđ</sup></span> 
												</span>
											</div>
											<div style="width: 14%" class="a-center">
												<div class="input_qty_pr">
													<input class="variantID" type="hidden" name="variantId" value="{{$item['id']}}">
													<button onClick="var result = document.getElementById('qtyItem{{$item['id']}}'); var qtyItem{{$item['id']}} = result.value; if( !isNaN( qtyItem{{$item['id']}} ) &amp;&amp; qtyItem{{$item['id']}} &gt; 1 ) result.value--;return false;" ${buttonQty} class="reduced_pop items-count btn-minus submit-pc" type="button">-</button>
													<input type="text" maxlength="3" readonly min="0" class="check_number_here input-text number-sidebar input_pop input_pop qtyItem{{$item['id']}}" id="qtyItem{{$item['id']}}" name="Lines" id="updates_{{$item['id']}}" size="4" value="{{$item['quantity']}}">
													<button onClick="var result = document.getElementById('qtyItem{{$item['id']}}'); var qtyItem{{$item['id']}} = result.value; if( !isNaN( qtyItem{{$item['id']}} )) result.value++;return false;" class="increase_pop items-count btn-plus submit-pc" type="button">+</button>
												</div>
											</div>
											<div style="width: 14%" class="a-center">
												<span class="cart-price">
													<span class="price">{{ number_format($item['quantity'] * $pricePro) }}<sup>vnđ</sup></span> 
												</span>
											</div>
											<div style="width: 5%" class="a-center">
												<a class="remove-itemx remove-item-cart" title="Xóa" href="javascript:;" data-id="{{$item['id']}}">
													<span><i class="fa fa-trash-alt"></i></span>
												</a>
											</div>
										</div>
										@php
											$totalPrice += $item['quantity'] * $pricePro ;
										@endphp
									@endforeach
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-7 col-md-7">
								<a href="{{ route('home') }}" class="form-cart-continue">Tiếp tục mua hàng</a>
							</div>
							<div class="col-lg-5 col-md-5">
								<div class="section bg_cart shopping-cart-table-total">
									<div class="table-total">
										<table class="table">
											<tr>
												<td coldspan="20" class="total-text">Tổng tiền thanh toán: </td>
												<td class="txt-right totals_price price_end a-right">{{ number_format($totalPrice) }}<sup>vnđ</sup></td>
											</tr>
										</table>
									</div>
								</div>
								<div class="section continued">
									<a href="{{ route('checkout') }}" class="btn-checkout-cart button_checkfor_buy">Tiến hành thanh toán</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				</div>
			</div>
			<div class="wrap_background_aside padding-top-15 padding-left-0 padding-right-0 cartmbstyle">
				<div class="cart-mobile container" data-url="{{route('updateCart')}}">
					<div class="header-cart">
						<div class="title-cart title_cart_mobile">
							<h3>Giỏ hàng</h3>
						</div>
					</div>
					<div class="header-cart-content">
						<div class="cart_page_mobile content-product-list">
							@foreach ($cart as $item)
								@php
									$pricePro = $item['price'] - $item['price'] * ($item['discount']/100);
								@endphp
										<div class="item-product item productid-{{$item['id']}} ">
											<div class="item-product-cart-mobile">
												<a href="{{ route('detailProduct' , ['cate'=>$item['cate_slug'], 'slug'=>$item['slug']]) }}">	
													<a class="product-images1" href="{{ route('detailProduct' , ['cate'=>$item['cate_slug'], 'slug'=>$item['slug']]) }}"  title="{{ languageName($item['name']) }}">
														<img width="80" height="150" src="{{$item['image']}}" alt="{{ languageName($item['name']) }}">
													</a>
												</a>
											</div>
											<div class="title-product-cart-mobile">
												<h3>
													<a href="{{ route('detailProduct' , ['cate'=>$item['cate_slug'], 'slug'=>$item['slug']]) }}" title="{{ languageName($item['name']) }}">{{ languageName($item['name']) }}</a>
												</h3>
												<p>
													Giá: <span>{{ number_format($item['quantity'] * $pricePro) }}₫</span>
												</p>
											</div>
											<div class="select-item-qty-mobile">
												<div class="txt_center">
													<input class="variantID" type="hidden" name="variantId" value="{{$item['id']}}">
													<button onClick="var result = document.getElementById('qtyMobile{{$item['id']}}'); var qtyMobile{{$item['id']}} = result.value; if( !isNaN( qtyMobile{{$item['id']}} ) &amp;&amp; qtyMobile{{$item['id']}} &gt; 1 ) result.value--;return false;" class="reduced items-count btn-minus submit-mobile" type="button"><i class="fa">-</i></button>
													<input type="text" maxlength="3" min="1" class="input-text number-sidebar qtyMobile{{$item['id']}}" id="qtyMobile{{$item['id']}}" name="Lines" id="updates_{{$item['id']}}" size="4" value="{{$item['quantity']}}">
													<button onClick="var result = document.getElementById('qtyMobile{{$item['id']}}'); var qtyMobile{{$item['id']}} = result.value; if( !isNaN( qtyMobile{{$item['id']}} )) result.value++;return false;" class="increase items-count btn-plus submit-mobile" type="button"><i class="fa">+</i></button>
												</div>
												<a class="button remove-item remove-item-cart" href="javascript:;" data-id="{{$item['id']}}">Xoá</a>
											</div>
										</div>
							@endforeach
						</div>
					</div>
					<div class="header-cart-price">
						<div class="title-cart">
							<h3 class="text-xs-left">Tổng tiền</h3>
							<a class="text-xs-right  totals_price_mobile">{{ number_format($totalPrice) }}₫</a>
						</div>
						<div class="checkout">
							<button class="btn-proceed-checkout-mobile" title="Tiến hành thanh toán" type="button" onclick="window.location.href='{{ route('checkout')}}'">
								<span>Tiến hành thanh toán</span></button>
							<button class="btn btn-white f-left" title="Tiếp tục mua hàng" type="button" onclick="window.location.href='{{ route('allProduct') }}'">
								<span>Tiếp tục mua hàng</span>
							</button>
						</div>
					</div>
				</div>
			</div>
		</section>
	@else
		<div class="container pb-5">
			<h3>Giỏ hàng của bạn chưa có sản phẩm nào</h3>
			<a href="{{route('allProduct')}}" class="btn btn-secondary">Quay lại mua hàng</a>
		</div>
	@endif
</div>
@endsection