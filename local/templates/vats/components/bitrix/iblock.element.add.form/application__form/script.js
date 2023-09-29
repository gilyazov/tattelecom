document.addEventListener("DOMContentLoaded", (event) => {
    const js_form = document.querySelectorAll('form.form');

    js_form.forEach((form) => {
        if (form) {
            form.addEventListener('submit', function(event) {
                event.preventDefault();
                let wait = BX.showWait(form);

                if (
                    window.batc_API.validation
                ) {

                    let options = {
                        success: function(data){
                            if (data.ID > 0) {
                                form.reset();
                                /*$(form)
                                    .parsley()
                                    .reset();*/

                                window.batc_API.modal.onOpen("modal-success");
                            } else {
                                data.errors.forEach((error) => {
                                    alert(error);
                                });
                            }

                            BX.closeWait(form, wait); // прячем прелоадер
                        },
                        error: function (request, status, error) {
                            alert(error);
                        },
                        dataType:  'json',
                    };

                    $(form).ajaxSubmit(options);
                }
            });
        }
    })
});