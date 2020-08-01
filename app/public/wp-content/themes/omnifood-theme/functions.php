<?php

function omnifood_resources () {
    wp_enqueue_style('omnifood_normalize', '/wp-content/themes/omnifood-theme/vendors/css/normalize.css');
    wp_enqueue_style('omnifood_grid', '/wp-content/themes/omnifood-theme/vendors/css/grid.css');
    wp_enqueue_style('omnifood_ionicons', '/wp-content/themes/omnifood-theme/vendors/css/ionicons.min.css');
    wp_enqueue_style('omnifood_main_styles', get_stylesheet_uri());
    wp_enqueue_style('omnifood_queries', '/wp-content/themes/omnifood-theme/resources/css/queries.css');
    wp_enqueue_style('omnifood_animate', "https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css");
    wp_enqueue_style('omnifood_animate2', "https://unpkg.com/aos@2.3.1/dist/aos.css");
    wp_enqueue_style('omnifood_fonts', 'https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;1,300&display=swap');
    wp_enqueue_script("jquery");
}

add_action('wp_enqueue_scripts','omnifood_resources');
