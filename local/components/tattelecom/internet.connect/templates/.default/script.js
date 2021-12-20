document.addEventListener('DOMContentLoaded', () => {
    $("#address").suggestions({
        token: "a289c2b7ddef08f438c0c3d326f474d32a3e4a7c",
        type: "ADDRESS",
        onSelect: function(suggestion) {
            //console.log(suggestion);
            $('[name = uuid]').val(suggestion.data.fias_id);
        }
    });

    const connectForm = document.querySelector('.js-internet-connect-form');
    if (connectForm) {
        connectForm.addEventListener('submit', function(event) {
            event.preventDefault();
            if (
                $(connectForm)
                    .parsley()
                    .isValid()
            ) {
                const wait = BX.showWait(connectForm);

                BX.ajax.runComponentAction('tattelecom:internet.connect',
                    'checkingCapability', {
                        mode: 'class',
                        data: {post: BX.ajax.prepareForm(connectForm).data}, // ключи объекта data соответствуют параметрам метода
                    })
                    .then(function(response) {
                        if (response.status === 'success') {
                            console.log(response.data);
                            if (response.data.opportunity == false){
                                window.openModal('#modal-badRequestLetai-host');
                            }
                            else{
                                window.openModal('#modal-requestLetai-host');
                            }

                            BX.closeWait(connectForm, wait);
                        }
                    });
            }
        });
    }

});
