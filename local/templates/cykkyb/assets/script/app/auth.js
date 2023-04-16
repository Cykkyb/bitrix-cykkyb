$('body').on('submit', '.login-form', function (e) {
    e.preventDefault();
    form = $(this);
    alert = $('.alert');
    $.ajax(
        {
            url: '/local/ajax/auth.php',
            type: 'post',
            data: form.serialize(),
            success: function (data) {
                if(data === 'personal'){
                    window.location.href ='/personal/';
                }else {
                    alert.html(data);
                }
            }, error: function () {
                alert("Ошибка");
            }
        }
    );


});