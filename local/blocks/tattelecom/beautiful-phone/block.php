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
                    'TYPE' => ($_REQUEST['type'] ?: 1),
                    'PAGE' => ($_REQUEST['page'] ?: 1)
                ],
                false
            );?>
        </div>
    </div>
</section>