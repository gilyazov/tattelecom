document.addEventListener("DOMContentLoaded", (event) => {
    // clientId
    const form = document.querySelector('form.js-vats');
    let yaID;
    ym(95307715, 'getClientID', function(clientID) {
        yaID = clientID
    });
    form.querySelector('input[name="PROPERTY[340][0]"]').value = yaID;
    /*const js_form = document.querySelectorAll('form.form');

    js_form.forEach((form) => {
        if (form) {
            form.addEventListener('submit', function(event) {
                event.preventDefault();
                let wait = BX.showWait(form);

                if (!$(form).parsley().isValid()){
                    return ;
                }

                let options = {
                    success: function(data){
                        if (data.ID > 0) {
                            form.reset();
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
            });
        }
    })*/
});