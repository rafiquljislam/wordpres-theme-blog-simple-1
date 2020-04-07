<?php

function all_atyle_sheet_and_scripts(){
    wp_enqueue_script( 'jquery' );
    // bootstrap
    wp_enqueue_style( 'bootstrap_css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css','','','all' );
    wp_enqueue_script( 'bootstrap_popper', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', '','', true );
    wp_enqueue_script( 'bootstrap_js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js', '','', true );
    // bootstrap End
    
    //slider
    wp_enqueue_script( 'slider_js', get_template_directory_uri().'/assets/slider/owl.carousel.min.js', '','', true );
    wp_enqueue_style( 'slider_css', get_template_directory_uri().'/assets/slider/owl.carousel.min.css','','','all' );
    wp_enqueue_style( 'slider_csstwo', get_template_directory_uri().'/assets/slider/owl.theme.default.min.css','','','all' );
    //slider End

    // MY 
    wp_enqueue_script( 'my_js', get_template_directory_uri().'/assets/js/scripts.js', '','', true );
    wp_enqueue_style( 'mystyle', get_template_directory_uri().'/assets/css/style.css','','','all' );
    // my end
}
add_action( 'wp_enqueue_scripts','all_atyle_sheet_and_scripts' );














