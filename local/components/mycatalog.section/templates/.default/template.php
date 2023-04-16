<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
?>

<?php if (!empty($arResult['ITEMS'])) {?>
    <div class="catalog">
        <div class="catalog__wrapper">
            <div class="catalog__container container1">
                <div class="catalog__label"><?= $arResult['SECTION_NAME']?></div>
                <div class="catalog__list">
                    <div class="catalog__list-items">
                        <?php foreach ($arResult['ITEMS'] as $arItem) { ?>

                            <div class="product-card" data-id="<?= $arItem['ID'] ?>">
                                <div class="product-card__image">
                                    <img src="<?= $arItem['PREVIEW_PICTURE_SRC'] ?>  " alt="">
                                </div>
                                <div class="product-card__main">
                                    <div class="product-card__info">
                                        <a href="/catalog/<?= $arResult['SECTION_INFO']['CODE'] ?>/<?= $arItem['CODE'] ?>/" class="product-card__name"><?= $arItem['NAME'] ?></a>
                                        <div class="product-card__price"><?= $arItem['PRICE'] ?> руб</div>
                                    </div>
                                    <button class="like-icon">
                                        <i class="fa-regular fa-heart">

                                        </i>
                                    </button>
                                    <!--                                <button class="basket-icon basket-icon_active">-->
                                    <!--                                    <i class="fa-solid fa-cart-shopping "></i>-->
                                    <!--                                </button>-->
                                    <!---->
                                    <button class="basket-icon" data-id="<?= $arItem['ID'] ?>">
                                        <i class="fa-solid fa-cart-shopping "></i>
                                    </button>
                                </div>
                            </div>

                        <?php } ?>

                    </div>
                </div>

            </div>
        </div>
    </div>
<?php } ?>

