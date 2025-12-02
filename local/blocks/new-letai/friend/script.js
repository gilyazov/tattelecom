document.addEventListener("DOMContentLoaded", () => {
    const btn = document.getElementsByClassName('friend__link')[0];
    BX.clipboard.bindCopyClick(
        btn,
        {
            text: btn.getAttribute('href')
        }
    );
});