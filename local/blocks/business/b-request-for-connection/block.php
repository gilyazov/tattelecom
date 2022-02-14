<section class="b-request-for-connection gl__section">
    <div class="gl__page-content">
        <div class="b-request-for-connection__content">
            <h3 class="b-request-for-connection__form-title">Проверьте свой адрес на наличие технической возможности подключения к услугам Таттелеком</h3>
            <span class="b-request-for-connection__form-label">Наши специалисты помогут подобрать решения, отталкиваясь от ваших бизнес-потребностей</span>

            <?$APPLICATION->IncludeComponent(
                "tattelecom:internet.connect",
                "business",
                [],
                false
            );?>
        </div>
    </div>
</section>