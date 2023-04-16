$('.rating__value').each(function () {
    value = $(this).data('value');
    $(this).css('width', value / 0.05 + "%");
});