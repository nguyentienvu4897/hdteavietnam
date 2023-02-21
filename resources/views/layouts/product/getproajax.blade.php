<div class="swiper-container">
    <div class="swipertab swiper-tab-top swiper-nth">
        <div class="swiper-wrapper">
            @foreach ($products as $product)
                <div class="swiper-slide">
                    @include('layouts.product.item', ['product' => $product])
                </div>
            @endforeach
        </div>
    </div>
</div>