document.addEventListener('DOMContentLoaded', () => {
    const mobileForm = document.querySelectorAll('.js-payment-form');

    mobileForm.forEach(function (form){
        if (form) {
            form.addEventListener('submit', function(event) {
                event.preventDefault();
                if (
                    $(form)
                        .parsley()
                        .isValid()
                ) {
                    const wait = BX.showWait(form);

                    // BX.ajax.prepareForm(mobileForm).data не работает ;(
                    const formdata = $(form).serializeArray();
                    let data = {};
                    $(formdata ).each(function(index, obj){
                        data[obj.name] = obj.value;
                    });

                    BX.ajax.runComponentAction('tattelecom:pay',
                        'payUrl', {
                            mode: 'class',
                            data: {post: data}, // ключи объекта data соответствуют параметрам метода
                        })
                        .then(function(response) {
                            if (response.status === 'success') {
                                let responseData = response.data;
                                if (responseData.errorMessage){
                                    let button = form.querySelector('button');
                                    BX.insertAfter(BX.create('div', {
                                        attrs: {
                                            className: '_warnming'
                                        },
                                        text: responseData.errorMessage
                                    }), button);
                                }

                                if (responseData.url){
                                    window.open(responseData.url, '_blank');
                                }

                                BX.closeWait(form, wait);
                            }
                        });
                }
            });
        }
    });


});
