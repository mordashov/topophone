<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title><?php echo wp_get_document_title(); ?><!--Купить iPhone, Samsung в Нижнем Новгороде--></title>
    <!--<meta name="description" content="Интернет-магазин сотовых телефонов в Нижнем Новгороде">-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
	 <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
    <header>
        <div class="header-background">
            <div class="container">
                <div class="main-menu">
                    <nav class="nav">
                        <div class="main-menu-burger">Меню</div>
                        <?php
                        //wp_nav_menu( array( 
                        //    'menu'			  => '',              // (string) Название выводимого меню (указывается в админке при создании меню, приоритетнее 
                        //                                          // чем указанное местоположение theme_location - если указано, то параметр theme_location игнорируется)
                        //    'container'       => '',              // (string) Контейнер меню. Обворачиватель ul. Указывается тег контейнера (по умолчанию в тег div)
                        //    'container_class' => '',              // (string) class контейнера (div тега)
                        //    'container_id'    => '',              // (string) id контейнера (div тега)
                        //    'menu_class'      => 'main-menu-list',          // (string) class самого меню (ul тега)
                        //    'menu_id'         => '',              // (string) id самого меню (ul тега)


                        //    ) ); 

                        wp_nav_menu( array(
	                        'theme_location'  => 'top',
	                        'menu'            => 'top', 
	                        'container'       => false, 
	                        'container_class' => '', 
	                        'container_id'    => '',
	                        'menu_class'      => 'main-menu-list', 
	                        'menu_id'         => '',
	                        'echo'            => true,
	                        'fallback_cb'     => '__return_empty_string',
	                        'before'          => '',
	                        'after'           => '',
	                        'link_before'     => '',
	                        'link_after'      => '',
	                        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
	                        'depth'           => 0,
	                        'walker'          => '',
                        ) );

                        ?>
                        <!--<ul class="main-menu-list">
                            <li class="main-menu-list-item"><a href="index.html">Главная</a></li>
                            <li class="main-menu-list-item"><a href="delivery.html">Доставка</a></li>
                            <li class="main-menu-list-item"><a href="guarantees.html">Гарантии</a></li>
                            <li class="main-menu-list-item"><a href="contacts.html">Контакты</a></li>
                            <li class="main-menu-list-item"><a href="interesting.html">Интересное</a></li>
                        </ul>-->
                    </nav>
                    <div class="main-menu-search-container">
                        <input class="main-menu-search" type="text" placeholder="Быстрый поиск..." />
                        <div class="button-search" onclick="location.href='#';" style="cursor: pointer;">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/fast-search.png" />
                            <p>Искать</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">

		<!-- Информационный блок -->
            <div class="info">
                <div class="info-logo" onclick="location.href='index.html';" style="cursor: pointer;">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/info-logo.png" />
                    <p class="info-logo-text">Топофон<span>Магазин смартфонов</span></p>
                </div>
                <div class="info-city">
                    Нижний Новгород
                </div>
                <div class="info-button">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/info-call.png" />
                </div>
                <div class="info-contacts">
                    <p>Ежедневно с 11.00 до 22.00</p>
                    <tel>+7 (999) 999-99-99</tel>
                    <a href="#">Перезвоните мне</a>
                </div>
                <div class="info-button">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/info-basket.png" />
                </div>
                <div class="info-basket" onclick="location.href='#';" style="cursor: pointer;">
                    <p>В корзине<br />1 товар</p>
                </div>
            </div>
    </header>