
<div class="basket">
    <div class="basket__container container1">
                <div class="basket__item " data-id="">
                    <div class="basket__image">
                        <img src="/" alt="">
                    </div>
                    <div class="basket__info">
                        <div class="basket__name"> </div>
                        <div class="basket__price"> &#8381;</div>
                    </div>
                    <div class="counter" data-id="">
                        <button class="counter__button decrement">-</button>
                        <div class="counter__input"></div>
                        <button class="counter__button increment">+</button>
                    </div>
                    <div class="basket__icon">
                        <button class="basket__del" data-id="">
                            <i class="fa-regular fa-trash-can"></i>
                        </button>
                        <button class="like-icon">
                            <i class="fa-regular fa-heart"></i>
                        </button>
                    </div>
                </div>


            <div class="order-confirm basket__order">
                <div class="order-confirm__container container1">
                    <div class="order-confirm__info">Сумма заказа:
                        <span class="order-confirm__price"></span> &#8381;
                    </div>
                    <a href="/order/index.php" class="order-confirm__button">Заказать</a>
                </div>
            </div>

            <div class="order-modal" id="order-modal" style="display:none;">
                <form class="order-modal__data">
                    <input type="email" class="order-modal__input" placeholder="email">
                    <input type="text" class="order-modal__input" placeholder="card-number">
                    <input type="text" class="order-modal__input" placeholder="address">
                </form>
                <div class="order-modal__products">
                            <div class="modal-modal-product-card" data-id="">
                                <div class="modal-product-card__image">
                                    <img src="/  " alt="">
                                </div>
                                <div class="modal-product-card__main">
                                    <div class="modal-product-card__info">
                                        <div class="modal-product-card__name"></div>
                                        <div class="modal-product-card__count"> шт</div>
                                    </div>
                                </div>
                            </div>
                </div>
                <div class="order-modal__info">
                    <div class="order-modal__price">Сумма: <span class="order__price"></span> &#8381;</div>
                    <button class="order__button-submit">Оплатить</button>
                </div>
            </div>

            <div class="basket__empty">
                <div class="basket__empty-label">А тут пусто!</div>
                <img class="basket__empty-icon" src="../icon/basket/empty.png" alt="">
            </div>

    </div>
</div>
