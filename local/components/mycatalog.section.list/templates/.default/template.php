<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
?>

<?php if (!empty($arResult['ITEMS'])) { ?>
    <div class="category">
        <div class="container1">
            <div class="category__list">
                <?php foreach ($arResult['ITEMS'] as $arItem) { ?>

                    <a href="/catalog/<?= $arItem['CODE'] ?>/" class="category__item">
                        <?= $arItem['NAME'] ?>
                    </a>
                <?php } ?>
            </div>
        </div>
    </div>
<?php } ?>

