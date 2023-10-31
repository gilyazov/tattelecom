document.addEventListener('DOMContentLoaded', function () {
    modalLetaiCards();
})


function modalLetaiCards() {
    const modal = document.querySelector('.modal-letai-cards')
    const showModalBtn = document.querySelectorAll('.letai-cards__item-btn')
    if (!modal && showModalBtn.length == 0) return

    const modalBox = document.querySelector('.modal-letai-cards__box')
    const closeModalBtn = document.querySelector('.modal-letai-cards__close-btn')


    document.addEventListener('click', (e) => {
        const target = e.target;

        openCardModal(target);
    })

    closeModalBtn.addEventListener('click', () => {
        modal.classList.remove('is-open');
        modalBox.classList.remove('modal-open');

        const modalBoxContent = document.querySelector('.modal-letai-cards__box-content');
        modalBoxContent.innerHTML = "";
    })

    document.addEventListener('click', (e) => {
        if (e.target === modal) {
            modal.classList.remove('is-open');
            modalBox.classList.remove('modal-open');

            const modalBoxContent = document.querySelector('.modal-letai-cards__box-content');
            modalBoxContent.innerHTML = "";
        }
    })
}

function openCardModal(target)
{
    const modalBox = document.querySelector('.modal-letai-cards__box')

    if (target.closest(".letai-cards__item")) {
        const modalBoxContent = document.querySelector('.modal-letai-cards__box-content');
        modalBoxContent.innerHTML = target.closest('.letai-cards__item').innerHTML;
        const modal = document.querySelector('.modal-letai-cards')
        modal.querySelector('.letai-cards__item-btn').style.display = "none";

        modal.classList.add('is-open');
        modalBox.classList.add('modal-open');
    }
}