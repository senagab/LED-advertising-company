<?php
/**
 * Template for WooCommerce Shop page
 * Custom: MyLED theme
 */

get_header(); // <-- adiciona o header do tema
?>

<main class="loja-container">
    <h1 class="page-title"><?php woocommerce_page_title(); ?></h1>

    <?php do_action('woocommerce_before_main_content'); ?>

    <?php if ( woocommerce_product_loop() ) : ?>

        <?php woocommerce_product_loop_start(); ?>

            <?php while ( have_posts() ) : the_post(); ?>
                <?php wc_get_template_part( 'content', 'product' ); ?>
            <?php endwhile; ?>

        <?php woocommerce_product_loop_end(); ?>

        <?php do_action( 'woocommerce_after_shop_loop' ); ?>

    <?php else : ?>

        <?php do_action( 'woocommerce_no_products_found' ); ?>

    <?php endif; ?>

    <?php do_action('woocommerce_after_main_content'); ?>
</main>

<?php
get_footer(); // <-- adiciona o footer do tema
?>
