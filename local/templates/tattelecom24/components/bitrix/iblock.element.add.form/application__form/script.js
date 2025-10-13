document.addEventListener('DOMContentLoaded', function() {
    const js_form = document.querySelectorAll('.js-iblock-form');

    js_form.forEach((form) => {
        if (form) {
            form.addEventListener('submit', function(event) {
                event.preventDefault();
                //let wait = BX.showWait(form);

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

                                modalComponent = new window.classModal(document.querySelector('#modal-thanks'));
                                modalComponent.onOpenModal();

                                modalComponentForm = new window.classModal(form.closest('.modal'));
                                modalComponentForm.onCloseModal();

                                window.open('/upload/medialibrary/163/i63je93rcrj1fsq0y273h6rwupdxgwin/Oblachnaya-ATS-ot-Letay-Biznes.pdf');
                            } else {
                                data.errors.forEach((error) => {
                                    alert(error);
                                });
                            }

                            //BX.closeWait(form, wait); // прячем прелоадер
                        },
                        error: function (request, status, error) {
                            console.log(request, status, error);
                            alert('Fail');
                        },
                        dataType:  'json',
                    };

                    $(form).ajaxSubmit(options);
                }
            });
        }
    })
});

