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

    <div class="lit">
        <div class="container">
            <div class="lit__main">
                <div class="lit__inner">
                    <h1 class="lit__title">Литература о ямщиках</h1>
                    <p class="lit__text">Материал о их <b>жизни</b>. Краткая <b>история</b>. Полезные <b>ссылки</b></p>
                </div>
                <div class="lit__img">
                    <img src="img/lit-bg.jpg" alt="">
                </div>
            </div>
        </div>
    </div>

        <!-- История -->
        <section class="section">
            <div class="container">
                <h1 class="lithistory__title">Их история</h1>
                <div class="d-flex">
                    <div class="lithistory__about">
                        <p class="lithistory__text"><b>Ямщи́к</b> — представитель особой межклассовой прослойки тяглового населения Руси, назначенный в установленном порядке из крестьян либо горожан для исполнения ямской повинности, включая извоз и почтовую гоньбу.</p>
                        <p class="lithistory__text">До отмены ямской повинности в XVIII веке лица, выделенные в ямщики, переселялись в ямы — поселения при вновь создаваемых почтовых станциях, где им, помимо прочего, выделялась земля для ведения хозяйства. Так в Московском уезде, где сходились все главные дороги Русского государства, было 2849,5 десятин земли, находившейся во владении ямщиков. При строительстве Санкт-Петербурга с XVIII века вошло в практику также расселение ямщиков в специальных слободах, устраиваемых в городской черте.</p>
                    </div>
                    <div class="lithistory__image">
                        <img class="h_img" src="img/history-image.jpg" alt="">
                    </div>
                </div>

                <div>
                    <p>Ямщики были кучерами, на государственной службе, выполнявшие ямскую повинность, установленную в XVII веке в Русском царстве для почтовых перевозок, перевозок чиновников, казённых грузов и прочих государственных нужд.</p>
                    <p>В XVI веке немецкий путешественник Герберштейн восторженно сообщал о ямской гоньбе в России. Его восхищала скорость, с какой доставлялись в то время письма, и впечатляло само учреждение почтово-пассажирской связи. В Западной Европе перевозкой почты занимались частные предприниматели, и надёжность и быстрота доставки были не на должном уровне.</p>
                    <p>В «допетровское» время ямщики считались служилыми людьми «по прибору», так же как и стрельцы, городовые казаки и пушкари. Они жили возле городов в специальных «ямских» слободах и получали от казны денежное и пороховое жалование. Они обеспечивали также и охрану перевозимых грузов и седоков, для чего ездили вооружёнными. Впоследствии ямщиков перевели в сословие государственных крестьян.</p>
                    <p>При строительстве Санкт-Петербурга из крестьян, направленных в 1714 году из мест своего прежнего проживания для отправления почтовой гоньбы, по указу Петра I в 1720 году несколько семейств было временно расселено в районе Чёрной речки. В 1723 году им отвели новое место «за Невским монастырём», где таким образом образовалась первая в истории города ямская слобода.</p>
                    <p>Крестьянин, выехавший в Петербург по правительственной разнарядке (и с согласия помещиков, если он не был государственным крестьянином изначально), и оставшийся в городе на следующий сезон, не только терял связь со своим классом, но со временем превращался в мелкого частного предпринимателя, оказывая услуги по извозу уже сугубо в частном порядке.</p>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="lit__quote">
                <p>“Впрочем, те крестьяне, которые остаются в Петербурге на следующее лето,
                    вступая в должности дворников, извозчиков, разносчиков, пользуются выгодами,
                    отвыкают от сельских работ и неохотно возвращаются к сельскому быту”</p>
                <p><b>— Иван Пушкарёв. Описание Санкт-Петербурга…</b></p>
            </div>
        </section>


        <!-- Книги -->
    <!-- Предметы ямщиков -->
    <section class="section">
        <div class="container">
            <div class="section__header">
                <h2 class="books__title">
                    Книги о ямщиках
                </h2>
                <div class="book__all">
                    <div class=book">
                        <div class="book__image__div">
                            <img class="book__image" src="img/book1.webp" alt="">
                        </div>
                        <h1 class="book__title">Государевы ямщики и их московские извощики</h1>
                        <p class="book__text">Автор: Кторова Алла.</p>
                        <p class="book__text">Издательство: Минувшее, 2005 г.</p>
                    </div>
                    <div class="book">
                        <div class="book__image__div">
                            <img class="book__image" src="img/book2.jpg" alt="">
                        </div>
                        <h1 class="book__title">Государевы ямщики</h1>
                        <p class="book__text">Автор: Владимир Галактионович Короленко</p>
                        <p class="book__text">Издательство: "Художественная литература". Москва, 1980.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

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