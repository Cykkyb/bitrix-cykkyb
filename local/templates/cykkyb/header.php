<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?php

use Bitrix\Main\Page\Asset;
?>
<!doctype html>
<html lang="en">
<head>
    <? $APPLICATION->ShowHead();
    Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">');
    Asset::getInstance()->addString('<meta http-equiv="X-UA-Compatible" content="ie=edge">');
    CJSCore::Init(array('jquery'));
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/node_modules/@fancyapps/fancybox/dist/jquery.fancybox.css');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/node_modules/@fancyapps/fancybox/dist/jquery.fancybox.js');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/style/dist/style.min.css');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/script/dist/script.min.js');
    Asset::getInstance()->addString('<script src="https://kit.fontawesome.com/b065351ae5.js" crossorigin="anonymous"></script>');
    ?>
    <title><? $APPLICATION->ShowTitle(); ?></title>
</head>
<body>
<div id="panel">
    <?php $APPLICATION->ShowPanel(); ?>
</div>
<wrapper class="wrapper">
    <header class="header">
        <div class="header__wrapper">
            <div class="header-top">
                <div class="header-top__container container1">
                    <div class="header-top__wrapper">
                        <div class="header-top__info">

                            <div class="header-top__info-item">8 (800) 555-35-35</div>
                            <div class="header-top__info-item"> 9:00 — 18:00</div>
                        </div>
                        <div class="login">

                            <a class="login__input" href="/?logout=yes&<?= bitrix_sessid_get() ?>">Выход</a>
                            <a class="login__input" href="/personal/"> </a>

                            <a class="login__input" href="/personal/auth/"> Вход</a>
                            <a class="login__registration" href="/personal/registration/">Регистрация</a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="header-main">
                <div class="header-main__container container1">
                    <div class="header-main__wrapper">
                        <div class="mobile-search">
                            <i class="fa-solid fa-magnifying-glass mobile-icon__search"></i>
                        </div>
                        <div class="header-main__logo">
                            <a class="logo" href="/">CYKKYB</a>
                        </div>
                        <div class="menu-list">
                            <? $APPLICATION->IncludeComponent(
                                "bitrix:menu",
                                "top_menu",
                                array(
                                    "ALLOW_MULTI_SELECT" => "N",
                                    "CHILD_MENU_TYPE" => "top",
                                    "DELAY" => "N",
                                    "MAX_LEVEL" => "1",
                                    "MENU_CACHE_GET_VARS" => array(""),
                                    "MENU_CACHE_TIME" => "3600",
                                    "MENU_CACHE_TYPE" => "N",
                                    "MENU_CACHE_USE_GROUPS" => "Y",
                                    "ROOT_MENU_TYPE" => "top",
                                    "USE_EXT" => "N"
                                )
                            ); ?>
                        </div>
                        <div class="header-icon">
                            <a class="header-icon__item " href="/personal/basket/">
                                <div class="cart">
                                    <i class="fa-solid fa-cart-shopping cart__icon"></i>
                                    <span class="cart__count">
                                </span>
                                </div>

                            </a>
                            <a class="header-icon__item">
                                <i class="fa-solid fa-magnifying-glass header-icon__search"></i>
                            </a>
                        </div>
                        <div class="mobile-menu">
                            <div class="mobile-menu__wrapper">
                                <div class="mobile-info">
                                    <div class="mobile-info__item">Номер телефона: 8 (800) 555-35-35</div>
                                    <div class="mobile-info__item">Время работы: 9:00 — 18:00</div>
                                </div>
                                <div class="header-icon header-icon_mobile">
                                    <a class="header-icon__item " href="../basket/index.php">
                                        <div class="cart">
                                            <i class="fa-solid fa-cart-shopping cart__icon"></i>
                                            <span class="cart__count"></span>
                                        </div>
                                    </a>
                                </div>
                                <div class="menu-list menu-list_mobile">
                                    <? $APPLICATION->IncludeComponent(
                                        "bitrix:menu",
                                        "top_menu",
                                        array(
                                            "ALLOW_MULTI_SELECT" => "N",
                                            "CHILD_MENU_TYPE" => "top",
                                            "DELAY" => "N",
                                            "MAX_LEVEL" => "1",
                                            "MENU_CACHE_GET_VARS" => array(""),
                                            "MENU_CACHE_TIME" => "3600",
                                            "MENU_CACHE_TYPE" => "N",
                                            "MENU_CACHE_USE_GROUPS" => "Y",
                                            "ROOT_MENU_TYPE" => "top",
                                            "USE_EXT" => "N"
                                        )
                                    ); ?>
                                </div>
                            </div>
                        </div>
                        <div class="icon-menu">
                            <span></span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </header>
            <?php $APPLICATION->IncludeComponent(
                "bitrix:breadcrumb",
                ".default",
                array(
                    "COMPONENT_TEMPLATE" => ".default",
                    "START_FROM" => "0",
                    "PATH" => "",
                    "SITE_ID" => "s1"
                ),
                false
            ); ?>
    <main class="main">
        <div class="main__wrapper">