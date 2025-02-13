document.addEventListener('DOMContentLoaded', function(){
    const form = document.getElementsByClassName("intro__quiz-form")[0];

    form.addEventListener("submit", function(e) {
        e.preventDefault();

        const wait = BX.showWait(form);

        BX.ajax.runComponentAction('tattelecom:quiz.form', 'start', {
            mode: 'class',
            data: {
                email: form.querySelector('input[name=email]').value,
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
});