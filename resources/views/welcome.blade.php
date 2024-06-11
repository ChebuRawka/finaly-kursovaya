<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Новые Бизнес Системы</title>
    <link href="https://fonts.cdnfonts.com/css/inter" rel="stylesheet" />
    <link href="https://fonts.cdnfonts.com/css/unbounded" rel="stylesheet" />
    <link rel="stylesheet" href="app.css">
</head>
<body>

<header>
    <div class="header-container">
        <img src="images/logo_dark.png" alt="NBS" class="logo">
        <div class="contact-info">
            <nav>
                <ul>
                    <li><a href="#">О компании</a></li>
                    <li><a href="#">Наши решения</a></li>
                    <li><a href="#">Контакты</a></li>

                </ul>
            </nav>

            <button class="reg-btn">Зарегистрироваться</button>
            <div class="social-web">
                <img   src="images/TelegramHeader.png">
                <img  src="images/WhatsAppHeader.png">
            </div>
        </div>
    </div>

</header>
<section class="cfo-section">
    <div class="content">
        <h1>ВАШ <span class="highlight">ЛИЧНЫЙ CFO</span> НА <br> СТРАЖЕ ВАШЕГО БИЗНЕСА</h1>
        <p>Как отследить финансовые потоки? Куда уходят средства?<br>
            Почему постоянно кассовые разрывы? Где найти новые средства для инвестиций?<br>
            Что делать с налоговой нагрузкой?</p>
        <button class="solution-btn">Получить решение</button>
    </div>
</section>
<section class="credit-section">
    <div class="form-container">
        <h2>Заполните форму</h2>
        <form id="credit-form">
            <div class="form-group">
                <label for="credit-type">Вид кредита*</label>
                <select id="credit-type" name="credit-type" required>
                    <option value="business">Кредит бизнесу</option>
                    <option value="personal">Личный кредит</option>
                    <option value="mortgage">Ипотека</option>
                </select>
            </div>
            <div class="form-group">
                <label for="loan-amount">Сумма кредита</label>
                <input type="number" id="loan-amount" name="loan-amount" min="1000000" max="50000000" step="1000000" value="10000000">
                <input type="range" id="loan-amount-range" min="1000000" max="50000000" step="1000000" value="10000000">
            </div>
            <div class="form-group">
                <label for="loan-term">Срок кредита</label>
                <input type="number" id="loan-term" name="loan-term" min="1" max="30" step="1" value="7">
                <input type="range" id="loan-term-range" min="1" max="30" step="1" value="7">
            </div>

        </form>
    </div>
    <div class="partners-container">
        <h2>БАНКИ ПАРТНЕРЫ</h2>
        <div class="partners">
            <img src="images/rosbank.png" alt="Росбанк">
            <img src="images/Alfa-Bank.png" alt="Альфа-Банк">
            <img class="tinka" src="images/logo-tinkoff.png" alt="Тинькофф Банк">
            <img  class="opt_bank" src="images/opt_bank.png" alt="ОТП Банк">
            <img src="images/vtb.png" alt="ВТБ24">
            <img src="images/otkritie.png" alt="Открытие Банк">
        </div>
        <button id="scroll-button" class="partner-btn">Заполнить заявку</button>
        <p>Нажимая на кнопку, вы даете согласие на обработку <a class="politika">персональных данных</a></p>
    </div>
</section>
<section class="advantages">
    <div class="container">
        <h2>Преимущества работы с <br><span class="highlight">"Новые Бизнес Системы"</span></h2>
        <div class="advantage-items">
            <div class="advantage-item">
                <img src="images/nadega.png" alt="">
                <div class="advantage-item-text">
                    <h3>Надежно</h3>
                    <p>Мы 13 лет работаем в сфере кредитования физических и юридических лиц</p>
                </div>
            </div>
            <div class="advantage-item">
                <img src="images/moneysvin.png" alt="Низкие процентные ставки">
                <div class="advantage-item-text">
                    <h3>Выгодно</h3>
                    <p>Для вас снизим базовую ставку банка на  0,5 - 2% годовых</p>
                </div>
            </div>
            <div class="advantage-item">
                <img src="images/time.png" alt="Поддержка 24/7">
                <div class="advantage-item-text">
                    <h3>Быстро</h3>
                    <p>Заявки наших клиентов рассматриваются банком<br> в приоритетном порядке</p>
                </div>
            </div>
            <div class="advantage-item">
                <img src="images/prof.png" alt="Персональный менеджер">
                <div class="advantage-item-text">
                    <h3>Профессионально</h3>
                    <p>Мы составим кредитную заявку <br> и соберем пакет необходимых документов</p>
                </div>
            </div>
            <div class="advantage-item">
                <img src="images/ydobno.png" alt="Персональный менеджер">
                <div class="advantage-item-text">
                    <h3>Удобно</h3>
                    <p>Вам не нужно ездить по банкам и стоять в очередях</p>
                </div>
            </div>
            <div class="advantage-item">
                <img src="images/individ.png" alt="Персональный менеджер">
                <div class="advantage-item-text">
                    <h3>Индивидуально</h3>
                    <p>Ваш персональный менеджер доступен ежедневно с 10 до 22:00</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="steps">
    <div class="container">
        <h2>Этапы работы с нами</h2>
        <div class="step-items">
            <div class="step-item">
                <img src="images/stepone.png" alt="Оставьте заявку">
                <div class="step-text">
                    <h3>1. Оставьте заявку</h3>
                    <p>Вы оставляете заявку на сайте, указывая основные данные </p>
                </div>
            </div>
            <img src="images/hz.png">
            <div class="step-item">
                <img src="images/steptwo.png" alt="Ожидайте звонка">
                <div class="step-text">
                    <h3>2. Ожидайте звонка</h3>
                    <p>Наш специалист свяжется с вами для уточнения всех деталей  и подготовки необходимых документов.</p>
                </div>
            </div>
            <img src="images/hz.png">
            <div class="step-item">
                <img src="images/stepthree.png" alt="Получите кредит">
                <div class="step-text">
                    <h3>3. Получите кредит</h3>
                    <p>После одобрения заявки вы получите кредит  на указанный вами счет.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="consultation" class="consultation">
    <div class="consultation-content">
    <h2>БЕСПЛАТНАЯ КОНСУЛЬТАЦИЯ</h2>
    <p>Укажите ваши данные. Наш специалист свяжется с вами в течении 30 минут</p>
    <form class="consultation-form">
        <input type="text" placeholder="Ваше имя">
        <input type="email" placeholder="Ваш email">
        <input type="tel" placeholder="Ваш телефон">
        <button type="submit">Заказать консультацию</button>
    </form>
    </div>
</section>
<footer>

        <div class="footer-text">
        <img src="images/logo_dark.png" alt="NBS" class="logo">
        <p>Команда наших специалистов имеет огромный опыт работы с различными ситуациями. Мы обладаем широким набором различных инструментов для решения различных задача в сфере финансов, налогового права и экономической безопасности. Основная задача нашей компании – быть максимально эффективными для Вашего бизнеса."</p>

            <div class="footer-contact">
                <h2>НАШИ КОНТАКТЫ</h2>
            <p>Адрес: г. Москва, ул. Примерная, д. 1</p>
            <p>Телефон: <span class="highlight"> +7 495 123-45-67</span></p>
            <p>Email: <span class="politika"> info@nbs.ru</span></p>
                <img src="images/vk_inst.png">
                <p class="linkin"> Политика конфиденциальности</p>
            </div>
        </div>
    <div class="finaly-footer">
        <p>© 2020. <span class="highlight">ООО «Новые Бизнес Системы»</span> , ИНН 7723452322, КПП 772501001, ОГРН 1167746558407</p>
    </div>

    <div>
        
    </div>
</footer>
<script src="script.js"></script>
</body>
</html>
