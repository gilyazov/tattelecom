document.addEventListener('DOMContentLoaded', function() {
    const business_form = document.querySelectorAll('.js-business-form');

    business_form.forEach((form) => {
        if (form) {
            form.addEventListener('submit', function(event) {
                event.preventDefault();
                let wait = BX.showWait(form);

                if (
                    $(form)
                        .parsley()
                        .isValid()
                ) {

                    // clientId
                    let yaID;
                    ym(93374862, 'getClientID', function(clientID) {
                        yaID = clientID
                    });
                    form.querySelector('input[name="PROPERTY[338][0]"]').value = yaID;

                    /*if (!$(form).find("input[name='recaptcha_response']").length){
                        let captchaInput = document.createElement("input");
                        captchaInput.setAttribute("type", "hidden");
                        captchaInput.setAttribute("name", "recaptcha_response");
                        captchaInput.value = document.getElementById('recaptchaResponse').dataset.value;
                        form.appendChild(captchaInput);
                    }*/

                    let options = {
                        success: function(data){
                            if (data.ID > 0) {
                                form.reset();
                                $(form)
                                    .parsley()
                                    .reset();

                                ym(93374862,'reachGoal','zv_b2b');
                                console.log("zv_b2b");

                                let modalComponent;
                                let idModal = $(form).closest('.mod-show').attr('id');
                                if (idModal){
                                    modalComponent = new window.classModal(document.querySelector('#' + idModal));
                                    modalComponent.onCloseModal();
                                }

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

