$('body').on('click', '.likes__icon', function () {
    const likeIcon = $(this);
    const likeCounter = likeIcon.next();
    const likeItem = likeIcon.parent();
    const likesContainer = likeItem.parent();
    const likeData = likeItem.data();
    $.ajax(
        {
            url: '/local/ajax/reviews_like.php',
            type: 'post',
            data: {
                data: likeData,
            },
            success: function (data) {
                if (data) {
                    if (likeIcon.hasClass('likes__icon_active')) {
                        likeIcon.removeClass('likes__icon_active');
                        likeCounter.text(decrementCount(likeCounter.text()));
                    } else if (likesContainer.find('.likes__icon_active')) {
                        const anyLikeCounter = likesContainer.find('.likes__icon_active').next();
                        likesContainer.find('.likes__icon_active').removeClass('likes__icon_active');
                        likeIcon.addClass('likes__icon_active');
                        likeCounter.text(incrementCount(likeCounter.text()));
                        anyLikeCounter.text(decrementCount(anyLikeCounter.text()));
                    } else {
                        likesContainer.find('.likes__icon').each(function () {
                            $(this).removeClass('likes__icon_active');
                        });
                        likeCounter.text(incrementCount(likeCounter.text()));
                        likeIcon.addClass('likes__icon_active');
                    }
                }

            }, error: function () {
                alert("Ошибка");
            },
        }
    );
});

function incrementCount(value) {
    return Number(value) + 1;
}

function decrementCount(value) {
    return Number(value) - 1;
}