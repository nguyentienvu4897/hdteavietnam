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
})