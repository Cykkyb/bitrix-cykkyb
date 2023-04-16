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
        $res = \Bitrix\Iblock\SectionTable::GetList([
            'select' => ["ID", "IBLOCK_ID", 'CODE', "NAME", 'BREND' => 'UF_PROPERTY.UF_BREND', 'CATEGORU' => 'UF_PROPERTY.UF_CATEGORY'],
            'filter' => [
                "IBLOCK_ID" => $this->arParams['IBLOCK_ID'],
                "ACTIVE" => "Y"
            ],
            'runtime' => [
                'UF_PROPERTY' => [
                    'data_type' => \Bitrix\Iblock\Model\Section::compileEntityByIblock($this->arParams['IBLOCK_ID']),
                    'reference' => ['this.ID' => 'ref.ID'],
                    'join_type' => 'LEFT'
                ],
            ],
        ]);

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





