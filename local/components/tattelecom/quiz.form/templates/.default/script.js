document.addEventListener('DOMContentLoaded', function(){
    const form = document.getElementsByClassName("intro__quiz-form")[0];
    const domain = "tattelecom.ru";

    form.addEventListener("submit", function(e) {
        e.preventDefault();

        const email = form.querySelector('input[name=email]').value;
        if (!checkEmailDomain(email, domain)) {
            alert('Данная почта не может участвовать в розыгрыше, введите email tattelecom.ru.')
            return false;
        }

        const wait = BX.showWait(form);

        BX.ajax.runComponentAction('tattelecom:quiz.form', 'start', {
            mode: 'class',
            data: {
                email: email,
                unit: form.querySelector('select[name=unit]').value,
            },
        }).then(function (response) {
            const modal = document.getElementById('greetings-modal');
            document.body.classList.add("modal-open");
            modal.classList.add("active");

            document.getElementById('quiz-modal').dataset.participant = response.data;

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
});