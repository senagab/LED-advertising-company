<?php get_header(); ?>

<section class="products">
  <div class="container">
    <div class="products-title-container">
      <h2>Painéis</h2>
    </div>

    <div class="products-container">
      <?php
        // 🔹 Query personalizada (mantém a paginação funcional)
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array(
          'post_type' => 'myled_product',
          'posts_per_page' => 8, // ou -1 para mostrar todos
          'paged' => $paged
        );
        $products = new WP_Query($args);

        if ( $products->have_posts() ) :
          while ( $products->have_posts() ) : $products->the_post();
      ?>
        <div class="products-item">
          <?php 
            $image = get_field('imagem_do_produto');
            if ($image) :
          ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="product-image">
          <?php else : ?>
            <?php the_post_thumbnail('medium', ['class' => 'product-image']); ?>
          <?php endif; ?>

          <div class="divisor"></div>

          <div class="product-detail">
            <div class="product-detail-text">
              <h3>
                <?php the_field('preco_hora'); ?>
              </h3>
              <div class="city">
                <?php the_field('cidade'); ?>
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

      <!-- 🔹 Paginação -->
      <div class="pagination">
        <?php
          echo paginate_links(array(
            'total' => $products->max_num_pages,
            'prev_text' => '« Anterior',
            'next_text' => 'Próxima »',
          ));
        ?>
      </div>

      <?php 
        wp_reset_postdata(); 
        else :
          echo '<p>Nenhum produto encontrado.</p>';
        endif;
      ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>
