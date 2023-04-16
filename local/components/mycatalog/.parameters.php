<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$sefVariables = ["ELEMENT_ID", "ELEMENT_CODE",
    "SECTION_ID", "SECTION_CODE", "SECTION_CODE_PATH"];

$arComponentParameters = array(
    'PARAMETERS' => [
        'IBLOCK_ID' => [
            "PARENT" => "BASE",
            "NAME" => 'Id инфоблока',
            "TYPE" => "TEXT",
            "DEFAULT" => '',
        ],
        "SEF_MODE" => [
            "main" => [
                "NAME" => "Разводящая",
                "DEFAULT" => "",
                "VARIABLES" => $sefVariables,
            ],
            "section" => [
                "NAME" => "Страница категории",
                "DEFAULT" => "#SECTION_CODE#/",
                "VARIABLES" => $sefVariables
            ],
            "detail" => [
                "NAME" => "Страница детального просмотра",
                "DEFAULT" => "#ELEMENT_ID#/",
                "VARIABLES" => $sefVariables
            ],
            "search" => [
                "NAME" => "Страница поиска",
                "DEFAULT" => "search/",
                "VARIABLES" => $sefVariables
            ],
        ]
    ],
);