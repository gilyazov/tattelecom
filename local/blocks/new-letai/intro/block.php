<section class="intro" id="intro">
    <div class="intro__top">
        <picture>
            <source srcset="/local/js/new-letai/dist/images/intro-mobile.webp" media="(max-width: 640px)" />
            <img src="/local/js/new-letai/dist/images/intro.webp" alt="" class="intro__top-image" />
        </picture>
        <div class="intro__top-content">
            <h1 class="intro__heading">
                Летай.Connect:
            </h1>
            <div class="intro__heading-text">
                платформа, где команда становится семьей
            </div>
            <div class="intro__win" id="draw">
                <?$APPLICATION->IncludeComponent(
                    "tattelecom:spring.horoscope",
                    "",
                    [],
                    false
                );?>
            </div>
        </div>
    </div>
</section>