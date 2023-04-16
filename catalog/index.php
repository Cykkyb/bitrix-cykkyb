<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Каталог");
?><?$APPLICATION->IncludeComponent(
	"mycatalog",
	"",
	Array(
		"IBLOCK_ID" => "5",
		"SEF_FOLDER" => "/catalog/",
		"SEF_MODE" => "Y",
		"SEF_URL_TEMPLATES" => ["detail"=>"#SECTION_CODE_PATH#/#ELEMENT_CODE#/","main"=>"","search"=>"search/","section"=>"#SECTION_CODE_PATH#/"]
	)
);?><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>