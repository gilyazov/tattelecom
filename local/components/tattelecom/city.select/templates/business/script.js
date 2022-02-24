document.addEventListener('DOMContentLoaded', () => {
    $('[name = region]').change(function(){
        let region = $(this).val();
        const form = document.querySelectorAll('.location-popup-content__form');
        const wait = BX.showWait(form);

        BX.ajax.runComponentAction('tattelecom:city.select',
            'getCity', {
                mode: 'class',
                data: {post: {region: region}},
            })
            .then(function(response) {
                if (response.status === 'success') {
                    $('.js-city-select__wrapper')
                        .html('')
                        .append('<select id="js-city"></select>');
                    const select = document.getElementById("js-city");
                    select.setAttribute("name", "city");
                    select.setAttribute("required", "required");
                    select.setAttribute("data-parsley-class-handler", "#city");
                    select.setAttribute("data-parsley-required", "");
                    select.setAttribute("data-parsley-trigger", "change");

                    for(let i = 0; i < response.data.length; i++) {
                        let opt = response.data[i];
                        let el = document.createElement("option");
                        el.textContent = opt.NAME;
                        el.value = opt.ID;

                        select.appendChild(el);
                    }

                    window.initSelect(select);
                    BX.closeWait(form, wait);
                }
            });

    });
});
