document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementsByClassName("intro__goroscope-form")[0];
    const domain = "tattelecom.ru";

    form.addEventListener("submit", function(e) {
        e.preventDefault();

        const email = form.querySelector('input[name=email]').value;
        if (!checkEmailDomain(email, domain)) {
            alert('Данная почта не может участвовать, введите email tattelecom.ru.')
            return false;
        }

        const wait = BX.showWait(form);
        const btn = form.querySelector('.intro__goroscope-roll-btn');
        const zodiac = form.querySelector('select[name=zodiac]').value;

        BX.ajax.runComponentAction('tattelecom:spring.horoscope', 'prediction', {
            mode: 'class',
            data: {
                email: email,
                zodiac: zodiac
            },
        }).then(function (response) {
            const angle = getRandomArbitrary(360, 720)
            btn.parentElement.querySelector('img').style.transform = `rotate(${angle}deg)`

            // задержка 1сек
            setTimeout(function(){
                const modal = document.getElementById('goroscope-modal');
                document.body.classList.add("modal-open");
                modal.classList.add("active");

                modal.getElementsByClassName('win-modal__text')[0].textContent = response.data.horoscope;
                modal.getElementsByClassName('win-modal__date')[0].textContent = response.data.today;
                modal.getElementsByClassName('win-modal__heading')[0].textContent = response.data.zodiac;
                modal.querySelector('.intro__numpad-card-back svg use').setAttribute('xlink:href', response.data.zodiac_code);
            },1000);

            BX.closeWait(form, wait);
        }, function (response) {
            BX.closeWait(form, wait);
            alert(response.errors[0].message)
        })
    });

    function checkEmailDomain(email, domain) {
        // Регулярное выражение для проверки домена
        const regex = new RegExp(`@${domain}$`);

        return regex.test(email);
    }

    function getRandomArbitrary(min, max) {
        return Math.random() * (max - min) + min;
    }
});

/*
const btn = document.querySelector('.intro__goroscope-roll-btn');

function getRandomArbitrary(min, max) {
    return Math.random() * (max - min) + min;
}
btn?.addEventListener('click', event => {
    event.preventDefault();
    const angle = getRandomArbitrary(360, 720)

    console.log('Random angle', angle)
    btn.parentElement.querySelector('img').style.transform = `rotate(${angle}deg)`
})*/
