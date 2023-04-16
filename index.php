<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Интернет-магазин \"Одежда\"");
?>

    <div class="main-banner" style="background-image: url(<?= SITE_TEMPLATE_PATH ?>/assets/icon/main/background.png );">
        <div class="main-banner__wrapper">
            <div class="main-banner__logo">
                <a class="logo" href="../../../../../index.php">CYKKYB</a>
            </div>
            <div class="main-banner__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus interdum
                purus, est tortor pulvinar ut in.
                Fringilla a diam enim sed justo, sed iaculis sagittis. Tortor id eu interdum nec ut iaculis.
                Penatibus ullamcorper ultricies morbi ipsum sem metus pharetra, mi. Tortor nibh magna feugiat id nunc,
                dui nisl viverra.
            </div>
        </div>
    </div>
    <div class="main-new">
        <div class="main-new__content">
            <div class="main-new__content-label">НОВЫЙ СЕЗОН</div>
            <div class="main-new__product">

                <div class="main-new__item">
                    <div class="product-card" data-id="">
                        <div class="product-card__image">
                            <img src="/" alt="">
                        </div>
                        <div class="product-card__main">
                            <div class="product-card__info">
                                <div class="product-card__name"></div>
                                <div class="product-card__price"> руб.</div>
                            </div>
                            <button class="like-icon">
                                <i class="fa-regular fa-heart"></i>
                            </button>

                            <button class="basket-icon basket-icon_active">
                                <i class="fa-solid fa-cart-shopping "></i>
                            </button>

                            <button class="basket-icon ">
                                <i class="fa-solid fa-cart-shopping "></i>
                            </button>

                            <button class="basket-icon ">
                                <i class="fa-solid fa-cart-shopping "></i>
                            </button>

                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="main-new__banner"
             style=" background-image: url(<?= SITE_TEMPLATE_PATH ?>/assets/icon/main/new-background.png );">
            <div class="main-new__banner-label">Новая коллекция</div>
            <a class="main-new__button" href="/catalog/index.php">Каталог</a>
        </div>
    </div>
    <div class="main-old">
        <div class="main-old__banner"
             style="background-image: url(<?= SITE_TEMPLATE_PATH ?>/assets/icon/main/old-background.png );"></div>
        <div class="main-old__content">
            <div class="main-old__label">КОЛЛЕКЦИЯ 2018</div>
            <div class="main-old__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Non rutrum ornare ut mattis habitant dui arcu. Sagittis amet nunc ut neque quis nibh arcu.
                Vivamus vestibulum nisi et venenatis sed scelerisque magna consectetur.
                Amet convallis quis gravida facilisis vulputate. Faucibus facilisi habitasse ipsum interdum dictum
                aliquet.
                Velit quis ullamcorper pulvinar nulla malesuada integer.
                Aenean praesent viverra nulla nullam natoque volutpat curabitur auctor.
                Viverra viverra ullamcorper scelerisque risus dignissim egestas. Id aliquam a aliquam egestas leo orci
                pharetra sed diam.
            </div>
            <button class="main-old__button">ПОСМОТРЕТЬ КОЛЛЕКЦИЮ</button>
        </div>

    </div>
    <div class="offers">
        <div class="offers__wrapper">
            <div class="offers__container container1">
                <div class="offers__label">Новые поступления</div>
                <div class="offers__items">
                    <div class="product-card" data-id="">
                        <div class="product-card__image">
                            <img src="/" alt="">
                        </div>
                        <div class="product-card__main">
                            <div class="product-card__info">
                                <div class="product-card__name"></div>
                                <div class="product-card__price"> руб.</div>
                            </div>
                            <button class="like-icon">
                                <i class="fa-regular fa-heart"></i>
                            </button>

                            <button class="basket-icon basket-icon_active">
                                <i class="fa-solid fa-cart-shopping "></i>
                            </button>

                            <button class="basket-icon ">
                                <i class="fa-solid fa-cart-shopping "></i>
                            </button>

                            <button class="basket-icon ">
                                <i class="fa-solid fa-cart-shopping "></i>
                            </button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>