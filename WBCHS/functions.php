<?php
    function wbchs_resources(){
        wp_enqueue_style('style', get_stylesheet_uri());
    }
    add_action('wp)enqueue)scripts', 'wbchs_resources');
    // Navigation Menus
    register_nav_menus(array(
        'prime'=>__('Primary Menu')
    ));
