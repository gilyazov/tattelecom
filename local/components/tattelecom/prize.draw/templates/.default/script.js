document.addEventListener('DOMContentLoaded', function(){
    const domain = "tattelecom.ru";
    const form = document.getElementsByClassName("intro__form")[0];
    const input = document.getElementsByClassName("intro__form-input")[0];
    const numpad = document.getElementsByClassName("intro__numpad-grayscale")[0];
    /*input.addEventListener("input", function() {
        if (checkEmailDomain(this.value, domain)) {
            numpad.classList.remove("intro__numpad-grayscale");
        } else {
            numpad.classList.add("intro__numpad-grayscale");
        }
    });*/
    form.addEventListener("submit", function(e) {
        e.preventDefault();

        if (checkEmailDomain(input.value, domain)) {
            document.getElementsByClassName('js-attempt-container')[0].style.display = 'flex';
            numpad.classList.remove("intro__numpad-grayscale");
        } else {
            alert('Данная почта не может участвовать в розыгрыше, введите email tattelecom.ru.')
            numpad.classList.add("intro__numpad-grayscale");
        }
    });

    const buttons = Array.from(
        document.querySelectorAll(".intro__numpad-card")
    );
    buttons.forEach((button) => {
        button.addEventListener("click", (e) => {
            const container = document.getElementsByClassName('intro__numpad')[0];
            if (container.classList.contains('intro__numpad-grayscale')) {
                return;
            }
            const wait = BX.showWait(button);

            const attempt = document.getElementsByClassName('attempt-rate')[0];
            BX.ajax.runComponentAction('tattelecom:prize.draw', 'raffle', {
                mode: 'class',
                data: {
                    attempt: attempt.textContent,
                    email: input.value
                },
            }).then(function (response) {
                attempt.textContent = attempt.textContent-1;
                let title = "";
                let ico = "";

                if (response.data.id){
                    title = response.data.name;
                    ico = '#' + response.data.ico;
                }
                else{
                    title = response.data;
                    ico = "#nowin";
                }

                button.querySelector('svg use').setAttribute('xlink:href', ico);
                button.getElementsByClassName('intro__numpad-card-back-text')[0].textContent = title;

                // покажем в окошке приз
                button.classList.add("active");
                BX.closeWait(button, wait);
                if (response.data.id){
                    const modal = document.getElementById('win-modal');
                    document.body.classList.add("modal-open");
                    modal.querySelector('.win-modal__prize-icon svg use').setAttribute('xlink:href', ico);
                    modal.getElementsByClassName('win-modal__prize-name')[0].textContent = title;
                    modal.classList.add("active");

                    document.getElementsByClassName('js-attempt-container')[0].style.display = 'none';
                }
            }, function (response) {
                BX.closeWait(button, wait);
                alert(response.errors[0].message)
            });
        });
    });

    function checkEmailDomain(email, domain) {
        // Регулярное выражение для проверки домена
        const regex = new RegExp(`@${domain}$`);

        return regex.test(email);
    }
});