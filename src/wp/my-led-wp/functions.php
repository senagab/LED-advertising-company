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


// // // PRODUCTS

// Register 'product' custom post type
function myled_register_product_cpt() {
    $labels = array(
        'name' => 'Products',
        'singular_name' => 'Product',
        'add_new' => 'Add Product',
        'add_new_item' => 'Add New Product',
        'edit_item' => 'Edit Product',
        'new_item' => 'New Product',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
        'rewrite' => array( 'slug' => 'products' ),
        'menu_icon' => 'dashicons-images-alt2',
    );

    register_post_type( 'myled_product', $args );
}
add_action( 'init', 'myled_register_product_cpt' );

// Example: add a 'price' custom column in admin (optional)
function myled_add_product_columns($columns) {
    $columns['price'] = 'Price';
    return $columns;
}
add_filter('manage_myled_product_posts_columns','myled_add_product_columns');

function myled_show_product_columns($column, $post_id) {
    if ($column == 'price') {
        echo get_post_meta($post_id, 'price', true );
    }
}
add_action('manage_myled_product_posts_custom_column','myled_show_product_columns',10,2);


