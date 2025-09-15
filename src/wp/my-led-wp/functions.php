<?php
function myled_enqueue_styles() {
    // Main stylesheet in root
    wp_enqueue_style( 'myled-style', get_stylesheet_uri() );

    // Extra stylesheet in assets/css if you use one
    wp_enqueue_style( 
        'myled-main', 
        get_template_directory_uri() . '/assets/css/main.css', 
        array('myled-style'), 
        '1.0'
    );
}
add_action( 'wp_enqueue_scripts', 'myled_enqueue_styles' );



