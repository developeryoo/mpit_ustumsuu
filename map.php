<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ямщицкие станции Хангаласского улуса</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fonts/stylesheet.css">
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="header__inner">
                <div class="header__logo">
                    <img class="logo" src="img/logo.png" alt="">
                </div>
                <nav class="nav">
                    <a class="nav__link" href="index.php">Главная</a>
                    <a class="nav__link" href="literature.php">Литература</a>
                    <a class="nav__link" href="map.php">Карта</a>
                </nav>

                <div class="hamburger-menu">
                    <input id="menu__toggle" type="checkbox" />
                    <label class="menu__btn" for="menu__toggle">
                      <span></span>
                    </label>
                
                    <ul class="menu__box">
                        <li><a class="menu__item" href="index.php">Главная</a></li>
                        <li><a class="menu__item" href="literature.php">Литература</a></li>
                        <li><a class="menu__item" href="map.php">Карта</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>



    <!-- Карта -->
    <div class="map">
        <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Abedcaad74c9db3578c4cbcbb846292e3fb4a93486709ae0e56bda781a0a978e8&amp;source=constructor" width="100%" height="720" frameborder="0"></iframe>
    </div>


    <footer class="footer">
        <div class="container">
            <div class="footer__menu">
                <img class="footer__logo" src="img/logo.png" alt="">
                <div class="footer__contacts">
                    <a href="index.php#history">Сведения о нас</a>
                    <a href="tel:89000000">Контакты</a>
                    <a href="mailto:example@example.com">Обратная связь</a>
                    <a href="map.php">Карта сайта</a>
                    <div class="footer__logos">
                        <a href="#"><img src="img/vk.png" alt=""></a>
                        <a href="#"><img src="img/inst.png" alt=""></a>
                    </div>
                </div>
                <div class="footer__contacts__2">
                    <a href="#">Документы</a>
                    <a href="#">Главное</a>
                    <a href="#">Рекомендации</a>
                </div>
                <div class="footer__contacts__3">
                    <a href="tel:89000000">+7(900)000-00-00</a>
                    <p>г. Покровск, ул. Иваново, д. 20</p>
                    <button class="footer__button">Подписаться на рассылку</button>
                </div>
            </div>
        </div>
    </footer>


</body>
</html>