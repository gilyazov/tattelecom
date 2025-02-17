<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use Bitrix\Landing\Assets;
use Bitrix\Main\Loader;
use Bitrix\Main\UI\Extension;

/** @var \CMain $APPLICATION */

if (!Loader::includeModule('landing'))
{
	return;
}

$assets = Assets\Manager::getInstance();
$assets->addAsset('landing_auto_font_scale');

$APPLICATION->ShowProperty('FooterJS');
?>


<div class="win-modal js-modal" id="win-modal">
    <div class="win-modal__inner">
        <button class="win-modal__close js-modal-close">
            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26">
                <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M13.4343 15.9346L23.036 25.5362L25.9711 22.601L16.3695 12.9994L25.8329 3.53599L22.8977 0.600813L13.4343 10.0642L3.83361 0.463507L0.898437 3.39868L10.4992 12.9994L1.03504 22.4635L3.97021 25.3987L13.4343 15.9346Z" />
            </svg>
        </button>
        <h3 class="win-modal__heading">
            Ура! Вы выиграли!
        </h3>
        <div class="win-modal__prize">

            <div class="win-modal__prize-icon">
                <svg width="14" height="14" aria-hidden="true" viewBox="0 0 14 14">
                    <use xlink:href="#cup"></use>
                </svg>
            </div>
            <div class="win-modal__prize-name">
                Кружка!
            </div>
        </div>
        <div class="win-modal__text">
            В ближайшее время с Вами свяжутся по электронной почте.
        </div>

    </div>
</div>

<div class="text-modal js-modal" id="text-modal">
    <div class="text-modal__inner">
        <button class="text-modal__close js-modal-close">
            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26">
                <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M13.4343 15.9346L23.036 25.5362L25.9711 22.601L16.3695 12.9994L25.8329 3.53599L22.8977 0.600813L13.4343 10.0642L3.83361 0.463507L0.898437 3.39868L10.4992 12.9994L1.03504 22.4635L3.97021 25.3987L13.4343 15.9346Z" />
            </svg>
        </button>
        <h3 class="text-modal__heading">
            Корпоративный пульс
        </h3>

        <div class="text-modal__text">
            <p>
                6 декабря деловая газета «Реальное время» объявила обладателей премии «Реальный рейтинг». Лидером в
                номинации «Телекоммуникации и связь» стал «Таттелеком». При расчете победителей экспертный совет Премии
                учитывал величину активов номинантов, объем выручки, чистую прибыль, рентабельность компаний и другие
                показатели. По оценке независимых экспертов, предприятие показало наилучший финансово-производственный
                результат за год в сравнении с другими игроками рынка.
            </p>

            <p>
                «Компания провела этот год продуктивно, об этом говорят финансовые результаты и динамика абонентской
                базы. Таких показателей удалось достичь благодаря эффективным стратегическим решениям и выстроенным
                бизнес-процессам. В этом году мы начали реализовывать важные трансформации: например, переход на новый
                биллинг и замена ядра мобильной связи «Летай» на современное с поддержкой 5G. Эти изменения повысят
                качество услуг и сервисов, а также обеспечат стабильное будущее компании», – прокомментировал
                гендиректор «Таттелекома» Айрат Рафкатович Нурутдинов.
            </p>
            <p>
                IN@Voice признали лучшим кросс-отраслевым решением 2024 года для процесса обслуживания абонентов. Такую
                награду «Таттелекому» и вендору цифровой системы Bercut присудил 6 декабря ComNews Awards. Это ежегодная
                премия в области лучших решений для цифровой экономики.
            </p>
            <p>
                Как подчеркнул на торжественной церемонии награждения в Москве лидер проекта Ильдар Тахиржанович
                Нургалеев – заместитель генерального директора по ИБ и директор департамента ИТ, для оператора связи
                замена биллинговой системы – это все равно что пересадка сердца для бегущего человека. Он также выразил
                благодарность вендору и коллегам за высокий профессионализм и исключительную клиентоориентированность,
                которые так необходимы для развития на телеком-рынке.
            </p>
        </div>

    </div>
</div>
<div class="quiz-modal js-modal" id="greetings-modal">
    <div class="quiz-modal__inner">
        <button class="quiz-modal__close js-modal-close">
            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26">
                <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M13.4343 15.9346L23.036 25.5362L25.9711 22.601L16.3695 12.9994L25.8329 3.53599L22.8977 0.600813L13.4343 10.0642L3.83361 0.463507L0.898437 3.39868L10.4992 12.9994L1.03504 22.4635L3.97021 25.3987L13.4343 15.9346Z" />
            </svg>
        </button>
        <div class="quiz-modal__greeting">
            <h2 class="quiz-modal__greeting-heading">
                Приветствуем!
            </h2>
            <h3 class="quiz-modal__greeting-secondary-heading">
                Правила просты:
            </h3>
            <ol class="quiz-modal__greeting-list">
                <li class="quiz-modal__greeting-list-item">
                    <svg width="60" height="70" viewBox="0 0 60 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g filter="url(#filter0_f_3009_3)" overflow="visible">
                            <path d="M29.468 23.392L22.46 28.144V23.248L29.468 18.4H33.98V52H29.468V23.392Z"
                                  fill="#00865B" />
                        </g>
                        <g filter="url(#filter1_f_3009_3)">
                            <path d="M29.468 23.392L22.46 28.144V23.248L29.468 18.4H33.98V52H29.468V23.392Z"
                                  fill="#00865B" />
                        </g>
                        <path d="M29.468 23.392L22.46 28.144V23.248L29.468 18.4H33.98V52H29.468V23.392Z" fill="white"
                              fill-opacity="0.7" />
                        <mask id="path-4-outside-1_3009_3" maskUnits="userSpaceOnUse" x="20.5" y="17" width="15"
                              height="36" fill="black">
                            <rect fill="white" x="20.5" y="17" width="15" height="36" />
                            <path d="M29.468 23.392L22.46 28.144V23.248L29.468 18.4H33.98V52H29.468V23.392Z" />
                        </mask>
                        <path
                                d="M29.468 23.392H30.468V21.5057L28.9068 22.5643L29.468 23.392ZM22.46 28.144H21.46V30.0303L23.0212 28.9717L22.46 28.144ZM22.46 23.248L21.8911 22.4256L21.46 22.7238V23.248H22.46ZM29.468 18.4V17.4H29.1558L28.8991 17.5776L29.468 18.4ZM33.98 18.4H34.98V17.4H33.98V18.4ZM33.98 52V53H34.98V52H33.98ZM29.468 52H28.468V53H29.468V52ZM28.9068 22.5643L21.8988 27.3163L23.0212 28.9717L30.0292 24.2197L28.9068 22.5643ZM23.46 28.144V23.248H21.46V28.144H23.46ZM23.0289 24.0704L30.0369 19.2224L28.8991 17.5776L21.8911 22.4256L23.0289 24.0704ZM29.468 19.4H33.98V17.4H29.468V19.4ZM32.98 18.4V52H34.98V18.4H32.98ZM33.98 51H29.468V53H33.98V51ZM30.468 52V23.392H28.468V52H30.468Z"
                                fill="white" fill-opacity="0.7" mask="url(#path-4-outside-1_3009_3)" />
                        <defs>
                            <filter id="filter0_f_3009_3" x="4.45996" y="0.400024" width="47.52" height="69.6"
                                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                                <feGaussianBlur stdDeviation="9" result="effect1_foregroundBlur_3009_3" />
                            </filter>
                            <filter id="filter1_f_3009_3" x="14.46" y="10.4" width="27.52" height="49.6"
                                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                                <feGaussianBlur stdDeviation="4" result="effect1_foregroundBlur_3009_3" />
                            </filter>
                        </defs>
                    </svg>

                    <div class="quiz-modal__greeting-list-text">
                        5 интригующих вопросов каждые 3 дня
                    </div>

                </li>
                <li class="quiz-modal__greeting-list-item">
                    <svg width="59" height="70" viewBox="0 0 59 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g filter="url(#filter0_f_966_837)">
                            <path
                                    d="M18.92 47.872L30.392 36.784C32.44 34.768 33.928 33.12 34.856 31.84C35.816 30.528 36.296 29.264 36.296 28.048C36.296 26.352 35.72 24.976 34.568 23.92C33.416 22.864 31.88 22.336 29.96 22.336C28.04 22.336 26.504 22.88 25.352 23.968C24.2 25.024 23.624 26.448 23.624 28.24H18.92C18.92 26.736 19.176 25.36 19.688 24.112C20.232 22.864 20.984 21.792 21.944 20.896C22.904 19.968 24.056 19.264 25.4 18.784C26.776 18.272 28.296 18.016 29.96 18.016C31.624 18.016 33.128 18.272 34.472 18.784C35.848 19.264 37.016 19.952 37.976 20.848C38.936 21.744 39.672 22.816 40.184 24.064C40.728 25.28 41 26.608 41 28.048C41 29.84 40.376 31.648 39.128 33.472C37.88 35.296 36.072 37.312 33.704 39.52L24.872 47.872H41V52H18.92V47.872Z"
                                    fill="#5A04D8" />
                        </g>
                        <g filter="url(#filter1_f_966_837)">
                            <path
                                    d="M18.92 47.872L30.392 36.784C32.44 34.768 33.928 33.12 34.856 31.84C35.816 30.528 36.296 29.264 36.296 28.048C36.296 26.352 35.72 24.976 34.568 23.92C33.416 22.864 31.88 22.336 29.96 22.336C28.04 22.336 26.504 22.88 25.352 23.968C24.2 25.024 23.624 26.448 23.624 28.24H18.92C18.92 26.736 19.176 25.36 19.688 24.112C20.232 22.864 20.984 21.792 21.944 20.896C22.904 19.968 24.056 19.264 25.4 18.784C26.776 18.272 28.296 18.016 29.96 18.016C31.624 18.016 33.128 18.272 34.472 18.784C35.848 19.264 37.016 19.952 37.976 20.848C38.936 21.744 39.672 22.816 40.184 24.064C40.728 25.28 41 26.608 41 28.048C41 29.84 40.376 31.648 39.128 33.472C37.88 35.296 36.072 37.312 33.704 39.52L24.872 47.872H41V52H18.92V47.872Z"
                                    fill="#5A04D8" />
                        </g>
                        <path
                                d="M18.92 47.872L30.392 36.784C32.44 34.768 33.928 33.12 34.856 31.84C35.816 30.528 36.296 29.264 36.296 28.048C36.296 26.352 35.72 24.976 34.568 23.92C33.416 22.864 31.88 22.336 29.96 22.336C28.04 22.336 26.504 22.88 25.352 23.968C24.2 25.024 23.624 26.448 23.624 28.24H18.92C18.92 26.736 19.176 25.36 19.688 24.112C20.232 22.864 20.984 21.792 21.944 20.896C22.904 19.968 24.056 19.264 25.4 18.784C26.776 18.272 28.296 18.016 29.96 18.016C31.624 18.016 33.128 18.272 34.472 18.784C35.848 19.264 37.016 19.952 37.976 20.848C38.936 21.744 39.672 22.816 40.184 24.064C40.728 25.28 41 26.608 41 28.048C41 29.84 40.376 31.648 39.128 33.472C37.88 35.296 36.072 37.312 33.704 39.52L24.872 47.872H41V52H18.92V47.872Z"
                                fill="white" fill-opacity="0.7" />
                        <mask id="path-4-outside-1_966_837" maskUnits="userSpaceOnUse" x="17" y="17" width="25"
                              height="36" fill="black">
                            <rect fill="white" x="17" y="17" width="25" height="36" />
                            <path
                                    d="M18.92 47.872L30.392 36.784C32.44 34.768 33.928 33.12 34.856 31.84C35.816 30.528 36.296 29.264 36.296 28.048C36.296 26.352 35.72 24.976 34.568 23.92C33.416 22.864 31.88 22.336 29.96 22.336C28.04 22.336 26.504 22.88 25.352 23.968C24.2 25.024 23.624 26.448 23.624 28.24H18.92C18.92 26.736 19.176 25.36 19.688 24.112C20.232 22.864 20.984 21.792 21.944 20.896C22.904 19.968 24.056 19.264 25.4 18.784C26.776 18.272 28.296 18.016 29.96 18.016C31.624 18.016 33.128 18.272 34.472 18.784C35.848 19.264 37.016 19.952 37.976 20.848C38.936 21.744 39.672 22.816 40.184 24.064C40.728 25.28 41 26.608 41 28.048C41 29.84 40.376 31.648 39.128 33.472C37.88 35.296 36.072 37.312 33.704 39.52L24.872 47.872H41V52H18.92V47.872Z" />
                        </mask>
                        <path
                                d="M18.92 47.872L18.225 47.153L17.92 47.4478V47.872H18.92ZM30.392 36.784L31.087 37.5031L31.0935 37.4967L30.392 36.784ZM34.856 31.84L34.049 31.2495L34.0464 31.253L34.856 31.84ZM34.568 23.92L35.2437 23.1828H35.2437L34.568 23.92ZM25.352 23.968L26.0277 24.7052L26.0332 24.7001L26.0386 24.695L25.352 23.968ZM23.624 28.24V29.24H24.624V28.24H23.624ZM18.92 28.24H17.92V29.24H18.92V28.24ZM19.688 24.112L18.7713 23.7124L18.767 23.7224L18.7628 23.7324L19.688 24.112ZM21.944 20.896L22.6263 21.6271L22.6327 21.6211L22.639 21.615L21.944 20.896ZM25.4 18.784L25.7364 19.7258L25.7487 19.7212L25.4 18.784ZM34.472 18.784L34.116 19.7185L34.1292 19.7235L34.1426 19.7282L34.472 18.784ZM40.184 24.064L39.2588 24.4436L39.2648 24.4581L39.2712 24.4724L40.184 24.064ZM39.128 33.472L39.9533 34.0367L39.128 33.472ZM33.704 39.52L33.022 38.7886L33.0169 38.7934L33.704 39.52ZM24.872 47.872L24.1849 47.1454L22.3591 48.872H24.872V47.872ZM41 47.872H42V46.872H41V47.872ZM41 52V53H42V52H41ZM18.92 52H17.92V53H18.92V52ZM19.615 48.591L31.087 37.503L29.697 36.065L18.225 47.153L19.615 48.591ZM31.0935 37.4967C33.1546 35.4678 34.6889 33.7741 35.6656 32.427L34.0464 31.253C33.1671 32.4659 31.7254 34.0682 29.6905 36.0713L31.0935 37.4967ZM35.663 32.4305C36.7066 31.0043 37.296 29.5376 37.296 28.048H35.296C35.296 28.9904 34.9254 30.0517 34.049 31.2495L35.663 32.4305ZM37.296 28.048C37.296 26.0984 36.6213 24.4456 35.2437 23.1828L33.8923 24.6572C34.8187 25.5064 35.296 26.6056 35.296 28.048H37.296ZM35.2437 23.1828C33.8674 21.9212 32.0702 21.336 29.96 21.336V23.336C31.6898 23.336 32.9646 23.8068 33.8923 24.6572L35.2437 23.1828ZM29.96 21.336C27.8418 21.336 26.0408 21.942 24.6654 23.241L26.0386 24.695C26.9672 23.818 28.2382 23.336 29.96 23.336V21.336ZM24.6763 23.2308C23.2865 24.5048 22.624 26.213 22.624 28.24H24.624C24.624 26.683 25.1135 25.5432 26.0277 24.7052L24.6763 23.2308ZM23.624 27.24H18.92V29.24H23.624V27.24ZM19.92 28.24C19.92 26.8512 20.156 25.606 20.6132 24.4916L18.7628 23.7324C18.196 25.114 17.92 26.6208 17.92 28.24H19.92ZM20.6047 24.5116C21.0961 23.3842 21.77 22.4263 22.6263 21.6271L21.2617 20.1649C20.198 21.1577 19.3679 22.3438 18.7713 23.7124L20.6047 24.5116ZM22.639 21.615C23.4897 20.7926 24.517 20.1612 25.7363 19.7257L25.0637 17.8423C23.595 18.3668 22.3183 19.1434 21.249 20.177L22.639 21.615ZM25.7487 19.7212C26.9993 19.2559 28.3993 19.016 29.96 19.016V17.016C28.1927 17.016 26.5527 17.2881 25.0513 17.8468L25.7487 19.7212ZM29.96 19.016C31.5212 19.016 32.902 19.256 34.116 19.7185L34.828 17.8495C33.354 17.288 31.7268 17.016 29.96 17.016V19.016ZM34.1426 19.7282C35.4019 20.1675 36.4459 20.7878 37.2937 21.5791L38.6583 20.1169C37.5861 19.1162 36.2941 18.3605 34.8014 17.8398L34.1426 19.7282ZM37.2937 21.5791C38.1454 22.374 38.8 23.3251 39.2588 24.4436L41.1092 23.6844C40.544 22.3069 39.7266 21.114 38.6583 20.1169L37.2937 21.5791ZM39.2712 24.4724C39.7532 25.5498 40 26.7372 40 28.048H42C42 26.4788 41.7028 25.0102 41.0968 23.6556L39.2712 24.4724ZM40 28.048C40 29.5957 39.4637 31.2105 38.3027 32.9073L39.9533 34.0367C41.2883 32.0855 42 30.0843 42 28.048H40ZM38.3027 32.9073C37.1105 34.6497 35.3587 36.6099 33.022 38.7886L34.386 40.2514C36.7853 38.0141 38.6495 35.9423 39.9533 34.0367L38.3027 32.9073ZM33.0169 38.7934L24.1849 47.1454L25.5591 48.5986L34.3911 40.2466L33.0169 38.7934ZM24.872 48.872H41V46.872H24.872V48.872ZM40 47.872V52H42V47.872H40ZM41 51H18.92V53H41V51ZM19.92 52V47.872H17.92V52H19.92Z"
                                fill="white" fill-opacity="0.7" mask="url(#path-4-outside-1_966_837)" />
                        <defs>
                            <filter id="filter0_f_966_837" x="0.920044" y="0.0159912" width="58.08" height="69.984"
                                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                                <feGaussianBlur stdDeviation="9" result="effect1_foregroundBlur_966_837" />
                            </filter>
                            <filter id="filter1_f_966_837" x="10.92" y="10.016" width="38.08" height="49.984"
                                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                                <feGaussianBlur stdDeviation="4" result="effect1_foregroundBlur_966_837" />
                            </filter>
                        </defs>
                    </svg>
                    <div class="quiz-modal__greeting-list-text">
                        Всего 10 секунд на размышление
                    </div>

                </li>
                <li class="quiz-modal__greeting-list-item">
                    <svg width="59" height="71" viewBox="0 0 59 71" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g filter="url(#filter0_f_966_842)" overflow="visible">
                            <path
                                    d="M29.68 52.336C26.288 52.336 23.632 51.392 21.712 49.504C19.824 47.616 18.8 45.008 18.64 41.68H22.096C22.256 44.08 22.976 45.936 24.256 47.248C25.536 48.528 27.344 49.168 29.68 49.168C32.176 49.168 34.064 48.576 35.344 47.392C36.624 46.176 37.264 44.592 37.264 42.64C37.264 40.752 36.64 39.216 35.392 38.032C34.144 36.848 32.384 36.256 30.112 36.256H25.6V33.184H30.112C32.128 33.184 33.696 32.64 34.816 31.552C35.968 30.432 36.544 28.992 36.544 27.232C36.544 25.408 35.952 23.952 34.768 22.864C33.616 21.776 31.92 21.232 29.68 21.232C27.664 21.232 26.064 21.824 24.88 23.008C23.728 24.16 23.04 25.744 22.816 27.76H19.36C19.424 26.288 19.712 24.96 20.224 23.776C20.736 22.592 21.424 21.584 22.288 20.752C23.184 19.888 24.256 19.232 25.504 18.784C26.752 18.304 28.144 18.064 29.68 18.064C31.312 18.064 32.768 18.288 34.048 18.736C35.328 19.184 36.4 19.808 37.264 20.608C38.16 21.408 38.832 22.384 39.28 23.536C39.76 24.656 40 25.888 40 27.232C40 28.864 39.6 30.336 38.8 31.648C38.032 32.928 36.912 33.936 35.44 34.672C37.168 35.408 38.48 36.464 39.376 37.84C40.272 39.216 40.72 40.816 40.72 42.64C40.72 44.08 40.464 45.392 39.952 46.576C39.472 47.76 38.768 48.784 37.84 49.648C36.912 50.48 35.76 51.136 34.384 51.616C33.008 52.096 31.44 52.336 29.68 52.336Z"
                                    fill="#FE5000" />
                        </g>
                        <g filter="url(#filter1_f_966_842)">
                            <path
                                    d="M29.68 52.336C26.288 52.336 23.632 51.392 21.712 49.504C19.824 47.616 18.8 45.008 18.64 41.68H22.096C22.256 44.08 22.976 45.936 24.256 47.248C25.536 48.528 27.344 49.168 29.68 49.168C32.176 49.168 34.064 48.576 35.344 47.392C36.624 46.176 37.264 44.592 37.264 42.64C37.264 40.752 36.64 39.216 35.392 38.032C34.144 36.848 32.384 36.256 30.112 36.256H25.6V33.184H30.112C32.128 33.184 33.696 32.64 34.816 31.552C35.968 30.432 36.544 28.992 36.544 27.232C36.544 25.408 35.952 23.952 34.768 22.864C33.616 21.776 31.92 21.232 29.68 21.232C27.664 21.232 26.064 21.824 24.88 23.008C23.728 24.16 23.04 25.744 22.816 27.76H19.36C19.424 26.288 19.712 24.96 20.224 23.776C20.736 22.592 21.424 21.584 22.288 20.752C23.184 19.888 24.256 19.232 25.504 18.784C26.752 18.304 28.144 18.064 29.68 18.064C31.312 18.064 32.768 18.288 34.048 18.736C35.328 19.184 36.4 19.808 37.264 20.608C38.16 21.408 38.832 22.384 39.28 23.536C39.76 24.656 40 25.888 40 27.232C40 28.864 39.6 30.336 38.8 31.648C38.032 32.928 36.912 33.936 35.44 34.672C37.168 35.408 38.48 36.464 39.376 37.84C40.272 39.216 40.72 40.816 40.72 42.64C40.72 44.08 40.464 45.392 39.952 46.576C39.472 47.76 38.768 48.784 37.84 49.648C36.912 50.48 35.76 51.136 34.384 51.616C33.008 52.096 31.44 52.336 29.68 52.336Z"
                                    fill="#FE5000" />
                        </g>
                        <path
                                d="M29.68 52.336C26.288 52.336 23.632 51.392 21.712 49.504C19.824 47.616 18.8 45.008 18.64 41.68H22.096C22.256 44.08 22.976 45.936 24.256 47.248C25.536 48.528 27.344 49.168 29.68 49.168C32.176 49.168 34.064 48.576 35.344 47.392C36.624 46.176 37.264 44.592 37.264 42.64C37.264 40.752 36.64 39.216 35.392 38.032C34.144 36.848 32.384 36.256 30.112 36.256H25.6V33.184H30.112C32.128 33.184 33.696 32.64 34.816 31.552C35.968 30.432 36.544 28.992 36.544 27.232C36.544 25.408 35.952 23.952 34.768 22.864C33.616 21.776 31.92 21.232 29.68 21.232C27.664 21.232 26.064 21.824 24.88 23.008C23.728 24.16 23.04 25.744 22.816 27.76H19.36C19.424 26.288 19.712 24.96 20.224 23.776C20.736 22.592 21.424 21.584 22.288 20.752C23.184 19.888 24.256 19.232 25.504 18.784C26.752 18.304 28.144 18.064 29.68 18.064C31.312 18.064 32.768 18.288 34.048 18.736C35.328 19.184 36.4 19.808 37.264 20.608C38.16 21.408 38.832 22.384 39.28 23.536C39.76 24.656 40 25.888 40 27.232C40 28.864 39.6 30.336 38.8 31.648C38.032 32.928 36.912 33.936 35.44 34.672C37.168 35.408 38.48 36.464 39.376 37.84C40.272 39.216 40.72 40.816 40.72 42.64C40.72 44.08 40.464 45.392 39.952 46.576C39.472 47.76 38.768 48.784 37.84 49.648C36.912 50.48 35.76 51.136 34.384 51.616C33.008 52.096 31.44 52.336 29.68 52.336Z"
                                fill="white" fill-opacity="0.7" />
                        <mask id="path-4-outside-1_966_842" maskUnits="userSpaceOnUse" x="17" y="17" width="25"
                              height="37" fill="black">
                            <rect fill="white" x="17" y="17" width="25" height="37" />
                            <path
                                    d="M29.68 52.336C26.288 52.336 23.632 51.392 21.712 49.504C19.824 47.616 18.8 45.008 18.64 41.68H22.096C22.256 44.08 22.976 45.936 24.256 47.248C25.536 48.528 27.344 49.168 29.68 49.168C32.176 49.168 34.064 48.576 35.344 47.392C36.624 46.176 37.264 44.592 37.264 42.64C37.264 40.752 36.64 39.216 35.392 38.032C34.144 36.848 32.384 36.256 30.112 36.256H25.6V33.184H30.112C32.128 33.184 33.696 32.64 34.816 31.552C35.968 30.432 36.544 28.992 36.544 27.232C36.544 25.408 35.952 23.952 34.768 22.864C33.616 21.776 31.92 21.232 29.68 21.232C27.664 21.232 26.064 21.824 24.88 23.008C23.728 24.16 23.04 25.744 22.816 27.76H19.36C19.424 26.288 19.712 24.96 20.224 23.776C20.736 22.592 21.424 21.584 22.288 20.752C23.184 19.888 24.256 19.232 25.504 18.784C26.752 18.304 28.144 18.064 29.68 18.064C31.312 18.064 32.768 18.288 34.048 18.736C35.328 19.184 36.4 19.808 37.264 20.608C38.16 21.408 38.832 22.384 39.28 23.536C39.76 24.656 40 25.888 40 27.232C40 28.864 39.6 30.336 38.8 31.648C38.032 32.928 36.912 33.936 35.44 34.672C37.168 35.408 38.48 36.464 39.376 37.84C40.272 39.216 40.72 40.816 40.72 42.64C40.72 44.08 40.464 45.392 39.952 46.576C39.472 47.76 38.768 48.784 37.84 49.648C36.912 50.48 35.76 51.136 34.384 51.616C33.008 52.096 31.44 52.336 29.68 52.336Z" />
                        </mask>
                        <path
                                d="M21.712 49.504L21.0049 50.2111L21.0109 50.217L21.712 49.504ZM18.64 41.68V40.68H17.5908L17.6412 41.728L18.64 41.68ZM22.096 41.68L23.0938 41.6135L23.0316 40.68H22.096V41.68ZM24.256 47.248L23.5402 47.9464L23.5489 47.9551L24.256 47.248ZM35.344 47.392L36.0231 48.1262L36.0328 48.117L35.344 47.392ZM25.6 36.256H24.6V37.256H25.6V36.256ZM25.6 33.184V32.184H24.6V33.184H25.6ZM34.816 31.552L35.5128 32.2693L35.5131 32.269L34.816 31.552ZM34.768 22.864L34.0813 23.5911L34.0914 23.6003L34.768 22.864ZM24.88 23.008L24.1729 22.3009L24.88 23.008ZM22.816 27.76V28.76H23.711L23.8099 27.8704L22.816 27.76ZM19.36 27.76L18.3609 27.7166L18.3156 28.76H19.36V27.76ZM20.224 23.776L21.1419 24.1729H21.1419L20.224 23.776ZM22.288 20.752L22.9816 21.4723L22.9821 21.4718L22.288 20.752ZM25.504 18.784L25.8419 19.7252L25.8525 19.7214L25.863 19.7173L25.504 18.784ZM37.264 20.608L36.5846 21.3418L36.5912 21.3479L36.598 21.3539L37.264 20.608ZM39.28 23.536L38.348 23.8984L38.3542 23.9143L38.3609 23.9299L39.28 23.536ZM38.8 31.648L37.9462 31.1274L37.9425 31.1335L38.8 31.648ZM35.44 34.672L34.9928 33.7776L33.0586 34.7446L35.0481 35.592L35.44 34.672ZM39.376 37.84L38.538 38.3857L39.376 37.84ZM39.952 46.576L39.0341 46.1791L39.0296 46.1896L39.0253 46.2003L39.952 46.576ZM37.84 49.648L38.5075 50.3926L38.5145 50.3863L38.5214 50.3799L37.84 49.648ZM34.384 51.616L34.7134 52.5602L34.384 51.616ZM29.68 51.336C26.4787 51.336 24.1006 50.4503 22.4131 48.791L21.0109 50.217C23.1634 52.3337 26.0973 53.336 29.68 53.336V51.336ZM22.4191 48.7969C20.7475 47.1253 19.79 44.7758 19.6388 41.632L17.6412 41.728C17.81 45.2402 18.9005 48.1067 21.0049 50.2111L22.4191 48.7969ZM18.64 42.68H22.096V40.68H18.64V42.68ZM21.0982 41.7465C21.269 44.3087 22.048 46.4168 23.5402 47.9463L24.9718 46.5497C23.904 45.4552 23.243 43.8513 23.0938 41.6135L21.0982 41.7465ZM23.5489 47.9551C25.0666 49.4728 27.1593 50.168 29.68 50.168V48.168C27.5287 48.168 26.0054 47.5832 24.9631 46.5409L23.5489 47.9551ZM29.68 50.168C32.3197 50.168 34.4918 49.5425 36.023 48.1261L34.665 46.6579C33.6362 47.6095 32.0323 48.168 29.68 48.168V50.168ZM36.0328 48.117C37.5336 46.6912 38.264 44.8341 38.264 42.64H36.264C36.264 44.3499 35.7144 45.6608 34.6553 46.667L36.0328 48.117ZM38.264 42.64C38.264 40.5073 37.5478 38.6988 36.0803 37.3065L34.7037 38.7575C35.7322 39.7332 36.264 40.9967 36.264 42.64H38.264ZM36.0803 37.3065C34.5931 35.8956 32.5556 35.256 30.112 35.256V37.256C32.2124 37.256 33.6949 37.8004 34.7037 38.7575L36.0803 37.3065ZM30.112 35.256H25.6V37.256H30.112V35.256ZM26.6 36.256V33.184H24.6V36.256H26.6ZM25.6 34.184H30.112V32.184H25.6V34.184ZM30.112 34.184C32.3094 34.184 34.1564 33.5869 35.5128 32.2693L34.1192 30.8347C33.2356 31.6931 31.9466 32.184 30.112 32.184V34.184ZM35.5131 32.269C36.8782 30.9417 37.544 29.2336 37.544 27.232H35.544C35.544 28.7504 35.0578 29.9222 34.1189 30.835L35.5131 32.269ZM37.544 27.232C37.544 25.1696 36.8634 23.4314 35.4446 22.1277L34.0914 23.6003C35.0406 24.4726 35.544 25.6464 35.544 27.232H37.544ZM35.4546 22.137C34.0522 20.8124 32.0694 20.232 29.68 20.232V22.232C31.7706 22.232 33.1798 22.7396 34.0814 23.591L35.4546 22.137ZM29.68 20.232C27.4566 20.232 25.5817 20.8921 24.1729 22.3009L25.5871 23.7151C26.5463 22.7559 27.8714 22.232 29.68 22.232V20.232ZM24.1729 22.3009C22.8242 23.6496 22.0649 25.4645 21.8221 27.6496L23.8099 27.8704C24.0151 26.0235 24.6318 24.6704 25.5871 23.7151L24.1729 22.3009ZM22.816 26.76H19.36V28.76H22.816V26.76ZM20.3591 27.8034C20.4185 26.4361 20.6846 25.2303 21.1419 24.1729L19.3061 23.3791C18.7394 24.6897 18.4295 26.1399 18.3609 27.7166L20.3591 27.8034ZM21.1419 24.1729C21.6053 23.1012 22.2201 22.2057 22.9816 21.4723L21.5944 20.0317C20.6279 20.9623 19.8667 22.0828 19.3061 23.3791L21.1419 24.1729ZM22.9821 21.4718C23.7698 20.7123 24.7181 20.1286 25.8419 19.7252L25.1661 17.8428C23.7939 18.3354 22.5982 19.0637 21.5939 20.0322L22.9821 21.4718ZM25.863 19.7173C26.9807 19.2874 28.2487 19.064 29.68 19.064V17.064C28.0393 17.064 26.5233 17.3206 25.145 17.8507L25.863 19.7173ZM29.68 19.064C31.2217 19.064 32.5629 19.2757 33.7176 19.6799L34.3784 17.7921C32.9731 17.3003 31.4023 17.064 29.68 17.064V19.064ZM33.7176 19.6799C34.8876 20.0894 35.8354 20.6481 36.5846 21.3418L37.9434 19.8742C36.9646 18.9679 35.7684 18.2786 34.3784 17.7921L33.7176 19.6799ZM36.598 21.3539C37.3728 22.0458 37.9555 22.889 38.348 23.8984L40.212 23.1736C39.7085 21.879 38.9472 20.7702 37.93 19.8621L36.598 21.3539ZM38.3609 23.9299C38.7823 24.9132 39 26.0094 39 27.232H41C41 25.7666 40.7377 24.3988 40.1991 23.1421L38.3609 23.9299ZM39 27.232C39 28.6922 38.6446 29.982 37.9462 31.1274L39.6538 32.1686C40.5554 30.6899 41 29.0358 41 27.232H39ZM37.9425 31.1335C37.2823 32.2339 36.3127 33.1176 34.9928 33.7776L35.8872 35.5664C37.5113 34.7544 38.7817 33.6221 39.6575 32.1625L37.9425 31.1335ZM35.0481 35.592C36.6206 36.2618 37.7653 37.199 38.538 38.3857L40.214 37.2943C39.1947 35.729 37.7154 34.5542 35.8319 33.752L35.0481 35.592ZM38.538 38.3857C39.3168 39.5816 39.72 40.9875 39.72 42.64H41.72C41.72 40.6445 41.2272 38.8504 40.214 37.2943L38.538 38.3857ZM39.72 42.64C39.72 43.9594 39.486 45.1342 39.0341 46.1791L40.8699 46.9729C41.442 45.6498 41.72 44.2006 41.72 42.64H39.72ZM39.0253 46.2003C38.5996 47.2502 37.979 48.1523 37.1586 48.9161L38.5214 50.3799C39.557 49.4157 40.3444 48.2698 40.8787 46.9517L39.0253 46.2003ZM37.1725 48.9034C36.3581 49.6336 35.3267 50.2281 34.0546 50.6718L34.7134 52.5602C36.1933 52.0439 37.4659 51.3264 38.5075 50.3926L37.1725 48.9034ZM34.0546 50.6718C32.8039 51.1081 31.3504 51.336 29.68 51.336V53.336C31.5296 53.336 33.2121 53.0839 34.7134 52.5602L34.0546 50.6718Z"
                                fill="white" fill-opacity="0.7" mask="url(#path-4-outside-1_966_842)" />
                        <defs>
                            <filter id="filter0_f_966_842" x="0.640015" y="0.0639648" width="58.08" height="70.272"
                                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                                <feGaussianBlur stdDeviation="9" result="effect1_foregroundBlur_966_842" />
                            </filter>
                            <filter id="filter1_f_966_842" x="10.64" y="10.064" width="38.08" height="50.272"
                                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                                <feGaussianBlur stdDeviation="4" result="effect1_foregroundBlur_966_842" />
                            </filter>
                        </defs>
                    </svg>
                    <div class="quiz-modal__greeting-list-text">


                        3 варианта ответа
                    </div>
                </li>
            </ol>
            <h3 class="quiz-modal__greeting-secondary-heading">
                Каждый верный ответ
                приносит драгоценный балл!
            </h3>
            <div class="quiz-modal__greeting-text">
                В течение двух недель вас ждет 5 раундов викторины. Каждый раунд содержит
                5 вопросов, ответ на который нужно дать в течение <em>10 секунд.</em> У вас будет одна попытка пройти
                каждый раунд. Если время вышло - раунд закрывается и попытка считается истраченной. Ответ засчитывается
                после
                нажатия кнопки "Ответить". <em>Через 14 дней</em> мы узнаем имена <em>10 лидеров каждого
                    подразделения</em> Летай и наградим ценными призами! Удачи!
            </div>
            <a href="#quiz-modal" class="quiz-modal__greeting-start">
                Начать тест
            </a>
        </div>
    </div>
</div>
<div class="quiz-modal js-modal" id="quiz-modal">
    <div class="quiz-modal__inner">
        <button class="quiz-modal__close js-modal-close">
            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26">
                <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M13.4343 15.9346L23.036 25.5362L25.9711 22.601L16.3695 12.9994L25.8329 3.53599L22.8977 0.600813L13.4343 10.0642L3.83361 0.463507L0.898437 3.39868L10.4992 12.9994L1.03504 22.4635L3.97021 25.3987L13.4343 15.9346Z" />
            </svg>
        </button>
        <?$APPLICATION->IncludeComponent(
            "tattelecom:quiz.modal",
            "",
            [],
            false
        );?>
    </div>
</div>
<div class="quiz-modal js-modal" id="quiz-success">
    <div class="quiz-modal__inner">
        <button class="quiz-modal__close js-modal-close">
            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26">
                <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M13.4343 15.9346L23.036 25.5362L25.9711 22.601L16.3695 12.9994L25.8329 3.53599L22.8977 0.600813L13.4343 10.0642L3.83361 0.463507L0.898437 3.39868L10.4992 12.9994L1.03504 22.4635L3.97021 25.3987L13.4343 15.9346Z" />
            </svg>
        </button>
        <div class="quiz-modal__success-text">
            <b>
                1 Этап
            </b><br>
            успешно пройден!
        </div>
        <h3 class="quiz-modal__success-heading">
            Спасибо за участие!
        </h3>
        <div class="quiz-modal__success-bottom-text">
            Даты следующих этапов: <br>
            20 февраля, 24 февраля, 27 февраля
        </div>
    </div>
</div>
<div class="quiz-modal js-modal" id="quiz-timeout">
    <div class="quiz-modal__inner">
        <button class="quiz-modal__close js-modal-close">
            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26">
                <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M13.4343 15.9346L23.036 25.5362L25.9711 22.601L16.3695 12.9994L25.8329 3.53599L22.8977 0.600813L13.4343 10.0642L3.83361 0.463507L0.898437 3.39868L10.4992 12.9994L1.03504 22.4635L3.97021 25.3987L13.4343 15.9346Z" />
            </svg>
        </button>
        <h3 class="quiz-modal__timeout-heading">
            Время вышло!
        </h3>
        <div class="quiz-modal__timeout-time">
            00:00
        </div>
        <div class="quiz-modal__timeout-message">
            Сожалеем, 1 раунд закончен!
        </div>
        <div class="quiz-modal__timeout-message-text">
            Не расстраивайтесь, 20, 24, 27 февраля откроются новые раунды
        </div>
    </div>
</div>

<?php $APPLICATION->ShowProperty('BeforeBodyClose');?>

<?php if (\Bitrix\Landing\Connector\Mobile::isMobileHit()):
	Extension::load(['mobile_tools']);
	?>
<script type="text/javascript">

	if (typeof BXMPage !== 'undefined')
	{
		BXMPage.TopBar.title.setText('<?= $APPLICATION->getTitle();?>');
		BXMPage.TopBar.title.show();
	}

	document.addEventListener('DOMContentLoaded', function ()
	{
		BX.bindDelegate(document.body, 'click', {tagName: 'A'}, function (event)
		{
			if (this.hostname === document.location.hostname)
			{
				let func = BX.MobileTools.resolveOpenFunction(this.href);

				if (func)
				{
					func();
					return BX.PreventDefault(event);
				}
			}
		});
	}, false);
</script>
<?php endif?>

</body>
</html>
