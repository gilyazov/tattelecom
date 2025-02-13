document.addEventListener('DOMContentLoaded', function(){

    const questionForm = Array.from(
        document.querySelectorAll(".quiz-modal__form")
    );

    questionForm.forEach((form) => {
        form.addEventListener("submit", function(e) {
            e.preventDefault();
            const wait = BX.showWait(form);

            const participant = document.getElementById('quiz-modal').dataset.participant;
            const question = form.querySelector('input[name=question]').value;
            const answer = form.querySelector('input[name=question-'+question+']').value;

            BX.ajax.runComponentAction('tattelecom:quiz.modal', 'answer', {
                mode: 'class',
                data: {
                    participant: participant,
                    question: question,
                    answer: answer
                },
            }).then(function (response) {
                const index = form.querySelector('input[name=index]').value;
                const container = document.querySelectorAll('.quiz-modal__question');
                if (index >= 0 && index < container.length) {
                    container.forEach(question => question.classList.add('hidden'));

                    container[index].classList.remove('hidden');
                } else {
                    const modal = document.getElementById('quiz-success');
                    document.body.classList.add("modal-open");
                    modal.classList.add("active");
                }

                BX.closeWait(form, wait);
            }, function (response) {
                BX.closeWait(form, wait);
                alert(response.errors[0].message)
            })
        });
    });
});