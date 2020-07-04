<div id="header">
        <div class="fixed-container">
            <img id="logo" src="img/logo.png" alt="Логотип сайта">
        </div>
    </div>
    <div id="menu-container">
        <div class="fixed-container">
            <div class="header-menu">
                <?php
                    $header_menu = [
                        ['href' => 'index.php', 'link' => 'Главная'],
                        ['href' => 'index.php?id=politics', 'link' => 'Политика'],
                        ['href' => 'index.php?id=society', 'link' => 'Общество'],
                        ['href' => 'index.php?id=economy', 'link' => 'Экономика'],
                        ['href' => 'index.php?id=world', 'link' => 'В мире'],
                        ['href' => 'index.php?id=incidents', 'link' => 'Проишествия'],
                        ['href' => 'index.php?id=sport', 'link' => 'Спорт'],
                        ['href' => 'index.php?id=science', 'link' => 'Наука'],
                        ['href' => 'index.php?id=tourism', 'link' => 'Туризм'],
                    ];
                    drawMenu($header_menu, true);
                ?>
            </div>
        </div>
    </div>