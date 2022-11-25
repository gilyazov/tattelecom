document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll(".numbered-list__item.numbered-list__container").forEach((li, i) => {
        setTimeout(() => {
            li.classList.add('show');
        }, 100 * i);
    });
});