function ajaxFilter(id) {
    let wait = BX.showWait('phone-list__container');  // показываем прелоадер в правом верхнем углу контейнер

    $.ajax({
        data: {
            type: id
        },
        type: 'POST',
        cache: false,
        dataType: "html",
        success: function(dataHtml){
            $('#phone-list__container').html(dataHtml);
            window.initRequestModal("#modal-send-request-host");
            BX.closeWait('xls_container', wait); // прячем прелоадер
        }
    });
}

BX.ready(function(){
    $('[name = phone-list-type]').on('change', function () {
        let id = $(this).val();
        ajaxFilter(id);
    });
});