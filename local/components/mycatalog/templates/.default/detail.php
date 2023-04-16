<?php
$APPLICATION->IncludeComponent(
	"mycatalog.detail",
	"",
	[
		"IBLOCK_ID" => $arParams['IBLOCK_ID'],
        "ELEMENT_CODE"=>$arResult['VARIABLES']['ELEMENT_CODE'],
		"SECTION_CODE" => $arResult['VARIABLES']['SECTION_CODE'],
	]
);

?>

