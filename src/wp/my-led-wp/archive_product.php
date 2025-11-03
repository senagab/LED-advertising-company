<?php
defined( 'ABSPATH' ) || exit;
get_header(); 
?>

<section class="products">
  <div class="container">
    <div class="products-title-container">
      <h2>Painéis</h2>
    </div>

    <div class="products-container">
      <?php if ( woocommerce_product_loop() ) : ?>

        <?php woocommerce_product_loop_start(); ?>

        <?php while ( have_posts() ) : the_post(); 
            global $product;
        ?>
          <div class="products-item">
            <?php if ( has_post_thumbnail() ) : ?>
              <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('medium', ['class' => 'product-image']); ?>
              </a>
            <?php endif; ?>

            <div class="divisor"></div>

            <div class="product-detail">
              <div class="product-detail-text">
                <h3><?php echo $product->get_price_html(); ?></h3>
                <div class="city">
                  <?php echo get_post_meta(get_the_ID(), 'cidade', true); // opcional ?>
                </div>
              </div>

              <div class="product-detail-button">
                <a href="<?php the_permalink(); ?>" class="btn no-link">
                  <span>Pedir agora</span>
                </a>
              </div>
            </div>
          </div>
        <?php endwhile; ?>

        <?php woocommerce_product_loop_end(); ?>

        <div class="pagination">
          <?php
          echo paginate_links( array(
            'total'   => $wp_query->max_num_pages,
            'current' => max( 1, get_query_var( 'paged' ) ),
            'prev_text' => '« Anterior',
            'next_text' => 'Próxima »',
          ) );
          ?>
        </div>

      <?php else : ?>
        <p>Sem produtos encontrados</p>
      <?php endif; ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>
