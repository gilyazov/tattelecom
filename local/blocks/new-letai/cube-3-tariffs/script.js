document.addEventListener("DOMContentLoaded", () => {
    const items = document.querySelectorAll('.cube-tariffs__slider-card');

    items.forEach(item => {
        const switcher = item.querySelector('.switcher');
        const checkbox = switcher.querySelector('input');

        const priceEl = item.querySelector('.cube-tariffs__slider-card-price');
        const tariffSum = priceEl.dataset.price;

        checkbox.addEventListener('input', () => {
            if (checkbox.checked) {
                priceEl.innerHTML = parseInt(tariffSum) + 150 + ' <span>₽/мес</span>';
            } else {
                priceEl.innerHTML = parseInt(tariffSum) + ' <span>₽/мес</span>';
            }
        });
    })
});