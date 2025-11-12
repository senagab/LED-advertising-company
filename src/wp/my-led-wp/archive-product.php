<?php
defined('ABSPATH') || exit;
get_header();
echo '<!-- TEMPLATE: archive-product.php loaded -->';
?>

<!-- PRODUCTS / LOJA -->
<section class="products">
  <div class="container">
    <div class="products-title-container">
      <h2>Produtos</h2>
    </div>

    <div class="products-container">
      <?php if (woocommerce_product_loop()) : ?>

        <?php woocommerce_product_loop_start(); ?>

        <?php while (have_posts()) : the_post(); 
          global $product;
        ?>
          <div class="products-item">
            <a href="<?php the_permalink(); ?>">
              <?php 
                if (has_post_thumbnail()) {
                  the_post_thumbnail('medium', ['class' => 'product-image']);
                } else {
                  echo '<img src="' . get_template_directory_uri() . '/assets/images/products/default.png" alt="Produto sem imagem" class="product-image">';
                }
              ?>
            </a>

            <div class="divisor"></div>

            <div class="product-detail">
              <div class="product-detail-text">
                <h3><?php echo $product->get_price_html(); ?></h3>

                <?php 
                  // Campo personalizado "cidade" (ACF)
                  $cidade = get_post_meta(get_the_ID(), 'cidade', true);
                  if ($cidade) :
                ?>
                  <div class="city"><?php echo esc_html($cidade); ?></div>
                <?php endif; ?>
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

      <?php else : ?>
        <p>Nenhum produto encontrado.</p>
      <?php endif; ?>
    </div>

    <!-- Paginação -->
    <div class="pagination">
      <?php
      echo paginate_links(array(
        'total'   => $wp_query->max_num_pages,
        'current' => max(1, get_query_var('paged')),
        'prev_text' => '« Anterior',
        'next_text' => 'Próxima »',
      ));
      ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>
