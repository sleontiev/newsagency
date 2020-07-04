<?php
    require_once 'components/menu.php';
    require_once 'components/news-item.php';
    $title = 'Новостное агенство';
    $id = strtolower(trim(strip_tags($_GET['id'])));
    switch($id){
        case 'politics':
            $title = 'Политика';
        break;
        case 'society';
            $title = 'Общество';
        break;
        case 'economy';
            $title = 'Экономика';
        break;
        case 'world';
            $title = 'В мире';
        break;
        case 'incidents';
            $title = 'Проишествия';
        break;
        case 'sport';
            $title = 'Спорт';
        break;
        case 'science';
            $title = 'Наука';
        break;
        case 'tourism';
            $title = 'Туризм';
        break;
    }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
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
            switch($id) {
                case 'politics';
                    require_once 'politics.php';
                break;
                case 'society';
                    require_once 'society.php';
                break;
                case 'economy';
                    require_once 'economy.php';
                break;
                case 'world';
                    require_once 'world.php';
                break;
                case 'incidents';
                    require_once 'incidents.php';
                break;
                case 'sport';
                    require_once 'sport.php';
                break;
                case 'science';
                    require_once 'science.php';
                break;
                case 'tourism';
                    require_once 'tourism.php';
                break;
                case '';
                    require_once 'main.php';
                break;
            }
        require_once 'footer.php';
    ?>
    <div id="black-bar">
        <div class="fixed-container">
            <div class="copyright">&copy Новостное агентство, 2017-2018 все права защищены</div>
        </div>
    </div>
</body>
</html>