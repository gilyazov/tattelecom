document.addEventListener('DOMContentLoaded', function(){ // Аналог $(document).ready(function(){
                                                          // Если должен быть найден один элемент
    const block = document.querySelector('.cube-tariff__items');

    if (!block) return;

    const listItems = block.querySelectorAll('.cube-tariff__item--colm-2');

    listItems.forEach(item => {
        const title = item.querySelector('.cube-tariff__item-price-discount');
        const tooltip = item.querySelector('.services-box__item-tooltip');
        const tooltipButtonClose = tooltip.querySelector('.services-box__item-tooltip-close-btn');

        title.addEventListener('click', function () {
            listItems.forEach(elem => {
                elem.querySelector('.services-box__item-tooltip').classList.remove('active');
            });

            tooltip.classList.add('active');
        })

        tooltipButtonClose.addEventListener('click', function () {
            tooltip.classList.remove("active");
        })
    });

    // кнопки подключить
    const buttons = document.querySelectorAll('.cube-tariff__item-button');
    const form = document.querySelector('.application__form');

    buttons.forEach(button => {
        button.addEventListener('click', function () {
            const tariffItem = button.closest('.cube-tariff__item');
            const tariffName = tariffItem.querySelector('.cube-tariff__item-title').textContent;
            const routerRent = tariffItem.querySelector('[name=swicher]').checked;

            form.querySelector('[name=param_comment]').value = 'Тариф: ' + tariffName + '. Аренда роутера: ' + (routerRent ? 'Да' : 'Нет');
        })
    });
});