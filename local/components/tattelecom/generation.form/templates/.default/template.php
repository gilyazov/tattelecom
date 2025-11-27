<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
/** @var string $componentPath */
/** @var array $arResult */
//\Bitrix\Main\UI\Extension::load("ui.inputmask");
/*if (!$USER->IsAdmin()){
    return false;
}*/
?>

<form action="/" class="generation__form" method="POST">
    <input type="hidden" name="clientID">
    <div class="generation__form-col">
        <div class="generation__form-step">
            <div class="generation__form-step-name">
                Шаг 1
            </div>
            <div class="generation__form-input-wrapper">
                <input class="generation__form-input" name="email" placeholder="Введите Ваш Email" required
                       type="email">
            </div>
        </div>
        <div class="generation__form-step">
            <div class="generation__form-step-name">
                Шаг 2
            </div>
            <div class="generation__form-input-wrapper">
                <label class="generation__form-file-loader js-file-upload">
                    <input accept=".png, .jpg, .jpeg" class="generation__form-file-input" name="file" required
                           type="file">
                    <span class="generation__form-file-loader-content">
                        <span class="generation__form-file-loader-text js-file-upload-text">
                             Загрузить изображение
                        </span>
                    </span>
                </label>
            </div>
        </div>
        <div class="generation__form-step">
            <div class="generation__form-step-name">
                Шаг 4
            </div>
            <button class="generation__form-submit" type="submit">
                Выполнить обработку
            </button>
        </div>
    </div>
    <div class="generation__form-col">
        <div class="generation__form-step">
            <div class="generation__form-step-name">
                Шаг 3
            </div>
            <div class="generation__form-radios">
                <label class="generation__form-radio">
                    <input checked="" class="generation__form-radio-input" name="style" type="radio"
                           value="retro">
                    <span class="generation__form-radio-mark">

                                </span>
                    <span class="generation__form-radio-text">
                                    Ретро-телеком
                                </span>
                </label>
                <label class="generation__form-radio">
                    <input class="generation__form-radio-input" name="style" type="radio" value="5g">
                    <span class="generation__form-radio-mark">

                                </span>
                    <span class="generation__form-radio-text">
                                   5G кибербудущее
                                </span>
                </label>
            </div>
        </div>
    </div>
</form>

<div class="generation__modal js-modal" id="generation-modal-in-progress">
    <div class="generation__modal-inner">
        <button class="generation__modal-close" type="button">
            <svg height="14" width="14">
                <use xlink:href="#close"></use>
            </svg>
        </button>
        <div class="generation__modal-phrases">
            <img alt="" class="generation__modal-bg" src="/local/js/new-letai/dist/images/generation/bg.webp">
            <div class="generation__modal-phrases-text active">
                Фиксируем изображение в растворе…
            </div>
            <div class="generation__modal-phrases-text">
                Проявляем свежий негатив…
            </div>
            <div class="generation__modal-phrases-text">
                Смываем химикаты — кадр оживает…
            </div>
            <div class="generation__modal-phrases-text">
                Сушим плёнку под красным светом…
            </div>
            <div class="generation__modal-phrases-text">
                Сканируем негатив в цифровой формат…
            </div>
        </div>
        <a class="generation__modal-download-btn" href="#" style="display: none">
            <svg height="14" width="14">
                <use xlink:href="#download"></use>
            </svg>
            Скачать изображение
        </a>
    </div>
</div>

<div class="generation__modal js-modal" id="generation-modal-failed">
    <div class="generation__modal-inner">
        <button class="generation__modal-close js-modal-close" type="button">
            <svg height="14" width="14">
                <use xlink:href="#close"></use>
            </svg>
        </button>
        <div class="generation__modal-text">
            Похоже пленка засветилась, попробуйте заново
        </div>
        <a class="generation__modal-link js-modal-close" href="#">
            Закрыть это окно
        </a>
    </div>
</div>