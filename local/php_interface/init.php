<?php

function debug($str, $forAll = true, $show = true)
{
    $user = new CUser();
    if (!$user->IsAdmin() && !$forAll) {
        return;
    }
    $display = '';
    if (!$show) {
        $display = "display: none;";
    }
    echo "<pre style='background: #eee;border: 1px solid #ccc; padding: 5px; $display'>" . print_r($str, 1) . "</pre>";
}

AddEventHandler("main", "OnBeforeUserAdd", Array(
    "MyClass",
    "OnBeforeUserAddHandler"
));
class MyClass
{
    // создаем обработчик события "OnBeforeIBlockElementUpdate"
    public static function OnBeforeUserAddHandler(&$arFields)
    {
        $arFields['NAME'] = trim($arFields['NAME']);
        debug($arFields);
    }
}
