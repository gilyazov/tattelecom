document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementsByClassName("generation__form")[0];

    let yaID;
    ym(48331871, 'getClientID', function(clientID) {
        document.querySelector('input[name="clientID"]').value = clientID;
    });

    form.addEventListener("submit", function(e) {
        e.preventDefault();

        const email = form.querySelector('input[name=email]').value;
        let request_id = 0;
        let bitrix_id = 0;

        if (!checkEmailDomain(email, ['tattelecom.ru', 'tattelecom.digital', 'cell.tattelecom.ru'])) {
            alert('Данная почта не может участвовать, введите email tattelecom.*.')
            return false;
        }

        const wait = BX.showWait(form);

        BX.ajax.runComponentAction('tattelecom:generation.form', 'generate', {
            mode: 'class',
            data: new FormData(form),
        }).then(function (response) {
            const modal = document.getElementById('generation-modal-in-progress');
            document.body.classList.add("modal-open");
            modal.classList.add("active");

            request_id = response.data.request_id;
            bitrix_id = response.data.bitrix_id;
            // делаем check запрос с taskId каждую секунду
            async function checkStatus() {
                try {
                    BX.ajax.runComponentAction('tattelecom:generation.form', 'checkResult', {
                        mode: 'class',
                        data: {
                            requestId: request_id,
                            bitrix_id: bitrix_id,
                        }
                    }).then(function (response) {
                        // Проверяем, пришел ли статус "done"
                        if (response.data.status === 'success') {
							const image = document.querySelector('.generation__modal-bg');
							if (image) {
								image.src = response.data.path;
							}

                            clearInterval(rotateIntervalId);
							const phraseElements = document.querySelectorAll('.generation__modal-phrases-text');
							phraseElements.forEach(function(element) {
								element.classList.remove('active');
							});

							const downloadLink = document.querySelector('.generation__modal-download-btn');
							if (downloadLink) {
								downloadLink.href = response.data.path;
								downloadLink.style.display = 'flex';
							}

                            clearInterval(intervalId); // Останавливаем интервал
                            return true;
                        }
                    });

                    return false;
                } catch (error) {
                    console.error('Ошибка при запросе:', error);
                    return false;
                }
            }
            const intervalId = setInterval(checkStatus, 1000);

            BX.closeWait(form, wait);
        }, function (response) {
            BX.closeWait(form, wait);
            alert(response.errors[0].message)
        })
    });

    function checkEmailDomain(email, domain) {
        const domains = Array.isArray(domain) ? domain : [domain];
        if (domains.length === 0) {
            return false;
        }
        const domainPattern = domains.map(d => escapeRegExp(d)).join('|');
        const regex = new RegExp(`@(${domainPattern})$`, 'i');

        return regex.test(email);
    }
    function escapeRegExp(string) {
        return string.replace(/[.*+?^${}()|[\]\\]/g, '\\$&');
    }

    function rotateActiveClass() {
        const phrases = document.querySelectorAll('.generation__modal-phrases-text');
        const activeIndex = Array.from(phrases).findIndex(phrase =>
            phrase.classList.contains('active')
        );

        // Убираем active со всех элементов
        phrases.forEach(phrase => phrase.classList.remove('active'));

        // Определяем следующий индекс
        const nextIndex = (activeIndex + 1) % phrases.length;

        // Добавляем active к следующему элементу
        phrases[nextIndex].classList.add('active');
    }

    // Запускаем функцию каждые 2 секунды смену слоганов в попапе
    const rotateIntervalId = setInterval(rotateActiveClass, 2000);
});