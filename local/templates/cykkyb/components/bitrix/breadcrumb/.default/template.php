<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

if (empty($arResult))
    return "";

$strReturn = '';
$strReturn .= '<div class="bread-crumbs">';
$strReturn .= ' <div class="bread-crumbs__container container1">';
foreach ($arResult as $arItem) {
    if (next($arResult)) {
        $strReturn .= '<a href="' . $arItem['LINK'] . '">' . $arItem['TITLE'] . '</a>';
        $strReturn .= '<i class="fa-solid fa-chevron-right"></i>';
    } else {
        $strReturn .= '<span >' . $arItem['TITLE'] . '</span>';
    }
}
$strReturn .= '</div>';
$strReturn .= '</div>';

return $strReturn;
?>

