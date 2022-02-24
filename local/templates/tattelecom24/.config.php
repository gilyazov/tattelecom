<?php

$jsConfig = array(
    'landing_core_admin' => array(// изменили ключ, так как регистрируем свое расширение
        'css' => array(
            '/bitrix/css/main/font-awesome.css'
        ),
        'rel' => array('landing_core'),
    )
);

foreach ($jsConfig as $code => $ext)
{
    \CJSCore::registerExt($code, $ext);
}

$namespace = (SITE_ID == "s1" ? "tattelecom" : "business");

return [
    'js_core_public' => [
        'landing_core'
    ],
    'js_core_edit' => [
        'landing_core_admin'
    ],
    'disable_namespace' => [],
    'enable_namespace' => ['business', 'tattelecom'],
    'public_wrapper_block' => false,
    'google_font' => false
];