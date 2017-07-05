<?php
    function wbchs_resources(){
        wp_enqueue_style('style', get_stylesheet_uri());
    }
    add_action('wp)enqueue)scripts', 'wbchs_resources');
	//theme setup
	function bannerPic(){
    // Navigation Menus
    register_nav_menus(array(
        'prime'=>__('Primary Menu')
    ));
	// featured Image
	add_theme_support('post-tumbnails');
}
add_action('after_setup_theme', 'bannerPic')
