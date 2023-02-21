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
            $('.add_to_cart').click(function (e) { 
                e.preventDefault();
                url = $(this).data('url');
                id = $(this).data('id');
                quantity = $(this).parents().find('input[name=quantity]').val();
                console.log(quantity);
                $.ajax({
                    type: "post",
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    url: url,
                    data: {
                        id: id,
                        quantity: quantity
                    },
                    success: function (data) {
                        $('#CartDrawer').html(data.html1);
                        $('#CartDrawer').addClass('active');
                        modal.hide();
                        $('.cart-sidebar, .backdrop__body-backdrop___1rvky').addClass('active');
                        $('.count_item_pr').html(data.html2);
                    }
                });
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
$('.add_to_cart').click(function (e) { 
    e.preventDefault();
    url = $(this).data('url');
    id = $(this).data('id');
    quantity = $(this).parents().find('input[name=quantity]').val();
    $.ajax({
        type: "post",
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        url: url,
        data: {
            id: id,
            quantity: quantity
        },
        success: function (data) {
            $('#CartDrawer').html(data.html1);
            $('#CartDrawer').addClass('active');
        }
    });
});

// remove-cart
function removeItemCart(id, url) { 
    var url = url;
    var id = id;
    $.ajax({
        type: "GET",
        url: url,
        data: {
            id:id
        },
        success: function (data) {
            $('#CartDrawer').html(data.html1);
            $('.count_item_pr').html(data.html2);
        }
    });    
};

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
            $('#CartDrawer').html(data.html1);
        }
    })
}

