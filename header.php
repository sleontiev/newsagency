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
                        ['href' => '#', 'link' => 'Главная'],
                        ['href' => '#', 'link' => 'Политика'],
                        ['href' => '#', 'link' => 'Общество'],
                        ['href' => '#', 'link' => 'Экономика'],
                        ['href' => '#', 'link' => 'В мире'],
                        ['href' => '#', 'link' => 'Проишествия'],
                        ['href' => '#', 'link' => 'Спорт'],
                        ['href' => '#', 'link' => 'Наука'],
                        ['href' => '#', 'link' => 'Туризм'],
                    ];
                    drawMenu($header_menu, true);
                ?>
            </div>
        </div>
    </div>