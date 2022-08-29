<?php include 'header.php'; ?>

<div class="main">
    <section class="page__cart">
        <div class="container">
            <div class="page__cart-wrapper">
                <div class="row">
                    <div class="col-12 col-md-8">
                        <h2 class="page__cart-title">Корзина</h2>
                        <ul class="lists-eats pl-0 mb-5">
                            <li class="pl-0">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="delete">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                            <path
                                                d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                        </svg>
                                    </div>
                                    <span class="img">
                                    </span>
                                    <span class="name">Хачапури</span>
                                    <div class="card__increment-field d-flex align-items-center">
                                        <span class="min button"> - </span>
                                        <input type="text" name="qty" id="qty" maxlength="12">
                                        <span class="plus button"> + </span>
                                    </div>
                                    <span class="price">350грн</span>
                                </div>
                            </li>
                            <li class="pl-0">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="delete">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                            <path
                                                d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                        </svg>
                                    </div>
                                    <span class="img">
                                    </span>
                                    <span class="name">Хачапури</span>
                                    <div class="card__increment-field d-flex align-items-center">
                                        <span class="min button"> - </span>
                                        <input type="text" name="qty" id="qty" maxlength="12">
                                        <span class="plus button"> + </span>
                                    </div>
                                    <span class="price">350грн</span>
                                </div>
                            </li>
                        </ul>
                        <div class="card__bottom">
                            <div class="card__sidebar">
                                <div class="card__title">Закажите на 2000 UAH и получите</div>
                                <div class="card__bonus"><b>20 UAH</b> на бонусный счет</div>
                                <div class="card__free-delivery">Бесплатная доставка</div>
                                <div class="range-slide">
                                    <div class="range-line" data-mins="0" data-maxs="3000">
                                        <div class="green-line" style="width: 60%;"></div>
                                        <div class="round" data-min="1000 (минимальный заказ)"></div>
                                    </div>
                                    <div class="range-text">Осталось <b>1988 ГРН</b> до бесплатной доставки</div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="order-buy">
                            <div class="title">Заказ №<span>47593</span></div>
                            <ul class="pl-0 ml-0">
                                <li>Товаров в корзине<span>700</span>грн</li>
                                <li class="percent">Промокод<span>-70</span>грн</li>
                            </ul>
                            <div class="order-total">
                                <p>Итого к оплате:</p>
                                <span>630грн</span>
                            </div>
                            <!--<button type="submit" class="btn__green">Оформить заказ</button>-->
                            <a href="ordering.php" class="btn__green">Оформить заказ</a>
                        </div>
                        <div class="promo-code">
                            <h3 class="title">
                                Промокод
                            </h3>
                            <form action="" class="d-flex">
                                <input type="text">
                                <button type="submit" class="btn__green">Подтвердить</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</div>
<?php include 'footer.php'; ?>