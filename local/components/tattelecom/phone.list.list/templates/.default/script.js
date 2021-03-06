document.addEventListener('DOMContentLoaded', () => {
    const showMore = document.querySelector('.phone-list__upload-btn');

    if (showMore) {
        $('#phone-list__container').on('click', '.phone-list__upload-btn', function(event) {
            event.preventDefault();
            const self = this;
            let page = parseInt($(this).data('page'));
            let wait = BX.showWait(showMore.parentNode);
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
                    BX.closeWait(showMore.parentNode, wait); // прячем прелоадер
                }
            });
        });
    }
});
