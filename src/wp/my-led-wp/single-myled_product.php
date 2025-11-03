<?php
/**
 * Template para página individual de Produto (MyLED Product)
 */

get_header(); // Carrega o header.php
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- MODAL (se quiser que apareça no topo do body apenas nesta página) -->
<?php if ( is_front_page() ) : ?>
    <?php get_template_part('template-parts/modal'); ?>
<?php endif; ?>

<section class="products-page">
    <div class="container">
        <div class="products-page-item">
            <?php 
                // Exemplo: imagem destacada do produto
                if ( has_post_thumbnail() ) {
                    the_post_thumbnail( 'large', array( 'class' => 'product-image' ) );
                }
            ?>
            <div class="divisor"></div>
            <div class="product-page-detail">
                <div class="product-page-detail-text">
                    <h3>
                        <?php echo esc_html( get_post_meta( get_the_ID(), 'preco_hora', true ) ?: 'R$20/hr' ); ?>
                    </h3>
                    <div class="city">
                        <?php echo esc_html( get_post_meta( get_the_ID(), 'cidade', true ) ?: 'São Paulo, SP' ); ?>
                    </div>
                </div>
                <div class="product-page-detail-button">
                    <a href="<?php echo esc_url( site_url('/pedido/') ); ?>" class="no-link btn">
                        <span>Pedir agora</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="products-page-info-container">
            <h2><?php the_title(); ?></h2>
            <span><?php the_excerpt(); ?></span>

            <div class="products-page-prices">
                <div class="products-page-prices-content">
                    <h2>Diário</h2>
                    <span class="price"><?php echo esc_html( get_post_meta( get_the_ID(), 'preco_diario', true ) ?: 'R$ 300,00' ); ?></span><br>
                    <span class="info-views">800* exibições</span>
                </div>
                <div class="products-page-prices-content">
                    <h2>Semanal</h2>
                    <span class="price"><?php echo esc_html( get_post_meta( get_the_ID(), 'preco_semanal', true ) ?: 'R$ 1.500,00' ); ?></span><br>
                    <span class="info-views">5600* exibições</span>
                </div>
                <div class="products-page-prices-content">
                    <h2>Mensal</h2>
                    <span class="price"><?php echo esc_html( get_post_meta( get_the_ID(), 'preco_mensal', true ) ?: 'R$ 5.000,00' ); ?></span><br>
                    <span class="info-views">22.400* exibições</span>
                </div>
            </div>

            <div class="products-page-description">
                <?php the_content(); ?>
            </div>
        </div>
    </div>

    <div class="localization container">
        <div class="products-page-info-container">
            <h2>Localização</h2>
        </div>
        <div class="product-page-location">
            <iframe
                src="<?php echo esc_url( get_post_meta( get_the_ID(), 'map_iframe', true ) ?: 'https://www.google.com/maps/embed?...' ); ?>"
                height="450"
                style="border:0;"
                allowfullscreen
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
</section>

<?php endwhile; endif; ?>

<?php get_footer(); // Carrega o footer.php ?>
