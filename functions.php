<?php
/* scripts and styles */
function topophone_scripts() {
	wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), null);
	wp_enqueue_style('topophone-style', get_template_directory_uri() . '/css/style.css', array(), null);
	//wp_enqueue_style('contacts', get_template_directory_uri() . '/css/contacts.css', array(), null);
	//wp_enqueue_style('delivery', get_template_directory_uri() . '/css/delivery.css', array(), null);
	//wp_enqueue_style('guarantees', get_template_directory_uri() . '/css/guarantees.css', array(), null);
	//wp_enqueue_style('interesting', get_template_directory_uri() . '/css/interesting.css', array(), null);

	wp_enqueue_script('topophone-jquery', get_template_directory_uri() . '/node_modules/jquery/dist/jquery.min.js', array(), null);
	wp_enqueue_script('topophone-menu', get_template_directory_uri() . '/js/menu.js', array(), null);
}
add_action( 'wp_enqueue_scripts', 'topophone_scripts' );

//menu
register_nav_menu( 'main-menu-list' , 'Главное меню' );

?>
