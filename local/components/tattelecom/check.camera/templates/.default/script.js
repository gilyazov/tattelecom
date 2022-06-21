window.Parsley.addValidator('house', {
    validateString: function (value) {
        let house;
        house = $('[name = uuid]').data('house');

        return !!house;
    },
    messages: {
        en: 'Need a house',
        ru: "Необходимо выбрать дом"
    }
});


document.addEventListener('DOMContentLoaded', () => {
    $("#address").suggestions({
        token: "a289c2b7ddef08f438c0c3d326f474d32a3e4a7c",
        type: "ADDRESS",
        onSelect: function (suggestion) {
            $('[name = uuid]')
                .attr('data-house', suggestion.data.house)
                .val(suggestion.data.fias_id);
        }
    });

    const connectForm = document.querySelector('.js-internet-connect-form');
    if (connectForm) {
        connectForm.addEventListener('submit', function (event) {
            event.preventDefault();
            if (
                $(connectForm)
                    .parsley()
                    .isValid()
            ) {
                const wait = BX.showWait(connectForm);

                BX.ajax.runComponentAction('tattelecom:check.camera',
                    'checkingAddress', {
                        mode: 'class',
                        data: {post: BX.ajax.prepareForm(connectForm).data}, // ключи объекта data соответствуют параметрам метода
                    })
                    .then(function (response) {
                        if (response.status === 'success') {
                            let modalComponent;

                            if (response.data.error) {
                                modalComponent = new window.classModal(document.querySelector('#modal-check-camera-no'));
                                modalComponent.onOpenModal();
                            } else {
                                const modalCount = document.querySelector('.js-camera-count');
                                modalCount.textContent = response.data.count;

                                modalComponent = new window.classModal(document.querySelector('#modal-check-camera-ok'));
                                modalComponent.onOpenModal();
                            }

                            BX.closeWait(connectForm, wait);
                        }
                    });
            }
        });
    }

});
