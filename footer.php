<div id="footer">
        <div class="fixed-container">
            <div class="footer-container">
                <div class="footer-menu">
                    <div class="menu-col-1">
                    <?php
                        $footer_menu_col1 = [
                            ['href' => 'index.php', 'link' => 'Главная'],
                            ['href' => 'index.php?id=politics', 'link' => 'Политика'],
                            ['href' => 'index.php?id=society', 'link' => 'Общество'],
                            ['href' => 'index.php?id=economy', 'link' => 'Экономика'],
                            ['href' => 'index.php?id=world', 'link' => 'В мире'],
                        ];
                        drawMenu($footer_menu_col1);
                    ?>
                    </div>
                    <div class="menu-col-2">
                        <?php
                            $footer_menu_col2 = [
                                ['href' => 'index.php?id=incidents', 'link' => 'Проишествия'],
                                ['href' => 'index.php?id=sport', 'link' => 'Спорт'],
                                ['href' => 'index.php?id=science', 'link' => 'Наука'],
                                ['href' => 'index.php?id=tourism', 'link' => 'Туризм'],
                            ];
                            drawMenu($footer_menu_col2);
                        ?>
                    </div>
                </div>
                <div class="footer-logo">
                    <img src="img/footer-logo.png" alt="logo">
                    <div class="footer-menu-about">
                        <ul>
                            <li>Об агенстве</li>
                            <li>Контакты</li>
                            <li>Опубликовать новость</li>
                        </ul>
                    </div>
                </div>
                <div class="social-links">
                    <a href="#" class='social'><img src="img/vk.png" alt="vk" width="40px" height="40px"></a>
                    <a href="#" class='social'><img src="img/facebook.png" alt="facebook" width="40px" height="40px"></a>
                    <a href="#" class='social'><img src="img/twitter.png" alt="twitter" width="40px" height="40px"></a>
                    <a href="#" class='social'><img src="img/instagram.png" alt="instagram" width="40px" height="40px"></a>
                    <a href="tel:+" class="phone footer-contacts">+7 (499) 995-55-55</a>
                    <a href="mailto:" class="mail footer-contacts">info@agency.ru</a>
                </div>
            </div>
        </div>
    </div>