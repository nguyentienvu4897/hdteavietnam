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