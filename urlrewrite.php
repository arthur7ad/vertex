<?php
$arUrlRewrite=array (
  0 => 
  array (
    'CONDITION' => '#^\\/?\\/mobileapp/jn\\/(.*)\\/.*#',
    'RULE' => 'componentName=$1',
    'ID' => NULL,
    'PATH' => '/bitrix/services/mobileapp/jn.php',
    'SORT' => 100,
  ),
  4 => 
  array (
    'CONDITION' => '#^/functions/#',
    'RULE' => 'eid=$1',
    'ID' => '',
    'PATH' => '/functions/index.php',
    'SORT' => 100,
  ),
  3 => 
  array (
    'CONDITION' => '#^/function/#',
    'RULE' => 'eid=$1',
    'ID' => '',
    'PATH' => '/function/index.php',
    'SORT' => 100,
  ),
  5 => 
  array (
    'CONDITION' => '#^/article/#',
    'RULE' => 'eid=$1',
    'ID' => '',
    'PATH' => '/article/index.php',
    'SORT' => 100,
  ),
  6 => 
  array (
    'CONDITION' => '#^/webinar/#',
    'RULE' => 'eid=$1',
    'ID' => '',
    'PATH' => '/webinar/index.php',
    'SORT' => 100,
  ),
  1 => 
  array (
    'CONDITION' => '#^/rest/#',
    'RULE' => '',
    'ID' => NULL,
    'PATH' => '/bitrix/services/rest/index.php',
    'SORT' => 100,
  ),
  2 => 
  array (
    'CONDITION' => '#^/case/#',
    'RULE' => 'eid=$1',
    'ID' => '',
    'PATH' => '/case/index.php',
    'SORT' => 100,
  ),
  8 => 
  array (
    'CONDITION' => '#^/base/#',
    'RULE' => 'act=$1',
    'ID' => '',
    'PATH' => '/base/index.php',
    'SORT' => 100,
  ),
  7 => 
  array (
    'CONDITION' => '#^/new/#',
    'RULE' => 'eid=$1',
    'ID' => '',
    'PATH' => '/new/index.php',
    'SORT' => 100,
  ),
    9 =>
        array (
            'CONDITION' => '#^/documentation/#',
            'RULE' => 'act=$1',
            'ID' => '',
            'PATH' => '/documentation/index.php',
            'SORT' => 100,
        ),
);
