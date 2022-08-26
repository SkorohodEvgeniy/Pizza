<?php include 'header.php'; ?>
<section class="card__single">
    <div class="container">
        <div class="card__top">
            <div class="card__img"></div>
            <div class="card__sidebar">
                <div class="card__title">Говядина 250гр</div>
                <div class="rating">
                    <span class="active__star"></span>
                    <span class="active__star"></span>
                    <span class="active__star"></span>
                    <span class="active__star"></span>
                    <span class="active__star"></span>
                </div>
                <div class="card__count-reviews">
                    Кол-во отзывов: <span>23</span>
                </div>
                <div class="card__price d-flex justify-content-between">
                    Цена за уп. <span><b>1050грн.</b></span>
                </div>
                <div class="card__price d-flex justify-content-between">
                    Кол-во шт в упаковке <span><b>4шт.</b></span>
                </div>
                <div class="card__price d-flex justify-content-between align-items-baseline">
                    <div>Количество</div>
                    <div class="d-flex flex-column align-items-end">
                        <div class="card__increment-field d-flex align-items-center">
                            <span class="min button"> - </span>
                            <input type="text" name="qty" id="qty" maxlength="12" />
                            <span class="plus button"> + </span>
                        </div>
                        <div class="card__measurements">
                            Ед. изм.: <span>упаковка</span>
                        </div>
                    </div>
                </div>
                <div class="card__total d-flex justify-content-between">
                    Итого к оплате
                    <span><b>1 050 <span>грн</span></b></span>
                </div>
                <div class="card__btn d-flex justify-content-between">
                    <button class="card__btn-buy">Купить</button>
                    <button class="card__btn-addCard">
                        <img src="img/svg/shopping-cart-w.svg" alt="card" />
                    </button>
                </div>
            </div>
        </div>
        <div class="card__bottom d-flex justify-content-between row">
            <div class="card__bottom--info col-8">
                <ul class="nav nav-tabs card__info-tabs" id="CardTab" role="tablist">
                    <li class="nav-item " role="presentation">
                        <button class="nav-link active" id="home-tab" data-toggle="tab" data-target="#home"
                            type="button" role="tab" aria-controls="home" aria-selected="true">О товаре</button>
                    </li>
                    <li class="nav-item " role="presentation">
                        <button class="nav-link" id="profile-tab" data-toggle="tab" data-target="#profile" type="button"
                            role="tab" aria-controls="profile" aria-selected="false">Параметры</button>
                    </li>
                    <li class="nav-item tab__item" role="presentation">
                        <button class="nav-link" id="messages-tab" data-toggle="tab" data-target="#messages"
                            type="button" role="tab" aria-controls="messages" aria-selected="false">Отзывы</button>
                    </li>

                </ul>

                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <h3 class="tab__title">Описание</h3>
                        <p>Полутвердый пластичный однородный сыр, слегка ломкий на изгибе. Пажитник придает легкое
                            ореховое послевкусие. В Италии считается столовым сыром, который подходит к любому
                            времени суток и к любому блюду и к вину</p>
                        <p> Вес головки 500 г. +/-10%. Цена за 1 кг.</p>
                        <p> Продукция компании Alpenville изготовлена преимущественно из Шарангского молока</p>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <div class="parametrs">
                            <ul>
                                <li>Калории: <span>420</span></li>
                                <li>Жиры:<span>54</span></li>
                                <li>Белки: <span>27</span></li>
                                <li>Углеводы: <span>18</span></li>
                                <li>Масса: <span>500 грамм</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="messages" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <div class="tab__reviews">
                            <h3 class="tab__reviews-title">Отзывы</h3>
                            <div class="tab__reviews-slider">
                                <div class="tab__review">
                                    <div class="tab__review-header d-flex">
                                        <picture>
                                            <source srcset="img/avatar.webp" type='image/webp'>
                                            <img loading='lazy' src="img/avatar.jpg" width='35' height='35'
                                                alt='avatar'>
                                        </picture>
                                        <div class="header__title">
                                            <h4>Анатолий Петров</h4>
                                            <div class="rating d-flex">
                                                <span class="active__star"></span>
                                                <span class="active__star"></span>
                                                <span class="active__star"></span>
                                                <span class="active__star"></span>
                                                <span class="active__star"></span>
                                            </div>
                                            <a href="#" class="header__title-social">vk.com/anatoliy</a>
                                        </div>
                                    </div>
                                    <div class="tab__review-footer">
                                        <p class="footer__text">Заказал 5кг мяса, живу в Московской области. Как и
                                            обещал оператор, привезли через 1,5 часа. Свежее, как будто было живое
                                            еще по дороге. Действительно натуральные продукты. Я обязательно буду
                                            заказывать дальше. А теперь подробнее о плюсах и минусах всего магази...
                                        </p>
                                        <a href="#" class="read-more">Читать полностью</a>
                                    </div>
                                </div>
                                <div class="tab__review">
                                    <div class="tab__review-header d-flex">
                                        <picture>
                                            <source srcset="img/avatar.webp" type='image/webp'>
                                            <img loading='lazy' src="img/avatar.jpg" width='35' height='35'
                                                alt='avatar'>
                                        </picture>
                                        <div class="header__title">
                                            <h4>Анатолий Петров</h4>
                                            <div class="rating d-flex">
                                                <span class="active__star"></span>
                                                <span class="active__star"></span>
                                                <span class="active__star"></span>
                                                <span class="active__star"></span>
                                                <span class="active__star"></span>
                                            </div>
                                            <a href="#" class="header__title-social">vk.com/anatoliy</a>
                                        </div>
                                    </div>
                                    <div class="tab__review-footer">
                                        <p class="footer__text">Заказал 5кг мяса, живу в Московской области. Как и
                                            обещал оператор, привезли через 1,5 часа. Свежее, как будто было живое
                                            еще по дороге. Действительно натуральные продукты. Я обязательно буду
                                            заказывать дальше. А теперь подробнее о плюсах и минусах всего магази...
                                        </p>
                                        <a href="#" class="read-more">Читать полностью</a>
                                    </div>
                                </div>
                                <div class="tab__review">
                                    <div class="tab__review-header d-flex">
                                        <picture>
                                            <source srcset="img/avatar.webp" type='image/webp'>
                                            <img loading='lazy' src="img/avatar.jpg" width='35' height='35'
                                                alt='avatar'>
                                        </picture>
                                        <div class="header__title">
                                            <h4>Анатолий Петров</h4>
                                            <div class="rating d-flex">
                                                <span class="active__star"></span>
                                                <span class="active__star"></span>
                                                <span class="active__star"></span>
                                                <span class="active__star"></span>
                                                <span class="active__star"></span>
                                            </div>
                                            <a href="#" class="header__title-social">vk.com/anatoliy</a>
                                        </div>
                                    </div>
                                    <div class="tab__review-footer">
                                        <p class="footer__text">Заказал 5кг мяса, живу в Московской области. Как и
                                            обещал оператор, привезли через 1,5 часа. Свежее, как будто было живое
                                            еще по дороге. Действительно натуральные продукты. Я обязательно буду
                                            заказывать дальше. А теперь подробнее о плюсах и минусах всего магази...
                                        </p>
                                        <a href="#" class="read-more">Читать полностью</a>
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="tab__reviews-add" data-toggle="modal"
                                data-target="#modalAddReviews">
                                Добавить отзыв
                            </button>

                        </div>
                    </div>
                </div>

            </div>
            <div class="card__sidebar col-4">
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
</section>
<section class="delivery">
    <div class="container">
        <div class="delivery__block">
            <h4 class="delivery__title">
                Бесплатная доставка по Киеву<br />
                и Области от 999 грн!
            </h4>
            <a href="#">Оформиить</a>
        </div>
    </div>




</section>

<?php include 'footer.php'; ?>