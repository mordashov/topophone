<?php
/* scripts and styles */
function topophone_scripts() {
	wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), null);
	wp_enqueue_style('topophone-style', get_template_directory_uri() . '/css/style.css', array(), null);
	//wp_enqueue_style('contacts', get_template_directory_uri() . '/css/contacts.css', array(), null);
	//wp_enqueue_style('delivery', get_template_directory_uri() . '/css/delivery.css', array(), null);
	//wp_enqueue_style('guarantees', get_template_directory_uri() . '/css/guarantees.css', array(), null);
	//wp_enqueue_style('interesting', get_template_directory_uri() . '/css/interesting.css', array(), null);

	wp_enqueue_script('topophone-jquery', get_template_directory_uri() . '/js/jquery.min.js', array(), null);
	wp_enqueue_script('topophone-menu', get_template_directory_uri() . '/js/menu.js', array(), null);
}
add_action( 'wp_enqueue_scripts', 'topophone_scripts' );

//menu
register_nav_menu( 'top' , 'Главное меню' );
add_filter( 'nav_menu_css_class', 'set_custom_class', 10, 4 );
function set_custom_class( $classes, $item, $args, $depth ){
    
    if ( $args->theme_location === 'top' ) {
        if (in_array( 'current-menu-item', $classes)) {
            $classes = [ 'main-menu-list-item main-menu-list-item-current' ];
        } else {
            $classes = [ 'main-menu-list-item' ];
        }
    } else {
        $classes = [];
    }
    
return $classes;
}

/* thumbnails */ 
if (function_exists( 'add_theme_support' ) ) { 
    add_theme_support( 'post-thumbnails' ); 
    add_image_size(350, 250 , true );        
} 
 
?>
