<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php wp_title(); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
        
        <?php wp_head(); ?>
    </head>
    <body <?php body_class() ?>>

    <div class="bg-dark container-fluid text-center site_logo">
        <h1 class="text-light p-3">Code With Rafiq</h1>
    </div>
<div class="container text-center">
    <?php wp_nav_menu( array('container_class' => 'navv_container', 'theme_location'=> 'primary', ) ) ?>
</div>
