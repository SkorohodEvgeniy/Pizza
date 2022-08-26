<footer class="footer">
    <div class="container">
        <div class="footer__wrapper row">
            <div class="footer__left col-6">
                <div class="phones row">
                    <div class="phones__item col-sm-6 col-12 d-flex flex-column">
                        <span>Бесплатный звонок по Украине</span><a href="tel:+380505556677">+38(050) 555 66
                            77</a>
                    </div>
                    <div class="phones__item col-sm-6 col-12 d-flex flex-column">
                        <span>Для приема заказов</span><a href="tel:+380505556677">+38(050) 555 66 88</a>
                    </div>
                </div>
                <div class="work--time">
                    График работы по будням с 9:00 до 18:00
                </div>
                <div class="work--email">
                    <a class="email" href="mailto:test@ukr.net">info@ukr.net</a>
                    <a href="page-contact.html" class="supports">Поддержка</a>
                </div>
            </div>
            <div class="footer__center col">
                <div class="social">
                    <a href="#">Мы в вконтакте ></a>
                    <a href="#">Мы в instagram ></a>
                </div>
            </div>
            <div class="footer__right col-3">
                <div class="person">
                    <a href="#">
                        <img src="img/svg/person-w.svg" alt="person-w" width="25" height="25" />
                        <span>Войти/Регистрация</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="footer__bottom">
            <span>©2020. Пиросмани</span>
            <a href="#">Условия и соглашения</a>
            <a href="#">Политика конфиденциальности</a>
        </div>
    </div>
</footer>
<!--Modal-->

<!-- Button trigger modal -->

<!-- Modal inSingn-->
<div class="modal fade modal__register" id="inSingn" data-keyboard="false" aria-labelledby="staticBackdropLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <img src="img/svg/person-reg.svg" width="34" height="34" />
                <h5 class="modal-title" id="staticBackdropLabel">
                    Войти в личный кабинет
                </h5>
                <form class="d-flex flex-column justify-content-center">
                    <div class="form-group">
                        <input type="tel" class="form-control" id="recipient-name" placeholder="Телефон" />
                    </div>
                    <div class="form-group mb-0">
                        <input type="tel" class="form-control mb-1" id="recipient-name" placeholder="Пароль" />
                    </div>
                    <button type="button" class="forgot" data-toggle="modal" data-dismiss="modal"
                        data-target="#lostPassword">
                        Забыли пароль?
                    </button>
                    <button type="submit" class="btn__submit">Войти</button>
                </form>
            </div>
            <div class="modal-footer d-flex justify-content-center">
                <span>Впервые у нас?</span>
                <button type="button" class="btn_registration" data-toggle="modal" data-target="#registration"
                    data-dismiss="modal">
                    Зарегистрироваться
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Registration-->
<div class="modal fade modal__register" id="registration" data-keyboard="false" aria-labelledby="staticBackdropLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <img src="img/svg/person-reg.svg" width="34" height="34" />
                <h5 class="modal-title" id="staticBackdropLabel">Регистрация</h5>
                <form class="d-flex flex-column justify-content-center">
                    <div class="form-group mb-2">
                        <input type="tel" class="form-control" id="tel-name" placeholder="Телефон" />
                    </div>
                    <div class="form-group mb-2">
                        <input type="tel" class="form-control" id="pas-name" placeholder="Пароль" />
                    </div>
                    <div class="form-group mb-1">
                        <input type="tel" class="form-control" id="pasRep-name" placeholder="Повторите пароль" />
                    </div>
                    <div class="form-group radio__group mb-1 d-flex flex-column">
                        <div class="d-flex">
                            <input type="radio" class="form-control radio__group-one" id="radio-one" />
                            <label for="radio-one">Хочу получать выгодные предложения от магазина</label>
                        </div>
                        <div class="d-flex">
                            <input type="radio" class="form-control radio__group-two" id="radio-two" />
                            <label for="radio-two">Принимаю условия
                                <a href="#">Пользовательского соглашения</a> ,<br /><a href="#">Политики
                                    конфиденциальности</a>
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn__submit">
                        Зарегистрироваться
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal Lost Password-->
<div class="modal fade modal__lostPassword" id="lostPassword" data-keyboard="false"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <img src="img/svg/person-reg.svg" width="34" height="34" />
                <h5 class="modal-title" id="staticBackdropLabel">
                    Восстановление пароля
                </h5>
                <form class="d-flex flex-column justify-content-center">
                    <div class="form-group mb-1">
                        <input type="tel" class="form-control" id="tel-name" placeholder="Телефон" />
                    </div>
                    <div class="form-group mb-1">
                        <input type="tel" class="form-control" id="pas-name"
                            placeholder="Новый пароль (мин. 6 символов)" />
                    </div>
                    <div class="form-group mb-1">
                        <input type="tel" class="form-control" id="pasRep-name" placeholder="Повторите пароль" />
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn__escape" data-dismiss="modal">
                            Отменить
                        </button>
                        <button type="button" class="btn btn__update-password">
                            Обновить пароль
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal Booking-->
<div class="modal fade modal__booking" id="modalBooking" data-keyboard="false" aria-labelledby="staticBackdropLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <img src="img/svg/person-reg.svg" width="34" height="34" />
                <h5 class="modal-title" id="staticBackdropLabel">
                    Бронирование стола
                </h5>
                <form class="d-flex flex-column justify-content-center">
                    <div class="form-group mb-1">
                        <input type="tel" class="form-control col-12" id="field-name" placeholder="Имя" />
                    </div>
                    <div class="form-group mb-1 d-flex">
                        <input type="tel" class="form-control" id="tel-name" placeholder="+380" />
                        <input type="number" class="form-control" id="amount-name" placeholder="Количество человек" />
                    </div>
                    <div class="form-group mb-1 d-flex">
                        <input type="time" class="form-control" id="time-name" placeholder="Время:__:__" />
                        <input type="date" class="form-control" id="date-name" placeholder="Дата: дд.мм.гг" />
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn__update-password btn__green">
                            Забронировать
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal Add Reviews-->
<div class="modal fade modal__add-reviews" id="modalAddReviews" data-keyboard="false"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close pt-0" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h5 class="modal-title text-left" id="staticBackdropLabel">
                    Добавить отзыв
                </h5>
                <div class="rating d-flex mb-2">
                    <span>Ваша оценка:</span>
                    <span class="active__star"></span>
                    <span class="active__star"></span>
                    <span class="active__star"></span>
                    <span class="active__star"></span>
                    <span class="active__star"></span>
                </div>
                <form class="d-flex flex-column justify-content-center">
                    <div class="form-group d-flex mx-0">
                        <label for="field-name">Ваше имя:</label>
                        <input type="tel" class="form-control" id="field-name" placeholder="Введите Ваше имя" />
                    </div>
                    <div class="form-group d-flex mx-0 mb-3">
                        <label for="field-name" class="align-self-start me-4">Ваш отзыв:</label>
                        <textarea name="" class="form-control" id="" cols="" rows="5"></textarea>
                    </div>

                    <button type="button" class="btn btn__update-password btn__green">
                        Добавить отзыв
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="js/main.js"></script>
</body>

</html>