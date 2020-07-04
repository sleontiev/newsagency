<?php
    require_once 'components/menu.php';
    require_once 'components/news-item.php';
    $footer_menu_col1 = [
        ['href' => '#', 'link' => 'Главная'],
        ['href' => '#', 'link' => 'Политика'],
        ['href' => '#', 'link' => 'Общество'],
        ['href' => '#', 'link' => 'Экономика'],
        ['href' => '#', 'link' => 'В мире'],
    ];
    $footer_menu_col2 = [
        ['href' => '#', 'link' => 'Проишествия'],
        ['href' => '#', 'link' => 'Спорт'],
        ['href' => '#', 'link' => 'Наука'],
        ['href' => '#', 'link' => 'Туризм'],
    ];
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Новостное агенство</title>
    <link rel="stylesheet" href="style.css">
    <script src="script/jquery-3.5.1.min.js"></script>
    <script src="script/script.js"></script>
</head>
<body>
    <div id="black-bar">
        <div class="fixed-container">
            Самые <a href="#">свежие новости</a> в реальном времени
            <div id="datetime">12:30 15.06.2020</div>
        </div>
    </div>
    <?php
        require_once 'header.php';
    ?>
    <div id="central-container">
        <div class="fixed-container">
            <div id="column-left">
                <h2>Новости дня</h2>
                <?=newsItem('Кот Ахилл предсказал победу российской сборной над Египтом на ЧМ-2018', '#', '/ЧМ по футболу', '10:45', '15');?>
                <?=newsItem('«Нафтогаз»: суд разрешил заморозить активы «Газпрома» в Великобритании', '#', '/Политика', '10:45', '15');?>
                <?=newsItem('Минтранс предписал оборудовать общественный транспорт кондиционерами', '#', '/Транспорт', '10:45', '15');?>
                <?=newsItem('Летние кафе Москвы временно закроются из-за непогоды', '#', '/Погода', '10:45', '15');?>
                <?=newsItem('Комплексное благоустройство Щелковского шоссе завершится в июне', '#', '/Транспорт', '10:45', '15');?>
                <?=newsItem('КВ Москве назвали самое популярное мороженое у болельщиков ЧМ-2018', '#', '/ЧМ по футболу', '10:45', '15');?>                       
                <div class="all-news">
                    <a href="#"><button class='all-news-btn'>Все новости</button></a>
                </div>
            </div>
            <div id="column-center">
                <div class="main-news-item">
                    <div class="main-news-props">
                        <a href="#">/Политика</a>
                    </div>
                    <h2 class="main-news-title">
                        В Крыму отреагировали
                        на слова Кравчука
                        о возврате полуострова
                    </h2>
                    <div class="main-news-props">
                        <div class="main-news-date">19 Июня 2018</div>
                        <div class="main-news-time">10:48</div>
                    </div>
                </div>
                <div class="news">
                    <div class="news-tile">
                        <img src="img/news-tile-1.png" alt="News-1" width="200px">
                        <h3 class="news-title">
                            Алексей Навальный объявил
                            акцию против пенсионной
                            реформы 1 июля</h3>
                            <div class="news-item-props">
                                <a href="#">/Политика</a>
                                <div class="news-time">10:45</div>
                                <div class="news-comments-count">15</div>
                            </div>
                    </div>
                    <div class="news-tile">
                        <img src="img/news-tile-2.png" alt="News-2" width="200px">
                        <h3 class="news-title">
                            Дума увеличила пошлины
                            за выдачу загранпаспортов
                            и водительских прав</h3>
                            <div class="news-item-props">
                                <a href="#">/Общество</a>
                                <div class="news-time">10:45</div>
                                <div class="news-comments-count">15</div>
                            </div>
                    </div>
                    <div class="news-tile">
                        <img src="img/news-tile-3.png" alt="News-3" width="200px">
                        <h3 class="news-title">
                            В России заработал
                            стриминговый сервис
                            YouTube</h3>
                            <div class="news-item-props">
                                <a href="#">/Интернет</a>
                                <div class="news-time">10:45</div>
                                <div class="news-comments-count">15</div>
                            </div>
                    </div>
                    <div class="news-tile">
                        <img src="img/news-tile-4.png" alt="News-4" width="200px">
                        <h3 class="news-title">
                            Кейн признан лучшим
                            игроком матча ЧМ-2018
                            Тунис — Англия</h3>
                            <div class="news-item-props">
                                <a href="#">/ЧМ по футболу</a>
                                <div class="news-time">10:45</div>
                                <div class="news-comments-count">15</div>
                            </div>
                    </div>
                </div>
            </div>
            <div id="column-right">
                <img src="img/banner-1.jpg" alt="banner-1">
                <img src="img/banner-2.jpg" alt="banner-2">
            </div>
        </div>
        <div class="fixed-container">
            <div id="special-news">
                <div class="special-news-banner">
                    <div class="main-news-props">
                        <a href="#">/Политика</a>
                    </div>
                    <h2 class="main-news-title">
                        Пекин обвинил Вашингтон
                        в развязывании торговой
                        войны
                    </h2>
                    <div class="main-news-props">
                        <div class="main-news-date">19 Июня 2018</div>
                        <div class="main-news-time">10:48</div>
                    </div>
                    <div class="news-feature">
                        Министерство коммерции Китая заявило, что Пекин примет «качественные»
                        и «количественные» меры, если президент США Дональд Трамп введет
                        дополнительные пошлины на китайские товары
                    </div>
                </div>
                <div class="most-read-news">
                    <h2>Самые читаемые новости</h2>
                    <div class="news-item">
                        <div class="news-item-text">
                            В Турции пообещали найти альтернативу из-за
                            отказа США поставить F-35 
                        </div>
                        <div class="news-item-props">
                            <a href="#">/Политика</a>
                            <div class="news-time">10:45</div>
                            <div class="news-comments-count">15</div>
                        </div>
                    </div>
                    <div class="news-item">
                        <div class="news-item-text">
                            Назван минимальный доход для причисления
                            к среднему классу‍ 
                        </div>
                        <div class="news-item-props">
                            <a href="#">/Политика</a>
                            <div class="news-time">10:45</div>
                            <div class="news-comments-count">15</div>
                        </div>
                    </div>
                    <div class="news-item">
                        <div class="news-item-text">
                            Назван минимальный доход для причисления
                            к среднему классу‍ 
                        </div>
                        <div class="news-item-props">
                            <a href="#">/Политика</a>
                            <div class="news-time">10:45</div>
                            <div class="news-comments-count">15</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
        require_once 'footer.php';
    ?>
    <div id="black-bar">
        <div class="fixed-container">
            <div class="copyright">&copy Новостное агентство, 2017-2018 все права защищены</div>
        </div>
    </div>
</body>
</html>