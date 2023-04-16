<?php
require($_SERVER["DOCUMENT_ROOT"] . '/bitrix/modules/main/include/prolog_before.php');


Bitrix\Main\Loader::includeModule("catalog");

$fields = [
    'PRODUCT_ID' => $_POST['id'], // ID товара, обязательно
    'QUANTITY' => 1, // количество, обязательно
    'PROPS' => [
        ['NAME' => 'Test prop', 'CODE' => 'TEST_PROP', 'VALUE' => 'test value'],
    ],

];
$result = Bitrix\Catalog\Product\Basket::addProduct($fields);
if (!$result->isSuccess()) {
    var_dump($result->getErrorMessages());
}else{
    echo true;
}