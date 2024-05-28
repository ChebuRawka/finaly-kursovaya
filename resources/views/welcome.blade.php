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
            <p>+7 977 728-07-79</p>
            <button>Зарегистрироваться</button>
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
        <h1>Я ХОЧУ ПОЛУЧИТЬ КРЕДИТ</h1>
        <form>
            <label for="credit-type">Вид кредита</label>
            <select id="credit-type">
                <option>Кредит наличными</option>
            </select>
            <label for="amount">Сумма кредита</label>
            <input type="number" id="amount" value="1000000">
            <label for="term">Срок кредита</label>
            <input type="range" id="term" min="1" max="10" value="7">
            <input type="number" id="term-value" value="7" readonly>
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
        <button>Заполнить заявку</button>
    </div>
</section>
</body>
</html>
