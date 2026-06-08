document.addEventListener('DOMContentLoaded', () => {
    const potokForm = document.querySelectorAll('.js-potok-form');

    potokForm.forEach(function (form){
        if (form) {
            form.addEventListener('submit', function(event) {
                event.preventDefault();

                const submitButton = form.querySelector('button[type="submit"]');
                if (submitButton.disabled) return;

                if (
                    $(form)
                        .parsley()
                        .isValid()
                ) {
                    submitButton.disabled = true;
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

                    // текущий урл пользователя
                    data['currentUrl'] = window.location.href;

                    BX.ajax.runComponentAction('tattelecom:form',
                        'sendLead', {
                            mode: 'class',
                            data: {post: data}, // ключи объекта data соответствуют параметрам метода
                        })
                        .then(function(response) {
                            if ('errorCode' in response.data){
                                alert("ошибка " + response.data.errorCode);
                                console.log(response.data.details);
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
                                _tmr.push({ type: 'reachGoal', id: 3310517, goal: 'Lidvk'});
                                submitButton.disabled = false;
                            }
                        }, function (response){
                            alert(response.errors[0].message);
                            submitButton.disabled = false;
                            console.log(response);
                        });

                    BX.closeWait(form, wait);
                }
            });
        }
    });


});
