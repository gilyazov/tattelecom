<section class="generation">
    <div class="generation__content">
        <div class="generation__card">
            <div class="generation__card-wrapper nebo nebo--tl">
                <picture>
                    <source media="(max-width: 640px)" srcset="/local/js/new-letai/dist/images/generation-mobile.webp" type="image/webp">
                    <img alt="" class="generation__card-bg-image" src="/local/js/new-letai/dist/images/generation.webp">
                </picture>
                <div class="generation__card-text">
                    Посмотрите, как бы вы выглядели в двух совершенно разных мирах: в <b>ностальгическом ретро стиле
                        90-х или в футуристическом кибергороде будущего.</b>
                </div>
            </div>
            <div class="generation__card-years">
                137 лет на связи
            </div>
        </div>
        <div class="generation__text">
            <p>
                Как принять участие:
            </p>
            <ol>
                <li>
                    Загрузите фотографию, где хорошо видно ваше лицо.
                </li>
                <li>
                    Выберите стиль обработки: ретро-телеком 90-х или 5G кибербудущее.
                </li>
                <li>
                    Подождите, пока нейросеть преобразит фото.
                </li>
                <li>
                    Получите готовое изображение!
                </li>
            </ol>
            <p>
                Важно: каждому сотруднику доступна только две обработки.
            </p>
        </div>
        <?$APPLICATION->IncludeComponent(
            "tattelecom:generation.form",
            "",
            [],
            false
        );?>
    </div>

</section>