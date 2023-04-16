<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

?>
<?php if (!empty($arResult['ITEM'])) { ?>
    <div class="catalog">
        <div class="catalog__wrapper">
            <div class="catalog__container catalog__detail">
                <div class="catalog__label"><?= $arResult['ITEM']['NAME'] ?></div>
                <div class="product-card" data-id="<?= $arResult['ITEM']['ID'] ?>">
                    <div class="product-card__image product-card__image_detail">
                        <img src="<?= $arResult['ITEM']['PREVIEW_PICTURE_SRC'] ?>  " alt="">
                    </div>
                    <div class="product-card__main">
                        <div class="product-card__info">
                            <a href="/catalog/<?= $arResult['ITEM']['CODE'] ?>/"
                               class="product-card__name"><?= $arResult['ITEM']['NAME'] ?></a>
                            <div class="product-card__price"><?= $arResult['ITEM']['PRICE'] ?> руб</div>
                        </div>
                        <button class="like-icon">
                            <i class="fa-regular fa-heart">

                            </i>
                        </button>
                        <!--                                <button class="basket-icon basket-icon_active">-->
                        <!--                                    <i class="fa-solid fa-cart-shopping "></i>-->
                        <!--                                </button>-->
                        <!---->
                        <button class="basket-icon" data-id="<?= $arResult['ITEM']['ID'] ?>">
                            <i class="fa-solid fa-cart-shopping "></i>
                        </button>
                    </div>
                </div>
            </div>
            <? $APPLICATION->IncludeComponent(
                "reviews",
                "",
                [
                    "IBLOCK_ID" => '',
                    "PRODUCT_ID" => $arResult['ITEM']['ID']
                ]
            ); ?>
        </div>
    </div>
<?php } ?>

