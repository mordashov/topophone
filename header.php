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
<body>
    <header>
        <div class="header-background">
            <div class="container">
                <div class="main-menu">
                    <nav class="nav">
                        <div class="main-menu-burger">Меню</div>
                        <?php
                        wp_nav_menu( array( 
                            'menu_class' => 'main-menu-list',
                            'menu_id' => false,
                            'theme_location' => 'my-custom-menu', 
                            'container_class' => 'main-menu-list' ) ); 
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
    </header>