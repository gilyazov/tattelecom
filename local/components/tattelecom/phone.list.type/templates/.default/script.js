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
            window.initSendRequestModal();
            BX.closeWait('xls_container', wait); // прячем прелоадер
        }
    });
}

BX.ready(function(){
    ajaxFilter($('[name = phone-list-type]:checked').val());

    $('[name = phone-list-type]').on('change', function () {
        let id = $(this).val();
        ajaxFilter(id);
    });
});


document.addEventListener('DOMContentLoaded', () => {
    const showMore = document.querySelector('.phone-list__upload-btn');

    $('#phone-list__container').on('click', '.phone-list__upload-btn', function(event) {
        event.preventDefault();
        const self = this;
        let page = parseInt($(this).data('page'));
        let wait = BX.showWait(self.parentNode);
        let type = document.querySelector('input[name="phone-list-type"]:checked').value;


        $.ajax({
            data: {
                type: type,
                page: (page+1)
            },
            type: 'POST',
            cache: false,
            dataType: "html",
            success: function(dataHtml){
                $('#phone-list__container').html(dataHtml);
                window.initRequestModal("#modal-send-request-host");
                window.initSendRequestModal();
                BX.closeWait(self.parentNode, wait); // прячем прелоадер
            }
        });
    });
});