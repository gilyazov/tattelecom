document.addEventListener('DOMContentLoaded', function() {
    const business_form = document.querySelectorAll('.js-business-form');

    business_form.forEach((form) => {
        if (form) {
            form.addEventListener('submit', function(event) {
                event.preventDefault();
                let wait = BX.showWait(form);

                if (
                    form
                        .parsley()
                        .isValid()
                ) {

                    let options = {
                        success: function(data){
                            if (data.ID > 0) {
                                form.reset();
                                $(form)
                                    .parsley()
                                    .reset();

                                modalComponent = new window.classModal(document.querySelector('#b-modal-thanks'));
                                modalComponent.onOpenModal();
                            } else {
                                alert('Fail');
                            }

                            BX.closeWait(form, wait); // прячем прелоадер
                        },
                        dataType:  'json',
                    };

                    $(form).ajaxSubmit(options);
                }
            });
        }
    })
});

