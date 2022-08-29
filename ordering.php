<?php include 'header.php'; ?>

<div class="main">
    <section class="page__cart pb-5">
        <div class="container">
            <div class="page__cart-wrapper">
                <div class="row">
                    <div class="col-12 col-md-6">
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
                        <div class="box-delivery">
                            <ul class="nav nav-pills mb-3 align-items-center" id="pills-tab-pickup" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-home-tab" data-toggle="pill"
                                        data-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                        aria-selected="true">Доставка</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-profile-tab" data-toggle="pill"
                                        data-target="#pills-profile" type="button" role="tab"
                                        aria-controls="pills-profile" aria-selected="false">Самовывоз(-20%)</button>
                                </li>
                            </ul>

                            <div class="total-pay deliv">
                                <div class="row as">
                                    <div class="col-6">
                                        <ul class="pl-0 d-flex flex-column justify-content-between">
                                            <li>Итого:<span>700</span>грн</li>
                                            <li>Доставка:<span>0</span>грн</li>
                                        </ul>
                                    </div>
                                    <div class="col-6">
                                        <p class="mb-0">Итого к оплате:</p>
                                        <span>700грн</span>
                                    </div>
                                </div>
                                <div class="row ad">
                                    <div class="col-6">
                                        <ul class="pl-0 d-flex flex-column justify-content-between">
                                            <li>Итого:<span>700</span>грн</li>
                                            <li>Доставка:<span>-140</span>грн</li>
                                        </ul>
                                    </div>
                                    <div class="col-6">
                                        <p class="mb-0">Итого к оплате:</p>
                                        <span>560грн</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-12 col-md-6 ">
                        <div class="tab-content" id="pills-tabContent-pickup">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                aria-labelledby="pills-home-tab">
                                <form action="" class="mb-5">
                                    <div class="d-flex flex-column mb-3">
                                        <label for="">Район доставки</label>
                                        <select name="delivery-area" id="delivery-area">
                                            <option value="1">Выбрать</option>
                                            <option value="1">Троя</option>
                                            <option value="2">Центр</option>
                                            <option value="3">Днепр</option>
                                            <option value="4">Борщ</option>
                                        </select>
                                    </div>
                                    <div class="d-flex flex-column mb-3">
                                        <label for="fullName">ФИО</label>
                                        <input type="text" id="fullName" placeholder="Введите Ваше полное имя">
                                    </div>
                                    <div class="d-flex flex-column mb-3">
                                        <label for="fullName">Телефон</label>
                                        <input type="tel" id="fullName" placeholder="+380">
                                    </div>
                                    <div class="d-flex flex-column mb-3">
                                        <label for="adresDelivery">Адрес доставки</label>
                                        <input type="text" id="adresDelivery" placeholder="Введите адрес доставки">
                                    </div>
                                    <div class="d-flex flex-column mb-3">
                                        <label for="">Способ оплаты</label>
                                        <select name="Payment-method" id="paymentMethod">
                                            <option value="1">Наличные</option>
                                            <option value="2">Безнал</option>
                                        </select>
                                    </div>
                                    <button class="add-comment " type="button" data-toggle="collapse"
                                        data-target="#collapseExample" aria-expanded="false"
                                        aria-controls="collapseExample">
                                        Добавить комментарий.
                                    </button>


                                    <div class="collapse" id="collapseExample">
                                        <input type="text" placeholder="Комментарий к заказу">
                                    </div>
                                    <button class="btn__green">Оформить заказ</button>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                aria-labelledby="pills-profile-tab">
                                <form action="" class="mb-5">

                                    <div class="d-flex flex-column mb-3">
                                        <label for="fullName">ФИО</label>
                                        <input type="text" id="fullName" placeholder="Введите Ваше полное имя">
                                    </div>
                                    <div class="d-flex flex-column mb-3">
                                        <label for="fullName">Телефон</label>
                                        <input type="tel" id="fullName" placeholder="+380">
                                    </div>
                                    <div class="d-flex flex-column mb-3">
                                        <label for="">Когда заберете?</label>
                                        <select name="Payment-method" id="paymentMethod">
                                            <option value="1">В ближайшее время</option>
                                            <option value="2">В течении часа</option>
                                            <option value="2">Завтра</option>
                                        </select>
                                    </div>


                                    <button class="btn__green">Оформить заказ</button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
</div>
<?php include 'footer.php'; ?>