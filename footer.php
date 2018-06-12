<footer class="footer">
        <div class="container">
            <div class="footer-container">
                <div class="footer-logo" onclick="location.href='#';" style="cursor: pointer;">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/footer-logo.png" />
                    <p class="footer-logo-text">Топофон<span>Магазин смартфонов</span></p>
                    <p class="footer-logo-social-text">Мы в соцсетях:</p>
                    <div class="footer-logo-social footer-logo-social-vk" onclick="location.href='#';" style="cursor: pointer;"></div>
                    <div class="footer-logo-social footer-logo-social-f" onclick="location.href='#';" style="cursor: pointer;"></div>
                    <div class="footer-logo-social footer-logo-social-tw" onclick="location.href='#';" style="cursor: pointer;"></div>
                </div>
                <div class="footer-navigation">
                    <p class="footer-header">Навигация</p>
                    <ul>
                        <li><a href="">Каталог</a></li>
                        <li><a href="">Apple</a></li>
                        <li><a href="">Samsung</a></li>
                        <li><a href="">Аксессуары</a></li>
                    </ul>
                </div>
                <div class="footer-information">
                    <p class="footer-header">Информация</p>
                    <ul>
                        <li><a href="">Оплата</a></li>
                        <li><a href="">Доставка</a></li>
                        <li><a href="">Гарантии</a></li>
                        <li><a href="">Интересное</a></li>
                    </ul>
                </div>
                <div class="footer-contacts">
                    <p class="footer-header">Связаться с нами</p>
                    <ul>
                        <li>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/footer-place.png" />
                            <p>Нижний Новгород,<br />ул. ЕщеНеЗнаю, оф 1</p>
                        </li>
                        <li>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/footer-phone.png" />
                            <p>+7 (999) 999-99-99</p>
                        </li>
                        <li>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/footer-time.png" />
                            <p>Ежедневно с 11 до 22.00</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-сopyright">
            <div class="container">
                <p class="footer-сopyright-text"> Интернет магазин сотовых телефонов © 2018 Топофон. Все права защищены</p>
            </div>
        </div>
    </footer>
<?php wp_footer(); ?>
</body>
</html>