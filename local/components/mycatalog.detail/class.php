<?php
\Bitrix\Main\Loader::includeModule('iblock');
\Bitrix\Main\Loader::includeModule('sale');

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
class myCatalogDetail extends CBitrixComponent
{

    protected function getResult()
    {
        $elementClass = \Bitrix\Iblock\Iblock::wakeUp($this->arParams['IBLOCK_ID'])->getEntityDataClass();

        $res = $elementClass::getList([
            'select' => ["ID",'SECTION_NAME' => 'IBLOCK_SECTION.NAME', 'SECTION_CODE' => 'IBLOCK_SECTION.CODE', "IBLOCK_ID", 'CODE', "NAME", 'PREVIEW_PICTURE', 'PRICE' => "PRICE_INFO.PRICE", 'CURRENCY' => "PRICE_INFO.CURRENCY"],
            'filter' => ['CODE' => $this->arParams['ELEMENT_CODE'], "ACTIVE" => "Y"],
            'runtime' => [
                'PRICE_INFO' => [
                    'data_type' => \Bitrix\Catalog\PriceTable::class,
                    'reference' => ['this.ID' => 'ref.PRODUCT_ID'],
                    'join_type' => 'LEFT'
                ]
            ],
        ]);

        $arResult = [];

        while ($element = $res->fetch()) {
            $element['PREVIEW_PICTURE_SRC'] = CFile::GetPath($element['PREVIEW_PICTURE']);
            $arResult = $element;

        }

        $this->arResult['ITEM'] = $arResult;

        $this->includeComponentTemplate();
    }

    public function executeComponent()
    {
        $this->getResult();
    }
}





