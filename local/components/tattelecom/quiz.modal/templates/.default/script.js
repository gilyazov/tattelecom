document.addEventListener('DOMContentLoaded', function(){
    const container = document.querySelectorAll('.quiz-modal__question');
    const startBtn = document.getElementsByClassName('quiz-modal__greeting-start')[0];
    startBtn.addEventListener('click', function (){
        startTimer(container[0]);
    })


    const questionForm = Array.from(
        document.querySelectorAll(".quiz-modal__form")
    );
    questionForm.forEach((form) => {
        form.addEventListener("submit", function(e) {
            e.preventDefault();
            const wait = BX.showWait(form);

            const participant = document.getElementById('quiz-modal').dataset.participant;
            const question = form.querySelector('input[name=question]').value;
            const answer = form.querySelector('input[name=question-'+question+']:checked').value;

            BX.ajax.runComponentAction('tattelecom:quiz.modal', 'answer', {
                mode: 'class',
                data: {
                    participant: participant,
                    question: question,
                    answer: answer
                },
            }).then(function (response) {
                const index = form.querySelector('input[name=index]').value;
                if (index >= 0 && index < container.length) {
                    container.forEach(question => question.classList.add('hidden'));

                    container[index].classList.remove('hidden');

                    const intervalId = container[index-1].dataset.countdown;
                    clearInterval(intervalId);
                    startTimer(container[index]);
                } else {
                    const modal = document.getElementById('quiz-success');
                    document.body.classList.add("modal-open");
                    modal.classList.add("active");

                    const intervalId = container[container.length-1].dataset.countdown;
                    clearInterval(intervalId);
                }

                BX.closeWait(form, wait);
            }, function (response) {
                BX.closeWait(form, wait);
                alert(response.errors[0].message)
            })
        });
    });

    // Функция для запуска таймера
    const formatTime = (seconds) => {
        const minutes = Math.floor(seconds / 60); // Получаем минуты
        const remainingSeconds = seconds % 60; // Получаем оставшиеся секунды
        return `${String(minutes).padStart(2, '0')}:${String(remainingSeconds).padStart(2, '0')}`;
    };
    const startTimer = (container) => {
        const timerElement = container.getElementsByClassName('quiz-modal__time')[0];
        let timeLeft = 10;

        const countdown = setInterval(() => {
            container.dataset.countdown = countdown;
            timerElement.textContent = formatTime(timeLeft);
            timeLeft--;

            if (timeLeft < 0) {
                clearInterval(countdown);
                timerElement.textContent = "Время вышло!";
                // Сбрасываем время
                timeLeft = 10;

                const modal = document.getElementById('quiz-timeout');
                document.body.classList.add("modal-open");
                modal.classList.add("active");
            }
        }, 1000); // Интервал в 1000 мс (1 секунда)
    };
});