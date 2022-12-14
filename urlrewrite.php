<?php
$arUrlRewrite=array (
  7 => 
  array (
    'CONDITION' => '#^/payment-methods/([a-zA-Z0-9\\-_]+)/#',
    'RULE' => 'ELEMENT_CODE=$1',
    'ID' => 'bitrix:news.detail',
    'PATH' => '/dynamic/payment-methods/detail-payment.php',
    'SORT' => 100,
  ),
  1 => 
  array (
    'CONDITION' => '#^/helpdesk/technical-works/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/dynamic/helpdesk/technical-works/index.php',
    'SORT' => 100,
  ),
  4 => 
  array (
    'CONDITION' => '#^/internet/rates/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/dynamic/internet/rates/index.php',
    'SORT' => 100,
  ),
  3 => 
  array (
    'CONDITION' => '#^/mobile/rates/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/dynamic/mobile/rates/index.php',
    'SORT' => 100,
  ),
  11 => 
  array (
    'CONDITION' => '#^/internship/#',
    'RULE' => NULL,
    'ID' => 'bitrix:landing.pub',
    'PATH' => '/internship/index.php',
    'SORT' => 100,
  ),
  6 => 
  array (
    'CONDITION' => '#^/tv/online/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/dynamic/tv/online/index.php',
    'SORT' => 100,
  ),
  5 => 
  array (
    'CONDITION' => '#^/tv/rates/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/dynamic/tv/rates/index.php',
    'SORT' => 100,
  ),
  8 => 
  array (
    'CONDITION' => '#^/phone/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/dynamic/phone/index.php',
    'SORT' => 100,
  ),
  2 => 
  array (
    'CONDITION' => '#^/news/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/news/index.php',
    'SORT' => 100,
  ),
  10 => 
  array (
    'CONDITION' => '#^/#',
    'RULE' => '',
    'ID' => 'bitrix:landing.pub',
    'PATH' => '/index.php',
    'SORT' => 100,
  ),
);
