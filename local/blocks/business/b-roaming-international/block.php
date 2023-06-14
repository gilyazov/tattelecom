<div id="roamingAjax">
    <?if($_REQUEST['set_filter'] === 'Y' && $_GET['ajax'] !== 'N') {
        $GLOBALS['APPLICATION']->RestartBuffer();
    } ?>
    <section class="b-roaming-international-intro gl__section">
        <div class="gl__page-content">
            <div class="b-roaming-international-intro__inner">
                <div class="b-roaming-international-intro__form-block">
                    <h3 class="b-roaming-international-intro__block-title">Узнайте, как оптимизировать свои расходы в поездках по миру</h3>

                    <?$APPLICATION->IncludeComponent(
                        "bitrix:catalog.filter",
                        "roaming-without-worries",
                        Array(
                            "IBLOCK_TYPE" => "mobile",
                            "IBLOCK_ID" => 28,
                            "FILTER_NAME" => "arrFilter",
                            "FIELD_CODE" => "",
                            "PROPERTY_CODE" => [
                                "COUNTRY", "TYPE"
                            ],
                        ),
                        false
                    );?>
                </div>
                <div class="ghost"></div>
                <div class="b-roaming-international-intro__list-block">
                    <h3 class="b-roaming-international-intro__block-title">Чтобы начать пользоваться национальным роумингом, необходимо:</h3>
                    <ul class="b-roaming-international-intro__list">
                        <li class="b-steps__item">
                            <span class="b-steps__item-num">1</span>
                            <p class="b-steps__item-description">Проверьте, подключен ли роуминг, для этого обратитесь в Контактный центр (843) 238-00-00.</p>
                        </li>
                        <li class="b-steps__item">
                            <span class="b-steps__item-num">2</span>
                            <p class="b-steps__item-description">Ознакомьтесь с тарифами на услуги связи и подключите специальную опцию для общения на выгодных условиях.</p>
                        </li>
                        <li class="b-steps__item">
                            <span class="b-steps__item-num">3</span>
                            <p class="b-steps__item-description">Пополните счет на оптимальную сумму, так как тарифы на связь в роуминге отличаются от тарифов в домашней сети.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <?
    if($GLOBALS['arrFilter']){
        $APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "pricing-world-plans__list",
            Array(
                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                "ADD_SECTIONS_CHAIN" => "N",
                "AJAX_MODE" => "N",
                "AJAX_OPTION_ADDITIONAL" => "",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "CACHE_FILTER" => "N",
                "CACHE_GROUPS" => "Y",
                "CACHE_TIME" => "36000000",
                "CACHE_TYPE" => "A",
                "CHECK_DATES" => "Y",
                "DETAIL_URL" => "",
                "DISPLAY_BOTTOM_PAGER" => "Y",
                "DISPLAY_DATE" => "Y",
                "DISPLAY_NAME" => "Y",
                "DISPLAY_PICTURE" => "Y",
                "DISPLAY_PREVIEW_TEXT" => "Y",
                "DISPLAY_TOP_PAGER" => "N",
                "FIELD_CODE" => array("",""),
                "FILTER_NAME" => "arrFilter",
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                "IBLOCK_ID" => "28",
                "IBLOCK_TYPE" => "mobile",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                "INCLUDE_SUBSECTIONS" => "N",
                "MESSAGE_404" => "",
                "NEWS_COUNT" => "20",
                "PAGER_BASE_LINK_ENABLE" => "N",
                "PAGER_DESC_NUMBERING" => "N",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                "PAGER_SHOW_ALL" => "N",
                "PAGER_SHOW_ALWAYS" => "N",
                "PAGER_TEMPLATE" => ".default",
                "PAGER_TITLE" => "Новости",
                "PARENT_SECTION" => "",
                // "PARENT_SECTION_CODE" => "world",
                "PREVIEW_TRUNCATE_LEN" => "",
                "PROPERTY_CODE" => array("OPTIONS",""),
                "SET_BROWSER_TITLE" => "N",
                "SET_LAST_MODIFIED" => "N",
                "SET_META_DESCRIPTION" => "N",
                "SET_META_KEYWORDS" => "N",
                "SET_STATUS_404" => "N",
                "SET_TITLE" => "N",
                "SHOW_404" => "N",
                "SORT_BY1" => "SORT",
                "SORT_BY2" => "ACTIVE_FROM",
                "SORT_ORDER1" => "ASC",
                "SORT_ORDER2" => "DESC",
                "STRICT_SECTION_CHECK" => "N"
            )
        );
    }
    ?>
    <?if($_REQUEST['set_filter'] === 'Y' && $_GET['ajax'] !== 'N') {
        die();
    } ?>
</div>