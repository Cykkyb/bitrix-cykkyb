$('body').on('submit', '.registration-form', function (e) {
    e.preventDefault();
    form = $(this);
    alert = $('.alert');
    $.ajax(
        {
            url: '/local/ajax/add_user.php',
            type: 'post',
            data: form.serialize(),
            success: function (data) {
                if (data === 'main') {
                    // window.location.href = '/';
                } else {
                    alert.html(data);
                }
            }, error: function () {
                alert("Ошибка");
            }
        }
    );


});