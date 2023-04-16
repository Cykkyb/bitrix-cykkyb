<?php
CModule::IncludeModule('iblock');


use Bitrix\Main;
use Bitrix\Main\Context;
use Bitrix\Main\Localization\Loc;
use Bitrix\Iblock;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

class Personal extends CBitrixComponent
{
    public function getResult()
    {
        global $USER;

        $id = $USER->GetId();
        $userData = CUser::GetByID($id)->GetNext();

        $this->arResult = $userData;

        $this->includeComponentTemplate();
    }

    public function executeComponent()
    {
        $this->getResult();
    }
}





