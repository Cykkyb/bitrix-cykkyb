<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Персональный раздел");

global $USER;
if (!$USER->IsAuthorized()) {
	LocalRedirect("/personal/auth");
}
?>

<?$APPLICATION->IncludeComponent(
	"personal",
	"",
Array()
);?>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>