document.addEventListener('DOMContentLoaded', () => {
    const mobileForm = document.querySelector('.js-payment-form');

    if (mobileForm) {
        mobileForm.addEventListener('submit', function(event) {
            event.preventDefault();
            if (
                $(mobileForm)
                    .parsley()
                    .isValid()
            ) {
                const wait = BX.showWait(mobileForm);

                // BX.ajax.prepareForm(mobileForm).data не работает ;(
                const formdata = $(mobileForm).serializeArray();
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
                                alert(responseData.errorMessage);
                            }

                            if (responseData.url){
                                window.open(responseData.url, '_blank');
                            }

                            BX.closeWait(mobileForm, wait);
                        }
                    });
            }
        });
    }
});
