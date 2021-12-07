<section class="phone-list" id="phone-list">
    <div class="gl__page-content">
        <h2 class="gl__title">Красивые номера</h2>
        <div class="phone-list__subtitle">Выберите свой уникальный номер</div>

        <?$APPLICATION->IncludeComponent(
            "tattelecom:phone.list.type",
            "",
            [],
            false
        );?>

        <div id="phone-list__container">
            <?$APPLICATION->IncludeComponent(
                "tattelecom:phone.list.list",
                "",
                [
                    'TYPE' => $_REQUEST['type']
                ],
                false
            );?>
        </div>

        <!--<div class="phone-list__pagination-wrapper">
            <div class="phone-list__select-block gl__sm-hide">
                <span>Загружено:</span>
                <div class="phone-list__select-container">
                    <label class="phone-list__select-wrapper">
                        <select class="phone-list__select js-custom-select">
                            <option value="1-20">1-20</option>
                            <option value="21-30">21-30</option>
                            <option value="31-40">31-40</option>
                            <option value="41-50">41-50</option>
                            <option value="51-60">51-60</option>
                            <option value="61-70">61-70</option>
                            <option value="71-80">71-80</option>
                            <option value="81-90">81-90</option>
                            <option value="91-100">91-100</option>
                            <option value="101-110">101-110</option>
                            <option value="111-120">111-120</option>
                        </select>
                    </label>
                </div>
                <span>из 120</span>
            </div>
            <div class="gl__sm-hide">
                <div class="pagination-page__pages-main-container js-pagination-page">
                    <button type="button" class="pagination-page__pages-btn pagination-page__btn-nav mod-prev js-slider-btn-prev">
                        <span class="pagination-page__btn-nav-content"></span>
                    </button>
                    <div class="swiper-container js-swiper-container-custom">
                        <div class="pagination-page__pages-wrapper swiper-wrapper">
                            <label class="pagination-page__pages-item swiper-slide">
                                <input type="radio" class="pagination-page__pages-radio" name="phone-list-page" checked="checked">
                                <span class="pagination-page__pages-btn pagination-page__pages-radio-content">1</span>
                            </label>
                            <label class="pagination-page__pages-item swiper-slide">
                                <input type="radio" class="pagination-page__pages-radio" name="phone-list-page">
                                <span class="pagination-page__pages-btn pagination-page__pages-radio-content">2</span>
                            </label>
                            <label class="pagination-page__pages-item swiper-slide">
                                <input type="radio" class="pagination-page__pages-radio" name="phone-list-page">
                                <span class="pagination-page__pages-btn pagination-page__pages-radio-content">3</span>
                            </label>
                            <label class="pagination-page__pages-item swiper-slide">
                                <input type="radio" class="pagination-page__pages-radio" name="phone-list-page">
                                <span class="pagination-page__pages-btn pagination-page__pages-radio-content">4</span>
                            </label>
                            <label class="pagination-page__pages-item swiper-slide">
                                <input type="radio" class="pagination-page__pages-radio" name="phone-list-page">
                                <span class="pagination-page__pages-btn pagination-page__pages-radio-content">5</span>
                            </label>
                            <label class="pagination-page__pages-item swiper-slide">
                                <input type="radio" class="pagination-page__pages-radio" name="phone-list-page">
                                <span class="pagination-page__pages-btn pagination-page__pages-radio-content">6</span>
                            </label>
                            <label class="pagination-page__pages-item swiper-slide">
                                <input type="radio" class="pagination-page__pages-radio" name="phone-list-page">
                                <span class="pagination-page__pages-btn pagination-page__pages-radio-content">7</span>
                            </label>
                            <label class="pagination-page__pages-item swiper-slide">
                                <input type="radio" class="pagination-page__pages-radio" name="phone-list-page">
                                <span class="pagination-page__pages-btn pagination-page__pages-radio-content">8</span>
                            </label>
                            <label class="pagination-page__pages-item swiper-slide">
                                <input type="radio" class="pagination-page__pages-radio" name="phone-list-page">
                                <span class="pagination-page__pages-btn pagination-page__pages-radio-content">9</span>
                            </label>
                            <label class="pagination-page__pages-item swiper-slide">
                                <input type="radio" class="pagination-page__pages-radio" name="phone-list-page">
                                <span class="pagination-page__pages-btn pagination-page__pages-radio-content">10</span>
                            </label>
                        </div>
                    </div>
                    <button type="button" class="pagination-page__pages-btn pagination-page__btn-nav mod-next js-slider-btn-next">
                        <span class="pagination-page__btn-nav-content"></span>
                    </button>
                </div>
            </div>
            <button type="button" class="phone-list__upload-btn gl__main-btn mod-orange-transparent gl__sm-show">Загрузить еще</button>
        </div>-->
    </div>
</section>