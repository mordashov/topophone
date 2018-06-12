<?php
/*
Template Name: index
*/
?>
<?php get_header(); ?>    
<section>
        <div class="container">
            <!-- Баннер -->
            <div class="banner-container">
                <div class="banner">
                    <p class="banner-text">iPhone 8<br />Special Edition<br />(PRODUCT)RED™</p>
                    <div class="banner-button">
                        <a href="#" class="text-go">Подробнее</a>
                        <img class="text-go-arrow" src="<?php echo get_template_directory_uri(); ?>/images/next.png" />
                    </div>

                </div>
                <div class="banner-image"></div>
                <div class="offer offer-first">
                    <p class="offer-first-text">Снижение цен<br />на iPhone 7</p>
                    <a href="#" class="text-go">Подробнее</a>
                    <img class="text-go-arrow" src="<?php echo get_template_directory_uri(); ?>/images/next.png" />
                    <img class="offer-first-image" src="<?php echo get_template_directory_uri(); ?>/images/offer-apple.png" />
                </div>
                <div class="offer offer-second">
                    <img class="offer-second-image" src="<?php echo get_template_directory_uri(); ?>/images/offer-samsung.png" />
                    <p class="offer-second-text">Подарок при<br />покупке<br />Samsung</p>
                    <a href="#" class="text-go">Подробнее</a>
                    <img class="text-go-arrow" src="<?php echo get_template_directory_uri(); ?>/images/next.png" />

                </div>
            </div>
            <!-- Каталог -->
            <div class="catalog-container">
                <!-- Samsung -->
                <div class="catalog" onclick="location.href='#';" style="cursor: pointer;">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/catalog-Samsung.png" />
                    <p>Samsung</p>
                </div>

                <!-- Apple -->
                <div class="catalog" onclick="location.href='#';" style="cursor: pointer;">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/catalog-apple.png" />
                    <p>Apple</p>
                </div>

                <!-- Accessories -->
                <div class="catalog" onclick="location.href='#';" style="cursor: pointer;">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/catalog-accessories.png" />
                    <p>Аксессуары</p>
                </div>
            </div>
        </div>

        <!-- Популярные товары -->
        <div class="popular-background">
            <div class="container">
                <!-- Заголовок секции -->
                <div class="popular-container">
                    <div class="popular popular-title">
                        <p class="popular-title-text">Популярные товары</p>
                        <div class="popular-scroll popular-scroll-left" onclick="location.href='#';" style="cursor: pointer;"></div>
                        <div class="popular-scroll popular-scroll-right" onclick="location.href='#';" style="cursor: pointer;"></div>
                    </div>
                    <!-- Первый товар -->
                    <div class="popular" onclick="location.href='#';" style="cursor: pointer;">
                        <img class="popular-picture" src="<?php echo get_template_directory_uri(); ?>/images/popular-iphone-6s.png" />
                        <p class="popular-name">iPhone 6s Золотой<br />(Gold) 32Gb</p>
                        <p class="popular-price">31 990 руб.</p>
                        <a href="#" class="popular-basket"><img src="<?php echo get_template_directory_uri(); ?>/images/popular-basket.png" /></a>
                    </div>
                    <!-- Второй товар -->
                    <div class="popular" onclick="location.href='#';" style="cursor: pointer;">
                        <img class="popular-picture" src="<?php echo get_template_directory_uri(); ?>/images/popular-iphone-7.png" />
                        <p class="popular-name">iPhone 7 Черный<br />(Black) 128Gb</p>
                        <p class="popular-price">44 990 руб.</p>
                        <a href="#" class="popular-basket"><img src="<?php echo get_template_directory_uri(); ?>/images/popular-basket.png" /></a>
                    </div>
                    <!-- Третий товар -->
                    <div class="popular" onclick="location.href='#';" style="cursor: pointer;">
                        <img class="popular-picture" src="<?php echo get_template_directory_uri(); ?>/images/popular-Samsung.png" />
                        <p class="popular-name">Samsung A520FD<br />Galaxy A5 (2017) 32GB<br />Dual LTE Black</p>
                        <p class="popular-price">23 990 руб.</p>
                        <a href="#" class="popular-basket"><img src="<?php echo get_template_directory_uri(); ?>/images/popular-basket.png" /></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Интересное -->
        <div class="container">
            <div class="interesting-container">
                <div class="interesting-title">
                    <p class="interesting-title-text">Последнее из интересного</p>
                </div>
                <div class="interesting" onclick="location.href='#';" style="cursor: pointer;">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/interesting-picture-first.png" />
                    <p>Как отправлять "невидимые" сообщения с iPhone и iPad</p>
                </div>
                <div class="interesting" onclick="location.href='#';" style="cursor: pointer;">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/interesting-picture-second.png" />
                    <p>Как ускорить iPhone, потратив всего 9 секунд</p>
                </div>
                <div class="interesting" onclick="location.href='#';" style="cursor: pointer;">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/interesting-picture-third.png" />
                    <p>Как выбрать б/у iPhone и не попасть на уловки мошенников</p>
                </div>
            </div>
        </div>
        <!-- Подписка -->
        <div class="subscribe-background">
            <div class="container">
                <div class="subscribe-container">
                    <div class="subscribe-text">
                        <p>Мы проводим специальные акции для наших клиентов. Оформите подписку, и мы будем держать вас в курсе.</p>
                    </div>
                    <input class="subscribe-email" type="text" placeholder="E-Mail" />
                    <div class="subscribe-button" onclick="location.href='#';" style="cursor: pointer;">
                        <p>Подписаться</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
	<?php get_footer(); ?>
    