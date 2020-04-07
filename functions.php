<?php

// all Style sheets and scripts..
require_once get_template_directory().'/inc/allstylesheet.php';
// Slider
require_once get_template_directory().'/inc/slider.php';
// Servesss
require_once get_template_directory().'/inc/serveses.php';
// Protfolio
require_once get_template_directory().'/inc/protfolio.php';

function register_my_menus() {
    register_nav_menus( array(  
        'primary' => __( 'Primary Navigation', )
        ) );
}
add_action( 'init', 'register_my_menus' );



function afiersetuptheme(){
    add_theme_support( 'post-thumbnails' );    
    // custome background
    $args = array(
        'default-image'      => get_template_directory_uri() . '/assets/images/1.jpg',
        'default-text-color' => '000',
        'width'              => 1900,
        'height'             => 600,
        'flex-width'         => true,
        'flex-height'        => true,
    );
    add_theme_support( 'custom-header', $args );
    /** tag-title **/
    add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme','afiersetuptheme' );









// the excert functions
function content($limit) {
    $content = explode(' ', get_the_content(), $limit);
    if (count($content)>=$limit) {
      array_pop($content);
      $content = implode(" ",$content).'...';
    } else {
      $content = implode(" ",$content);
    }	
    $content = preg_replace('/[.+]/','', $content);
    $content = apply_filters('the_content', $content); 
    $content = str_replace(']]>', ']]>', $content);
    $content = $content.'... <a class="read_more" href="'.get_the_permalink().'">Read more</a>';
    return $content;
  }



  /**
 * Add a sidebar.
 */
function wpdocs_theme_slug_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Footer Left'),
        'id'            => 'sidebar_1',
        'before_widget' => '<div class="p-2">',
        'after_widget'  => '</div>',
        'before_title'  => '<h1 class="text-danger">',
        'after_title'   => '</h1>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer Center'),
        'id'            => 'sidebar_2',
        'before_widget' => '<div class="p-2">',
        'after_widget'  => '</div>',
        'before_title'  => '<h1 class="text-primary">',
        'after_title'   => '</h1>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer Right'),
        'id'            => 'sidebar_3',
        'before_widget' => '<div class="p-2">',
        'after_widget'  => '</div>',
        'before_title'  => '<h1 class="text-success">',
        'after_title'   => '</h1>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Left Sidebar'),
        'id'            => 'leftsidebar',
        'before_widget' => '<div class="p-2">',
        'after_widget'  => '</div>',
        'before_title'  => '<h1 class="text-success">',
        'after_title'   => '</h1>',
    ) );
}
add_action( 'widgets_init', 'wpdocs_theme_slug_widgets_init' );