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

return [
    'js_core_public' => [
        (SITE_ID == "s8" ? 'safe-yard.dist' : 'internship.letai'),
        'landing_core'
    ],
    'js_core_edit' => [
        (SITE_ID == "s8" ? 'safe-yard.dist' : 'internship.letai'),
        'landing_core_admin'
    ],
    'disable_namespace' => [],
    'enable_namespace' => [(SITE_ID == "s8" ? 'safe-yard' : 'internship'),],
    'public_wrapper_block' => false,
    'google_font' => false
];