<?php
require($_SERVER["DOCUMENT_ROOT"] . '/bitrix/modules/main/include/prolog_before.php');

Bitrix\Main\Loader::includeModule("sale");

$res = \Bitrix\Sale\Location\LocationTable::getByCode(array(
    'filter' => array('=TYPE.ID' => '2', '=NAME.LANGUAGE_ID' => LANGUAGE_ID),
    'select' => array('NAME_RU' => 'NAME.NAME')
    ));
    while ($item = $res->fetch()) {
        echo $item['NAME_RU'].'<br>';
    }

//debug($res);