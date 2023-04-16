<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<?php if (!empty($arResult)) { ?>
    <?php foreach ($arResult as $arItem) { ?>
        <?php if ($arItem['SELECTED']) { ?>
            <a class="menu-list__item menu-list__item_active" href="<?= $arItem['LINK'] ?>">
                <?= $arItem['TEXT'] ?>
            </a>
        <?php } else { ?>
            <a class="menu-list__item " href="<?= $arItem['LINK'] ?>">
                <?= $arItem['TEXT'] ?>
            </a>
        <?php } ?>
    <?php } ?>
<?php } ?>




