var modal = $('.quickview-product');
var btn = $('.quick-view');

btn.click(function () {
    url  = $(this).data('url');
    modal.show();
    $.ajax({
        type: "GET",
        url: url,
        success: function (data) {
            $('#quick-view-product .quick-view-product').html(data.html);
            var span = $('.quickview-close');
            span.click(function () {
                modal.hide();
            });
            $(window).on('click', function (e) {
                if ($(e.target).is('.quickview-overlay')) {
                    modal.hide();
                }
            });
        }
    });
});
$('.cart-drop .icon').click(function(){
$('.cart-sidebar, .backdrop__body-backdrop___1rvky').addClass('active');
});

$(document).on('click','.backdrop__body-backdrop___1rvky, .cart_btn-close', function() {   
$('.backdrop__body-backdrop___1rvky, .cart-sidebar, #popup-cart-desktop, .popup-cart-mobile').removeClass('active');
return false;
});
// add_to_cart 

// remo-cart
$('.remove-item-cart').click(function (e) { 
    e.preventDefault();
    url = $(this).data('url');
    id = $(this).data('id');
    $.ajax({
        type: "GET",
        url: url,
        data: {
            id:id
        },
        success: function (data) {
             $('#CartDrawer').html(data.html1);
        }
    });    
});
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