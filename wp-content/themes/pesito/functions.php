<?php

function load_stylesheets() {
    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css', array(), false, 'all');
    wp_enqueue_style('icons');

    wp_register_style('simple-font', 'https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css', array(), false, 'all');
    wp_enqueue_style('simple-font');
    
    wp_register_style('style', get_template_directory_uri() . '/style.css', array(), false, 'all');
    wp_enqueue_style('style');
}
function load_script() {
    wp_deregister_script('jquery');
    wp_register_script('jquery','https://code.jquery.com/jquery-3.7.0.min.js', array(), null, true);
    wp_enqueue_script('jquery');

    wp_register_script('customjs', get_template_directory_uri() . '/js/script.js', array('jquery'), null, true);
    wp_enqueue_script('customjs');

    wp_register_script('bootstrapjs', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js', array(), null,true);
    wp_enqueue_script('bootstrapjs');

    wp_register_script('ajaxvalidatejs', 'http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js', array(), null,true);
    wp_enqueue_script('ajaxvalidatejs');
    
    wp_register_script('swiperjs', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js', array('jquery'), null,true);
    wp_enqueue_script('swiperjs');
    
}

if(!is_admin()) {
    add_action('wp_enqueue_scripts', 'load_stylesheets', 11);
    add_action('wp_enqueue_scripts', 'load_script', 12);

}
add_theme_support( 'title-tag' );
?>
