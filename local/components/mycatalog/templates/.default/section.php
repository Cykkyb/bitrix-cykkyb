<? $APPLICATION->IncludeComponent(
    "mycatalog.section",
    "",
    [
        'IBLOCK_ID' => $arParams['IBLOCK_ID'],
        "SECTION_ID" => $arResult['VARIABLES']['SECTION_ID'],
    ]

); ?>