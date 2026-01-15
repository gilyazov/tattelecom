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


    const items = document.querySelectorAll('.tariffs__slider-card');

    items.forEach(item => {
        const switcher = item.querySelector('.switcher');
        const checkbox = switcher.querySelector('input');
        const tariffSum = item.querySelector('.tariffs__slider-card-link').dataset.price;
        let total = item.querySelector('.tariffs__slider-card-price');
        const link = item.querySelector('.tariffs__slider-card-link');

        let basePrice = total.textContent;
        basePrice = parseInt(basePrice.replace(/\D/g, ''), 10);

        checkbox.addEventListener('input', () => {
            if (checkbox.checked) {
                total.innerHTML = parseInt(basePrice) + 150 + ' <span>₽/мес</span>';
                link.setAttribute('data-price', parseInt(basePrice) + 150);
            } else {
                link.setAttribute('data-price', parseInt(tariffSum));
                total.innerHTML = parseInt(tariffSum) + ' <span>₽/мес</span>';
            }
        });
    });
});