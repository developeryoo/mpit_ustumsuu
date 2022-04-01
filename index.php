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
            </div>

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
    </header>

    <div class="intro">
        <div class="container">
            <div class="intro__inner">
                <h1 class="intro__title">Ямщицкие станции Хангаласского улуса</h1>
                <p class="intro__text">Материал о их <b>жизни</b>. Краткая <b>история</b>. Полезные <b>ссылки</b></p>

                <div class="intro__button">
                    <a class="btn" href="#history">Подробнее</a>
                </div>
            </div>
        </div>
    </div>


    <!-- История -->
    <section class="section" id="history">
        <div class="container">
            <div class="d-flex">
                <div class="history__about">
                    <h1 class="history__title">История ямщиков</h1>
                    <p class="history__text"><b>Ямщи́к</b> — представитель особой межклассовой прослойки тяглового населения Руси, назначенный в установленном порядке из крестьян либо горожан для исполнения ямской повинности, включая извоз и почтовую гоньбу.</p>
                    <p class="history__text">До отмены ямской повинности в XVIII веке лица, выделенные в ямщики, переселялись в ямы — поселения при вновь создаваемых почтовых станциях, где им, помимо прочего, выделялась земля для ведения хозяйства. Так в Московском уезде, где сходились все главные дороги Русского государства, было 2849,5 десятин земли, находившейся во владении ямщиков. При строительстве Санкт-Петербурга с XVIII века вошло в практику также расселение ямщиков в специальных слободах, устраиваемых в городской черте.</p>
                </div>
                <div class="history__image">
                    <img class="h_img" src="img/history-image.jpg" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- Предметы ямщиков -->
    <section class="section">
        <div class="container">
            <div class="section__header">
                <h2 class="section__title">
                    Предметы ямщиков
                </h2>
                <div class="items__more">
                    <a href="more.php">Подробнее></a>
                </div>
                <div class="items__all">
                    <div class="item">
                        <div class="items__image__div">
                            <img class="items__image" src="img/items-1.jpg" alt="">
                        </div>
                        <h1 class="items__title">Сани для лошади</h1>
                        <p class="items__text">Датируются 1890 годом. Изготовлены из дерева.</p>
                    </div>
                    <div class="item">
                        <div class="items__image__div">
                            <img class="items__image" src="img/items-2.webp" alt="">
                        </div>
                        <h1 class="items__title">Шапка ямщика</h1>
                        <p class="items__text">Его возраст составляет более 90 лет.</p>
                    </div>
                    <div class="item">
                        <div class="items__image__div">
                            <img class="items__image" src="img/items-3.jpg" alt="">
                        </div>
                        <h1 class="items__title">Тулуп</h1>
                        <p class="items__text">Тулуп — не крытая сукном шуба из овчины, с большим меховым воротником.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Карта -->

    <section class="section">
        <div class="container">
            <div class="section__header">
                <h2 class="section__title">
                    Карта станций
                </h2>
                <div class="map">
                    <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Abedcaad74c9db3578c4cbcbb846292e3fb4a93486709ae0e56bda781a0a978e8&amp;source=constructor" width="100%" height="720" frameborder="0"></iframe>
                </div>
            </div>
        </div>
    </section>


    <footer class="footer">
        <div class="container">
            <div class="footer__menu">
                <img href="index.php" class="footer__logo" src="img/logo.png" alt="">
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