document.addEventListener("DOMContentLoaded", (event) => {
    const js_form = document.querySelectorAll('form.js-form111');

    js_form.forEach((form) => {
        if (form) {
            form.addEventListener('submit', function(event) {
                event.preventDefault();
                let wait = BX.showWait(form);

                if (
                    $(form)
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

                                alert('Сообщение отправлено!');
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