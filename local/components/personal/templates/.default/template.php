<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

?>
<?php if (!empty($arResult)) { ?>
    <div class="personal">
        <div class="personal__container container1">
            <div class="personal__main">
                <div class="personal__logo">
                    <img src="../icon/personal/unknow-user.png" alt="" class="personal__icon">
                </div>
                <div class="personal__info">
                    <div class="personal__item">
                        <div class="personal__info-label">Email:</div>
                        <div class="personal__info-content"><?= $arResult['EMAIL'] ?></div>
                    </div>

                    <div class="personal__item">
                        <div class="personal__info-label"> Имя:</div>
                        <div class="personal__info-content"><?= $arResult['NAME'] ?></div>
                        <buttob class="personal__button-change">
                            <i class="personal__button-icon fa-solid fa-retweet"></i>
                            <i class="personal__button-icon personal__button-icon_hidden fa-solid fa-xmark"></i>
                        </buttob>
                        <form action="/php/update_user.php" method="post" class="personal__change">
                            <input type="text" class="personal__input personal__input_change" name="login">
                            <button type="submit" class="personal__button-submit">Изменить</button>
                        </form>

                    </div>

                    <?php if (!empty($arResult['PHONE'])) { ?>
                        <div class="personal__item">
                            <div class="personal__info-label"> Номер телефона:</div>
                            <div class="personal__info-content">$arResult['PHONE']</div>
                            <buttob class="personal__button-change">
                                <i class="personal__button-icon fa-solid fa-retweet"></i>
                                <i class="personal__button-icon personal__button-icon_hidden fa-solid fa-xmark"></i>
                            </buttob>
                            <form action="/php/update_user.php" method="post" class="personal__change">
                                <input type="text" class="personal__input personal__input_change" name="number">
                                <button type="submit" class="personal__button-submit">Изменить</button>
                            </form>
                        </div>
                    <?php } else { ?>
                        <form action="/php/update_user.php" method="post" class="personal__item">
                            Номер телефона:
                            <input type="text" class="personal__input" name="number">
                            <button type="submit" class="personal__button-submit personal__button-submit_active">
                                Сохранить
                            </button>
                        </form>
                    <?php } ?>

                    <?php if ($arResult['STREET']) { ?>
                        <div class="personal__item">
                            <div class="personal__info-label"> Адрес:</div>
                            <div class="personal__info-content"><?= $arResult['EMAIL'] ?> </div>
                            <buttob class="personal__button-change">
                                <i class="personal__button-icon fa-solid fa-retweet"></i>
                                <i class="personal__button-icon personal__button-icon_hidden fa-solid fa-xmark"></i>
                            </buttob>
                            <form action="/php/update_user.php" method="post" class="personal__change">
                                <input type="text" class="personal__input personal__input_change" name="address">
                                <button type="submit" class="personal__button-submit">Изменить</button>
                            </form>
                        </div>
                    <?php } else { ?>
                        <form action="/php/update_user.php" method="post" class="personal__item">
                            Адрес:
                            <input type="text" class="personal__input" name="address">
                            <button type="submit" class="personal__button-submit personal__button-submit_active">
                                Сохранить
                            </button>
                        </form>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
<?php } ?>




