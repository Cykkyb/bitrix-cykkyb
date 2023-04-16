<?php
\Bitrix\Main\Loader::includeModule('iblock');
\Bitrix\Main\Loader::includeModule('sale');

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

class myCatalogList extends CBitrixComponent
{

    protected function getResult()
    {
        $elementClass = Bitrix\Iblock\Iblock::wakeUp($this->arParams['IBLOCK_ID'])->getEntityDataClass();

        $res = $elementClass::getList([
                'select' => [ 'ID', 'IBLOCK_ID', 'CODE', "NAME", 'PREVIEW_PICTURE', 'PRICE' => 'PRICE_INFO.PRICE', 'CURRENCY' => 'PRICE_INFO.CURRENCY'],
                'filter' => [
                    'SECTIONS.ID' => $this->arParams['SECTION_ID']
                ],
                'runtime' => [
                    'PRICE_INFO' => [
                        'data_type' => \Bitrix\Catalog\PriceTable::class,
                        'reference' => ['this.ID' => 'ref.PRODUCT_ID'],
                        'join_type' => 'LEFT'
                    ],

                ],
            ]
        );

        $arResult = [];

        while ($element = $res->fetch()) {
            $element['PREVIEW_PICTURE_SRC'] = CFile::GetPath($element['PREVIEW_PICTURE']);
            $arResult[] = $element;
        }
//        $entity = \Bitrix\Iblock\Model\Section::compileEntityByIblock($this->arParams['IBLOCK_ID']);
//        $GG = $entity::GetList([
//            'select' => ['UF_BREND'],
//            'filter' => [
//                "IBLOCK_ID" => $this->arParams['IBLOCK_ID'],
////                'VALUE_ID' =>$this->arParams['SECTION_ID'],
//                "ACTIVE" => "Y"],
//        ])->fetch();
        debug($arResult);

        $this->arResult['ITEMS'] = $arResult;
        $this->arResult['SECTION_INFO'] = $this->getSectionInfo($this->arParams['SECTION_ID'], $this->arParams['IBLOCK_ID']);

        $this->includeComponentTemplate();

    }

    public function getSectionInfo($sectionId, $catalogId)
    {
        $arSelect = ["ID", "IBLOCK_ID", "NAME", "CODE"];
        $arFilter = [
            "IBLOCK_ID" => $this->arParams['IBLOCK_ID'],
            "ID" => $sectionId,
            "ACTIVE_DATE" => "Y",
            "ACTIVE" => "Y"];
        $res = CIBlockSection::GetList([], $arFilter, false, $arSelect);

        $arResult = [];

        while ($element = $res->fetch()) {
            $arResult = $element;
        }
        return $arResult;
    }

    public function executeComponent()
    {
        $this->getResult();
    }
}





