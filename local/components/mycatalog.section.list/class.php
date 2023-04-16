<?php
CModule::IncludeModule('iblock');

use Bitrix\Main;
use Bitrix\Main\Localization\Loc;
use Bitrix\Iblock;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

class myCatalogSectionList extends CBitrixComponent
{

    protected function getResult()
    {
        $arSelect = ["ID", "IBLOCK_ID", 'CODE', "NAME", 'IBLOCK_SECTION_ID',];
        $arFilter = [
            "IBLOCK_ID" => $this->arParams['IBLOCK_ID'],
            "ACTIVE_DATE" => "Y",
            "ACTIVE" => "Y"];
        $res = CIBlockSection::GetList([], $arFilter, false, $arSelect);

        $arResult = [];

        while ($element = $res->fetch()) {
            $arResult[] = $element;
        }
        $this->arResult['ITEMS'] = $arResult;
        $this->includeComponentTemplate();
    }

    public function executeComponent()
    {
        $this->getResult();
    }
}





