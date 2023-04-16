$('body').on('click', '.basket-icon', function () {
    let productId = $(this).data('id');
    animateProductAdd($(this).parent().parent());
    $.ajax(
        {
            url: '/local/ajax/add_basket.php',
            type: 'post',
            data: {id: productId},
            success: function (data) {
                console.log(data);
                if (data){
                }
            }, error: function () {
                alert("Ошибка");
            }
        }
    );
});

function animateProductAdd(product_card){
        const product_image = product_card.find('.product-card__image');
        const icon_menu = $('.icon-menu');
        const cart = $('.cart');

        var animate_position = window.innerWidth > 767 ? cart.offset() : icon_menu.offset();

        const card_clone = product_card.find('.product-card__image').clone().addClass('product-card__image_fly');
        product_image.after(card_clone);
        card_clone.offset(
            {
                left: animate_position.left - 50,
                top: animate_position.top + 10,
            }
        );
        card_clone.animate(
            {
                width: 75,
                height: 75,
                opacity: 0,

            },
            900,
            function () {
                card_clone.remove();
            }
        );
    }