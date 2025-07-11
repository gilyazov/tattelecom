document.addEventListener('DOMContentLoaded', function(){
    const btnsOpen = document.querySelectorAll('.tariffs__slider-card-link');

    const modalElem = document.querySelector('#tariff-modal');
    const dataTitleElem = modalElem.querySelector('.modal__heading');
    const modalPriceElem = modalElem.querySelector('.modal__price');

    btnsOpen.forEach(btn => {
        btn.addEventListener('click', event => {
            const dataTitle = btn.getAttribute('data-tariff-name');
            const dataPrice = btn.getAttribute('data-price');

            dataTitleElem.innerText = dataTitle;
            modalPriceElem.innerText = dataPrice + ' ₽/мес';
        });
    });
});