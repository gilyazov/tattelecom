<?php
$arUrlRewrite=array (
  4 =>
  array (
    'CONDITION' => '#^/internet/rates/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/internet/rates/index.php',
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
  2 =>
  array (
    'CONDITION' => '#^/news/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/news/index.php',
    'SORT' => 100,
  ),
  5 => 
  array (
    'CONDITION' => '#^/#',
    'RULE' => NULL,
    'ID' => 'bitrix:landing.pub',
    'PATH' => '/index.php',
    'SORT' => 100,
  ),
);
