<?php

add_action('wp_enqueue_scripts','add_script_and_styles');

function add_script_and_styles() {


wp_enqueue_style('materialize',get_stylesheet_uri() . '/../assets/css/materialize.css');
wp_enqueue_style('sweetalert2.min',get_stylesheet_uri() . '/../assets/css/sweetalert2.min.css');
wp_enqueue_style('font-awesome.min',get_stylesheet_uri() . '/../assets/font-awesome-4.7.0/css/font-awesome.min.css');
wp_enqueue_style('main',get_stylesheet_uri());
wp_enqueue_style('accordion',get_stylesheet_uri() . '/../assets/css/accordion.css');
wp_enqueue_style('animation',get_stylesheet_uri() . '/../assets/css/animation.css');
wp_enqueue_style('carousel',get_stylesheet_uri() . '/../assets/css/carousel.css');
wp_enqueue_style('style_navbar',get_stylesheet_uri() . '/../assets/css/style_navbar.css');

wp_enqueue_script('materialize',get_stylesheet_uri() . '/../assets/js/materialize.js',false,null,true);
wp_enqueue_script('sweetalert2.min',get_stylesheet_uri() . '/../assets/js/sweetalert2.min.js',false,null,true);
wp_enqueue_script('script',get_stylesheet_uri() . '/../assets/js/script.js',false,null,true);

}

?>