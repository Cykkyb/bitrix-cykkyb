<?php
CModule::IncludeModule('iblock');

use Bitrix\Main;
use Bitrix\Main\Context;
use Bitrix\Main\Localization\Loc;
use Bitrix\Iblock;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

class myCatalog extends CBitrixComponent
{

    protected function setSef()
    {
        $arVariables = [];
        $arDefaultUrlTemplates404 = [
            "main" => "", // разводящая каталога
            "section" => "#SECTION_CODE_PATH#/", // разделы (в т.ч. бренды)
            "detail" => "#SECTION_CODE_PATH#/#ELEMENT_CODE#/", // детальная
        ];

        $engine = new \CComponentEngine($this);
        $arUrlTemplates = $engine->MakeComponentUrlTemplates($arDefaultUrlTemplates404, $this->arParams["SEF_URL_TEMPLATES"]);

        $engine->addGreedyPart("#SECTION_CODE_PATH#");
        $engine->setResolveCallback(["CIBlockFindTools", "resolveComponentEngine"]);

        $this->arResult['TEMPLATE'] = $engine->guessComponentPath(
            $this->arParams["SEF_FOLDER"],
            $arUrlTemplates,
            $arVariables
        );
        if (!$this->arResult['TEMPLATE']) {
            $request = Context::getCurrent()->getRequest();
            $rDir = $request->getRequestedPageDirectory() . '/';
            if ($rDir == $this->arParams["SEF_FOLDER"])
                $this->arResult['TEMPLATE'] = 'main';
        }

        $this->arResult['TEMPLATE_PAGE'] = $this->arResult['TEMPLATE'];
        $this->arResult['VARIABLES'] = $arVariables;
        $this->arResult['TEMPLATES_PATH'] = $arUrlTemplates;
        if (!$this->arResult['TEMPLATE']) $this->set404();

    }

    public function getResult()
    {
        $this->includeComponentTemplate($this->arResult['TEMPLATE_PAGE']);
    }

    public function executeComponent()
    {
        $this->setSef();
        $this->getResult();

    }
}





