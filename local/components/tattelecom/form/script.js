document.addEventListener('DOMContentLoaded', () => {
    const potokForm = document.querySelectorAll('.js-potok-form');

    potokForm.forEach(function (form){
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
                    $(formdata).each(function(index, obj){
                        data[obj.name] = obj.value;
                    });

                    // clientId
                    let yaID;
                    ym(48331871, 'getClientID', function(clientID) {
                        yaID = clientID
                    });
                    data['clientId'] = yaID;

                    BX.ajax.runComponentAction('tattelecom:form',
                        'sendLead', {
                            mode: 'class',
                            data: {post: data}, // ключи объекта data соответствуют параметрам метода
                        })
                        .then(function(response) {
                            if (response.status === 'success') {

                                if (response.data.status === false){
                                    alert(response.data.error_text);
                                }
                                else{
                                    form.reset();
                                    
                                    let modalComponent;
                                    let idModal = $(form).closest('.mod-show').attr('id');
                                    if (idModal){
                                        modalComponent = new window.classModal(document.querySelector('#' + idModal));
                                        modalComponent.onCloseModal();
                                    }

                                    window.openThanksModal('#modal-thanks');
                                    ym(48331871,'reachGoal','5555560');
                                }
                            }
                        }, function (response){
                            alert(response.errors[0].message);
                            console.log(response);
                        });

                    BX.closeWait(form, wait);
                }
            });
        }
    });


});
