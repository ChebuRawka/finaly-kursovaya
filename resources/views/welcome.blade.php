<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>kursach</title>
    <link rel="stylesheet" href="{{ mix('/sass/app.scss') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <header class="d-flex justify-content-between align-items-center py-3">
        <div class="logo">
            <img src="path_to_logo" alt="NBS Logo">
        </div>
        <div class="contact-info">
            <a href="tel:+79777280779">+7 977 728-07-79</a>
        </div>
        <div>
            <a href="#" class="btn btn-success">Зарегистрироваться</a>
        </div>
    </header>
</div>

<main class="position-relative text-white">
    <div class="position-relative overflow-hidden text-center bg-dark" style="background-image: url('{{ asset('images/background.jpg') }}'); background-size: cover; background-position: center; height: 100vh;">
        <div class="overlay position-absolute w-100 h-100" style="background: rgba(0, 0, 0, 0.5);"></div>
        <div class="content position-relative z-index-2 d-flex flex-column justify-content-center align-items-center h-100">
            <h1>ВАШ <span class="text-success">ЛИЧНЫЙ CFO</span> НА СТРАЖЕ ВАШЕГО БИЗНЕСА</h1>
            <p>Как отследить финансовые потоки? Куда уходят средства? Почему постоянные кассовые разрывы? Где найти новые средства для инвестиций? Что делать с налоговой нагрузкой?</p>
            <a href="#" class="btn btn-success mt-3">Получить решение</a>
        </div>
    </div>
</main>

<div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mt-3">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">О компании</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Наши решения</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Контакты</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
