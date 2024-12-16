<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
/** @var string $componentPath */
/** @var array $arResult */
//\Bitrix\Main\UI\Extension::load("ui.inputmask");
?>
<form action="/" method="POST" class="intro__form" id="draw">
    <div class="intro__form-row">
        <div class="intro__form-field">
            <input type="email" class="intro__form-input" placeholder="Введите Ваш Email" required="">
        </div>
        <button class="intro__form-submit" type="submit">
            Испытай удачу
        </button>
        <div class="intro__form-field js-attempt-container" style="display: none">
            Осталось попыток: <span class="attempt-rate">3</span>
        </div>
    </div>
    <div class="intro__form-text">
        Введи email с доменом tattelecom.ru и забери свой приз.
        <!--Найди три одинаковых поля и забери свой приз. Осталось попыток: <span class="attempt-rate">3</span>-->
    </div>
    <div class="intro__numpad intro__numpad-grayscale">
        <button class="intro__numpad-card" type="button">
          <span class="intro__numpad-card-inner">
              <span class="intro__numpad-card-front">
                  <img src="/local/js/new-letai/dist/images/numbers/1.svg" alt="" class="intro__numpad-number">

              </span>
              <span class="intro__numpad-card-back">
                  <svg width="14" height="14" aria-hidden="true"
                       class="intro__numpad-card-prize-image" viewBox="0 0 14 14">
                      <use xlink:href="#"></use>
                  </svg>
                  <span class="intro__numpad-card-back-text">

                  </span>
              </span>
          </span>
        </button>
        <button class="intro__numpad-card" type="button">
          <span class="intro__numpad-card-inner">
              <span class="intro__numpad-card-front">
                  <img src="/local/js/new-letai/dist/images/numbers/2.svg" alt="" class="intro__numpad-number">

              </span>
              <span class="intro__numpad-card-back">
                  <svg width="14" height="14" aria-hidden="true"
                       class="intro__numpad-card-prize-image" viewBox="0 0 14 14">
                      <use xlink:href="#"></use>
                  </svg>
                  <span class="intro__numpad-card-back-text">

                  </span>

              </span>
          </span>
        </button>
        <button class="intro__numpad-card" type="button">
                                  <span class="intro__numpad-card-inner">
                                      <span class="intro__numpad-card-front">
                                          <img src="/local/js/new-letai/dist/images/numbers/3.svg" alt="" class="intro__numpad-number">

                                      </span>
                                      <span class="intro__numpad-card-back">
                                          <svg width="14" height="14" aria-hidden="true"
                                               class="intro__numpad-card-prize-image" viewBox="0 0 14 14">
                                              <use xlink:href="#pled"></use>
                                          </svg>
                                          <span class="intro__numpad-card-back-text">
                                              Плед!
                                          </span>
                                      </span>
                                  </span>
        </button>
        <button class="intro__numpad-card" type="button">
                                  <span class="intro__numpad-card-inner">
                                      <span class="intro__numpad-card-front">
                                          <img src="/local/js/new-letai/dist/images/numbers/4.svg" alt="" class="intro__numpad-number">

                                      </span>
                                      <span class="intro__numpad-card-back">
                                          <svg width="14" height="14" aria-hidden="true"
                                               class="intro__numpad-card-prize-image" viewBox="0 0 14 14">
                                              <use xlink:href="#daily"></use>
                                          </svg>
                                          <span class="intro__numpad-card-back-text intro__numpad-card-back-text--small">
                                              Ежедневник!
                                          </span>
                                      </span>
                                  </span>
        </button>
        <button class="intro__numpad-card" type="button">
                                  <span class="intro__numpad-card-inner">
                                      <span class="intro__numpad-card-front">
                                          <img src="/local/js/new-letai/dist/images/numbers/5.svg" alt="" class="intro__numpad-number">

                                      </span>
                                      <span class="intro__numpad-card-back">
                                          <svg width="14" height="14" aria-hidden="true"
                                               class="intro__numpad-card-prize-image" viewBox="0 0 14 14">
                                              <use xlink:href="#stand"></use>
                                          </svg>
                                          <span class="intro__numpad-card-back-text intro__numpad-card-back-text--small">
                                              Подставка под
                                              телефон!
                                          </span>
                                      </span>
                                  </span>
        </button>
        <button class="intro__numpad-card" type="button">
                                  <span class="intro__numpad-card-inner">
                                      <span class="intro__numpad-card-front">
                                          <img src="/local/js/new-letai/dist/images/numbers/6.svg" alt="" class="intro__numpad-number">

                                      </span>
                                      <span class="intro__numpad-card-back">
                                          <svg width="14" height="14" aria-hidden="true"
                                               class="intro__numpad-card-prize-image" viewBox="0 0 14 14">
                                              <use xlink:href="#earpods"></use>
                                          </svg>
                                          <span class="intro__numpad-card-back-text intro__numpad-card-back-text--small">
                                              Беспроводные
                                              наушники!
                                          </span>
                                      </span>
                                  </span>
        </button>
        <button class="intro__numpad-card" type="button">
                                  <span class="intro__numpad-card-inner">
                                      <span class="intro__numpad-card-front">
                                          <img src="/local/js/new-letai/dist/images/numbers/7.svg" alt="" class="intro__numpad-number">

                                      </span>
                                      <span class="intro__numpad-card-back">
                                          <svg width="14" height="14" aria-hidden="true"
                                               class="intro__numpad-card-prize-image" viewBox="0 0 14 14">
                                              <use xlink:href="#bomber"></use>
                                          </svg>
                                          <span class="intro__numpad-card-back-text intro__numpad-card-back-text--small">
                                              Бомбер
                                          </span>
                                      </span>
                                  </span>
        </button>
        <button class="intro__numpad-card" type="button">
                                  <span class="intro__numpad-card-inner">
                                      <span class="intro__numpad-card-front">
                                          <img src="/local/js/new-letai/dist/images/numbers/8.svg" alt="" class="intro__numpad-number">

                                      </span>
                                      <span class="intro__numpad-card-back">
                                          <svg width="14" height="14" aria-hidden="true"
                                               class="intro__numpad-card-prize-image" viewBox="0 0 14 14">
                                              <use xlink:href="#bottle"></use>
                                          </svg>
                                          <span class="intro__numpad-card-back-text intro__numpad-card-back-text--small">
                                              Бутылка для
                                              воды!
                                          </span>

                                      </span>
                                  </span>
        </button>
        <button class="intro__numpad-card" type="button">
                                  <span class="intro__numpad-card-inner">
                                      <span class="intro__numpad-card-front">
                                          <img src="/local/js/new-letai/dist/images/numbers/9.svg" alt="" class="intro__numpad-number">

                                      </span>
                                      <span class="intro__numpad-card-back">
                                          <svg width="14" height="14" aria-hidden="true"
                                               class="intro__numpad-card-prize-image" viewBox="0 0 14 14">
                                              <use xlink:href="#humidifier"></use>
                                          </svg>
                                          <span class="intro__numpad-card-back-text intro__numpad-card-back-text--small">
                                              Увлажнитель
                                              воздуха!
                                          </span>

                                      </span>
                                  </span>
        </button>
    </div>

</form>